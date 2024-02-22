.. _top:
.. title:: Pickup Request

`Back to index <index.rst>`_

==============
Pickup Request
==============

.. contents::
    :local:


List pickup requests
````````````````````

.. code-block:: php
    
    $result = $client->pickupRequest->list([
        'accountIds' => '04887964',
        'query' => '',
        'limit' => 10,
        'skip' => 0
    ]);


Get pickup request
``````````````````

.. code-block:: php
    
    $id = '15916857-2a31-4238-a45b-e7ba32e0e320';
    $result = $client->pickupRequest->get($id);


Create pickup request
`````````````````````

.. code-block:: php
    
    $result = $client->pickupRequest->create([
        'accountId' => '12345678',
        'pickupDate' => '2018-06-04',
        'description' => 'string',
        'pickupLocation' => 'string',
        'numberOfPackages' => 1,
        'numberOfPallets' => 0,
        'totalWeight' => 2,
        'shipper' => [
            'name' => [
                'firstName' => 'First name',
                'lastName' => 'Last name',
                'companyName' => 'Company name',
                'additionalName' => 'additional name'
            ],
            'email' => [
                'address' => 'string'
            ],
            'phoneNumber' => 'string',
            'address' => [
                'countryCode' => 'NL',
                'postalCode' => '1000AA',
                'city' => 'Amsterdam',
                'street' => 'Kalverstraat',
                'number' => '10',
                'addition' => 'B',
                'isBusiness' => true,
                'additionalInfo' => '2nd Floor, 1st door on right.'
            ]
        ],
        'receiver' => [
            'name' => [
                'firstName' => 'First name',
                'lastName' => 'Last name',
                'companyName' => 'Company name',
                'additionalName' => 'additional name'
            ],
            'email' => [
                'address' => 'string'
            ],
            'phoneNumber' => 'string',
            'address' => [
                'countryCode' => 'NL',
                'postalCode' => '1000AA',
                'city' => 'Amsterdam',
                'street' => 'Kalverstraat',
                'number' => '10',
                'addition' => 'B',
                'isBusiness' => true,
                'additionalInfo' => '2nd Floor, 1st door on right.'
            ]
        ],
        'timeSlot' => [
            'from' => '10:15',
            'to' => '16:30'
        ],
        'type' => 'Once',
        'provideLabels' => false,
        'requesterName' => 'string',
        'organisationName' => 'string'
    ]);
