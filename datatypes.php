<?php
$a = 7;
$b = 3.14159;
$myName = "Davis";
$isSunny = false;
$something = null;

var_dump ($a, $b, $myName, $isSunny, $something);
echo "<hr>";
echo $myName . " is " . strlen($myName) . " characters long";
echo "<hr>";
echo "$a + $b = " . ($a + $b);
echo "<hr>";
echo mb_substr_count("ķēpā kačis", "č");
echo "<hr>";
echo substr_count("ķēpā kačis", "č");
echo "<hr>";
$reverse = strrev("Alus");
echo ($reverse);

