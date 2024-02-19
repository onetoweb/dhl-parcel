<?php

namespace Onetoweb\DhlParcel\Endpoint\Endpoints;

use Onetoweb\DhlParcel\Endpoint\AbstractEndpoint;

/**
 * Destination Country Endpoint.
 */
class DestinationCountry extends AbstractEndpoint
{
    /**
     * @param string $senderType
     * @param string $fromCountry
     * @param array $query = []
     * 
     * @return array
     */
    public function list(string $senderType, string $fromCountry, array $query = []): array
    {
        return $this->client->get("/destination-countries/$senderType/$fromCountry", $query);
    }
    
    /**
     * @param string $senderType
     * @param string $fromCountry
     * @param array $query = []
     * 
     * @return array
     */
    public function listProperties(string $senderType, string $fromCountry, array $query = []): array
    {
        return $this->client->get("/destination-countries/$senderType/$fromCountry/properties", $query);
    }
}
