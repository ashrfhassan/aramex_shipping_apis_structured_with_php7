<?php

namespace App\aramex\shipping_services_params\data_types;

class AramexMoney
{
    public $CurrencyCode;
    public $Value;

    function __construct($CurrencyCode, $Value)
    {
        $this->CurrencyCode = $CurrencyCode;
        $this->Value = $Value;
    }
}