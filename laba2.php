<?php
//connect  
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_base = "security";
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);
   if($mysqli -> connect_error) {
      die('Ошибка:('.$mysqli -> connect_errno.')'.$mysqli -> connect_error);
   }
//function
session_start();
$query = "SELECT * FROM laba2";
if($result = mysqli_query($mysqli, $query)){
    while($row = mysqli_fetch_array($result)){
         
       echo("<p>"."<h1>".$row["h1"]."</h1>"."</p>");
       echo("<p>".$row["content"]."</p>");
    }

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		
<a href="config/logout.php?do=logout">Выход</a>
</body>
</html>