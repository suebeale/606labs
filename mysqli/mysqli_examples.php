<?php
$id = NULL;

//$conn = mysqli_connect("localhost","my_user","my_password","my_db");
$conn = mysqli_connect("localhost","root","","606labs");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Perform query - INSERT
$message = 'How do i connect to mysql database from my form';

//$sql = "INSERT INTO contact(fullname)VALUES ('".$_POST["fullname"]."')";
$sql = "INSERT INTO contact(fullname, email, subject, message) VALUES ('Tom Jones', 'jones@gmail.com', 'Forms', '" . $message . "')";

if (mysqli_query($conn, $sql)) {
   echo "<br/><br/>New record created successfully";

	/*
	get last inserted ID
	https://www.w3schools.com/pHP/func_mysqli_insert_id.asp
	*/
	$lastID = mysqli_insert_id($conn);
	echo "<br><br>New record has id: " . $lastID;
   
} else {
   echo "<br/><br/>Error: Inserting " . $sql . "" . mysqli_error($conn);
}

// using last ID inserted
if ( isset($lastID) ) {
	$id = $lastID;
} else { 
	$id = 3;
}

// Perform query - UPDATE

$sql = "UPDATE contact SET email = 'tom.jones@wintec.ac.nz' WHERE contactID = " . $id;

if (mysqli_query($conn, $sql)) {
   echo "<br/><br/>New record Updated successfully";
} else {
   echo "<br/><br/>Error Updated: " . $sql . "" . mysqli_error($conn);
}


// Perform query - DELETE
$sql = "DELETE FROM contact WHERE contactID = " . $id;

if (mysqli_query($conn, $sql)) {
   echo "<br/><br/>New record Deleted successfully";
} else {
   echo "<br/><br/>Error Deleting: " . $sql . "" . mysqli_error($conn);
}

$sql = "SELECT * FROM contact;";

// Perform query - SELECT
if ( $result = mysqli_query($conn, $sql) ) {
	echo "<br/><br/>Returned rows are: " . mysqli_num_rows($result);

	echo "<pre>";
		print_r($result );
	echo "</pre>";

	// Free result set
	mysqli_free_result($result);
}

mysqli_close($conn);
?>