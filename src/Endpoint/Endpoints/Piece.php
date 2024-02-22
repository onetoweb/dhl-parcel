<?php

namespace Onetoweb\DhlParcel\Endpoint\Endpoints;

use Onetoweb\DhlParcel\Endpoint\AbstractEndpoint;

/**
 * Piece Endpoint.
 */
class Piece extends AbstractEndpoint
{
    /**
     * @param string $id
     * @param array $query = []
     */
    public function get(string $id, array $query = []): array
    {
        return $this->client->get("/pieces/$id/pod");
    }
}
