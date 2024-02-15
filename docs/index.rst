.. title:: Index

===========
Basic Usage
===========

Setup
    
.. code-block:: php
    
    require 'vendor/autoload.php';
    
    use Onetoweb\DhlParcel\Client;
    use Onetoweb\DhlParcel\Token\{AccessToken, RefreshToken};
    
    session_start();
    
    // params
    $userId = '{user_id}';
    $key = '{key}';
    
    // setup client
    $client = new Client($userId, $key);
    
    // store tokens
    $client->setTokenUpdateCallback(function (AccessToken $accessToken, RefreshToken $refreshToken) {
        
        $_SESSION['access_token'] = [
            'value' => $accessToken->getValue(),
            'expires' => $accessToken->getExpires(),
        ];
        
        $_SESSION['refresh_token'] = [
            'value' => $refreshToken->getValue(),
            'expires' => $refreshToken->getExpires(),
        ];
        
    });
    
    // load access token from storage
    if (isset($_SESSION['access_token'])) {
        
        $client->setAccessToken(new AccessToken(
            $_SESSION['access_token']['value'],
            $_SESSION['access_token']['expires']
        ));
    }
    
    // load refresh token from storage
    if (isset($_SESSION['refresh_token'])) {
        
        $client->setRefreshToken(new RefreshToken(
            $_SESSION['refresh_token']['value'],
            $_SESSION['refresh_token']['expires']
        ));
    }


=================
Endpoint Examples
=================

 * `Capability <capability.rst>`_
 * `Transit Time <transit_time.rst>`_
 * `Translation <translation.rst>`_