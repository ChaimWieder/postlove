<?php

/**
*
* @package Post Love [French]
* @translated into French by Galixte (http://www.galixte.com)
*
* @copyright (c) 2014
* @license GNU General Public License, version 2 (GPL-2.0)
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
	'POSTLOVE_USER_LIKES'	=> 'Nombre de « J’aime » partagés',
	'POSTLOVE_USER_LIKED'	=> 'Nombre de « J’aime » reçus',

	'NOTIFICATION_POSTLOVE_ADD'	=> '%1$s <b>aime</b> votre message « %2$s »',
	'NOTIFICATION_TYPE_POST_LOVE'	=> 'Quelqu’un aime un de vos messages.',

	// Ver 1.1
	'LIKE_LINE'	=> '%1$s - %2$s <b>liked</b> %3$s\'s post "%4$s" in topic "%5$s"',
	'POSTLOVE_LIST'	=> 'Likes',
	'POSTLOVE_LIST_VIEW'	=> 'Show list with all like actions',
));
