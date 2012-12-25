<?php 

require_once "../model/Login.php";

$post = $_POST;

$user_name = $_POST['inputUsername'];
$user_pass = $_POST['inputPassword'];
$user_email = $_POST['inputEmail'];

$regist = new Login();
if($regist->userRegistration($user_name,$user_pass,$user_email)){
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ../view/mypage.php");
}else{
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ../view/login.php");
}
