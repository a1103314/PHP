<?php
session_start();

if($_SESSION["login"]=="s"||$_SESSION["login"]=="t"){

}else{
    header("Location:phphw0316_error.php");
}
?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

學生登入</br>

這是學生內容內容
</body>
</html>