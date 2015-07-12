<?php
/**
 * Шаблон Яндекс.Каптча
 *
 */

if (! defined('DIAFAN')) {
	$path = __FILE__; $i = 0;
	while (!file_exists($path.'/includes/404.php'))	{
        if ($i == 10) exit; $i++;
        $path = dirname($path);
	}
	include $path.'/includes/404.php';
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
