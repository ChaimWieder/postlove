<?php

/**
*
* newspage [English]
*
* @package language
* @version $Id$
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'POSTLOVE_USER_LIKES'	=> 'געדאנקט אנדערע:',
	'POSTLOVE_USER_LIKED'	=> 'געווארן באדאנקט:',
	
	'NOTIFICATION_POSTLOVE_ADD'	=> '%s <b>האט באדאנקט</b> דיין תגובה:',
	'NOTIFICATION_TYPE_POST_LOVE'	=> 'איינער באדאנקט זיך אויף א תגובה וואס דו האסט געשריבן',

	// Ver 1.1
	'LIKE_LINE'	=> '%1$s - %2$s האט <b>באדאנקט</b> %3$s\'ס תגובה אינעם אשכול "%4$s"',
	'POSTLOVE_LIST'	=> 'דאנק קנעפל:',
	'POSTLOVE_LIST_VIEW'	=> 'זעה באנוצער\'ס אקטיוויטעטן',
	'LIKE_LIST'	=> '%s\'ס דאנק קנעפל אקטיוויטעטן',

	// Ver 2.0
	'CLICK_TO_LIKE' 	=> 'לייג א דאנק פאר דעם תגובה',
	'CLICK_TO_UNLIKE'   => 'נעם אראפ דאנק פון דעם תגובה',
	'LOGIN_TO_LIKE_POST' => 'צו לייגן א דאנק דארפט איר זיין אריינגעלאגט',
	'CANT_LIKE_OWN_POST' => 'אנטשולדיגט, קענסט נישט לייגן א דאנק פאר דיין אייגענע תגובה',
	'POST_OF_THE_DAY'	=> 'מערסט באדאנקטע תגובות',
	'POST_LIKES'		=> 'באדאנקט',
	'POSTED_AT'			=> 'געשריבן אום',
	'LIKED_BY'			=> 'תגובה באדאנקט דורך: ',
	'POSTED_BY'			=> 'געשריבן דורך',
	'LIKES_TODAY'   	=> array(
		1	=> '1 מאל היינט',
		2	=> '%d מאל היינט',
	),
	'LIKES_THIS_WEEK'   	=> array(
		1	=> '1 מאל די וואך',
		2	=> '%d מאל די וואך',
	),
	'LIKES_THIS_MONTH'  	 => array(
		1	=> '1 מאל דעם חודש',
		2	=> '%d מאל דעם חודש',
	),
	'LIKES_THIS_YEAR'   	=> array(
		1	=> '1 מאל דאס יאר',
		2	=> '%d מאל דאס יאר',
	),
	'LIKES_EVER'	   => array(
		1	=> '1 מאל',
		2	=> '%d מאל',
	),
	'POSTLOVE_HIDE' 			=> 'ווייז נישט דעם דאנק קנעפל און דאנק אינפארמאציע',
));
