<?php

namespace App\aramex\shipping_services_params\data_types;

class AramexShipmentLabel
{
    public $LabelURL;
    public $LabelFileContents;

    function __construct($LabelURL, $LabelFileContents)
    {
        $this->LabelURL = $LabelURL;
        $this->LabelFileContents = $LabelFileContents;
    }
}