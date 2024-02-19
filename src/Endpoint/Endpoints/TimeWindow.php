<?php

namespace Onetoweb\DhlParcel\Endpoint\Endpoints;

use Onetoweb\DhlParcel\Endpoint\AbstractEndpoint;

/**
 * Time Window Endpoint.
 */
class TimeWindow extends AbstractEndpoint
{
    /**
     * @param array $query = []
     */
    public function list(array $query = []): array
    {
        return $this->client->get('/time-windows', $query);
    }
}
