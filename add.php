<html>
<head>
	<meta charset="utf-8">
	<title> Добавление пользователя</title>
	</head>
<body>
	<form method="post" action="add.php">
Имя пользователя <br />
	<input type="text" name="user" /><br />
Возраст<br />
	<input type="number" name="age" /><br />
Город<br />
<?php
include_once("db.php");
$sql = "SELECT * FROM city LIMIT 5";//Лимит - избежать дублирование городов при добавлении//
$result_select = mysql_query($sql);

//Выпадающий список городов из таблицы бд//

echo "<select name = 'gorod'>";
while($object = mysql_fetch_object($result_select)){
echo "<option value = '$object->gorod' > $object->gorod </option>";
}
echo "</select>";
?>
	<br />
	<br><input type="submit" name="add" value"Добавить" />

	</form>
	
<?
include_once("db.php");

if(isset($_POST['add']))
{
	$user= strip_tags(trim($_POST['user']));
	$age= strip_tags(trim($_POST['age']));
	$gorod1=strip_tags(trim($_POST['gorod']));
	
	mysql_query("INSERT INTO users(user, age) 
			VALUES ('$user', '$age') ");
	mysql_query("INSERT INTO City (gorod)
				VALUES ('$gorod1') ");
			
	mysql_close();
	echo "Пользователь добавлен";
}

?>

<a href="index.php"> Вернуться к списку пользователей</a>
							
												
	ALTER TABLE tabl_users AUTO_INCREMENT=5;						
							
										
														