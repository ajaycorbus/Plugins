=== Wordpress SMS ===
Contributors: mostafa.s1990
Donate link: http://mostafa-soufi.ir/donate/
Tags: sms, wordpress, send, subscribe, sms subscribe, message, register, notification, webservice, sms panel, woocommerce, subscribes sms, Easy Digital Downloads, twilio, bulksms, clockworksms, nexmo
Requires at least: 3.0
Tested up to: 4.3
Stable tag: 3.1.1
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

A complete wordpress plugin to send sms with a high capability.
Send SMS via WordPress, Subscribe SMS newsletter and Send SMS to Number(s), Subscribes and Wordpress Users.

== Description ==
You can add to wordpress, the ability of sending sms. you can make users, member of sms newsletter and send to them sms.
To every changement of position in wordpress, you can send a sms through this plugin.

The usage of this plugin is completely free. You have to just have an account from a service in the gateway listes that we support them. 
Don't worry , we have tried to add the best and the most gateways to plugin. 

Very easy Send SMS by PHP code:

1. `global $sms;`
2. `$sms->to = array('09000000000');`
3. `$sms->msg = "Hello World!";`
4. `$sms->SendSMS();`

= Send SMS with WordPress in less than 1 minute! =

https://www.youtube.com/watch?v=50Sv5t6wTrQ

= Features =

* Send SMS to number(s), subscribers and wordpress users.
* Subscribe newsletter SMS.
* Widget for register user to sms subscribed.
* Support Wordpress Hooks.
* Support Wordpress Shortcode.
* Send Suggestion post via SMS.
* Send activation code to subscribe for complete subscription.
* Notification SMS when published new post to subscribers.
* Notification SMS when the new release of WordPress.
* Notification SMS when registering a new User.
* Notification SMS when get new comment.
* Notification SMS when user logged into wordpress.
* Notification SMS when user registered to subscription form.
* Integrate with (Contact form 7, WooCommerce, Easy Digital Downloads)
* Create Category for newsletter.
* Import/Export Subscribers.

= Professional Package =
In the Professional pack added many features, another useful gateway and is integrated with another plugins.

