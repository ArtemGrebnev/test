<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> My site</title>
	<link href="style.css" rel="stylesheet">
</head>

<body>

<?php
include_once("db.php");
$db = new database();
$limit = 19;
$result= $db->query( "SELECT id_users,user, age, gorod FROM users 
		LEFT JOIN City ON users.Id_City = City.id ORDER BY id_users ASC
                          LIMIT $limit" );
       var_dump($result);
?>
 
<div class="container-str head-table ">
	<div class="str-elm line-wert ">Имя пользователя</div>
	<div class="str-elm line-wert ">Возраст</div>
	<div class="str-elm">Город</div>
</div>
<?php foreach($result as $row) : ?>
	<div class="container-str  ">
		<div class="str-elm line-wert"><?php echo $row['user']?></div>
		<div class="str-elm line-wert"><?php echo $row['age']?></div>
		<div class="str-elm"><?php echo $row['gorod']?></div>
	</div>	
	<?php endforeach; ?>	
<div class="void" ><a href="add.php"> Добавить пользователя</a></div>
</body>
</html>