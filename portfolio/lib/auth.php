<?php 
session_start();
if(!isset($auth))
{


var_dump($_SESSION);

if(!isset($_SESSION['id']))

     header('location:' . WEBROOT . 'login.php');
}











?>