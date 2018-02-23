<?php
function message() {
  static $var = 0;
  return $var++;
}
echo "сообщение:".message()."<br>";
echo "сообщение:".message()."<br>";
