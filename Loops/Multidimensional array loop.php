<!DOCTYPE html>
<html>
<body>

<?php

// defining the multidimensial array
// multi-dimensional array is an array in an array test on 10 June
$student_array = array
  (
  array('20204546','Pete','Jones'),
  array('1978347','Samatha','Taylor'),
  array('19760232','Alex','Bader')
  );

// getting the number of records in the array
$array_count = count($student_array);

echo "Number of records in the student_array is <b>" . $array_count . "</b>";

// loop through all the array values
for ($row = 0; $row < $array_count; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>". $student_array[$row][$col] . "</li>";
  }
  echo "</ul>";
}
/*
for ($row = 0; $row < $array_count; $row++) {
  echo "<p><b>Row number $row</b></p>";
  for ($col = 0; $col < 3; $col++) {
    echo $student_array[$row][$col] . "<br>";
  }
}
*/

echo "<br><br>";

print_r($student_array);

echo "<pre>";
print_r($student_array);
echo "</pre>";

Var_dump($student_array);

?>

</body>
</html>
