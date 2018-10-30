<?php

namespace App\aramex\shipping_services_params\AraCancelPickup;

use App\aramex\shipping_services_params\aramexCommonParams;
use App\aramex\shipping_services_params\data_types\AramexTransaction;

class AramexCancelPickup
{

    public $cancelPickupRequest;

    public function __construct(AramexTransaction $transaction, $PickupGUID, $Comments)
    {
        $this->printLabelRequest = array(
            aramexCommonParams::getRequestCommonParams($transaction),
            'PickupGUID' => $PickupGUID,
            'Comments'   => $Comments
        );
    }

    public function cancelPickup()
    {
        return $this->cancelPickupRequest;
    }
}