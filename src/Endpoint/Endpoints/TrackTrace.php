<?php

namespace Onetoweb\DhlParcel\Endpoint\Endpoints;

use Onetoweb\DhlParcel\Endpoint\AbstractEndpoint;

/**
 * Track Trace Endpoint.
 */
class TrackTrace extends AbstractEndpoint
{
    /**
     * @param array $query
     * 
     * @return array
     */
    public function get(array $query): ?array
    {
        return $this->client->get('/track-trace', $query);
    }
}
