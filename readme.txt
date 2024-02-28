=== USMS-GH WooCommerce SMS Notification ===
Contributors: [urhitech, addygeneral, reborn scofield]
Tags: usmsgh, USMS-GH, usmsgh sms, woocommerce, multivendor, order, wc, order notification, sms notification, notification, WooCommerce sms notification, WooCommerce notification, WooCommerce sms, USMS-GH WooCommerce Notification
Requires at least: 3.8
Tested up to: 6.3.1
WC requires at least: 2.6
WC tested up to: 8.2
Stable tag: 2.0.1
Requires PHP: 5.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

This plugin is to send SMS notification to both buyer and seller after an order is placed in WooCommerce. SMS notification can be sent on all order statuses as well as with customized contents.

== Description ==

Extend your WooCommerce store capabilities and create new opportunities for your business with
USMS-GH WooCommerce SMS Notifications for WooCommerce module – the new generation SMS plugin for WooCommerce.

USMS-GH WooCommerce SMS Notifications for WooCommerce enables businesses to send messages and reach their customers in over 200 countries and regions all around the world.

Shopping online and waiting for goods to be delivered can be an exciting process. As a seller, you can enhance your buyers' experiences by keeping them updated on the purchases and delivery. At the same time, keep seller yourself updated on each new order placed.

You can create a free account here [registration](https://webapp.usmsgh.com/register).
Subscript to any of our affordable pricing plans, and start making your buyers feel at ease while waiting for their orders.

Features:
*   Notify seller whenever a new order is placed.
*	Inform buyer the current order status / whenever order status is changed.
*	All WooCommerce order statuses are supported.
*	SMS content can be customized for different order status.
*	These tags are supported to customize message: [shop_name], [order_id], [order_amount], [order_status], [order_product], [payment_method], [bank_details], [billing_first_name], [billing_last_name], [billing_phone], [billing_email], [billing_company], [billing_address], [billing_country], [billing_city], [billing_state], [billing_postcode]
*   Custom checkout field added from Woo Checkout Field Editor Pro is supported.
*   Notify vendor whenever there's new order
*   Notify vendor when sub order status changed

Supported Third Party Multivendor Plugin:

*   [Woocommerce Product Vendors](https://woocommerce.com/products/product-vendors/)
*   [WC Marketplace](https://wordpress.org/plugins/dc-woocommerce-multi-vendor/)
*   [WC Vendors Marketplace](https://wordpress.org/plugins/wc-vendors/)
*   [WooCommerce Multivendor Marketplace (WCFM Marketplace)](https://wordpress.org/plugins/wc-multivendor-marketplace/)
*   [Dokan](https://wordpress.org/plugins/dokan-lite/)
*   [YITH WooCommerce Multi Vendor](https://wordpress.org/plugins/yith-woocommerce-product-vendors/)

== Installation ==

1. Search for "USMS-GH WooCommerce SMS Notification Order SMS Notification for WooCommerce" in "Add Plugin" page and activate it.

2. Configure the settings in Settings > USMS-GH Settings.

3. Enjoy using our super efficient plugin.

== Screenshots ==

1. USMS-GH Settings
2. Admin Settings
3. Customer Settings
4. Multivendor Settings

== Changelog ==

= 2.0.1 =
* Latest version released

= 1.0.0 =
* Initial version released

== Upgrade Notice ==

= 1.1.14 =
* Fix - Admin, Customer & vendor receive both Main Order & Sub Order notification

= 1.1.13 =
* Fix - Multivendor unable to replace custom field

= 1.1.12 =
* Show additional custom billing fields in Keyword table

= 1.1.11 =
* Fix - unable to get correct vendor phone number

= 1.1.10 =
* Fix - dashboard balance widget randomly crash site.

= 1.1.9 =
* Fix - change usms api url to latest url.

= 1.1.8 =
* Tweaks - add error logging on client side errors.

= 1.1.7 =
* New - admin is now able to customize send notification to multivendor on specific order status. (Default to all order status)

= 1.1.6 =
* Fix - unable to send sms in some case.

= 1.1.5 =
* HotFix - js file which has been cached not being updated end up prevent user from clicking keywords button.

= 1.1.4 =
* New - add new keywords [shop_email], [shop_url], [order_product_with_qty]
* New - add keywords modal for message template compose area

= 1.1.3 =
* Fix - plugin require pluggable.php which might accidentally declare wp_mail() used by other plugin.

= 1.1.2 =
* Changes - customer is not allowed to setup vendor phone number.
* Tweaks - add helper message to multivendor setting for better understanding.
* Tweaks - profile setting phone phone is now listed in UsmsGh Woocommerce section.

= 1.1.1 =
* New - add export log button in setting page.

= 1.1.0 =
* New - this plugin currently included ability to send sms to vendors.
* Tweaks - code improvement, plugin updates and installation is being speed up to 30%.

= 1.0.10 =
* New - add auto detect multivendor extension

= 1.0.9 =
* Fix - users are now not required to press save in multivendor setting for the first time to take effect.

= 1.0.8 =
* New - add abstraction for multivendor extensions.
* New - add usmsgh balance widget.
* Fix - api secret field is now using password field.
* Fix - plugin still executing if api secret field is empty.
* Tweaks - code improvement.
* Tweaks - add log if api key or api secret is not defined.

= 1.0.7 =
* Code improvement.

= 1.0.6 =
* Update and improve library.

= 1.0.5 =
* Replace deprecated functions.

= 1.0.4 =
* Rectified warning message: wp_enqueue_script was called incorrectly.

= 1.0.3 =
* Added new tags: Ordered product, payment method, billing first name, last name, phone number, email, company, address, country, city, state, and postcode.
* Added new tags for custom checkout fields (Woo Checkout Field Editor Pro).

= 1.0.2 =
* Added new tag for bank details

= 1.0.1 =
* Added mobile number validation before sending SMS.
* Added form validation.
* Notice about SMS log file for checking when having issues sending SMS.

= 1.0.0 =
* Initial version released

== Upgrade Notice ==

= 1.1.0 =
This plugin included multivendor setting, kinda check on Settings > UsmsGh WooCommerce > Multivendor Setting

== Translations ==


