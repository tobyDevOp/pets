<!--
Author: Toby Goetz
Date: 1/18/2024
Description:
    https://tgoetzgr.greenriverdev.com/SDEV328/application/
    Controller for Pets w/ error reporting and routing.
-->

<?php


//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Instantiate Fat-Free framework (f3)
$f3 = Base::instance(); //static method

//Define a default route
$f3->route('GET /', function () { //instance method
    $view = new Template();
    echo $view->render('views/home.html');
});

//Run Fat-Free
$f3->run();