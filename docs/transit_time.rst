.. _top:
.. title:: Transit Time

`Back to index <index.rst>`_

============
Transit Time
============

.. contents::
    :local:


List transit times
``````````````````

.. code-block:: php
    
    $senderType = 'business'; // available values: business, consumer, parcelShop
    $result = $client->transitTime->list($senderType, [
        // optional parameters
        'fromCountry' => 'NL',
        'toCountry' => 'BE',
        'businessUnit' => 'dhl-nl',
        'toBusiness' => true,
        'product' => 'DFY-INT',
        'parcelType' => 'SMALL',
        'toPostalCode' => '3542 AD',
        'toCity' => 'Bonn',
        'returnProduct' => false,
        'carrier' => 'DHL-PARCEL', // available values : DHL-PARCEL, DHL-EXPRESS, SPEEDPACK
        'shipmentDate' => '2018-02-02',
    ]);


`Back to top <#top>`_