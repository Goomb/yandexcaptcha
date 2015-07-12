<?php
/**
 * Настройки модуля
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

/**
 * Captcha_admin_config
 */
class Captcha_admin_config extends Frame_admin
{
	/**
	 * @var array поля в базе данных для редактирования
	 */
	public $variables = array (
	    'config' => array (
	    	'type' => array(
	    		'type' => 'select',
	    		'name' => 'Тип',
	    		'help' => 'Выбор метода фильтрации спам-ботов.',
	    	),
	    	'recaptcha_public_key' => array(
	    		'type' => 'text',
	    		'name' => 'Public Key для сервиса <a href="http://www.google.com/recaptcha">reCAPTCHA</a>',
	    		'help' => 'Параметр выводится, если в поле «Тип» выбрано «reCAPTCHA».',
	    	),
	    	'recaptcha_private_key' => array(
	    		'type' => 'text',
	    		'name' => 'Private Key для сервиса <a href="http://www.google.com/recaptcha">reCAPTCHA</a>',
	    		'help' => 'Параметр выводится, если в поле «Тип» выбрано «reCAPTCHA».',
	    	),
	    	'yandexcaptcha_key' => array(
	    		'type' => 'text',
	    		'name' => 'API Key для Яндекс.Каптчи',
	    	),
	),
	);

	/**
	 * @var array настройки модуля
	 */
	public $config = array (
    	'config', // файл настроек модуля
	);

	/**
	 * @var array значения списков
	 */
	public $select_arr = array(
        'type' => array(
	        'captcha' => 'Код на картинке',
	        'reCAPTCHA' => 'reCAPTCHA',
	        'qa' => 'Вопрос-Ответ',
	        'yandexcaptcha' => 'Яндекс.Каптча',
    	),
	);

	/**
	 * Выводит список вопросов
	 * @return void
	 */
	public function edit()
	{
    	parent::edit();
	}
}
