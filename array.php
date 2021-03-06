Ранее считалось, что единственное различие между функциями count() и sizeof() заключается в том,<br>
 что в некоторых ситуациях count() возвращает дополнительную информацию:<br>

– Если переменная существует и является массивом, count() возвращает количество элементов <br>
в массиве;<br>
– Если переменная существует, но не является массивом, функция возвращает значение 1;<br>
– Если переменная не существует, возвращается значение 0.<br>
Однако, из примера ниже видно, что все три выше приведённых параметра неверны. Возможно, данные правила распространялись на старые версии php.<br>

<?php
$d='something';
$array = ['key'=>'a', 'b', 24, 'cat', 'pig', $b=[1,2,3,4,5], '', $c=[], 'key2'=>NULL,$d];
print_r($array);
echo 'Кол-во элементов массива через функцию count() : <br>';
print_r(count($array));//10
echo '<br> Кол-во элементов массива через функцию sizeof() : <br>';
print_r(sizeof($array)); //10

echo '<hr>Кол-во элементов несуществующего массива через функцию count() : <br>';
print_r(count($array1=[])); //0
echo '<br> Кол-во элементов несуществующего массива через функцию sizeof() : <br>';
print_r(sizeof($array1=[]));//0
?>
<hr><br>Отмечается, что в случаях большого количества элементов в массиве <br>
функция sizeof() работает быстрее, поэтому она предпочтительнее в использовании. 