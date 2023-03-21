<?php
session_start();

if($_SESSION["login"]=="p"){

}else{
    header("Location:phphw0316_error.php");
}
?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

校長登入</br>

這是校長內容內容</br>

如需前往老師內容:<a href="tea.php">點選這裡</a>
</body>
</html>