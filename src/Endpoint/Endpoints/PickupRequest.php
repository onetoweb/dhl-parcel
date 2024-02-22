<?php

namespace Onetoweb\DhlParcel\Endpoint\Endpoints;

use Onetoweb\DhlParcel\Endpoint\AbstractEndpoint;

/**
 * Pickup Request Endpoint.
 */
class PickupRequest extends AbstractEndpoint
{
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function list(array $query = []): ?array
    {
        return $this->client->get('/pickup-requests', $query);
    }
    
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function get(string $id): ?array
    {
        return $this->client->get("/pickup-requests/$id");
    }
    
    /**
     * @param array $data = []
     * 
     * @return array|null
     */
    public function create(array $data = []): ?array
    {
        return $this->client->post('/pickup-requests', $data);
    }
}
