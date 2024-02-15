<?php

namespace Onetoweb\DhlParcel\Endpoint\Endpoints;

use Onetoweb\DhlParcel\Endpoint\AbstractEndpoint;

/**
 * Translation Endpoint.
 */
class Translation extends AbstractEndpoint
{
    /**
     * @param string $translationFile
     * 
     * @return array|null
     */
    public function get(string $translationFile): ?array
    {
        return $this->client->get("/translations/$translationFile");
    }
}