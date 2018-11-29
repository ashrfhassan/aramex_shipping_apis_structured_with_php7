<?php

namespace App\aramex\shipping_services_params\AraCreatePickup;

use App\aramex\shipping_services_params\data_types\AramexDimensions;
use App\aramex\shipping_services_params\data_types\AramexMoney;
use App\aramex\shipping_services_params\data_types\AramexVolume;
use App\aramex\shipping_services_params\data_types\AramexWeight;

class AramexPickupItemDetail
{

    public $ProductGroup;
    public $ProductType;
    public $NumberOfShipments;
    public $PackageType;
    public $Payment;
    public $ShipmentWeight;
    public $ShipmentVolume;
    public $NumberOfPieces;
    public $CashAmount;
    public $ExtraCharges;
    public $ShipmentDimensions;
    public $Comments;
    public $Quantity;
    public $Reference;

    public function __construct($ProductGroup, $ProductType, $NumberOfShipments, $PackageType, $Payment, AramexWeight $ShipmentWeight, AramexVolume $ShipmentVolume, $NumberOfPieces, AramexMoney $CashAmount, AramexMoney $ExtraCharges, AramexDimensions $ShipmentDimensions, $Comments, $Quantity, $Reference)
    {
        $this->ProductGroup = $ProductGroup;
        $this->ProductType = $ProductType;
        $this->NumberOfShipments = $NumberOfShipments;
        $this->PackageType = $PackageType;
        $this->Payment = $Payment;
        $this->ShipmentWeight = (Array) $ShipmentWeight;
        $this->ShipmentVolume = (Array) $ShipmentVolume;
        $this->NumberOfPieces = $NumberOfPieces;
        $this->CashAmount = (Array) $CashAmount;
        $this->ExtraCharges = (Array) $ExtraCharges;
        $this->ShipmentDimensions = (Array) $ShipmentDimensions;
        $this->Comments = $Comments;
        $this->Quantity = $Quantity;
        $this->Reference = $Reference;
    }
}
