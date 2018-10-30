<?php

namespace App\aramex\shipping_services_params\data_types;

class AramexAddress
{
    public $Line1;
    public $Line2;
    public $Line3;
    public $City;
    public $StateOrProvinceCode;
    public $PostCode;
    public $CountryCode;

    function __construct($Line1, $Line2, $Line3, $City, $StateOrProvinceCode, $PostCode, $CountryCode)
    {
        $this->Line1 = $Line1;
        $this->Line2 = $Line2;
        $this->Line3 = $Line3;
        $this->City = $City;
        $this->StateOrProvinceCode = $StateOrProvinceCode;
        $this->PostCode = $PostCode;
        $this->CountryCode = $CountryCode;
    }
}