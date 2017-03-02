<?php
	session_start();
	$temp = $_SESSION['POST'];
	unset($_SESSION['POST']);

	// print "<pre>"; print_r($temp['namechild']); print "</pre>";
	// print "<pre>"; print_r($_POST); print "</pre>"; exit;

	// This function will run within each post array including multi-dimensional arrays 
	function ExtendedAddslash(&$params)
	{ 
	    foreach ($params as &$var) {
	        // check if $var is an array. If yes, it will start another ExtendedAddslash() function to loop to each key inside.
	        is_array($var) ? ExtendedAddslash($var) : $var=addslashes($var);
	    }
	}
	 // Initialize ExtendedAddslash() function for every $_POST variable
	ExtendedAddslash($_POST);      

	$name = $_POST['name']; 
	$adres = $_POST['adres']; 
	$phone = $_POST['phone']; 
	$email = $_POST['email']; 

	$groepOnderbouw = $_POST['groepOnderbouw']; 
	$groepBovenbouw = $_POST['groepBovenbouw']; 
	$overnachten = $_POST['overnachten']; 

	$metEigenKind = $_POST['metEigenKind']; 
	$metEigenKindNaam = $temp['namechild']; 

	$leidingsamenmet = $_POST['leidingsamenmet']; 

	$dag1 = $_POST['dag1']; 
	$dag2 = $_POST['dag2']; 
	$dag3 = $_POST['dag3']; 

	$creatiefspel = $_POST['creatiefspel']; 
	$sportiefspel = $_POST['sportiefspel']; 
	$spelgeenvoorkeur= $_POST['spelgeenvoorkeur']; 
	$anderevoorkeur = $_POST['voorkeur']; 
	$daghulpsamenmet = $_POST['daghulpsamenmet']; 

	$db_host = 'localhost';
	$db_username = 'j3d_user';
	$db_password = 'vvpsVn9n2tzj8Ngl';
	$db_name = 'j3d_db';
	$mysqli = new mysqli( $db_host, $db_username, $db_password, $db_name);

	if ($mysqli->connect_errno) {
	    // The connection failed. What do you want to do? 
	    // You could contact yourself (email?), log the error, show a nice page, etc.
	    // You do not want to reveal sensitive information

	    // Let's try this:
	    echo "Sorry, this website is experiencing problems.";

	    // Something you should not do on a public site, but this example will show you
	    // anyways, is print out MySQL error related information -- you might log this
	    echo "Error: Failed to make a MySQL connection, here is why: \n";
	    echo "Errno: " . $mysqli->connect_errno . "\n";
	    echo "Error: " . $mysqli->connect_error . "\n";
	    
	    // You might want to show them something nice, but we will simply exit
	    exit;
	}
	$sql = "	INSERT INTO `vrijwilligers` (
					`name`, 
					`adres`, 
					`phone`, 
					`email`, 
					`groepOnderbouw`, 
					`groepBovenbouw`, 
					`overnachten`, 
					`metEigenKind`,
					`metEigenKindNaam`, 
					`leidingsamenmet`, 
					`dag1`, 
					`dag2`, 
					`dag3`, 
					`creatiefspel`, 
					`sportiefspel`, 
					`spelgeenvoorkeur`, 
					`anderevoorkeur`, 
					`daghulpsamenmet`
				) VALUES (
					'" . $name . "', 
					'" . $adres . "', 
					'" . $phone . "', 
					'" . $email . "', 
					'" . $groepOnderbouw . "', 
					'" . $groepBovenbouw ."', 
					'" . $overnachten ."', 
					'" . $metEigenKind . "', 
					'" . $metEigenKindNaam ."', 
					'" . $leidingsamenmet . "',
					'" . $dag1 . "',
					'" . $dag2 . "',
					'" . $dag3 . "',
					'" . $creatiefspel . "',
					'" . $sportiefspel . "',
					'" . $spelgeenvoorkeur . "',
					'" . $anderevoorkeur . "',
					'" . $daghulpsamenmet . "'
				);";
	// echo $sql;
	$mysqli->query($sql);
	$mysqli->close();

	header("Location: done.php");
?>