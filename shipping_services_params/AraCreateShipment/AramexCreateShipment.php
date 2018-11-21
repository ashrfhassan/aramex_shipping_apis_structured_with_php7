<?php

namespace App\aramex\shipping_services_params\AraCreateShipment;

use App\aramex\shipping_services_params\aramexCommonParams;
use App\aramex\shipping_services_params\data_types\AramexTransaction;


class AramexCreateShipment
{

    public $shipmentCreateRequest;

    public function __construct(AramexTransaction $transaction, AramexShipmentLabelInfo $labelIfo, AramexShipment $shipment, AramexShipmentAdditionalData $shipmentsAdditionalData)
    {
        $finalshipment['Shipment'] =  $shipment;
        $this->shipmentCreateRequest = array_merge(aramexCommonParams::getRequestCommonParams($transaction), array(
            'Shipments' => $finalshipment,
            'LabelInfo' => (Array) $labelIfo,
        ));
    }

    public function createShipment()
    {
        return $this->shipmentCreateRequest;
    }
}
