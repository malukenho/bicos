<?php
ini_set('display_errors', 1);
error_reporting(-1);
date_default_timezone_set('America/Sao_Paulo');

define('DS', DIRECTORY_SEPARATOR);
define('APP_ROOT', realpath(__DIR__ . DS));

$composer_autoload = __DIR__. DS . 'vendor/autoload.php';

include "$composer_autoload";

//-------------------- Linguagem
$o = new \Lang\lang();
echo $o->_t('all');
echo $o->_t('Select');

//-------------------- form
$obj = new HTML\Form('post','','','');
$obj->addField(array('model' => 'input', 'type' => 'text', 'name' => 'suap', 'placeholder' => 'User...'));
$obj->addField(array('model' => 'input', 'type' => 'text', 'name' => 'susasap'));
print_r($obj->create());