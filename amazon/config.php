<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "ashish";

$link = mysqli_connect($servername,$username,$password,$database);

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
} else {
    echo "Welcome!";
}