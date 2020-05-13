<?php

echo "Hey Chutimon!";

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'student';

$conn = mysql_connect($dbhost, $dbuser, $dbpass);

print $conn;

print ("Happy Birthday Chutimon!");

