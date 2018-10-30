<?php

namespace App\aramex\shipping_services_params\data_types;

class AramexShipmentItem
{
    public $PackageType;
    public $Quantity;
    public $Weight;
    public $Comments;
    public $Reference;

    function __construct($PackageType, $Quantity, $Weight, $Comments, $Reference)
    {
        $this->PackageType = $PackageType;
        $this->Quantity = $Quantity;
        $this->Weight = $Weight;
        $this->Comments = $Comments;
        $this->Reference = $Reference;
    }
}