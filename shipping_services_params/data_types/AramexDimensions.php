<?php

namespace App\aramex\shipping_services_params\data_types;

class AramexDimensions
{
    public $Length;
    public $Weight;
    public $Height;
    public $Unit;

    function __construct($Length, $Weight, $Height, $Unit)
    {
        $this->Length = $Length;
        $this->Weight = $Weight;
        $this->Height = $Height;
        $this->Unit = $Unit;
    }
}