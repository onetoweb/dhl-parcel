<?php

namespace Onetoweb\DhlParcel\Endpoint\Endpoints;

use Onetoweb\DhlParcel\Endpoint\AbstractEndpoint;

/**
 * Parcelshop Location Endpoint.
 */
class ParcelshopLocation extends AbstractEndpoint
{
    /**
     * @param string $countryCode
     * @param array $query
     * 
     * @return array|null
     */
    public function list(string $countryCode, array $query): ?array
    {
        return $this->client->get("/parcel-shop-locations/$countryCode", $query);
    }
    
    /**
     * @param string $countryCode
     * @param string $id
     * 
     * @return array
     */
    public function get(string $countryCode, string $id): array
    {
        return $this->client->get("/parcel-shop-locations/$countryCode/$id");
    }
}
