<?php
/*
File:   User-Defined Functions with Parameters.php
Owner:  Sue Beale
Date:   25-2-2002
Modifications
[1] 25/2/20 updating return value 
[2] 26/2/20 capture the retured value in a variable 
[3] 26/2/20 updating the debugging
*/
?>
<!DOCTYPE html>
<html>
<body>
<?php
// defining the user-defined function 
function check_valid_bike($bikeType) {
	
	$bikeValid = 0;

	// debugging - showing the biketype 
    echo "The bike type is " . $bikeType;
	
	// associative array of categories
	$category = array("ROAD"=>"ROAD", 
					"TRIAL"=>"TRIAL", 
					"MOUNTAIN"=>"MOUNTAIN", 
					"ELECTRIC"=>"ELECTRIC"
					);
/*	
	// IF
	IF ( $bikeType == $category['ROAD'] ) {
		echo "<br/><br/>Bike was a " . $category['ROAD'];
		$bikeValid = 1;
	} ELSE IF ( $bikeType == $category['TRIAL'] ) {
		echo "<br/><br/>Bike was a " . $category['TRIAL'];
		$bikeValid = 1;
	} ELSE IF ( $bikeType == $category['MOUNTAIN'] ) {
		echo "<br/><br/>Bike was a " . $category['MOUNTAIN'];
		$bikeValid = 1;
	} ELSE IF ( $bikeType == $category['ELECTRIC'] ) {
		echo "<br/><br/>Bike was a " . $category['ELECTRIC'];
		$bikeValid = 1;
	} ELSE {
		echo "<br/><br/>Bike not in our list of categories";
		$bikeValid = 0;
	}
*/
	
	// SWITCH
	switch ($bikeType) {
		case "ROAD":
			echo "<br/><br/>Bike was a " . $category['ROAD'];
			$bikeValid = 1;
			break;
		case "TRIAL":
			echo "<br/><br/>Bike was a " . $category['TRIAL'];
			$bikeValid = 1;
			break;
		case "MOUNTAIN":
			echo "<br/><br/>Bike was a " . $category['MOUNTAIN'];
			$bikeValid = 1;
			break;
		case "ELECTRIC":
			echo "<br/><br/>Bike was a " . $category['ELECTRIC'];
			$bikeValid = 1;
			break;
		default:
			echo "<br/><br/>Bike not in our list of categories";
			$bikeValid = 0;
	}	

    return $bikeValid;	
}

$bikeValid = NULL;
$bikeType = 'FATTYRE';
//$bikeType = 'MOUNTAIN';

// calling the function
$bikeValid = check_valid_bike($bikeType);


// [3] showing results and debugging code
echo "<br><br>";

// using Ternary operator
$category = ($bikeValid === 1 ? "valid" : "not found");

echo "The bike category was <b>" . $category;
echo "<br><br>";

echo "<pre>";
print_r($bikeValid);
echo "</pre>";

Var_dump($bikeValid);

?>

</body>
</html>
