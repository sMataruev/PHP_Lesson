<?php
/*
	Константы - это идентификаторы (имена) простых значений. 
	Исходя из их названия, нетрудно понять, что их значение не 
	может изменяться в ходе выполнения скрипта.
*/
		// Обьявляем константы
		define("ex",	"something");
		define("ex2",	"something else");
		define("ex_3",	"something more");
		
		//Отображаем
		echo ex;
		echo "<br>";
		echo ex2;
		echo "<br>";
		echo ex_3;
		echo "<br>";
?>