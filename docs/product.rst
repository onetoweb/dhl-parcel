.. _top:
.. title:: Product

`Back to index <index.rst>`_

=======
Product
=======

.. contents::
    :local:


List products
`````````````

.. code-block:: php
    
    $result = $client->product->list([
        // optional parameters
        'businessUnit' => 'dhl-nl',
        'fromCountry' => 'NL',
        'toCountry' => 'DE',
        'businessProduct' => true,
        'carrier' => 'DHL-PARCEL', // available values : DHL-PARCEL, DHL-EXPRESS, SPEEDPACK
    ]);


`Back to top <#top>`_