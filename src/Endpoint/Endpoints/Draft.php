<?php

namespace Onetoweb\DhlParcel\Endpoint\Endpoints;

use Onetoweb\DhlParcel\Endpoint\AbstractEndpoint;

/**
 * Draft Endpoint.
 */
class Draft extends AbstractEndpoint
{
    /**
     * @param array $query = []
     * 
     * @return array
     */
    public function list(array $query = []): array
    {
        return $this->client->get('/drafts', $query);
    }
    
    /**
     * @param string $id
     *
     * @return array
     */
    public function get(string $id): array
    {
        return $this->client->get("/drafts/$id");
    }
    
    /**
     * @param array $data
     * 
     * @return array|null returns array with errors or null on success
     */
    public function create(array $data)
    {
        return $this->client->post('/drafts', $data);
    }
    
    /**
     * @param array $data
     * 
     * @return array|null returns array with errors or null on success
     */
    public function createMultiple(array $data)
    {
        return $this->client->post('/drafts/import', $data);
    }
    
    /**
     * @param string $id
     * 
     * @return array|null returns array with errors or null on success
     */
    public function delete(string $id)
    {
        return $this->client->delete("/drafts/$id");
    }
    
    /**
     * @param array $data = []
     * @param array $query = []
     * 
     * @return array|null returns array with errors or null on success
     */
    public function deleteMultiple(array $data = [], array $query = [])
    {
        return $this->client->post('/drafts/delete', $data, $query);
    }
    
    /**
     * @param array $data = []
     * 
     * @return array
     */
    public function promote(array $data = [])
    {
        return $this->client->post('/drafts/promote', $data);
    }
}
