<?php

$host = 'localhost';
$dbname = 'petbook_db';
$username = 'root';
$password = '';

$dbconn = new mysqli($host, $username, $password, $dbname);
if ($dbconn->connect_errno) {
    die("Failed to connect: " . $dbconn->connect_error);

}
return $dbconn;