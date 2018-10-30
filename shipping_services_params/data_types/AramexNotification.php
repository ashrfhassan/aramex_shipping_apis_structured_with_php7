<?php

namespace App\aramex\shipping_services_params\data_types;

class AramexNotification
{
    public $Code;
    public $Message;

    function __construct($Code, $Message)
    {
        $this->Code = $Code;
        $this->Message = $Message;
    }
}