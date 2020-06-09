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
function show_fullname($first, $last) {
	
	// [1] updated return value 
    //echo "Welcome to Wintec " . $first . " " . $last;
	
    $currentName = $first . " " . $last;
    
    return $currentName;	
}

$firstName = 'Tom';
$lastName = 'Jones';

// calling the function
// show_fullname($firstName, $lastName);
// [2] calling the function that returns a value 
$fullName = show_fullname($firstName, $lastName);


// [3] showing results and debugging code
echo "<br><br>";
echo "The current users first name is <b>" . $firstName;
echo "<br>";
echo "</b>The current users last name is <b>" . $lastName;

echo "<br><br>";
echo "</b>The current users full name is <b>";
print_r($fullName);

echo "<pre>";
print_r($fullName);
echo "</pre>";

Var_dump($fullName);

?>

</body>
</html>
