<html>
<head>
	<meta charset="utf-8">
	<title> Добавление пользователя</title>
	<link href="style.css" rel="stylesheet">
	
</head>
<body>

<div class="shift"><form method="post" action="add.php">
	<font size="5">Имя пользователя </font><br />
	<input type="text" name="user" required /><br />
	<font size="5">Возраст</font><br />
	<input type="number" name="age" min="10" max="100" required /><br />
	<font size="5">Город</font><br />
<?php
	include_once("db.php");
        $db = new database();
	$result_select = $db->query("SELECT * FROM city ORDER BY gorod ASC");
	echo "<select name = 'gorod'>";
	
	foreach ($result_select as $r){
		echo "<option value = '".$r["id"]."' >".$r["gorod"]."</option>";
	}
		echo "</select>";
?>
	<br />
	<br><input type="submit" name="add" value="Добавить" /><br />
	<br><a href="index.php"> Вернуться к списку пользователя</a><br />

</form></div>
	
<?php
include_once("db.php");
if(isset($_POST['add'])) {
		$user= strip_tags(trim($_POST['user']));
		$age= strip_tags(trim($_POST['age']));
		$gorod1=strip_tags(trim($_POST['gorod']));
	
		$db->execute("INSERT INTO users(user, age, Id_City) 
			VALUES ('$user', '$age','$gorod1') ");		
$mysqli->close;		
}
	
?>
</body>
</html>

							
												
						
							
										
														