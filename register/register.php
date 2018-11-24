<?php

require_once '../db_functions/db_connect.php';

//phpinfo();
session_start();

$name = $_POST["name"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];

$db = new db_connect();
$db->insert_user($name, $email, $username, $password);
$_SESSION['username'] = $username;
//phpinfo();
//
header("Location: {$_SERVER["HTTP_ORIGIN"]}");