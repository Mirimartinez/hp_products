<?php

$conn = new mysqli("127.0.0.1", "root", " ", "symfony");

if ($conn->connect_error){
    die('Connection error ' . $conn->connect_error);
}