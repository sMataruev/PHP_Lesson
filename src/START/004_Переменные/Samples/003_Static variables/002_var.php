<?php
function message() {
  static $var = 0;
  return $var++;
}
echo "���������:".message()."<br>";
echo "���������:".message()."<br>";
