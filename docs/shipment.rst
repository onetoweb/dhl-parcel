.. _top:
.. title:: Shipment

`Back to index <index.rst>`_

========
Shipment
========

.. contents::
    :local:


Get shipment
````````````

.. code-block:: php
    
    $id = '15916857-2a31-4238-a45b-e7ba32e0e320';
    $result = $client->shipment->get($id);


Create shipment
```````````````

.. code-block:: php
    
    // generate your own uuid4 id
    $id = (string) \Ramsey\Uuid\Uuid::uuid4();
    
    $result = $client->shipment->create([
        'shipmentId' => $id,
        'orderReference' => 'myReference',
        'receiver' => [
            'name' => [
                'firstName' => 'John',
                'lastName' => 'Doe',
                'companyName' => 'ACME Corp.',
                'additionalName' => 'Benelux'
            ],
            'address' => [
                'countryCode' => 'NL',
                'postalCode' => '3542AD',
                'city' => 'Utrecht',
                'street' => 'Reactorweg',
                'additionalAddressLine' => 'Street part 2 (not applicable for DHL Parcel Benelux)',
                'number' => '25',
                'isBusiness' => true,
                'addition' => 'A'
            ],
            'email' => 'mrparcel@dhlparcel.nl',
            'phoneNumber' => '0031612345678',
            'vatNumber' => 'NL007096100B01',
            'eoriNumber' => 'NL123456789',
            'reference' => 'Customer reference'
        ],
        'shipper' => [
            'name' => [
                'firstName' => 'John',
                'lastName' => 'Doe',
                'companyName' => 'ACME Corp.',
                'additionalName' => 'Benelux'
            ],
            'address' => [
                'countryCode' => 'NL',
                'postalCode' => '3542AD',
                'city' => 'Utrecht',
                'street' => 'Reactorweg',
                'additionalAddressLine' => 'Street part 2 (not applicable for DHL Parcel Benelux)',
                'number' => '25',
                'isBusiness' => true,
                'addition' => 'A'
            ],
            'email' => 'mrparcel@dhlparcel.nl',
            'phoneNumber' => '0031612345678',
            'vatNumber' => 'NL007096100B01',
            'eoriNumber' => 'NL123456789',
            'rexNumber' => 'NLREX12345678'
        ],
        'accountId' => '01234567',
        'options' => [
            [
                'key' => 'PS',
                'input' => '8004-NL-132825'
            ]
        ],
        'onBehalfOf' => [
            'name' => [
                'firstName' => 'John',
                'lastName' => 'Doe',
                'companyName' => 'ACME Corp.',
                'additionalName' => 'Benelux'
            ],
            'address' => [
                'countryCode' => 'NL',
                'postalCode' => '3542AD',
                'city' => 'Utrecht',
                'street' => 'Reactorweg',
                'additionalAddressLine' => 'Street part 2 (not applicable for DHL Parcel Benelux)',
                'number' => '25',
                'isBusiness' => true,
                'addition' => 'A'
            ],
            'email' => 'mrparcel@dhlparcel.nl',
            'phoneNumber' => '0031612345678',
            'vatNumber' => 'NL007096100B01',
            'eoriNumber' => 'NL123456789',
            'rexNumber' => 'NLREX12345678'
        ],
        'product' => 'string',
        'customsDeclaration' => [
            'certificateNumber' => 'string',
            'currency' => 'EUR',
            'invoiceNumber' => 'string',
            'licenceNumber' => 'string',
            'remarks' => 'string',
            'invoiceType' => 'Commercial',
            'exportType' => 'Permanent',
            'exportReason' => 'Gift',
            'customsGoods' => [
                [
                    'code' => '12345678',
                    'description' => 'Description',
                    'origin' => 'NL',
                    'quantity' => 1,
                    'value' => 19.95,
                    'weight' => 0.1
                ]
            ],
            'incoTerms' => 'DDU',
            'incoTermsCity' => 'string',
            'senderInboundVatNumber' => 'string',
            'attachmentIds' => [
                '3fa85f64-5717-4562-b3fc-2c963f66afa6'
            ],
            'shippingFee' => [
                'currency' => 'string',
                'value' => 20
            ],
            'importerOfRecord' => [
                'name' => [
                    'firstName' => 'John',
                    'lastName' => 'Doe',
                    'companyName' => 'ACME Corp.',
                    'additionalName' => 'Benelux'
                ],
                'address' => [
                    'countryCode' => 'NL',
                    'postalCode' => '3542AD',
                    'city' => 'Utrecht',
                    'street' => 'Reactorweg',
                    'additionalAddressLine' => 'Street part 2 (not applicable for DHL Parcel Benelux)',
                    'number' => '25',
                    'isBusiness' => true,
                    'addition' => 'A'
                ],
                'email' => 'mrparcel@dhlparcel.nl',
                'phoneNumber' => '0031612345678',
                'vatNumber' => 'NL007096100B01',
                'eoriNumber' => 'NL123456789',
                'reference' => 'Customer reference'
            ],
            'defermentAccountDuties' => 'string',
            'defermentAccountVat' => 'string',
            'vatReverseCharge' => true
        ],
        'returnLabel' => false,
        'pieces' => [
            [
                'parcelType' => 'SMALL',
                'quantity' => 1,
                'weight' => 1,
                'dimensions' => [
                    'length' => 20,
                    'width' => 25,
                    'height' => 30
                ]
            ]
        ]
    ]);
