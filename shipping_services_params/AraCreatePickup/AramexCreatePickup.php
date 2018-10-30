<?php

namespace App\aramex\shipping_services_params\AraCreatePickup;

use App\aramex\shipping_services_params\AraCreateShipment\AramexShipmentLabelInfo;
use App\aramex\shipping_services_params\aramexCommonParams;
use App\aramex\shipping_services_params\data_types\AramexTransaction;

class AramexCreatePickup
{

    public $createPickupRequest;

    public function __construct(AramexTransaction $transaction, AramexShipmentLabelInfo $labelIfo, AramexPickup $pickup)
    {
        $this->createPickupRequest = array(
            aramexCommonParams::getRequestCommonParams($transaction),
            'Pickup' => (Array) $pickup,
            'LabelInfo' => (Array) $labelIfo,
        );
    }

    public function createPickup()
    {
        return $this->createPickupRequest;
    }
}
