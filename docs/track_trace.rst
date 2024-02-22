.. _top:
.. title:: Track & Trace

`Back to index <index.rst>`_

=============
Track & Trace
=============

.. contents::
    :local:


Get track & trace data
``````````````````````

.. code-block:: php
    
    $result = $client->trackTrace->get([
        'key' => '{tracking_key}+{postcode}',
        // optional parameter
        'role' => '',
    ]);
