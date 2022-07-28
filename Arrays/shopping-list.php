<?php
// associative array
echo 'Different types of Arrays<br><br>';
echo '<br><br>';


/****   associative array  ****/
echo 'associative array example';
echo '<br><br>';
$shopping_list = array("Milk"=>1, 'Apples'=>"10", 'Tins of tuna'=>"2", 'Watermelon'=>"1");
echo "We need to buy " . $shopping_list["Apples"] . " apples";



/****   multidimensional array  ****/
// multidimensional array
echo '<br><br><br><br>';
echo 'multidimensional array example';
echo '<br><br>';

$shopping_list = array(
    array('Tea', 'Coffee', 'Kombucha', 'Sparkling Water'),
    array('Eggs', 'Bacon', 'Salmon', 'Shrimp'),
    array('Limes', 'Apples', 'Lemons', 'Bananas'));

echo "We need to buy " . $shopping_list[0][0] . ", " . $shopping_list[0][1] . ", " . $shopping_list[0][2] . " and " . $shopping_list[0][3] . " for drink.";



/****   indexed array  ****/
// indexed array loop
echo '<br><br><br><br>';
echo 'indexed array example';
echo '<br><br>';

$shopping_list = array("Milk", 'Tissue paper', 'Fruits', 'vegetable');
for($x=0;$x<count($shopping_list);$x++){
    echo $shopping_list[$x];
    echo "<br>";
}


/****   indexed array with named array  ****/
echo '<br><br>';
echo 'indexed array using named array to loop';
echo '<br><br>';
foreach($shopping_list as $value){
    echo "$value <br>";
}



/****   associative array  ****/
echo '<br><br>';
echo 'associative array';
echo '<br><br>';
// associative array
$shopping_list = array("Milk"=>1, 'Apples'=>"10", 'Tins of tuna'=>"2", 'Watermelon'=>"1");

foreach ($shopping_list as $key=>$value){
    echo "we need $value $key <br>";
}



/****   multidimensional array  ****/
// multidimensional array
echo '<br><br>';
echo 'multidimensional array example';
echo '<br><br>';

$shopping_list = array(
    array('Tea', 'Coffee', 'Kombucha', 'Sparkling Water', 'Flavored Water', 'Vegetable/Green Juices', 'Fresh Juices'));

for($row=0;$row<count($shopping_list); $row++){
    echo "We need to buy the following items for <b>category</b> drink: <br>";
    for($col=0;$col<7; $col++){
        echo $shopping_list[$row][$col] . "<br>";
    }
}

echo '<br><br>';

?>
