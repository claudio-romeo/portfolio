<?php 
session_start();
if(!isset($auth))
{


var_dump($_SESSION);

if(!isset($_SESSION['auth']['id']))

     header('location:' . WEBROOT . 'login.php');
     die();
}











?>