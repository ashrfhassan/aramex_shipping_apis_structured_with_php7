<?php

namespace App\aramex\shipping_services_params\AraPrintLabel;

use App\aramex\shipping_services_params\AraCreateShipment\AramexShipmentLabelInfo;
use App\aramex\shipping_services_params\aramexCommonParams;
use App\aramex\shipping_services_params\data_types\AramexTransaction;

class AramexPrintLabel
{

    public $printLabelRequest;

    public function __construct(AramexTransaction $transaction, AramexShipmentLabelInfo $labelIfo, $shipmentNumber, $productGroup, $originEntity)
    {
        $this->printLabelRequest = array_merge(aramexCommonParams::getRequestCommonParams($transaction), array(
            'ShipmentNumber' => $shipmentNumber,
            'ProductGroup' => $productGroup,
            'OriginEntity' => $originEntity,
            'LabelInfo' => (Array) $labelIfo,
        ));
    }

    public function printLabel()
    {
        return $this->printLabelRequest;
    }
}
