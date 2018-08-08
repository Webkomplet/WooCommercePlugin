=== Mail Komplet ===
Contributors: martinpolak
Tags: woocommerce, ecommerce, e-commerce, newsletter
Requires at least: 4.9.1
Tested up to: 4.9.8
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin will connect your WooCommerce shop to your account on Mail Komplet.

== Description ==

This plugin will connect your WooCommerce shop to your account on Mail Komplet. You will set API key, base crypt and
mailing list. New customers will be sent to given mailing list after that. When user creates an order, order data would
be sent to Mail Komplet too.

== Installation ==

1. Upload `mail-komplet.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==
 
= 1.1.0 =
* If contact is created, when order is created, order details (order date, order item names and order items count) are sent to Mail Komplet. It will help you to improve contacts segmentation, while sending a campaign. 