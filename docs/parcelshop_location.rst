.. _top:
.. title:: Parcelshop Location

`Back to index <index.rst>`_

===================
Parcelshop Location
===================

.. contents::
    :local:


List parcelshop locations
`````````````````````````

.. code-block:: php
    
    $countryCode = 'NL';
    $result = $client->parcelshopLocation->list($countryCode, [
        // use at least one of fuzzy, postalCode, street, city or houseNumber.
        'limit' => 5,
        'longitude' => 5.067813,
        'latitude' => 52.103688,
        'radius' => 500,
        'q' => 'Port of Vlie',
        'fuzzy' => '399',
        'houseNumber' => 25,
        'street' => 'Reactorweg',
        'postalCode' => '3542 AD',
        'city' => 'Utrecht',
        'showUnavailable' => 'true',
        'serviceType' => [
            'parcel-first-mile',
            'parcel-last-mile'
        ],
        'isLocker' => 'false',
        'sameDepot' => 'false',
        'collectionTime' => 14,
    ]);


Get parcelshop location
```````````````````````

.. code-block:: php
    
    $countryCode = 'NL';
    $id = '8004-NL-354203';
    $result = $client->parcelshopLocation->get($countryCode, $id);


`Back to top <#top>`_