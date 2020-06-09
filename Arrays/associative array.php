<!DOCTYPE html>
<html>
<body>

<?php

// defining the associative array
$student_array = array('20204546'=>'Jones', '1978347'=>'Taylor', '19760232'=>'Bader');

// getting the name of a student ID
echo 'Student ID belongs to ' . $student_array['20204546'];

echo "<br><br>";

print_r($student_array);

echo "<pre>";
print_r($student_array);
echo "</pre>";

Var_dump();


?>


</body>
</html>
