<?php

namespace Onetoweb\DhlParcel\Endpoint\Endpoints;

use Onetoweb\DhlParcel\Endpoint\AbstractEndpoint;

/**
 * Capability Endpoint.
 */
class Capability extends AbstractEndpoint
{
    /**
     * @param string $senderType
     * @param array $query = []
     * 
     * @return array|null
     */
    public function list(string $senderType, array $query = []): ?array
    {
        return $this->client->get("/capabilities/$senderType", $query);
    }
}
