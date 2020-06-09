<!DOCTYPE html>
<html>
<body>

<?php
// defining the array
$student_array = array('Jones', 'Taylor', 'Bader');

// loop through all the array values
foreach ($student_array as $value) {
  echo "$value <br>";
}

echo "<br><br>";

// show the array data
print_r($student_array);

echo "<pre>";
print_r($student_array);
echo "</pre>";

Var_dump($student_array);
?>

</body>
</html>
