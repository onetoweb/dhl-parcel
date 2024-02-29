<?php

namespace Onetoweb\DhlParcel;

use GuzzleHttp\RequestOptions;
use GuzzleHttp\Client as GuzzleCLient;
use Onetoweb\DhlParcel\Endpoint\Endpoints;
use Onetoweb\DhlParcel\Token\Tokens\{AccessToken, RefreshToken};
use DateTime;

/**
 * Dhl Parcel Api Client.
 */
class Client
{
    /**
     * Base Href.
     */
    public const BASE_HREF = 'https://api-gw.dhlparcel.nl';
    
    /**
     * Methods.
     */
    public const METHOD_GET = 'GET';
    public const METHOD_POST = 'POST';
    public const METHOD_DELETE = 'DELETE';
    
    /**
     * @var string
     */
    private $userId;
    
    /**
     * @var string
     */
    private $key;
    
    /**
     * @var AccessToken
     */
    private $accessToken;
    
    /**
     * @var RefreshToken
     */
    private $refreshToken;
    
    /**
     * @var callable
     */
    private $tokenUpdateCallback;
    
    /**
     * @param string $userId
     * @param string $key
     */
    public function __construct(string $userId, string $key)
    {
        $this->userId = $userId;
        $this->key = $key;
        
        // load endpoints
        $this->loadEndpoints();
    }
    
    /**
     * @return void
     */
    private function loadEndpoints(): void
    {
        foreach (Endpoints::list() as $name => $class) {
            $this->{$name} = new $class($this);
        }
    }
    
    /**
     * @param callable $tokenUpdateCallback
     */
    public function setTokenUpdateCallback(callable $tokenUpdateCallback): void
    {
        $this->tokenUpdateCallback = $tokenUpdateCallback;
    }
    
    /**
     * @param AccessToken $accessToken
     * 
     * @return void
     */
    public function setAccessToken(AccessToken $accessToken): void
    {
        $this->accessToken = $accessToken;
    }
    
    /**
     * @return AccessToken|null
     */
    public function getAccessToken(): ?AccessToken
    {
        return $this->accessToken;
    }
    
    /**
     * @param RefreshToken $refreshToken
     * 
     * @return void
     */
    public function setRefreshToken(RefreshToken $refreshToken): void
    {
        $this->refreshToken = $refreshToken;
    }
    
    /**
     * @return RefreshToken|null
     */
    public function getRefreshToken(): ?RefreshToken
    {
        return $this->refreshToken;
    }
    
    /**
     * @param string $endpoint
     * 
     * @return string
     */
    public static function getUrl(string $endpoint): string
    {
        return self::BASE_HREF.$endpoint;
    }
    
    /**
     * @return void
     */
    public function authenticate(): void
    {
        // build options
        $options = [
            RequestOptions::HEADERS => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ]
        ];
        
        // add json body
        if ($this->refreshToken === null or $this->refreshToken->isExpired()) {
            
            // authenticate with user id and api key
            $endpoint = '/authenticate/api-key';
            
            $options[RequestOptions::JSON] = [
                'userId' => $this->userId,
                'key' => $this->key
            ];
            
        } else {
            
            // authenticate with refresh token
            $endpoint = '/authenticate/refresh-token';
            
            $options[RequestOptions::JSON] = [
                'refreshToken' => (string) $this->refreshToken,
            ];
        }
        
        // make request
        $response = (new GuzzleCLient())->request(self::METHOD_POST, self::getUrl($endpoint), $options);
        
        // get contents
        $contents = $response->getBody()->getContents();
        
        // get token array
        $tokenArray = json_decode($contents, true);
        
        // update token
        $this->updateToken($tokenArray);
    }
    
    /**
     * @return array|null
     */
    public function requestAccountNumbers(): ?array
    {
        // build options
        $options = [
            RequestOptions::HEADERS => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ]
        ];
        
        // add user and key to the json body
        $options[RequestOptions::JSON] = [
            'userId' => $this->userId,
            'key' => $this->key
        ];
        
        // make request
        $response = (new GuzzleCLient())->request(self::METHOD_POST, self::getUrl('/authenticate/api-key/account-numbers'), $options);
        
        // get contents
        $contents = $response->getBody()->getContents();
        
        // return account numbers
        return json_decode($contents, true);
    }
    
    /**
     * @param array $tokenArray
     * 
     * @return void
     */
    private function updateToken(array $tokenArray): void
    {
        // set tokens
        $this->accessToken = new AccessToken($tokenArray['accessToken'], (new DateTime())->setTimestamp($tokenArray['accessTokenExpiration'] - 60));
        $this->refreshToken = new RefreshToken($tokenArray['refreshToken'], (new DateTime())->setTimestamp($tokenArray['refreshTokenExpiration'] - 60));
        
        // token update callback
        if ($this->tokenUpdateCallback !== null) {
            ($this->tokenUpdateCallback)($this->accessToken, $this->refreshToken);
        }
    }
    
    /**
     * @param string $endpoint
     * @param array $query = []
     * 
     * @return array|null
     */
    public function get(string $endpoint, array $query = []): ?array
    {
        return $this->request(self::METHOD_GET, $endpoint, [], $query);
    }
    
    /**
     * @param string $endpoint
     * @param array $data = []
     * @param array $query = []
     * 
     * @return array|null
     */
    public function post(string $endpoint, array $data = [], array $query = []): ?array
    {
        return $this->request(self::METHOD_POST, $endpoint, $data);
    }
    
    /**
     * @param string $endpoint
     * 
     * @return array|null
     */
    public function delete(string $endpoint): ?array
    {
        return $this->request(self::METHOD_DELETE, $endpoint, []);
    }
    
    /**
     * @param string $method
     * @param string $endpoint
     * @param array $data = []
     * @param array $query = []
     * 
     * @return array|null
     */
    public function request(string $method, string $endpoint, array $data = [], array $query = []): ?array
    {
        // authenticate
        if ($this->accessToken === null or $this->accessToken->isExpired()) {
            $this->authenticate();
        }
        
        // build options
        $options = [
            RequestOptions::HTTP_ERRORS => false,
            RequestOptions::HEADERS => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$this->accessToken}",
            ],
            RequestOptions::JSON => $data,
            RequestOptions::QUERY => $query,
        ];
        
        // make request
        $response = (new GuzzleCLient())->request($method, self::getUrl($endpoint), $options);
        
        // get contents
        $contents = $response->getBody()->getContents();
        
        // get token array
        return json_decode($contents, true);
    }
}
