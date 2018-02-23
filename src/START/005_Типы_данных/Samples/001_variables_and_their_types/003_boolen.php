<?php
/*
	boolean выражает истинность значени€. ќн может быть либо TRUE, либо FALSE.
	
	ѕри преобразовании в boolean, следующие значени€ рассматриваютс€ как FALSE:
		*само значение boolean FALSE
		*integer 0 (ноль)
		*float 0.0 (ноль)
		*пуста€ строка, и строка "0"
		*массив без элементов
		*особый тип NULL (включа€ неустановленные переменные)
*/
		$true = true;
		$false = false;
		
		echo $true;
		echo $false;
		echo "<br>";
		var_dump($true);
		echo "<br>";
		var_dump($false);
		
		echo '------------------<br>';
		echo '"" - ';
		var_dump((bool) "");        // bool(false)
		echo "<br>";
		echo '1 - ';
		var_dump((bool) 1);         // bool(true)
		echo "<br>";
		echo '-2 - ';
		var_dump((bool) -2);        // bool(true)
		echo "<br>";
		echo '"foo" - ';
		var_dump((bool) "foo");     // bool(true)
		echo "<br>";
		echo '2.3e5 - ';
		var_dump((bool) 2.3e5);     // bool(true)
		echo "<br>";
		echo '"false" - ';		
		var_dump((bool) "false");   // bool(true)

?>