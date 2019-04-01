<?php
/**
 * Created by RG.
 * Date: 08.02.2018
 */


namespace RG\Tauth;


class EventHandlers
{
    /**
     * @return array
     */
    public static function onAuthServicesBuildList()
    {
        $auth_item = [
            'ID' => Main::AUTH_SERVICE_ID,
            'CLASS' => '\\RG\\Tauth\\AuthService',
            'NAME' => 'Telegram',
            'ICON' => 'openid',
        ];

        return $auth_item;
    }
}
