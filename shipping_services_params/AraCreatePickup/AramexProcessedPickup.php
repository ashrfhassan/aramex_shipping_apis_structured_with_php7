<?php

namespace App\aramex\shipping_services_params\AraCreatePickup;

use App\aramex\shipping_services_params\AraCreateShipment\AramexProcessedShipment;


class AramexProcessedPickup
{
    public $ID;
    public $GUID;
    public $Reference1;
    public $Reference2;
    public $ProcessedShipments;

    function __construct($ID, $GUID, $Reference1, $Reference2, Array $ProcessedShipments)
    {
        $finalShipments = [];
        foreach ($ProcessedShipments as $Shipment) {
            array_push($finalShipments, (Array) $Shipment);
        }
        $this->ID = $ID;
        $this->GUID = $GUID;
        $this->Reference1 = $Reference1;
        $this->Reference2 = $Reference2;
        $this->ProcessedShipments = $finalShipments;
    }
}