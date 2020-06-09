<?php

var_dump($_POST);

$id = NULL;

//$conn = mysqli_connect("localhost","my_user","my_password","my_db");
$conn = mysqli_connect("localhost","root","","606labs");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}


// Perform query - INSERT
$message = $_POST['message'];


$sql = "INSERT INTO contact(fullname, email, subject, message) VALUES('". $_POST["fullname"] . "', '". $_POST["email"] . "', '". $_POST["subject"] . "', '" . $message . "')";

echo "<br><br>" . $sql . "<br/><br/>";

if (mysqli_query($conn, $sql)) {
   echo "<br/><br/>New record created successfully";
   
	//get last inserted ID
	//https://www.w3schools.com/pHP/func_mysqli_insert_id.asp
	
	$lastID = mysqli_insert_id($conn);
	echo "<br><br>New record has id: " . $lastID;
   
} else {
   echo "<br/><br/>Error: Inserting " . $sql . "" . mysqli_error($conn);
}

// using last ID inserted
if ( isset($lastID) ) {
	$id = $lastID;
} else { 
	$id = 2;
}

// Perform query - SELECT
$sql = "SELECT * FROM contact;";

if ( $result = mysqli_query($conn, $sql) ) {
	echo "<br/><br/>Returned rows are: " . mysqli_num_rows($result);

	echo "<br/><br/>Contacts are";
	
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<br><br>" . $row["fullName"];
        echo "<br>" . $row["email"];
        echo "<br>" . $row["subject"];
    }
	

	echo "<pre>";
		print_r($result );
		var_dump($result);
	echo "</pre>";
	
	
	// Free result set
	mysqli_free_result($result);
}

mysqli_close($conn);
?>