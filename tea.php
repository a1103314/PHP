<?php
session_start();

if($_SESSION["login"]=="t"||$_SESSION["login"]=="p"){

}else{
    header("Location:phphw0316_error.php");
}
?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

老師登入</br>

這是老師內容內容</br>

如需前往學生內容:<a href="stu.php">點選這裡</a>
</body>
</html>