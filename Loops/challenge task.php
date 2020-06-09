<!--
Extra Challenge Tasks (Revision only)

Using your Bike class study answer the following problems:

1.	Create an Associative array to store the Bike Categories (bikes types) for our class case study business.
Categories include: road, trial, mountain, electric

2.	Read from the array
3.	Turn the array into a Multidimensional array by adding bikes for each category
4.	Read from the multidimensional array
-->
<?php
/*
File:   challenge task - bikes.php
Owner:  Sue Beale
Date:   26-2-2002
Modifications
[1] 26/2/20 SAB created Multidimensional array by adding bikes for each category
*/
?>
<!DOCTYPE html>
<html>
<body>

<?php
// defining the associative array
$bikeTypes_array = array('road'=>'Road Bikes', 'trial'=>'Trail Bikes', 'mountain'=>'Mountain Bikes', 'electric'=>'Electric Bikes');

// loop through all the array values
foreach($bikeTypes_array as $id => $val) {
  echo "$id = $val<br>";
}

echo "<br><br>";
echo "<b>Bike Types array</b>";
echo "<br>";

print_r($bikeTypes_array);

echo "<pre>";
print_r($bikeTypes_array);
echo "</pre>";

Var_dump($bikeTypes_array);



// [1] defining the multidimensial array
$bikes_array = array
  (
  array('road','Scott','Avanti'),
  array('trial','Trek','Giant'),
  array('mountain','Malvern','Giant'),
  array('electric','Marax','Ancheer')
  );
  
// getting the number of records in the array
$array_count = count($bikes_array);  

echo "<br><br>";
echo "<b>Bikes Multidimensial array</b>";
echo "<br>";

// loop through all the multidimensial array values
// loop through all the array values    
for ($row = 0; $row < $array_count; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>". $bikes_array[$row][$col] . "</li>";
  }
  echo "</ul>";
}

echo "<br><br>";
echo "debugging multidimensial array values";

print_r($bikes_array);

echo "<pre>";
print_r($bikes_array);
echo "</pre>";

Var_dump($bikes_array);

?>

</body>
</html>
