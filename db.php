<?php
$connection = mysql_connect("localhost", "Artem", "qwerty");
$db = mysql_select_db("my bd");
mysql_query("SET NAMES 'utf8' ");


if(!$connection || !$db)
{
	exit(mysql_error());

}


?>