<?php

namespace App\aramex\shipping_services_params\AraCreateShipment;

use App\aramex\shipping_services_params\data_types\AramexParty;
use App\aramex\shipping_services_params\data_types\AramexShipper;
use App\aramex\shipping_services_params\data_types\AramexShipmentDetails;

class AramexShipment
{
    public $Shipper;
    public $Consignee;
    public $ThirdParty;
    public $Details;

    function __construct(AramexShipper $shipper, AramexShipper $consignee, AramexParty $thirdParty, AramexShipmentDetails $details, AramexShipmentAdditionalDetails $additionalDetails)
    {
        $this->Shipper = (Array) $shipper;
        $this->Consignee = (Array) $consignee;
        $this->ThirdParty = (Array) $thirdParty;
        $this->Details = array_merge((Array) $details, (Array) $additionalDetails);
    }
}