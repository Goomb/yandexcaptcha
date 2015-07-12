/**
 * Настройка модуля, JS-сценарий
 *
 */

if ($('select[name=type]').val() != 'reCAPTCHA') {
    $('#recaptcha_public_key, #recaptcha_private_key').hide();
}
if ($('select[name=type]').val() != 'yandexcaptcha') {
    $('#yandexcaptcha_key').hide();
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
