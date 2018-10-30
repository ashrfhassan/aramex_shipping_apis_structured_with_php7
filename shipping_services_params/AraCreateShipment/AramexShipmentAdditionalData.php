<?php

namespace App\aramex\shipping_services_params\AraCreateShipment;

class AramexShipmentAdditionalData
{
    public $Reference1;
    public $Reference2;
    public $Reference3;
    public $ForeignHAWB;
    public $TransportType;
    public $ShippingDateTime;
    public $DueDate;
    public $PickupLocation;
    public $PickupGUID;
    public $Comments;
    public $AccountingInstrcutions;
    public $OperationsInstructions;

    function __construct($Reference1, $Reference2, $Reference3, $ForeignHAWB, $TransportType, $ShippingDateTime, $DueDate, $PickupLocation, $PickupGUID, $Comments, $AccountingInstrcutions, $OperationsInstructions)
    {
        $this->Reference1 = $Reference1;
        $this->Reference2 = $Reference2;
        $this->Reference3 = $Reference3;
        $this->ForeignHAWB = $ForeignHAWB;
        $this->TransportType = $TransportType;
        $this->ShippingDateTime = $ShippingDateTime;
        $this->DueDate = $DueDate;
        $this->PickupLocation = $PickupLocation;
        $this->PickupGUID = $PickupGUID;
        $this->Comments = $Comments;
        $this->AccountingInstrcutions = $AccountingInstrcutions;
        $this->OperationsInstructions = $OperationsInstructions;
    }
}