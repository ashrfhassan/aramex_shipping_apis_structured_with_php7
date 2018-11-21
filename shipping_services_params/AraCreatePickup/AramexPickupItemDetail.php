<?php

namespace App\aramex\shipping_services_params\AraCreatePickup;

use App\aramex\shipping_services_params\data_types\AramexWeight;
use App\aramex\shipping_services_params\data_types\AramexVolume;
use App\aramex\shipping_services_params\data_types\AramexMoney;
use App\aramex\shipping_services_params\data_types\AramexDimensions;


class AramexPickupItemDetail
{
    
    public $PackageType;
    public $ShipmentWeight;
    public $Quantity;
    public $Comments;
    public $Reference;

    public function __construct($PackageType, AramexWeight $ShipmentWeight, $Quantity, $Comments, $Reference)
    {
        $this->PackageType = $PackageType;
        $this->ShipmentWeight = (Array) $ShipmentWeight;
        $this->Quantity = $Quantity;
        $this->Comments = $Comments;
        $this->Reference = $Reference;
    }
}
