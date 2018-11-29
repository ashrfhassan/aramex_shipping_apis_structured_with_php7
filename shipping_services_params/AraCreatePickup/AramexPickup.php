<?php

namespace App\aramex\shipping_services_params\AraCreatePickup;

use App\aramex\shipping_services_params\data_types\AramexAddress;
use App\aramex\shipping_services_params\data_types\AramexContact;
use App\aramex\shipping_services_params\AraCreateShipment\AramexShipment;
use App\aramex\shipping_services_params\AraCreateShipment\AramexShipmentAdditionalData;


class AramexPickup
{
    public $PickupAddress;
    public $PickupContact;
    public $PickupLocation;
    public $PickupDate;
    public $ReadyTime;
    public $LastPickupTime;
    public $ClosingTime;
    public $Comments;
    public $Reference1;
    public $Reference2;
    public $Vehicle;
    public $Shipments;
    public $PickupItems;
    public $Status;

    function __construct(AramexAddress $PickupAddress, AramexContact $PickupContact, $PickupLocation, $PickupDate, $ReadyTime, $LastPickupTime, $ClosingTime, $Comments, $Reference1, $Reference2, $Vehicle, $Status, Array $PickupItems, AramexShipment $Shipment, AramexShipmentAdditionalData $shipmentsAdditionalData)
    {
        $finalShipment['Shipment'] =  array_merge((Array) $Shipment, (Array) $shipmentsAdditionalData);
        $finalPickupItems = [];
        foreach ($PickupItems as $PickupItem) {
            array_push($finalPickupItems, (Array) $PickupItem);
        }
       $this->PickupAddress = (Array) $PickupAddress;
       $this->PickupContact = (Array) $PickupContact;
       $this->PickupLocation = $PickupLocation;
       $this->PickupDate = $PickupDate;
       $this->ReadyTime = $ReadyTime;
       $this->LastPickupTime = $LastPickupTime;
       $this->ClosingTime = $ClosingTime;
       $this->Comments = $Comments;
       $this->Reference1 = $Reference1;
       $this->Reference2 = $Reference2;
       $this->Vehicle = $Vehicle;
       $this->Shipments = $finalShipment;
       $this->PickupItems = $finalPickupItems;
       $this->Status = $Status;
    }
}