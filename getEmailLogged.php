<?php
session_start();

$response = $_SESSION['emailAddress'];

echo $response;
?>