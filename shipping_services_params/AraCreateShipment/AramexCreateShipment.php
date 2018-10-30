<?php

namespace App\aramex\shipping_services_params\AraCreateShipment;

use App\aramex\shipping_services_params\aramexCommonParams;
use App\aramex\shipping_services_params\data_types\AramexTransaction;


class AramexCreateShipment
{

    public $shipmentCreateRequest;

    public function __construct(AramexTransaction $transaction, AramexShipmentLabelInfo $labelIfo, Array $shipments)
    {
        $finalshipments = [];
        foreach ($shipments as $shipment) {
            array_push($finalshipments, (Array) $shipment);
        }
        $this->shipmentCreateRequest = array(
            aramexCommonParams::getRequestCommonParams($transaction),
            'Shipments' => $finalshipments,
            'LabelInfo' => (Array) $labelIfo,
        );
    }

    public function createShipment()
    {
        return $this->shipmentCreateRequest;
    }
}
