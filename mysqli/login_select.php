<?php
$id = NULL;

//$conn = mysqli_connect("localhost","my_user","my_password","my_db");
$conn = mysqli_connect("localhost","root","","606labs");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT * FROM logon;";

echo "<br><br>" . $sql;

// Perform query - SELECT
if ( $result = mysqli_query($conn, $sql) ) {
	echo "<br/><br/>Returned rows are: " . mysqli_num_rows($result);

	echo "<pre>";
		print_r($result );
	echo "</pre>";
	
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