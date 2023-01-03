<?php
require '../CRUD.php';
$name = $_REQUEST['name'];
$mobile = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$request = ['name' => "$name", 'mobile' => "$mobile", 'email' => "$email"];
$getData->Create($request);
header('Location: index.php');
