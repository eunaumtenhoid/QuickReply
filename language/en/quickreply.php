<?php
/**
*
* quickreply [Russian]
*
* @package language quickreply
* @copyright (c) 2013 Татьяна5
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
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
	'QR_INSERT_TEXT'			=> 'Вставить цитату в окно ответа',
	'QR_PROFILE'				=> 'Перейти в профиль',
	'QR_QUICKNICK'				=> 'Обратиться по нику',
	'QR_QUICKNICK_TITLE'		=> 'Вставить имя пользователя в окно быстрого ответа',
//begin mod CapsLock Transfer
	'QR_TRANSFORM_TEXT'			=> 'Изменение регистра текста:',
	'QR_TRANSFORM_TEXT_TOOLTIP'	=> 'Для изменения регистра выделите часть текста и нажмите нужную кнопку',
	'QR_TRANSFORM_TEXT_LOWER'	=> '&#9660; абв',
	'QR_TRANSFORM_TEXT_UPPER'	=> '&#9650; АБВ',
	'QR_TRANSFORM_TEXT_INVERS'	=> '&#9660;&#9650; аБВ',
	'QR_TRANSFORM_TEXT_LOWER_TOOLTIP'	=> 'нижний регистр',
	'QR_TRANSFORM_TEXT_UPPER_TOOLTIP'	=> 'ВЕРХНИЙ РЕГИСТР',
	'QR_TRANSFORM_TEXT_INVERS_TOOLTIP'	=> 'иНВЕРСИЯ рЕГИСТРА',
//end mod CapsLock Transfer    
));