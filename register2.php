<?php

require_once __DIR__ . '/mysql_credentials.php';
include("db.php");

$enpass = md5($_POST['password']);

$salt = $GLOBALS['compass_password_salt'] ?? '';

$pass = hash('sha512', md5(hash('sha256', crypt($enpass, $salt))));


// register2.php


$errors = "";


if (!isset($_POST['username']))


    $errors .= "Please provide a username. <br/>";


if (!isset($_POST['password']))


    $errors .= "Please provide a password. <br/>";


$query = mysql_query("SELECT * FROM users WHERE username = '" . addslashes($_POST['username']) . "'");

if (mysql_num_rows($query) > 0) {

    $errors = "Username already in use.";

}


if ($errors == "") {


    mysql_query("INSERT INTO users(username, password, email, date)



 VALUES(  



                        '" . addslashes($_POST['username']) . "',  



                        '$pass',  



                        '" . addslashes($_POST['email']) . "',  



                        '" . date("Y-m-d H:i:s") . "' 



                        )") or die(mysql_error());


    echo "Registration Successful!";
    header('Location: /registeredIn.php');


    $ins = mysql_query("INSERT INTO StreamCommunity (User, did)

  VALUES ('" . addslashes($_POST['username']) . "', ' has just registered!')");


} else {


    echo $errors . "Please go back and try again.";


}
