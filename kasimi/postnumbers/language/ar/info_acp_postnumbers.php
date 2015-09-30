<?php

/**
 *
 * @package phpBB Extension - Post Numbers
 * @copyright (c) 2015 kasimi
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 * Translated By : Bassel Taha Alhitary - www.alhitary.net
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
	'POSTNUMBERS_TITLE'						=> 'أرقام المُشاركات',
	'POSTNUMBERS_CONFIG'					=> 'الإعدادات',
	'POSTNUMBERS_CONFIG_UPDATED'			=> 'الإضافة : <strong>أرقام المُشاركات </strong><br />» تم تحديث الإعدادات',
	'POSTNUMBERS_ENABLED_VIEWTOPIC'			=> 'عرض أرقام المُشاركات عند مُشاهدة المواضيع ',
	'POSTNUMBERS_ENABLED_REVIEW_REPLY'		=> 'عرض أرقام المُشاركات في استعراض الموضوع عند إضافة رد ',
	'POSTNUMBERS_ENABLED_REVIEW_MCP'		=> 'عرض أرقام المُشاركات عند استعراض الموضوع في لوحة تحكم المشرف ',
	'POSTNUMBERS_SKIP_NONAPPROVED'			=> 'تجاهل المُشاركات قيد الموافقة ',
	'POSTNUMBERS_SKIP_NONAPPROVED_EXP'		=> 'عدم تخصيص الأرقام للمُشاركات التي قيد الموافقة و المُشاركات المحذوفة حذف غير نهائي',
	'POSTNUMBERS_DISPLAY_IDS'				=> 'عرض تعريف المُشاركات بدلاً من أرقام المُشاركات Display post IDs instead of post numbers',
	'POSTNUMBERS_DISPLAY_IDS_EXP'			=> 'لو أخترت "نعم" , سيتم تعطيل الخيار السابق <span style="font-style: italic;">تجاهل المُشاركات قيد الموافقة</span>',
));
