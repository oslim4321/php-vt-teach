<?php
$serverName= 'sql113.infinityfree.com';
$username = 'if0_37492605';
$password = 'Z9p4k7j1RhUYMf';
$dbName = 'if0_37492605_auth';

$conn  = mysqli_connect($serverName, $username, $password, $dbName);

if(!$conn){
    die('Connection failed: '. mysqli_connect_error());
}