<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config['domain'] = 'http://localhost';
$config['google-clientid'] = '629282768407-teolciemhpm0j6s78eph2bb05qomfuot.apps.googleusercontent.com';
$config['google-clientsecret'] = '-Cpx4rSxAgXfCCCb-MxLzrPz';
$config['google-redirecturi'] = $config['domain'] . '/auth/oauth2callback';

$config['email-config'] = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'xxx',
    'smtp_pass' => 'xxx',
    'mailtype' => 'html',
    'charset' => 'iso-8859-1'
);