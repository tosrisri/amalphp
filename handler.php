<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler();

$validator = $pp->getValidator();
$validator->fields(['Name','Email'])->areRequired()->maxLength(50);
$validator->field('Email')->isEmail();
$validator->field('Message')->maxLength(6000);


$pp->requireReCaptcha();
$pp->getReCaptcha()->initSecretKey('6Ld9n78UAAAAAMZAmnctujLm4WAj1G05Df52Ztia');


$pp->sendEmailTo('tosrisri@gmail.com','amalcollegeakp1953@gmail.com','pentakotaanuradha7@gmail.com'); // ← Your email here

echo $pp->process($_POST);
