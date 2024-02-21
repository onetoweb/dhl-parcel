<?php

namespace Onetoweb\DhlParcel\Endpoint\Endpoints;

use Onetoweb\DhlParcel\Endpoint\AbstractEndpoint;

/**
 * Shipment Endpoint.
 */
class Shipment extends AbstractEndpoint
{
    /**
     * @param string $id
     *
     * @return array
     */
    public function get(string $id): array
    {
        return $this->client->get("/shipments/$id");
    }
    
    /**
     * @param array $data = []
     * 
     * @return array
     */
    public function create(array $data = [])
    {
        return $this->client->post('/shipments', $data);
    }
}
