<?php 
session_start();
$verfiy_token = str_replace("token=","",$_SERVER['QUERY_STRING']);
$_SESSION['token'] = $verfiy_token;
header("Location: verify.php");