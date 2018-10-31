<?php

namespace App\aramex\shipping_services_params\data_types;

class AramexDimensions
{
    public $Length;
    public $Width;
    public $Height;
    public $Unit;

    function __construct($Length, $Width, $Height, $Unit)
    {
        $this->Length = $Length;
        $this->Width = $Width;
        $this->Height = $Height;
        $this->Unit = $Unit;
    }
}