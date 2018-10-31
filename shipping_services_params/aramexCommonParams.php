<?php

namespace App\aramex\shipping_services_params;

use App\aramex\shipping_services_params\data_types\AramexTransaction;

class aramexCommonParams
{
    // return common params for all requests
    public static function getRequestCommonParams(AramexTransaction $transaction)
    {
        return array(
            'ClientInfo' => array(
                'AccountCountryCode' => config('aramex.test.account_country_code'),
                'AccountEntity' => config('aramex.test.account_entity'),
                'AccountNumber' => config('aramex.test.account_number'),
                'AccountPin' => config('aramex.test.account_pin'),
                'UserName' => config('aramex.test.user_name'),
                'Password' => config('aramex.test.password'),
                'Version' => config('aramex.test.aramex_api_version'),
            ),
            'Transaction' => (Array) $transaction,
        );
    }

    // return common params for all responses (just a template unused).
    public static function getResponseCommonParams(AramexTransaction $transaction, Array $notifications)
    {
        $finalNotifications = [];
        foreach ($notifications as $notification) {
            array_push($finalNotifications, (Array) $notification);
        }
        return array(
            'Notifications' => $finalNotifications,
            'Transaction' => (Array) $transaction,
            'HasErrors' => false,
        );
    }
}
