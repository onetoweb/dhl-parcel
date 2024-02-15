.. _top:
.. title:: Time Window

`Back to index <index.rst>`_

===========
Time Window
===========

.. contents::
    :local:


List time windows
`````````````````

.. code-block:: php
    
    $result = $client->timeWindow->list([
        'countryCode' => 'NL',
        'postalCode' => '3542AD',
        'rules' => 'c2c',
        'excludeDaysOfWeek' => [1, 7]
    ]);


`Back to top <#top>`_