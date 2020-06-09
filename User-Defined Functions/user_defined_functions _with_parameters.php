<?php
/*
File:   User-Defined Functions with Parameters.php
Owner:  Sue Beale
Date:   25-2-2002
Modifications
[1] 25/2/20 SAB updated to add a parameter to the function 
*/
?>
<!DOCTYPE html>
<html>
<body>

<?php
// defining the user-defined function 
// [1] added parameter
function logonWelcome($currentUser) {
    echo "Welcome to Wintec " . $currentUser;
}

$currentUser = 'Tom Jones';

// calling the function
logonWelcome($currentUser);


// showing results and debugging code
echo "<br><br>";

print_r($currentUser);

echo "<pre>";
print_r($currentUser);
echo "</pre>";

Var_dump($currentUser);

?>

</body>
</html>
