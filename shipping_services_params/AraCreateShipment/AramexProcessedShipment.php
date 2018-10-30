<?php

namespace App\aramex\shipping_services_params\AraCreateShipment;

use App\aramex\shipping_services_params\data_types\AramexShipmentLabel;
use App\aramex\shipping_services_params\data_types\AramexNotification;


class AramexProcessedShipment
{

    public $ID;
    public $Reference1;
    public $Reference2;
    public $Reference3;
    public $ForeignHAWB;
    public $HasErrors;
    public $ShipmentLabel;
    public $Notifications;


    public function __construct($ID, $Reference1, $Reference2, $Reference3, $ForeignHAWB, $HasErrors, AramexShipmentLabel $ShipmentLabel, Array $notifications)
    {
        $finalNotifications = [];
        foreach ($notifications as $notification) {
            array_push($finalNotifications, (Array) $notification);
        }
        $this->ID = $ID;
        $this->Reference1 = $Reference1;
        $this->Reference2 = $Reference2;
        $this->Reference3 = $Reference3;
        $this->ForeignHAWB = $ForeignHAWB;
        $this->HasErrors = $HasErrors;
        $this->ShipmentLabel = (Array) $ShipmentLabel;
        $this->Notifications = $finalNotifications;
    }
}
