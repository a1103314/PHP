<?php
session_start();

$stuID="student";
$stuPWD="aaa";
$teaID="teacher";
$teaPWD="bbb";
$preID="president";
$prePWD="ccc";


$id = $_POST["id"];
$pwd = $_POST["pwd"];
 if(($stuID==$id)&&($stuPWD == $pwd)){
    $_SESSION["login"]="s";
    header("Location:stu.php");
 }else if(($teaID==$id)&&($teaPWD==$pwd)){
    $_SESSION["login"]="t";
    header("Location:tea.php");
 }else if(($preID==$id)&&($prePWD==$pwd)){
    $_SESSION["login"]="p";
    header("Location:pre.php");
 }else{
    $_SESSION["login"]="No";
    header("Location:phphw0316_fail.php");
 }
 
 ?>