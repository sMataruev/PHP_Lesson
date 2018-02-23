<?php
/*
	boolean �������� ���������� ��������. �� ����� ���� ���� TRUE, ���� FALSE.
	
	��� �������������� � boolean, ��������� �������� ��������������� ��� FALSE:
		*���� �������� boolean FALSE
		*integer 0 (����)
		*float 0.0 (����)
		*������ ������, � ������ "0"
		*������ ��� ���������
		*������ ��� NULL (������� ��������������� ����������)
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