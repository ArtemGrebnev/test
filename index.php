<html>
<head>
	<meta charset="utf-8">
	<title> My site</title>
</head>

<body>

<a href="add.php"> Добавить пользователя</a>
	<?
	include_once("db.php");
$limit = 19;
$result= mysql_query( "SELECT id_users,user, age, gorod FROM users 
						LEFT JOIN City ON users.Id_City = City.id ORDER BY id_users ASC
                          LIMIT $limit" );

while($row= mysql_fetch_array($result))

	{?>
		 <p>Имя Пользователя: <?php echo $row['user']?></p>
		  <p>Возраст: <?php echo $row['age']?></p>
		 <p>Город: <?php echo $row['gorod']?></p>
	<?php } ?>
	
</body>