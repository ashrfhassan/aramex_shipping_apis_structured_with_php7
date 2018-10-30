<?php

namespace App\aramex\shipping_services_params\data_types;

class AramexAttachment
{
    public $FileName;
    public $FileExtension;
    public $FileContents;

    function __construct($FileName, $FileExtension, $FileContents)
    {
        $this->FileName = $FileName;
        $this->FileExtension = $FileExtension;
        $this->FileContents = $FileContents;
    }
}