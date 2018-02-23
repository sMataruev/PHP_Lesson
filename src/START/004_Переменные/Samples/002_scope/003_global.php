<?php
$global = 'Test';


function myFunction() {
  global $global;

  echo $global;
}

myFunction();

?>