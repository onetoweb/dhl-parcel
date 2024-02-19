<?php

namespace Onetoweb\DhlParcel\Endpoint\Endpoints;

use Onetoweb\DhlParcel\Endpoint\AbstractEndpoint;

/**
 * Parcel Type Endpoint.
 */
class ParcelType extends AbstractEndpoint
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
        return $this->client->get("/parcel-types/$senderType/$fromCountry", $query);
    }
}
