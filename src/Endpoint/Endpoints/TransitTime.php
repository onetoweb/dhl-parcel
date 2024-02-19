<?php

namespace Onetoweb\DhlParcel\Endpoint\Endpoints;

use Onetoweb\DhlParcel\Endpoint\AbstractEndpoint;

/**
 * Transit Time Endpoint.
 */
class TransitTime extends AbstractEndpoint
{
    /**
     * @param string $senderType
     * @param array $query = []
     * 
     * @return array|null
     */
    public function list(string $senderType, array $query = []): ?array
    {
        return $this->client->get("/transit-times/$senderType", $query);
    }
}
