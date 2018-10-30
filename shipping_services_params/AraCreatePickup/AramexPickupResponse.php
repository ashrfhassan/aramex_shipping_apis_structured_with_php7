<?php

use App\aramex\shipping_services_params\aramexCommonParams;
use App\aramex\shipping_services_params\AraCreatePickup\AramexProcessedPickup;
use App\aramex\shipping_services_params\data_types\AramexTransaction;

// return params for response (just a template unused).
function getResponseParams(AramexProcessedPickup $Pickup, AramexTransaction $transaction, $notifications)
{
    $responseParams = array(
        aramexCommonParams::getResponseCommonParams($transaction, $notifications),
        'ProcessedPickup' => $Pickup
    );
    return $responseParams;
}
