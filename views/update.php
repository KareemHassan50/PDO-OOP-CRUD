<?php

require '../CRUD.php';
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$mobile = $_REQUEST['phone'];
$email = $_REQUEST['email'];

$Request = ["name" => $name, "mobile" => $mobile, "email" => $email];
$getData->Update($id, $Request);

header('Location: index.php');
