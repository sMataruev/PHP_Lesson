<?php
    $A["Ivanov"] = array("name"=>"Иванов И.И.", "age"=>"25", "email"=>"ivanov@mail.ru");
    $A["Petrov"] = array("name"=>"Петров П.П.", "age"=>"34", "email"=>"petrov@mail.ru");
    $A["Sidorov"] = array("name"=>"Сидоров С.С.", "age"=>"47", "email"=>"sidorov@mail.ru");

$arr = array( array('Вася', 'слесарь', 2500 ), 
            array('Миша','строитель', 3000), 
            array('Андрей', 'шофер', 2700));

print_r($A);



//foreach ($A as $key => $avalue) {
//    echo $key . '<br /> ' ;
//    foreach ($avalue as $value) {
//        echo $value . ' ' ;
//    }
//    echo '<br />' ;
//}

?>