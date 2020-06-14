<?php
$arr = [1,2,3,4,5,7,9, "Valdis"];
var_dump($arr);
echo "<hr>";
// echo $array;
echo $arr[3];
echo "<hr>";
echo "last element is " . $arr[count($arr)-1];

echo "<ul>";
for ($i = 0; $i < count($arr); $i++) {
    echo "<li> item with index $i is ". $arr[$i] . "</li>";
}
echo "<ol>";
foreach ($arr as $item) {
  echo "<li>mY ITEM $item </li>";
}
echo "</ol>"; 