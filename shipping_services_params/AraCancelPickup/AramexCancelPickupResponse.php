<?php

use App\aramex\shipping_services_params\aramexCommonParams;
use App\aramex\shipping_services_params\data_types\AramexTransaction;

// return params for response (just a template unused).
function getResponseParams(AramexTransaction $transaction, $notifications)
{
    $responseParams = array(
        aramexCommonParams::getResponseCommonParams($transaction, $notifications),
    );
    return $responseParams;
}
