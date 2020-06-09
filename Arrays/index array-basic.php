<!DOCTYPE html>
<html>
<body>

<?php
// defining the array
$student_array = array('Jones', 'Taylor', 'Bader'); 

// displaying the array results
echo "Current students enrolled are: " . $student_array[0] . ", " . $student_array[1] . " and " . $student_array[2] . ".";

echo "<br><br>";

print_r($student_array);

echo "<pre>";
print_r($student_array);
echo "</pre>";

Var_dump($student_array);
?>

</body>
</html>
