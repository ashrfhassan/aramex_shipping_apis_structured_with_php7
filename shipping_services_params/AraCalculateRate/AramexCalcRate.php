<?php

namespace App\aramex\shipping_services_params\AraCalculateRate;

use App\aramex\shipping_services_params\aramexCommonParams;
use App\aramex\shipping_services_params\data_types\AramexTransaction;
use App\aramex\shipping_services_params\data_types\AramexAddress;
use App\aramex\shipping_services_params\data_types\AramexWeight;
use App\aramex\shipping_services_params\AraCreateShipment\AramexShipmentAdditionalDetails;

class AramexCalcRate
{

    public $calcRateRequest;

    public function __construct(AramexTransaction $transaction, AramexAddress $originAddress, AramexAddress $destinationAddress, AramexShipmentAdditionalDetails $shipmentDetails, AramexWeight $actualWeight, AramexWeight $chargeableWeight, $numberOfPieces)
    {
        $this->calcRateRequest = array_merge(aramexCommonParams::getRequestCommonParams($transaction), array(
            'OriginAddress' => (Array) $originAddress,
            'DestinationAddress'   => (Array) $destinationAddress,
            'ShipmentDetails' => array_merge((Array) $shipmentDetails, [
                'ActualWeight' => (Array) $actualWeight,
                'ChargeableWeight' => (Array) $chargeableWeight,
                'NumberOfPieces' => $numberOfPieces
            ]) 
        ));
    }

    public function calcRate()
    {
        return $this->calcRateRequest;
    }
}