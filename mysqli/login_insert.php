<?php
$id = NULL;
var_dump($_POST);

//$conn = mysqli_connect("localhost","my_user","my_password","my_db");
$conn = mysqli_connect("localhost","root","","606labs");

if (mysqli_connect_errno()) {
  echo "</br></br>Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
// Perform query - INSERT
$password = $_POST["password"] ;

$sql = "INSERT INTO logon(username, email, password) VALUES('". $_POST["username"] . "', '". $_POST["email"] . "', '" . $password . "')";

echo "<br><br>" . $sql;

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
	$id = 2;
}

// Perform query - SELECT
if ( $result = mysqli_query($conn, "SELECT * FROM logon;") ) {
	echo "<br/><br/>Returned rows are: " . mysqli_num_rows($result);

	echo "<br/><br/>Logins are";
	
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<br><br>" . $row["username"];
        echo "<br>" . $row["email"];
        echo "<br>" . $row["password"];
    }

	// Free result set
	mysqli_free_result($result);
}

mysqli_close($conn);
?>