.. _top:
.. title:: Draft

`Back to index <index.rst>`_

=====
Draft
=====

.. contents::
    :local:


List drafts
```````````

.. code-block:: php
    
    $result = $client->draft->list([
        // optional parameters
        'query' => 'query',
        'sortBy' => 'timeCreated', // available values: timeCreated, companyName, name, firstName, lastName, receiver
        'sortOrder' => 'ASC', // available values: ASC, DESC
        'skip' => 0,
        'max' => 5,
        'accountNumbers' => '01234567',
    ]);


Get draft
`````````

.. code-block:: php
    
    $id = '48b54df9-9b04-4234-8256-fe83125cc65a';
    $result = $client->draft->get($id);


Promote draft to shipment
`````````````````````````

.. code-block:: php
    
    $result = $client->draft->promote([
        'groupId' => '3fa85f64-5717-4562-b3fc-2c963f66afa6',
        'drafts' => [
            'ids' => [
                '3fa85f64-5717-4562-b3fc-2c963f66afa6'
            ],
            'invertSelection' => false
        ],
        'imports' => [
            'ids' => [
                '3fa85f64-5717-4562-b3fc-2c963f66afa6'
            ]
        ],
        'accountNumbers' => [
            'ids' => [
                'string'
            ]
        ],
        'defaultAccountNumber' => 'string'
    ]);


Create draft
````````````

.. code-block:: php
    
    // generate your own uuid4 id
    $id = (string) \Ramsey\Uuid\Uuid::uuid4();
    
    // create draft, result contains a list of errors or null on success
    $result = $client->draft->create([
        'id' => $id,
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
                'additionalAddressLine' => 'Street part 2',
                'number' => '25',
                'isBusiness' => true,
                'addition' => 'A'
            ],
            'email' => 'mrparcel@dhlparcel.nl',
            'phoneNumber' => '0031612345678',
            'vatNumber' => 'NL007096100B01',
            'eoriNumber' => 'NL007096100B01'
        ],
        'bccEmails' => [
            'string'
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
                'additionalAddressLine' => 'Street part 2',
                'number' => '25',
                'isBusiness' => true,
                'addition' => 'A'
            ],
            'email' => 'mrparcel@dhlparcel.nl',
            'phoneNumber' => '0031612345678',
            'vatNumber' => 'NL007096100B01',
            'eoriNumber' => 'NL123456789',
            'rexNumber' => 'NLREX123456789'
        ],
        'accountId' => '01234567',
        'options' => [
            [
                'key' => 'DOOR',
                'input' => 'string'
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
                'additionalAddressLine' => 'Street part 2',
                'number' => '25',
                'isBusiness' => true,
                'addition' => 'A'
            ],
            'email' => 'mrparcel@dhlparcel.nl',
            'phoneNumber' => '0031612345678',
            'vatNumber' => 'NL007096100B01',
            'eoriNumber' => 'NL123456789',
            'rexNumber' => 'NLREX123456789'
        ],
        'product' => 'string',
        'customsDeclaration' => [
            'certificateNumber' => 'string',
            'currency' => 'EUR',
            'invoiceNumber' => 'string',
            'licenceNumber' => 'string',
            'remarks' => 'string',
            'invoiceType' => 'string',
            'exportType' => 'string',
            'exportReason' => 'string',
            'customsGoods' => [
                [
                    'code' => 'string',
                    'description' => 'string',
                    'origin' => 'string',
                    'quantity' => 1,
                    'value' => 20,
                    'weight' => 0.10
                ]
            ],
            'incoTerms' => 'string',
            'incoTermsCity' => 'string',
            'senderInboundVatNumber' => 'string',
            'shippingFee' => [
                'value' => 6.5
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
                    'additionalAddressLine' => 'Street part 2',
                    'number' => '25',
                    'isBusiness' => true,
                    'addition' => 'A'
                ],
                'email' => 'mrparcel@dhlparcel.nl',
                'phoneNumber' => '0031612345678',
                'vatNumber' => 'NL007096100B01',
                'eoriNumber' => 'NL007096100B01'
            ],
            'defermentAccountVat' => 'string',
            'defermentAccountDuties' => 'string',
            'vatReverseCharge' => true,
            'senderHasInboundEoriNumber' => true
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
        ],
        'deliveryArea' => [
            'type' => 'Remote',
            'remote' => true
        ],
        'metadata' => [
            'importId' => 'string',
            'userId' => 'string',
            'organizationId' => 'string',
            'timeCreated' => 0
        ]
    ]);


Create multiple drafts
``````````````````````

.. code-block:: php
    
    // generate your own uuid4 ids
    $id1 = (string) \Ramsey\Uuid\Uuid::uuid4();
    $id2 = (string) \Ramsey\Uuid\Uuid::uuid4();
    
    // create draft, returns array with errors or null on success
    $result = $client->draft->createMultiple([[
        'id' => $id1,
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
                'additionalAddressLine' => 'Street part 2',
                'number' => '25',
                'isBusiness' => true,
                'addition' => 'A'
            ],
            'email' => 'mrparcel@dhlparcel.nl',
            'phoneNumber' => '0031612345678',
            'vatNumber' => 'NL007096100B01',
            'eoriNumber' => 'NL007096100B01'
        ],
        'bccEmails' => [
            'string'
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
                'additionalAddressLine' => 'Street part 2',
                'number' => '25',
                'isBusiness' => true,
                'addition' => 'A'
            ],
            'email' => 'mrparcel@dhlparcel.nl',
            'phoneNumber' => '0031612345678',
            'vatNumber' => 'NL007096100B01',
            'eoriNumber' => 'NL123456789',
            'rexNumber' => 'NLREX123456789'
        ],
        'accountId' => '01234567',
        'options' => [
            [
                'key' => 'DOOR',
                'input' => 'string'
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
                'additionalAddressLine' => 'Street part 2',
                'number' => '25',
                'isBusiness' => true,
                'addition' => 'A'
            ],
            'email' => 'mrparcel@dhlparcel.nl',
            'phoneNumber' => '0031612345678',
            'vatNumber' => 'NL007096100B01',
            'eoriNumber' => 'NL123456789',
            'rexNumber' => 'NLREX123456789'
        ],
        'product' => 'string',
        'customsDeclaration' => [
            'certificateNumber' => 'string',
            'currency' => 'EUR',
            'invoiceNumber' => 'string',
            'licenceNumber' => 'string',
            'remarks' => 'string',
            'invoiceType' => 'string',
            'exportType' => 'string',
            'exportReason' => 'string',
            'customsGoods' => [
                [
                    'code' => 'string',
                    'description' => 'string',
                    'origin' => 'string',
                    'quantity' => 1,
                    'value' => 20,
                    'weight' => 0.10
                ]
            ],
            'incoTerms' => 'string',
            'incoTermsCity' => 'string',
            'senderInboundVatNumber' => 'string',
            'shippingFee' => [
                'value' => 6.5
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
                    'additionalAddressLine' => 'Street part 2',
                    'number' => '25',
                    'isBusiness' => true,
                    'addition' => 'A'
                ],
                'email' => 'mrparcel@dhlparcel.nl',
                'phoneNumber' => '0031612345678',
                'vatNumber' => 'NL007096100B01',
                'eoriNumber' => 'NL007096100B01'
            ],
            'defermentAccountVat' => 'string',
            'defermentAccountDuties' => 'string',
            'vatReverseCharge' => true,
            'senderHasInboundEoriNumber' => true
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
        ],
        'deliveryArea' => [
            'type' => 'Remote',
            'remote' => true
        ],
        'metadata' => [
            'importId' => 'string',
            'userId' => 'string',
            'organizationId' => 'string',
            'timeCreated' => 0
        ]
    ], [
        'id' => $id2,
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
                'additionalAddressLine' => 'Street part 2',
                'number' => '25',
                'isBusiness' => true,
                'addition' => 'A'
            ],
            'email' => 'mrparcel@dhlparcel.nl',
            'phoneNumber' => '0031612345678',
            'vatNumber' => 'NL007096100B01',
            'eoriNumber' => 'NL007096100B01'
        ],
        'bccEmails' => [
            'string'
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
                'additionalAddressLine' => 'Street part 2',
                'number' => '25',
                'isBusiness' => true,
                'addition' => 'A'
            ],
            'email' => 'mrparcel@dhlparcel.nl',
            'phoneNumber' => '0031612345678',
            'vatNumber' => 'NL007096100B01',
            'eoriNumber' => 'NL123456789',
            'rexNumber' => 'NLREX123456789'
        ],
        'accountId' => '01234567',
        'options' => [
            [
                'key' => 'DOOR',
                'input' => 'string'
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
                'additionalAddressLine' => 'Street part 2',
                'number' => '25',
                'isBusiness' => true,
                'addition' => 'A'
            ],
            'email' => 'mrparcel@dhlparcel.nl',
            'phoneNumber' => '0031612345678',
            'vatNumber' => 'NL007096100B01',
            'eoriNumber' => 'NL123456789',
            'rexNumber' => 'NLREX123456789'
        ],
        'product' => 'string',
        'customsDeclaration' => [
            'certificateNumber' => 'string',
            'currency' => 'EUR',
            'invoiceNumber' => 'string',
            'licenceNumber' => 'string',
            'remarks' => 'string',
            'invoiceType' => 'string',
            'exportType' => 'string',
            'exportReason' => 'string',
            'customsGoods' => [
                [
                    'code' => 'string',
                    'description' => 'string',
                    'origin' => 'string',
                    'quantity' => 1,
                    'value' => 20,
                    'weight' => 0.10
                ]
            ],
            'incoTerms' => 'string',
            'incoTermsCity' => 'string',
            'senderInboundVatNumber' => 'string',
            'shippingFee' => [
                'value' => 6.5
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
                    'additionalAddressLine' => 'Street part 2',
                    'number' => '25',
                    'isBusiness' => true,
                    'addition' => 'A'
                ],
                'email' => 'mrparcel@dhlparcel.nl',
                'phoneNumber' => '0031612345678',
                'vatNumber' => 'NL007096100B01',
                'eoriNumber' => 'NL007096100B01'
            ],
            'defermentAccountVat' => 'string',
            'defermentAccountDuties' => 'string',
            'vatReverseCharge' => true,
            'senderHasInboundEoriNumber' => true
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
        ],
        'deliveryArea' => [
            'type' => 'Remote',
            'remote' => true
        ],
        'metadata' => [
            'importId' => 'string',
            'userId' => 'string',
            'organizationId' => 'string',
            'timeCreated' => 0
        ]
    ]]);


Delete draft
````````````

.. code-block:: php
    
    $id = '48b54df9-9b04-4234-8256-fe83125cc65a';
    
    // result contains a list of errors or null on success
    $result = $client->draft->delete($id);


Delete multiple drafts
``````````````````````

.. code-block:: php
    
    $result = $client->draft->deleteMultiple([
        
        // draft ids parameter
        '48b54df9-9b04-4234-8256-fe83125cc65a'
    ], [
        
        // if true, all drafts are deleted except those with ids listed in the draft ids parameter
        'invertSelection' => false
    ]);


`Back to top <#top>`_