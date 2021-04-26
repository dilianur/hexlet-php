<?php
//Реализуйте функцию apply(), которая применяет указанную операцию к переданному массиву и возвращает новый массив. Всего нужно реализовать три операции:

function apply(array $arr, string $operationName, int $index = null, $value = null): array
{
    // BEGIN (write your solution here)
		  switch ($operationName) {
		    case 'reset':
	         $arr = [];
                  break;
		    case 'change':
		    $arr[$index] = $value;
                  break;
              case 'remove':
		     unset($arr[$index]);
                  break;
		  }
    return $arr;
}

//МОИ РЕШЕНИЯ
// Реализуйте функцию get, которая извлекает из массива элемент по указанному индексу, если индекс существует, либо возвращает значение по умолчанию. Функция принимает на вход три аргумента:
//Массив
//Индекс
//Значение по умолчанию (равно null)
function get(array $arr, int $index, $value = null)
{
    if (array_key_exists($index, $arr)) {
        return $arr[$index];
    } else {
        return $arr[$index] ?? $value;
    }           
}

// Вывод в нижнем регистре слов
$NaimSmile = ['VASYA@gmAil.com', 'iGoR@yandex.RU', 'netiD@hot.CoM'];

for ($i = 0; $i < count($NaimSmile); $i++) {
  $mail = $NaimSmile[$i];
  $result = strtolower($mail);
  print_r($result);
}

//// Реализуйте функцию addPrefix, которая добавляет к каждому элементу массива переданный префикс и возвращает получившийся массив. Функция предназначена для работы со строковыми элементами. Аргументы:
//Массив
//Префикс

function addPrefix($arr, $pref) 
  {
    $result = [];
    for ($i = 0; $i < count($arr); $i += 1) {
    // $result = "{$el} . {$arr[$i]}";
    $result[$i] = "$pref $arr[$i]";
    
    //  $str = "{$el[$i]}";
    // $string = "{$el}{$arr}";
  }
    return $result;   
}
print_r(addPrefix(['red', 'black', 'white'], 'mr'));