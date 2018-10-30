<?php

namespace App\aramex\shipping_services_params\AraCreateShipment;

class AramexShipmentLabelInfo
{

    public $ReportID;
    public $ReportType;

    public function __construct($ReportID, $ReportType)
    {
        $this->ReportID = $ReportID;
        $this->ReportType = $ReportType;
    }
}
