<!DOCTYPE html>
<html>
<body>

<?php
// defining the array
$student_array = array('Jones', 'Taylor', 'Bader'); 


// displaying the array results
echo "Current students enrolled are: " . $student_array[0] . ", " . $student_array[1] . " and " . $student_array[2] . ".";

echo "<br><br>";

echo $student_array[0] . "<br>";
echo $student_array[1] . "<br>";
echo $student_array[2] . "<br>";



echo "<br><br>";
echo "Defining Array 2nd way <br>";

// defining array 
$student_array2[0] = 'Beale';
$student_array2[1] = 'Pearson';
$student_array2[2] = 'James';
$student_array2[4] = 'Finlay';

echo $student_array2[2] . "<br>";

echo "<br><br>";

// this will error
//echo $student_array2;

echo "<br><br>";

print_r($student_array);

echo "<pre>";
print_r($student_array);
echo "</pre>";

Var_dump($student_array);
?>

</body>
</html>
