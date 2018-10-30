<?php

namespace App\aramex\shipping_services_params\data_types;

class AramexVolume
{
    public $Unit;
    public $Value;

    function __construct($Unit, $Value)
    {
        $this->Unit = $Unit;
        $this->Value = $Value;
    }
}