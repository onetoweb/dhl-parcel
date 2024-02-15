.. _top:
.. title:: Shipment Option

`Back to index <index.rst>`_

===============
Shipment Option
===============

.. contents::
    :local:


List shipment options
`````````````````````

.. code-block:: php
    
    $senderType = 'business'; // available values: business, consumer, parcelShop
    $result = $client->shipmentOption->list($senderType, [
        // optional parameters
        'carrier' => 'DHL-PARCEL', // available values : DHL-PARCEL, DHL-EXPRESS, SPEEDPACK
        'fromCountry' => 'NL',
        'businessUnit' => 'dhl-nl',
        'whitelistRequired' => true,
        'accountNumber' => '12345678',
        'toBusiness' => true,
    ]);


`Back to top <#top>`_