<?php

namespace App\aramex\shipping_services_params\data_types;

class AramexParty
{
    public $Reference1;
    public $Reference2;
    public $AccountNumber;
    public $PartyAddress;
    public $Contact;

    function __construct($Reference1, $Reference2, $AccountNumber, AramexAddress $PartyAddress, AramexContact $Contact)
    {
        $this->Reference1 = $Reference1;
        $this->Reference2 = $Reference2;
        $this->AccountNumber = $AccountNumber;
        $this->PartyAddress = $PartyAddress;
        $this->Contact = $Contact;
    }
}