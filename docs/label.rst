.. _top:
.. title:: Label

`Back to index <index.rst>`_

=====
Label
=====

.. contents::
    :local:


List labels
```````````

.. code-block:: php
    
    $result = $client->label->list([
        // at least 1 filter is required
        'trackerCodeFilter' => '',
        'orderReferenceFilter' => '',
        'shipmentId' => '',
    ]);


Get label data
``````````````

.. code-block:: php
    
    $id = '15916857-2a31-4238-a45b-e7ba32e0e320';
    $result = $client->label->get($id);