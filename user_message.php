<?php
//only proceed the form if $_POST isn't empty
	if ( ! empty($_POST) ) {
		//Connect to MYSQL
		$mysqli = new mysqli( 'localhost', 'root', '', 'project');
		//Check our connection
		if ( $mysqli->connect_error ) {
			die('Connect Error' . $mysqli->connect_errno . ':' . $mysqli->connect_error );
		}
		//Insert our data
		$sql = "INSERT INTO user_message (Name, Email, Message) VALUES ('{$mysqli->real_escape_string($_POST['fullname'])}','{$mysqli->real_escape_string($_POST['email'])}', '{$mysqli->real_escape_string($_POST['textarea'])}' ) ";
		$insert = $mysqli->query($sql);
		//Print response from MYSQL
		if ( $insert ) {
			echo "Sucess: Row ID: {$mysqli->insert_id}";
		} else {
			die("Error: {$mysqli->errno} : {$mysqli->error} ");
		}
		$mysqli->close();



?>