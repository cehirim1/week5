<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start a session
session_start();

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class - fatFree framework
$f3 = Base::instance();


//Define a default route
$f3->route('GET /', function($f3) {

    //add variables to our f3 hive - add data to our fatFree bucket to display data in our views page
    //shA1 - php encryption cannot turn to plain text again.
    //set function makes use of a key value pair
    $f3->set('username','Chisom');
   $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Fun with Templating');
    $f3->set('color', 'Purple');
    $f3->set('radius', 10);
    $f3->set('fruits', array('Apple', 'Orange', 'Banana', 'Plum'));//foreach loop behind the scenes
    $f3->set('vegetables', array('Asparagus', 'Broccoli', 'Cabbage', 'Carrot'));//foreach loop behind the scenes
    $f3->set('addresses', array('Seattle' =>'10345 15th Street NE, 98004', 'Auburn'=>'30819 124th Avenue,SE 98092'));
    $f3->set('desserts', array('Chocolate' =>'Chocolate Mousse', 'Vanilla'=>'Vanilla Custard', 'Strawberry'=>'Strawberry Shortcake'));



    $view = new Template();
    echo $view->render('views/info.html');
});

//Run fat-free
$f3->run();

//conditions in Templates
//if condition is true, insert content
//if condition is false, then insert content <check if="{{ @number <10}}> <false><p>You are NOT perfect</p></false>
//if condition may be either true or false

//Using Objects in a Template
//$pet = new Pet('Fiddle-diddle', );


//Using includes in templating