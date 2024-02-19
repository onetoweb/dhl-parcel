.. _top:
.. title:: Destination country

`Back to index <index.rst>`_

===================
Destination country
===================

.. contents::
    :local:


List destination countries
``````````````````````````

.. code-block:: php
    
    $senderType = 'business'; // available values: business, consumer, parcelShop
    $fromCountry = 'NL';
    $result = $client->destinationCountry->list($senderType, $fromCountry, [
        // optional parameters
        'businessUnit' => 'dhl-nl',
        'carrier' => 'DHL-PARCEL', // available values: DHL-PARCEL, DHL-EXPRESS, SPEEDPACK
    ]);


List destination country properties
```````````````````````````````````

.. code-block:: php
    
    $senderType = 'business'; // available values: business, consumer, parcelShop
    $fromCountry = 'NL';
    $result = $client->destinationCountry->listProperties($senderType, $fromCountry, [
        // optional parameters
        'businessUnit' => 'dhl-nl',
        'carrier' => 'DHL-PARCEL', // available values: DHL-PARCEL, DHL-EXPRESS, SPEEDPACK
    ]);


`Back to top <#top>`_