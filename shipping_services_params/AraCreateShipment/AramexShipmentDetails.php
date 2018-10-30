<?php

namespace App\aramex\shipping_services_params\AraCreateShipment;

class AramexShipmentDetails
{
    
    public $Dimensions;
    public $ActualWeight;
    public $CashOnDeliveryAmount;
    public $InsuranceAmount;
    public $CollectAmount;
    public $CashAdditionalAmount;
    public $CashAdditionalAmountDescription;
    public $CustomsValueAmount;
    public $Items;

    public function __construct(AramexDimensions $dimensions, AramexWeight $actualWeight, AramexMoney $cashOnDeliveryAmount, AramexMoney $insuranceAmount, AramexMoney $collectAmount, AramexMoney $cashAdditionalAmount, AramexMoney $customsValueAmount, Array $items)
    {
        $finalItems = [];
        foreach ($items as $item) {
            array_push($finalItems, (Array) $item);
        }
        $this->Dimensions = (Array) $dimensions;
        $this->ActualWeight = (Array) $actualWeight;
        $this->CashOnDeliveryAmount = (Array) $cashOnDeliveryAmount;
        $this->InsuranceAmount = (Array) $insuranceAmount;
        $this->CollectAmount = (Array) $collectAmount;
        $this->CashAdditionalAmount = (Array) $cashAdditionalAmount;
        $this->CashAdditionalAmountDescription = '';
        $this->CustomsValueAmount = (Array) $customsValueAmount;
        $this->Items = $finalItems;
    }
}
