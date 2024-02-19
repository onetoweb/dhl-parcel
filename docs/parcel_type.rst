.. _top:
.. title:: Parcel type

`Back to index <index.rst>`_

===========
Parcel type
===========

.. contents::
    :local:


List parcel types
`````````````````

.. code-block:: php
    
    $senderType = 'business'; // available values: business, consumer, parcelShop
    $fromCountry = 'NL';
    $result = $client->parcelType->list($senderType, $fromCountry, [
        // optional parameters
        'toCountry' => 'BE',
        'businessUnit' => 'dhl-nl',
        'fromPostalCode' => '3814VL',
        'toPostalCode' => '3814VL',
        'toBusiness' => true,
        'returnProduct' => false,
        'carrier' => 'DHL-PARCEL', // available values: DHL-PARCEL, DHL-EXPRESS, SPEEDPACK
        'accountNumber' => '12345678',
    ]);


`Back to top <#top>`_