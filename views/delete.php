<?php
require '../CRUD.php';
$id = $_REQUEST["id"];
$getData->delete($id);
header('Location: index.php');
