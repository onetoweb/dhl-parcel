.. _top:
.. title:: Capability

`Back to index <index.rst>`_

==========
Capability
==========

.. contents::
    :local:


List capabilities
`````````````````

.. code-block:: php
    
    $senderType = 'business'; // available values: business, consumer, parcelShop
    $result = $client->capability->list($senderType, [
        // optional parameters
        'fromCountry' => 'NL',
        'toCountry' => 'BE',
        'toBusiness' => true,
        'returnProduct' => true,
        'parcelType' => 'SMALL',
        'option' => 'DOOR',
        'fromPostalCode' => '3542 AD',
        'toPostalCode' => '3542 AD',
        'organisationId' => '79944763-1249-4cae-a7bb-7aacec8deb47',
        'businessUnit' => 'dhl-nl',
        'carrier' => 'DHL-PARCEL', // available values : DHL-PARCEL, DHL-EXPRESS, SPEEDPACK
        'referenceTimeStamp' => '2018-02-02',
        'quantity' => 7,
    ]);


`Back to top <#top>`_