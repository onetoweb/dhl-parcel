.. _top:
.. title:: Piece

`Back to index <index.rst>`_

=====
Piece
=====

.. contents::
    :local:


Returns the list of PODs of the piece
`````````````````````````````````````

.. code-block:: php
    
    $id = '15916857-2a31-4238-a45b-e7ba32e0e320';
    $result = $client->piece->get($id, [
        'receiver.address.postalCode' => '1111AA',
    ]);
