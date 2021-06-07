<?php

// This is a constant
DEFINE("TEST", "We are getting things moving. This is juice.");

DEFINE("DB_HOST", "localhost");
DEFINE("DB_USER", "root");
DEFINE("DB_PASS", "");
DEFINE("DB_NAME", "start");

// Connect to DB
$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(mysqli_connect_errno()) {
    die("Failed to connect: " . mysqli_connect_error());
}