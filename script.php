<?php	

	mysql_connect('localhost', 'root', 'pass');
	 mysql_select_db('base');

	 $bdd = new PDO('mysql:host=localhost;dbname=base', 'root', 'pass');

	$requete = mysql_query('UPDATE fos_user SET locked = 1, enabled = 0');

	$requete->execute();

 ?>