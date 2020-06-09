<!DOCTYPE html>
<html>
<body>

<?php

// defining the multidimensial array
$student_array = array
  (
  array('20204546','Pete','Jones'),
  array('1978347','Samatha','Taylor'),
  array('19760232','Alex','Bader')
  );
  
  
echo "Student: " . $student_array[0][0] . ": " . $student_array[0][1] . " " . $student_array[0][2] . "<br>";

echo "Student: " . $student_array[1][0].": " . $student_array[1][1] . "  " . $student_array[1][2] . "<br>";

echo "Student: " . $student_array[2][0].": " . $student_array[2][1] . "  " . $student_array[2][2] . "<br>";

echo "<br><br>";

print_r($student_array);

echo "<pre>";
print_r($student_array);
echo "</pre>";

Var_dump($student_array);

?>

</body>
</html>
