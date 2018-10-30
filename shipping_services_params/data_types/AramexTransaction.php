<?php

namespace App\aramex\shipping_services_params\data_types;

class AramexTransaction
{
    public $Reference1;
    public $Reference2;
    public $Reference3;
    public $Reference4;
    public $Reference5;

    function __construct($Reference1, $Reference2, $Reference3, $Reference4, $Reference5)
    {
        $this->Reference1 = $Reference1;
        $this->Reference2 = $Reference2;
        $this->Reference3 = $Reference3;
        $this->Reference4 = $Reference4;
        $this->Reference5 = $Reference5;
    }
}