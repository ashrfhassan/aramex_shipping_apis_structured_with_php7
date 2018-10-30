<?php
namespace App\aramex;

class soapOperations
{
    protected $soapClient;

    function __construct($wsdlPath)
    {
        $this->soapClient = new \SoapClient($wsdlPath);
    }

    public function getAvailableFunctions()
    {
        return $this->soapClient->__getFunctions();
    }

    public function callSoapFunction($functionName, $params)
    {
        try {
            return $this->soapClient->{$functionName}($params);
        } catch (\SoapFault $fault) {
            return $fault->faultstring;
        }
    }
}

