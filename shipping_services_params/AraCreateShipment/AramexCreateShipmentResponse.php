<?php

use App\aramex\shipping_services_params\aramexCommonParams;
use App\aramex\shipping_services_params\data_types\AramexTransaction;

// return params for response (just a template unused).
function getResponseParams(AramexTransaction $transaction, Array $notifications, Array $processedShipments)
{
    $finalshipments = [];
    foreach ($processedShipments as $shipment) {
        array_push($finalshipments, (Array) $shipment);
    }
    $responseParams = array(
        aramexCommonParams::getResponseCommonParams($transaction, $notifications),
        'Shipments' => $finalshipments,
    );
    return $responseParams;
}
