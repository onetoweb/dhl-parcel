<?php

namespace Onetoweb\DhlParcel\Endpoint\Endpoints;

use Onetoweb\DhlParcel\Endpoint\AbstractEndpoint;

/**
 * Shipment Option Endpoint.
 */
class ShipmentOption extends AbstractEndpoint
{
    /**
     * @param string $senderType
     * @param array $query = []
     * 
     * @return array|null
     */
    public function list(string $senderType, array $query = []): ?array
    {
        return $this->client->get("/shipment-options/$senderType", $query);
    }
}