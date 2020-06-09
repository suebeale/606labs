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
	
	$bikeCost = 0;

	// debugging - showing the biketype 
    echo "The bike type is " . $bikeType;
	
	// associative array of categories
	$category = array("ROAD"=>"1200", 
					"TRIAL"=>"700", 
					"MOUNTAIN"=>"3400", 
					"ELECTRIC"=>"7800"
					);

/*	
	// IF
	IF ( $bikeType == 'ROAD' ) {
		echo "<br/><br/>Bike was a " . $category['ROAD'];
		$bikeCost = $category['ROAD'];
	} ELSE IF ( $bikeType == 'TRIAL' ) {
		echo "<br/><br/>Bike was a " . $category['TRIAL'];
		$bikeCost = $category['TRIAL'];
	} ELSE IF ( $bikeType == 'MOUNTAIN' ) {
		echo "<br/><br/>Bike was a " . $category['MOUNTAIN'];
		$bikeCost = $category['MOUNTAIN'];
	} ELSE IF ( $bikeType == 'ELECTRIC' ) {
		echo "<br/><br/>Bike was a " . $category['ELECTRIC'];
		$bikeCost = $category['ELECTRIC'];
	} ELSE {
		echo "<br/><br/>Bike not in our list of categories";
		$bikeCost = 0;
	}
*/
	
	// SWITCH
	switch ($bikeType) {
		case "ROAD":
			echo "<br/><br/>Bike was a " . $category['ROAD'];
			$bikeCost = $category['ROAD'];
			break;
		case "TRIAL":
			echo "<br/><br/>Bike was a " . $category['TRIAL'];
			$bikeCost = $category['TRIAL'];
			break;
		case "MOUNTAIN":
			echo "<br/><br/>Bike was a " . $category['MOUNTAIN'];
			$bikeCost = $category['MOUNTAIN'];
			break;
		case "ELECTRIC":
			echo "<br/><br/>Bike was a " . $category['ELECTRIC'];
			$bikeCost = $category['ELECTRIC'];
			break;
		default:
			echo "<br/><br/>Bike not in our list of categories";
			$bikeCost = 0;
	}	

    return $bikeCost;	
}

$bikeCost = 0;
$bikeFound = NULL;

//$bikeType = 'FATTYRE';
$bikeType = 'MOUNTAIN';

// calling the function
$bikeCost = check_valid_bike($bikeType);


// [3] showing results and debugging code
echo "<br><br>";

// using Ternary operator
$bikeFound = ($bikeCost > 0 ? "in our catalog" : "not found");

echo "The bike category was <b>" . $bikeCost . "</b> which is <b>" . $bikeFound;
echo "<br><br>";

echo "<pre>";
print_r($bikeCost);
echo "</pre>";

Var_dump($bikeCost);

?>

</body>
</html>
