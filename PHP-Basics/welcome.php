<?php
echo "Welcome to XAMPP PHP training<br />";


// This is a single-line comment

// my variables
$myName = 'Sue Pearson';
$myCourse = 'COMP606';

# This is also a single-line comment

# printing the txt to the screen
echo 'Welcome to ' . $myCourse . '. You tutor is ' . $myName;

if ($myCourse == 'COMP606') {
    echo 'You are enrolled in the right course - COMP606';
} else {
    echo 'You are in the wrong course';
}

exit;
?>
Hi, I'm only HTML

/*
Learning

Variables
https://www.w3schools.com/php/php_variables.asp

Printing to screen & Concatenation
https://www.w3schools.com/php/php_echo_print.asp

all PHP tutorials
https://www.w3schools.com/php/default.asp

*/