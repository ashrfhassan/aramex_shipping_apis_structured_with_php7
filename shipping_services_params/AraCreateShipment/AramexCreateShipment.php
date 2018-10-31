<?php

namespace App\aramex\shipping_services_params\AraCreateShipment;

use App\aramex\shipping_services_params\aramexCommonParams;
use App\aramex\shipping_services_params\data_types\AramexTransaction;


class AramexCreateShipment
{

    public $shipmentCreateRequest;

    public function __construct(AramexTransaction $transaction, AramexShipmentLabelInfo $labelIfo, Array $shipments, Array $shipmentsAdditionalData)
    {
        $finalshipments = [];
        for ($i =0; $i < count($shipments); $i++) {
            $shipment = array_merge((Array) $shipments[$i], (Array) $shipmentsAdditionalData[$i]);
            $finalshipments['shipment'] =  $shipment;
        }
        $this->shipmentCreateRequest = array_merge(aramexCommonParams::getRequestCommonParams($transaction), array(
            'Shipments' => $finalshipments,
            'LabelInfo' => (Array) $labelIfo,
        ));
    }

    public function createShipment()
    {
        return $this->shipmentCreateRequest;
    }
}
