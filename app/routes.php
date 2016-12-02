<?php

$router->get('/', ['App\Controllers\HomeController', 'show']);
$router->get('/page/{id}', ['App\Controllers\HomeController', 'page']);
$router->get('/apidemo', ['App\Controllers\HomeController', 'apiDemo']);
$router->get('/form', ['App\Controllers\HomeController', 'edit']);
$router->post('/mail/send', ['App\Controllers\MailController', 'send']);
