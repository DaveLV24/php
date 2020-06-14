<?php

// $a = 10;
// $b = 20;
// $name = "Dave";
// $mix = $name + $sa; //vajag ar . nevis +
// $job = "coding";
// $realmix = $name . " is " . $job;
// echo $realmix;

 
class MyClass
{
  public $prop1 = "I'm a class property!";
 
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
 
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
 
$obj = new MyClass;
 
echo $obj->prop1;
 
?>