<?php
/**
 * Шаблон reCAPTCHA
 *
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    5.4
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2015 OOO «Диафан» (http://www.diafan.ru/)
 */

if (! defined('DIAFAN'))
{
    include dirname(dirname(dirname(__FILE__))).'/includes/404.php';
}

if (empty($result)) {
    return false;
}

echo '<div class="block captcha">';
echo '<br>
<img src="'.$result["img"].'" class="code_img captcha-image">
<input type="hidden" name="captcha_update" value="">
<input type="hidden" name="captcha_id" value="'.$result["captcha"].'">
<br>
<span class="input-title">'.$this->diafan->_('Введите код с картинки').':&nbsp;</span>
<input type="text" name="captcha" value="" autocomplete="off">
<div class="js_captcha_update captcha_update"><a href="javascript:void(0)" class="button-refresh">&nbsp;</a></div>';
echo '</div>';

echo '<div class="errors error_captcha"'.($result["error"] ? '>'.$result["error"] : ' style="display:none">').'</div>';
