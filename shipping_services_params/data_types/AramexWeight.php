<?php

namespace App\aramex\shipping_services_params\data_types;

class AramexWeight
{
    public $Unit;
    public $Value;

    function __construct($Unit, $Value)
    {
        $this->Unit = $Unit;
        $this->Value = $Value;
    }
}