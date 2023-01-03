<?php
require 'DB.php';

class Crud
{
    public function index()
    {
        global $conn;
        $query = 'SELECT * From users';
        $result = $conn->prepare($query);
        $result->execute();
        $data  = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function show($id)
    {
        global $conn;
        $query = "SELECT * From users where id = $id";
        $result = $conn->prepare($query);
        $result->execute();
        $data  = $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    public function delete($id)
    {
        global $conn;
        $query = "DELETE FROM users WHERE id = $id";
        $result = $conn->prepare($query);
        $result->execute();
    }
    public function Update($id, $Request)
    {
        global $conn;
        $query = "UPDATE users SET";
        foreach ($Request as $req => $val) {
            $query .= "`$req` = '$val' " . ',';
        }
        $query = rtrim($query, ',');
        $query .= "where id = $id";
        $result = $conn->prepare($query);
        $result->execute();
    }
    public function Create($Request)
    {
        global $conn;
        $query = "INSERT INTO users (";
        foreach ($Request as $req => $val) {
            $query .= "`$req`" . ',';
        }
        $query = rtrim($query, ',');
        $query .= ") VALUES (";
        foreach ($Request as $req => $val) {
            $query .= "'$val'" . ',';
        }
        $query = rtrim($query, ',');
        $query .= ")";

        // echo $query;
        $result = $conn->prepare($query);
        $result->execute();
    }
}

$getData = new Crud();
// $getData->Create(['`name`' => '"kareem12"', '`mobile`' => '"010000260660"', '`email`' => '"K@K.com"']);
