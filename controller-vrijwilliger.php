<?php
	session_start();
	if( isset($_SESSION['POST']) ){
		$temp = $_SESSION['POST'];
		unset($_SESSION['POST']);
	} else {
		$temp = false;
	}

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

	if( isset($_POST['groepOnderbouw']) ){
		$groepOnderbouw = $_POST['groepOnderbouw']; 
	} else {
		$groepOnderbouw = 0; 
	}

	if( isset($_POST['groepBovenbouw']) ){	
		$groepBovenbouw = $_POST['groepBovenbouw']; 
	} else {
		$groepBovenbouw = 0; 
	}

	if( isset($_POST['overnachten']) ){	
		$overnachten = $_POST['overnachten']; 
	} else {
		$overnachten = 0; 		
	}

	if ( isset($_POST['metEigenKind']) ){
		$metEigenKind = $_POST['metEigenKind'];
	} else {
		$metEigenKind = 0;
	}
	$metEigenKindNaam = $temp['namechild']; 

	if ( isset($_POST['leidingsamenmet']) ){
		$leidingsamenmet = $_POST['leidingsamenmet']; 
	} else {
		$leidingsamenmet = 0;
	}

	if( isset($_POST['dagMa']) ){
		$dagMa = $_POST['dagMa'];
	} else {
		$dagMa = 0;
	} 
	if( isset($_POST['dagDi']) ){
		$dagDi = $_POST['dagDi'];
	} else {
		$dagDi = 0;
	} 
	if( isset($_POST['dagDiAaf']) ){
		$dagDiAaf = $_POST['dagDiAaf'];
	} else {
		$dagDiAaf = 0;
	} 
	if( isset($_POST['dagWo']) ){
		$dagWo = $_POST['dagWo'];
	} else {
		$dagWo = 0;
	} 
	if( isset($_POST['dagDo']) ){
		$dagDo = $_POST['dagDo'];
	} else {
		$dagDo = 0;
	} 
	if( isset($_POST['dagVr']) ){
		$dagVr = $_POST['dagVr'];
	} else {
		$dagVr = 0;
	} 

	if ( isset($_POST['groepDi']) ){
		$groepDi = $_POST['groepDi'];
	} else {
		$groepDi = 0;
	} 
	if ( isset($_POST['groepDiAaf']) ){
		$groepDiAaf = $_POST['groepDiAaf'];
	} else {
		$groepDiAaf = 0;
	} 
	if ( isset($_POST['groepWo']) ){
		$groepWo = $_POST['groepWo'];
	} else {
		$groepWo = 0;
	} 
	if ( isset($_POST['groepDo']) ){
		$groepDo = $_POST['groepDo'];
	} else {
		$groepDo = 0;
	} 

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
					`dagMa`, 
					`dagDi`, 
					`dagDiAaf`, 
					`dagWo`, 
					`dagDo`, 
					`dagVr`, 
					`groepDi`, 
					`groepDiAaf`, 
					`groepWo`,
					`groepDo`
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
					'" . $dagMa . "',
					'" . $dagDi . "',
					'" . $dagDiAaf . "',
					'" . $dagWo . "',
					'" . $dagDo . "',
					'" . $dagVr . "',
					'" . $groepDi . "',
					'" . $groepDiAaf . "',
					'" . $groepWo . "',
					'" . $groepDo . "'
				);";
	// echo $sql;
	$mysqli->query($sql);
	$mysqli->close();

	header("Location: done.php");
?>