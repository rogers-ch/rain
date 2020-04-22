<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Instantiate the F3 Base class
$f3 = Base::instance();   //Base is a class; instance() is a static method in the Base class
                          // this becomes the object we use to run fatfree
                          //PHP uses colon to call static methods

//Define a default route
$f3->route('GET /', function() {
    echo '<h1>It is raining today</h1>';

    //$view = new Template();
    //echo $view->render('views/home.html');
});

//Run F3
$f3->run();               // -> to run instance methods





