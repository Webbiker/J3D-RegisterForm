<?php
	// print "<pre>"; print_r($_POST); print "</pre>";

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

	$namechild = $_POST['namechild']; 
	$gender = $_POST['gender']; 
	$adres = $_POST['adres']; 
	$birthday = $_POST['bday'] . '-' . $_POST['bmonth'] . '_' . $_POST['byear']; 
	$phone = $_POST['phone']; 
	$email = $_POST['email']; 
	$groep = $_POST['groep']; 
	$school = $_POST['school']; 
	$opmerkingen = $_POST['opmerkingen']; 
	$voorkeur = $_POST['voorkeur']; 

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
	$sql = "	INSERT INTO `inschrijvingen` (
					`namechild`, 
					`gender`, 
					`adres`, 
					`birthday`, 
					`phone`, 
					`email`, 
					`groep`, 
					`school`, 
					`opmerkingen`, 
					`voorkeur`
				) VALUES (
					'" . $namechild . "', 
					'" . $gender . "', 
					'" . $adres . "', 
					'" . $birthday . "', 
					'" . $phone . "', 
					'" . $email ."', 
					'" . $groep ."', 
					'" . $school . "', 
					'" . $opmerkingen ."', 
					'" . $voorkeur . "'
				);";
	// echo $sql;
	$mysqli->query($sql);
	$mysqli->close();

	session_start();
	$_SESSION['POST'] = $_POST;

	header("Location: vrijwilliger.php");
?>