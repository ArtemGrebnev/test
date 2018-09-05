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
$result= mysql_query( "SELECT id_users,user, age FROM users  
                          LIMIT $limit" );
$gorod1= mysql_query("SELECT id,gorod FROM City 
                        LIMIT $limit ");
		 mysql_close();
while($row= mysql_fetch_array($result)and $row1= mysql_fetch_array($gorod1))

	{?>
		 <p>Имя Пользователя: <?php echo $row['user']?></p>
		  <p>Возраст: <?php echo $row['age']?></p>
		 <p>Город: <?php echo $row1['gorod']?></p>
	<?php } ?>
	
</body>