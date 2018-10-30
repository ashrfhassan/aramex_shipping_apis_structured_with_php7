<?php

namespace App\aramex\shipping_services_params\data_types;

class AramexContact
{
    public $Department;
    public $PersonName;
    public $Title;
    public $CompanyName;
    public $PhoneNumber1;
    public $PhoneNumber1Ext;
    public $PhoneNumber2;
    public $PhoneNumber2Ext;
    public $FaxNumber;
    public $CellPhone;
    public $EmailAddress;
    public $Type;

    function __construct($Department, $PersonName, $Title, $CompanyName, $PhoneNumber1, $PhoneNumber1Ext, $PhoneNumber2, $PhoneNumber2Ext, $FaxNumber, $CellPhone, $EmailAddress, $Type)
    {
        $this->Department = $Department;
        $this->PersonName = $PersonName;
        $this->Title = $Title;
        $this->CompanyName = $CompanyName;
        $this->PhoneNumber1 = $PhoneNumber1;
        $this->PhoneNumber1Ext = $PhoneNumber1Ext;
        $this->PhoneNumber2 = $PhoneNumber2;
        $this->PhoneNumber2Ext = $PhoneNumber2Ext;
        $this->FaxNumber = $FaxNumber;
        $this->CellPhone = $CellPhone;
        $this->EmailAddress = $EmailAddress;
        $this->Type = $Type;

    }
}