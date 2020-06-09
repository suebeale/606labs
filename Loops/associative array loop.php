<!DOCTYPE html>
<html>
<body>

<?php
// defining the associative array
// an associative array has name-pair association - name and value
$student_array = array('20204546'=>'Jones', '1978347'=>'Taylor', '19760232'=>'Bader');

// loop through all the array values
foreach($student_array as $id => $val) {
  echo "$id = $val<br>";
}

echo "<br><br>";

print_r($student_array);

echo "<pre>";
print_r($student_array);
echo "</pre>";

Var_dump($student_array);

?>

</body>
</html>