[Buy Professional Package](http://wp-sms-plugin.com/purchases)

Gateways:

* twilio.com
* plivo.com
* clickatell.com
* bulksms.com
* infobip.com
* nexmo.com
* clockworksms.com
* cmtelecom.com
* viensms.com
* moceansms.com
* msg91.com
* yamamah.com
* magicdeal4u.com
* sendsms247.com
* smslive247.com
* isms.com.my
* ssdindia.com
* vsms.club
* livesms.eu
* cellsynt.net
* gateway.sa
* ra.sa
* mobily.ws
* sms4marketing.it
* smstrade.de
* dsms.in
* cpsms.dk
* bulksmshyderabad.co.in
* ozioma.net
	
Other features:

* Integrate with BuddyPress
You can adding mobile number field to profile page, send SMS to user when mentioned in the post and sending SMS to user when posted a comment on the post.
* Integrate with WooCommerce.
You can adding mobile number field to checkout page, send sms to users or subscribers when added new product to woocommerce. send SMS to admin when submitted new order in woocommerce and send sms to customers when submit the order.
when one stock product is load, the plugin can send SMS to admin for notify and you can send sms to customers when the orders have been changed.
* Integrate with Gravity form.
Plugin can be send sms to user or admin after submit the form.
* Integrate with Quform.
Plugin can be send sms to user or admin after submit the form.
* Integrate with Easy Digital Downloads.
You can adding mobile number field to profile page. can be send sms to user or admin when submitted an order with EDD.
* Premium Support

[Buy Professional Package](http://wp-sms-plugin.com/purchases)

= Translators =
* English
* Persian
* Arabic (Thanks Hamad Al-Shammari, Gateway.sa)
* Portuguese (Thanks Matt Moxx)
* Spanish (Thanks Yordan Soares)
* German (Thanks Robert Skiba)
* Swedish (Thanks Kramfors)

Translations are done by people just like you, help make WP SMS available to more people around the world and [do a translation](http://wp-sms-plugin.com/translators) today!

= Support =
* [Donate to this plugin](http://mostafa-soufi.ir/donate/)
* [English Support Forum](https://wordpress.org/support/plugin/wp-sms)
* [Persian Support Forum](http://forum.wp-parsi.com/forum/17-%D9%85%D8%B4%DA%A9%D9%84%D8%A7%D8%AA-%D8%AF%DB%8C%DA%AF%D8%B1/)

This plugin is a free product of the [Verona Labs](http://veronalabs.com/)

== Installation ==
1. Upload `wp-sms` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. To display Subscribe goto Themes -> Widgets, and adding `Subscribe to SMS` into your sidebar Or using this functions: `<?php wp_subscribes(); ?>` into theme.
or using this Shortcode `[subscribe]` in Posts pages or Widget.
4. Using this functions for send manual SMS:

* First: `global $sms;`
* `$sms->to = array('MobileNumber');`
* `$sms->msg = "YourMessage";`
* Send SMS: `$sms->SendSMS();`

= Actions =
Run following action when send sms with this plugin.
`wp_sms_send`

Example: Send mail when send sms.
`function send_mail_when_send_sms($message_info) {
	wp_mail('you@mail.com', 'Send SMS', $message_info);
}
add_action('wp_sms_send', 'send_mail_when_send_sms');`

Run following action when subscribe a new user.
`wp_sms_subscribe`

Example: Send sms to user when register a new subscriber.
`function send_sms_when_subscribe_new_user($name, $mobile) {
	global $sms;
	$sms->to = array($mobile);
	$sms->msg = "Hi {$name}, Thanks for subscribe.";
	$sms->SendSMS();
}
add_action('wp_sms_subscribe', 'send_sms_when_subscribe_new_user', 10, 2);`

== Screenshots ==
1. SMS Setting Page.
2. Webservice page.
3. Newslleter page.
4. Features page.
5. Notifications page.
6. Send SMS Page.
7. SMS Posted Page.
8. Subscribe list Page.
9. At a Glance.
10. SMS Subscribe widget.
11. Subscribe new-post.php.
12. Suggestion post in single.
13. Contact Form 7 page.

== Upgrade Notice ==
= 3.0 =
* CHANGE In this version of the plugin has changed the structure and optimized codes.
In this version, we have made a lot of changes. We tried using the free version as a core and base. The professional version of plugin is made to a professional parcel that through the free plugin is activated.  

= 2.4 =
* CHANGE `$obj` variable TO `$sms` IN YOUR SOURCE CODE.

= 2.0 =
* BACKUP YOUR DATABASE BEFORE INSTALLING!

== Changelog ==
= 3.1.1 =
* Language `German` updated. (Thanks Robert Skiba Medientechnik)
* Fixed activation code for SMS newsletter.
* Fixed Showing SMS tab in CF7 Meta box.
* Gateway `esms24.ir` Added.
* Gateway `payamakaria.ir` Added.

= 3.1.0 =
* Gateway `Bestit.co` Added.
* Gateway `Pegah-Payamak.ir` Added.
* Gateway `Loginpanel.ir` Added.
* Gateway `Adspanel.ir` Added.
* Gateway `Adspanel.ir` Added.
* Gateway `Mydnspanel.com` Added.
* Fixed Update option on notification page.
* Language `Arabic` updated. (Thanks Hammad)

= 3.0.2 =
* Gateway `LabsMobile` updated.
* Gateway `Mtarget` updated.
* Gateway `Razpayamak` Added.
* Added select status in edit subscribe page.
* Fixed send to subscribes in Send SMS page.
* Fixed send notification new post to subscribers.
* Fixed custom text for notifications new post.

= 3.0.1 =
* Fixed show group page and subscribe page on admin.
* Language: Swedish added. (Thanks Kramfors)

= 3.0 =
* Added `WP_SMS_Subscribers` class for processing subscribers (just in admin).
* Added `Default_Gateway` class for use it if webservice not active in the plugin.
* Added check sms credit in `SendSMS` method.
* Added subscribers hook to plugin hooks collactions.
* Added user to newsletter when the user register in the wordpress.
* Added send message to form field on `Contact Form 7`.
* Added manage subscribe group in the plugin menu.
* Added access level for view send page sms.
* Added show/hide group in subscribe form.
* Added resend sms on outbox message.
* Added custom message for sms post suggestion.
* Added css file for sms post suggestion form.
* Added select group in sms meta box for sending the sms to subscribers when publish new post.
* Added note for gateways after web services list.
* Added `smsapi.pl` polish gateway.
* Added `wifisms.ir` iranian gateway.
* Improvement list table in for subscriber and outbox page (use `WP_List_Table` library).
* Improvement notifications page.
* Fixed notification new comment conflict with woocommerce.
* Compatible with wordpress 4.3.
* Language: updated.
* Reseted all notifications option.
* Remove add-ons page.
* Remove wordpress pointer from plugin.
* Remove admin stylesheet old version.

= 2.8.1 =
* Added Sarinapayamak.com webservice
* Added mtarget.fr webservice
* Added bearsms.com webservice
* Added smss.co.il webservice
* Added sms77.de webservice
* Added isms.ir webservice
* Fixed Notification sms after enable plugin
* Fixed Integration with new ver of CF7
* Update Arabic translation.
* Added German translation. [Thanks Robert Skiba](http://skibamedia.de/)

= 2.8 =
* Added rules on mobile field number for subscribe form. (maximum and minimum number)
* Added place holder on mobile filed number for subscribe form for help to user.
* Added Chinese translator. (Thanks Jack Chen)
* Added Addons page in plugin.
* Added payamgah.net webservice.
* Added sabasms.biz webservice.
* Added chapargah.ir webservice.
* Added farapayamak.com webservice.
* Added yashil-sms.ir webservice.
* Improved subscribe ajax form.
* Improved subscribe form and changed the form design.
* Fixed a problem in send post to subscribers.

= 2.7.4 =
* Fixed Contact form 7 shortcode. currently supported.

= 2.7.3 =
* Added smshosting.it webservice.
* Added afilnet.com webservice.
* Added faraed.com webservice.
* Added spadsms.ir webservice.
* Added niazpardaz.com (New webservice).
* Added bandarsms.ir webservice.

= 2.7.2 =
* Added MarkazPayamak.ir webservice.
* Added payamak-panel.com webservice.
* Added barmanpayamak.ir webservice.
* Added farazpayam.com webservice.
* Added 0098sms.com webservice.
* Added amansoft.ir webservice.
* Change webservice in asanak.ir webservice.

= 2.7.1 =
* Added Variables %status% and %order_name% for woocommerce new order.
* Added smsservice.ir webservice.
* Added asanak.ir webservice.
* Updated idehpayam Webservice.
* Added Mobile field number in create a new user from admin.
- Fixed notification sms when create a new user.
* Fixed return credit in smsglobal webservice.

= 2.7 =
* Added Numbers of Wordpress Users to send sms page.
* Added Mobile validate number to class plugin.
* Added Option for Disable/Enable credit account in admin menu.
* Added afe.ir webservice.
* Added smshooshmand.com webservice.
* Added Description field optino for subscribe form widget.
* Included username & password field for reset button in webservice tab.
* Updated: Widget code now adhears to WordPress standards.

= 2.6.7 =
* Added navid-soft web service.
* Remove number_format in show credit sms.

= 2.6.6 =
* Fixed problem in include files.

= 2.6.5 =
* Added smsroo.ir web service.
* Added smsban.ir web service.

= 2.6.4 =
* Fixed nusoap_client issue when include this class with other plugins.
* Remove mobile country code from tell friend section.
* Change folder and files structure plugin.

= 2.6.3 =
* Added SMS.ir (new version) web service.
* Added Smsmelli.com (new version) web service.
* Fixed sms items in posted sms page.
* Fixed subscribe items in subscribe page.
* Fixed Mobile validation number.
* Fixed Warning error when export subscribers.
* Changed rial unit to credit.

= 2.6.2 =
* Fixed Notifications sms to subscribes.
* Added Rayanbit.net web service.
* Added Danish language.

= 2.6.1 =
* Fixed Mobile validation in subscribe form.
* Added Reset button for remove web service data.
* Added Melipayaamak web service.
* Added Postgah web service.
* Added Smsfa web service.
* Added Turkish language.

= 2.6 =
* Fixed: database error for exists table.
* Fixed: small bugs.
* Added: chosen javascript library to plugin.
* Added: ssmss.ir Webservice.
* Added: isun.company Webservice.
* Added: idehpayam.com Webservice.
* Added: smsarak.ir Webservice.
* Added: difaan Webservice.
* Added: Novinpayamak Webservice.
* Added: Dot4all Webservice.

= 2.5.4 =
* Added: sms-gateway.at Webservice.
* Added: Spanish language.
* Updated: for WordPress 4.0 release.

= 2.5.3 =
* Added: Smstoos Webservice.
* Added: Smsmaster Webservice.
* Fixed: Showing sms credit in adminbar. Not be displayed for the users.
* Fixed: Send sms for subscriber when publish new posts.

= 2.5.2 =
* Added: Avalpayam Webservice.
* Fixed: bugs in database queries.

= 2.5.1 =
* Added: Option to add mobile field in register form.
* Added: Welcome message for new user.
* Added: Matin SMS Webservice.
* Added: Iranspk Webservice.
* Added: Freepayamak Webservice.
* Added: IT Payamak Webservice.
* Added: Irsmsland Webservice.
* Fixed: Error `Call to a member function GetCredit()` in webservie page.
* Fixed: Bug in notification register new user.
* Updated: Arabic language.

= 2.5 =
* Fixed: Error `Call to undefined method stdClass::SendSMS()` when enable/update plugin.
* Added: Option to enable mobile field to profile page. (Setting -> Features)
* Added: Import & export in subscribe list page.
* Added: Groups link in subscribe page.
* Added: Search items in subscribe list page.
* Added: Novin sms Webservice.
* Added: Hamyaar sms Webservice.

= 2.4.2 =
* Added: SMSde Webservice.

= 2.4.1 =
* Added: Payamakalmas Webservice.
* Added: SMS (IPE) Webservice.
* Added: Popaksms Webservice.

= 2.4 =
* Added: `WP_SMS` Class and placing a parent class.
* Added: `wp_sms_send` Action when Send sms from the plugin.
* Added: `wp_sms_subscribe` Action when register a new subscriber.
* Added: Notification SMS when registering a new subscribe.
* Added: Ponisha SMS Webservice.
* Added: SMS Credit and total subscriber in At a Glance.
* Fixed: Saved sms sender with `InsertToDB` method.
* Optimized: Subscribe SMS ajax form.

= 2.3.5 =
* Updated: ippanel.com Webservice.
* Added: Sarab SMS Webservice.

= 2.3.4 =
* Updated: Opilio Webservice.
* Added: Sharif Pardazan (2345.ir) Webservice.

= 2.3.3 =
* Added: Asia Payamak Webservice.

= 2.3.2 =
* Added: Arad SMS Webservice.

= 2.3.1 =
* Added: Notification SMS when get new order from Woocommerce plugin.
* Added: Notification SMS when get new order from Easy Digital Downloads plugin.

= 2.3 =
* Added: Tabs option in setting page.
* Added: Notification SMS when registering a new username.
* Added: Notification SMS when get new comment.
* Added: Notification SMS when username login.
* Added: Text format to published new post notification.
* Added: MP Panel Webservice.
* Added: Mediana Webservice.

= 2.2.5 =
* Changed: Aadat 24 web service.
* Changed: Parand Host web service URL.

= 2.2.4 =
* Added: Adpdigital Webservice.
* Added: Joghataysms Webservice.
* Fixed: Iransmspanel webservice.
* Changed: Parand Host web service URL.
* Changed: Hi SMS web service URL.
* Changed: Nasrpayam web service URL.

= 2.2.2 =
* Added: Hi SMS Webservice.

= 2.2.1 =
* Added: Niazpardaz Webservice.
* Fixed: Oplio Webservice.

= 2.2 =
* Added: Payameroz Webservice.
* Added: Unisender Webservice.
* Fixed: small bug in cf7.

= 2.1 =
* Resolved: include tell-a-freind.php file.

= 2.0 =
* Added: Metabox sms to Contact Form 7 plugin.
* Added: SMS Message sender page.
* Added: PayamResan Webservice.
* Optimized: include files.
* Resolved: create tables when install plugin.
* Language: updated.

= 2.0.2 =
* Resolved: loading image.
* Added: Fayasms Webservice.

= 2.0.1 =
* Added: SMS Bartar Webservice.

= 2.0 =
* Added: Pagination in Subscribes Newsletter page.
* Added: Group for Subscribes.
* Optimized: jQuery Calling.
* Resolved: Subscribe widget form.
* Resolved: Small problems.

= 1.9.22 =
* Added: Nasrpayam Webservice.

= 1.9.21 =
* Added: Caffeweb Webservice.

= 1.9.20 =
* Resolved: add subscriber in from Wordpress Admin->Newsletter subscriber.
* Added: TCIsms Webservice.

= 1.9.19 =
* Added: ImenCms Webservice.

= 1.9.18 =
* Added: Textsms Webservice.

= 1.9.17 =
* Added: Smsmart Webservice.

= 1.9.16 =
* Added: PayamakNet Webservice.

= 1.9.15 =
* Added: BarzinSMS Webservice.
* Update: jQuery to 1.9.1.

= 1.9.14 =
* Resolved: opilo Webservice.

= 1.9.13 =
* Resolved: paaz Webservice.

= 1.9.12 =
* Added: JahanPayamak Webservice.

= 1.9.11 =
* Added: SMS-S Webservice.
* Added: SMSGlobal Webservice.
* Added: paaz Webservice.
* Added: CSS file in setting page.
* Resolved: Loads the plugin's translated strings problem.
* Language: updated.

= 1.9.10 =
* Added: Tablighsmsi Webservice.

= 1.9.9 =
* Added: Smscall Webservice.

= 1.9.8 =
* Added: Smsdehi Webservice.

= 1.9.7 =
* Added: Sadat24 Webservice.

= 1.9.6 =
* Added: Arabic language.
* Added: Notification SMS when messages received from Contact Form 7 plugin.
* Small changes in editing Subscribers.

= 1.9.5 =
* Added: Ariaideh Web Service.

= 1.9.4 =
* Added: Persian SMS Web Service.

= 1.9.3 =
* Added: SMS Click Web Service.

= 1.9.2 =
* Added: ParandHost Web Service.
* Troubleshooting jQuery in Send SMS page.

= 1.9.1 =
* Added: PayameAvval Web Service.

= 1.9 =
* Added: SMSFa Web Service.
* Optimize in translation functions.
* Added: edit subscribers.

= 1.8 =
* Added: your mobile number.
* Added: Enable/Disable calling jQuery in wordpress.
* Added: Notification of a new wordPress version by SMS.

= 1.7.1 =
* Fix a problem in jquery.

= 1.7 =
* Fix a problem in Get credit method.
* Fix a problem in ALTER TABLE.
* Fix a problem Active/Deactive all subscribe.

= 1.6 =
* Added Enable/Disable username in subscribe page.
* Fix a problem in show credit.
* Fix a problem in menu link.
* Fix a problem in word counter.

= 1.5 =
* Added: Hostiran Web Service.
* Added: Iran SMS Panel Web Service.
* Remove Orangesms Service.
* Added Activation subscribe.
* Optimize plugin.
* Update jquery to 1.7.2

= 1.4 =
* Added: Portuguese language.
* Update last credit when send sms page.

= 1.3.3 =
* Fix a problem.
* Fix a display the correct number in the list of newsletter subscribers.

= 1.3.2 =
* Fix a problem.

= 1.3.1 =
* Fix a problem.
* Fix credit unit in multi language.

= 1.3 =
* Added: register link for webservice.
* Added: Suggestion post by SMS.

= 1.2 =
* Fix a problem.

= 1.1 =
* Adding show SMS credit in the dashboard right now.
* Adding show total subscribers in the dashboard right now.
* Adding Shortcode.
* Added: Panizsms Web Service.
* Added: Orangesms Web Service.

= 1.0 =
* Start plugin