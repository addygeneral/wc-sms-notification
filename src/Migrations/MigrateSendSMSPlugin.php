<?php

namespace UsmsAPI_WC\Migrations;

use UsmsSupportedPlugin;

class MigrateSendSMSPlugin {

    public static function migrate()
    {
        // all third party plugins here
        $supported_plugins = UsmsSupportedPlugin::get_activated_plugins();
        foreach ($supported_plugins as $plugin) {
            // we first check order notification plugin
            $plugin_instance = new $plugin();
            $order_notification_option_id = $plugin_instance->get_option_id();
            $order_notification_option = get_option($order_notification_option_id);

            if( empty($order_notification_option) ) {
                // we check for setting in usmsapi-sendsms
                $sendsms_plugin_option_id = preg_replace("/usmsgh_/", "usmsapi_", $order_notification_option_id, 1);
                $sendsms_plugin_option = get_option($sendsms_plugin_option_id);

                if( !empty($sendsms_plugin_option) ) {
                    update_option($order_notification_option_id, $sendsms_plugin_option);
                    continue;
                }
            }
        }
    }
}