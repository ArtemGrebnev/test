<html>
<head>
	<meta charset="utf-8">
	<title> My site</title>
	<link href="style.css" rel="stylesheet">
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
		<div id="main" class="table">
   <div id="first" class="td"> Имя Пользователя:<br />
   <?php echo $row['user']?></div>
		  <div id="second" class="td">Возраст:<br /> 
		  <?php echo $row['age']?></div>
		 <div id="third" class="td">Город:<br /> 
		 <?php echo $row['gorod']?></div></div>
	<?php } ?>	
</body>