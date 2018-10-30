<?php

namespace App\aramex\shipping_services_params\AraCreateShipment;

class AramexShipmentAdditionalDetails
{
    public $ProductGroup;
    public $ProductType;
    public $PaymentType;
    public $PaymentOptions;
    public $Services;
    public $NumberOfPieces;
    public $DescriptionOfGoods;
    public $GoodsOriginCountry;

    function __construct($ProductGroup, $ProductType, $PaymentType, $PaymentOptions, $Services, $NumberOfPieces, $DescriptionOfGoods, $GoodsOriginCountry)
    {
        $this->ProductGroup = $ProductGroup;
        $this->ProductType = $ProductType;
        $this->PaymentType = $PaymentType;
        $this->PaymentOptions = $PaymentOptions;
        $this->Services = $Services;
        $this->NumberOfPieces = $NumberOfPieces;
        $this->DescriptionOfGoods = $DescriptionOfGoods;
        $this->GoodsOriginCountry = $GoodsOriginCountry;
    }
}