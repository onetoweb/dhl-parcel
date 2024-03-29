.. title:: Index

===========
Basic Usage
===========

Setup
    
.. code-block:: php
    
    require 'vendor/autoload.php';
    
    use Onetoweb\DhlParcel\Client;
    use Onetoweb\DhlParcel\Token\{AccessToken, RefreshToken};
    
    session_start();
    
    // params
    $userId = '{user_id}';
    $key = '{key}';
    
    // setup client
    $client = new Client($userId, $key);
    
    // store tokens
    $client->setTokenUpdateCallback(function (AccessToken $accessToken, RefreshToken $refreshToken) {
        
        $_SESSION['access_token'] = [
            'value' => $accessToken->getValue(),
            'expires' => $accessToken->getExpires(),
        ];
        
        $_SESSION['refresh_token'] = [
            'value' => $refreshToken->getValue(),
            'expires' => $refreshToken->getExpires(),
        ];
        
    });
    
    // load access token from storage
    if (isset($_SESSION['access_token'])) {
        
        $client->setAccessToken(new AccessToken(
            $_SESSION['access_token']['value'],
            $_SESSION['access_token']['expires']
        ));
    }
    
    // load refresh token from storage
    if (isset($_SESSION['refresh_token'])) {
        
        $client->setRefreshToken(new RefreshToken(
            $_SESSION['refresh_token']['value'],
            $_SESSION['refresh_token']['expires']
        ));
    }
    
    // request account numbers
    $accountNumbers = $client->requestAccountNumbers();


=================
Endpoint Examples
=================

* `Capability <capability.rst>`_
* `Destination country <destination_country.rst>`_
* `Draft <draft.rst>`_
* `Label <label.rst>`_
* `Product <product.rst>`_
* `Parcel type <parcel_type.rst>`_
* `Parcelshop location <parcelshop_location.rst>`_
* `Pickup request <pickup_request.rst>`_
* `Piece <piece.rst>`_
* `Shipment option <shipment_option.rst>`_
* `Shipment <shipment.rst>`_
* `Time window <time_window.rst>`_
* `Track & Trace <track_trace.rst>`_
* `Transit time <transit_time.rst>`_
* `Translation <translation.rst>`_