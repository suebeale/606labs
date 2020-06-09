<?php
$id = NULL;

//$conn = mysqli_connect("localhost","my_user","my_password","my_db");
$conn = mysqli_connect("localhost","root","","606labs");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Perform query - INSERT
$password = 'phpiscool';

//$sql = "INSERT INTO logon(username)VALUES ('".$_POST["fullname"]."')";
$sql = "INSERT INTO logon(username, email, password) VALUES ('jones', 'jones@gmail.com', '" . $password . "')";

echo "<br><br>" . $sql;

if (mysqli_query($conn, $sql)) {
   echo "<br/>br/>New record created successfully";

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
	$id = 2;
}

// Perform query - UPDATE
$email = 'tom.jones@wintec.ac.nz';

$sql = "UPDATE logon SET email = '" . $email . "' WHERE loginID = " . $id;

echo "<br><br>" . $sql;

if (mysqli_query($conn, $sql)) {
   echo "<br/>br/>New record Updated successfully";
} else {
   echo "br/>br/>Error Updated: " . $sql . "" . mysqli_error($conn);
}

/*
// Perform query - DELETE
$sql = "DELETE FROM logon WHERE loginID = " . $id;

if (mysqli_query($conn, $sql)) {
   echo "<br/>br/>New record Deleted successfully";
} else {
   echo "br/>br/>Error Deleting: " . $sql . "" . mysqli_error($conn);
}
*/

// Perform query - SELECT
$sql = "SELECT * FROM logon;";

if ( $result = mysqli_query($conn, $sql) ) {
	echo "<br/><br/>Returned rows are: " . mysqli_num_rows($result);
	
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<br><br>" . $row["username"];
        echo "<br>" . $row["email"];
        echo "<br>" . $row["password"];
    }	
	
	echo "<pre>";
		print_r($result );
	echo "</pre>";

	// Free result set
	mysqli_free_result($result);
}

mysqli_close($conn);
?>