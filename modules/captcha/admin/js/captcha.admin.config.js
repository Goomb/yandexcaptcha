/**
 * Настройка модуля, JS-сценарий
 *
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    5.4
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2015 OOO «Диафан» (http://www.diafan.ru/)
 */

if ($('select[name=type]').val() != 'reCAPTCHA') {
    $('#recaptcha_public_key, #recaptcha_private_key').hide();
}
$('select[name=type]').change(function() {
    if ($(this).val() == 'reCAPTCHA') {
        $('#recaptcha_public_key, #recaptcha_private_key').show();
        $('#yandexcaptcha_key').hide();
    } else {
        $('#recaptcha_public_key, #recaptcha_private_key').hide();
    }
    if ($(this).val() == 'yandexcaptcha') {
        $('#yandexcaptcha_key').show();
        $('#recaptcha_public_key, #recaptcha_private_key').hide();
    } else {
        $('#yandexcaptcha_key').hide();
    }
});
