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

//Реализуйте функцию swap, которая меняет местами два элемента относительно переданного индекса. 
//Например, если передан индекс 5, то функция меняет местами элементы, находящиеся по индексам 4 и 6.
//Если хотя бы одного из индексов не существует, функция возвращает исходный массив.
function swap(array $array, $index)
{
    $PrevIndex = $index -1;
    $NewIndex = $index +1;
    
    $IsWaiable = array_key_exists($PrevIndex, $array) && array_key_exists($NewIndex, $array);
    
    if ($IsWaiable) {
        $temp = $array[$PrevIndex];
        $array[$PrevIndex] = $array[$NewIndex];
        $array[$NewIndex] = $temp;
    }
    return $array;
}

//Реализуйте функцию isContinuousSequence, которая проверяет, 
//является ли переданная последовательность целых чисел возрастающей непрерывно 
//(не имеющей пропусков чисел). Например, последовательность [4, 5, 6, 7] — непрерывная, а [0, 1, 3] — нет. Последовательность может начинаться с любого числа, главное условие — отсутствие пропусков чисел. 
//Последовательность из одного числа не может считаться возрастающей.
function isContinuousSequence(array $coll)
{
    if (count($coll) <= 1) {
        return false;
    }
    $start = $coll[0]; 
    foreach ($coll as $i => $item) {
        if ($start + $i !== $item) {
            return false;
        }
    }
       return true;
}
print_r(isContinuousSequence([10, 18, 12, 13]));
print_r("\n");
function test1111(array $coll) 
{
  // Если коллекция пустая, то у нее не может быть максимального значения
    // В подобных ситуациях принято возвращать null
  if (empty($coll)) {
    return null;
  }
// Сравнение элементов нужно начать с какого-то первого элемента
  $max = $coll[0]; // Принимаем за максимальное первый элемент

  for ($i = 1; $i < count($coll); $i += 1) {
    // Если текущий элемент больше максимального,
        // то он становится максимальным
    if ($coll[$i] > $max) {
      $max = $coll[$i];
    }
  }
  // Не забываем вернуть максимальное число
  return $max;
}
print_r(test1111([4, 25, 63, 78]));
print_r("\n");
// сложение массива вцикле
function testirov(array $array)
{
  // Начальное значение суммы
  $sum = 0;
// Поочередно складываем все элементы
  foreach($array as $name){
    $sum += $name;
  }
  return $sum;
}
// Сумма элементов всегда возвращает какое-то число
// Если массив пустой, то сумма его элементов 0
print_r(testirov([3, 2, -10, 38, 0]));

print_r("\n");
$coll = ['one', 'two', 'three', 'four', 'stop', 'five'];
foreach ($coll as $item) {
  //если итем равно stop выходим из цикла
    if ($item === 'stop') {
        break;
    }
    print_r("$item, ");
}
//Инструкция continue позволяет пропустить итерацию цикла. 
//Ниже пример с функцией myCompact, которая удаляет null элементы из массива:
function myCompact($coll)
{
    $result = [];
    foreach ($coll as $item) {
        if (is_null($item)) {
          //удаляет переменную со значением null
            continue;
        }
        //в пустой массив устанавливаем новый масив
        $result[] = $item;
    }

    return $result;
}
print_r(myCompact(['fd', 'df', 'ere', null]));

// //Реализуйте функцию getTotalAmount. Функция принимает на вход в виде массива кошелёк с деньгами и название валюты и возвращает сумму денег указанной валюты.
//Реализуйте данную функцию используя управляющие инструкции.
//Параметры функции:
//Массив содержащий купюры различной валюты с различными номиналами
//Наименование валюты
function getTo(array $money, $valut)
{
  $i =  0;
  $sum = 0;
 
  
  while($i < count($money)) {
    $arr = explode(" ", $money[$i]);
    $result = $arr[0];
    $run = $arr[1]; 
    if ($result === $valut) {
      $sum += $run;
    }
    $i++;
  }
  return $sum;
}
print_r(getTo(['eur 10', 'usd 1', 'usd 10', 'rub 50', 'rub 1', 'usd 5'], 'rub'));

////Суперсерия Канада-СССР – это 8 товарищеских хоккейных матчей проводившихся между командами СССР и Канада в 72 
//(первая суперсерия) и в 74 годах (вторая суперсерия). В этом задании вам предстоит написать функцию, которая вычисляет команду выигравшую суперсерию.
//Superseries.php
//Реализуйте функцию getSuperSeriesWinner(scores), которая находит команду победителя для конкретной суперсерии. 
//Победитель определяется как команда у которой больше побед (не количество забитых шайб) в конкретной серии. 
//Функция принимает на вход массив, в котором каждый элемент это массив, описывающий счет в конкретной игре 
//(сколько шайб забила Канада и СССР). Результат функции – название страны: 'canada', 'ussr'. Если суперсерия закончилась в ничью, то нужно вернуть null.
function getSuperSeriesWinner(array $scores)
{
  $i = 0;
   $result = 0;
  // print_r($result);
  while($i < count($scores)) {
   $result += $scores[$i][0] <=> $scores[$i][1];   
    $i += 1;
}
if ($result < 0) {
  return 'ussr';
} elseif ($result > 0) {
  return 'canada';
}
return null;    
}
print_r(getSuperSeriesWinner($scores = [
  [3, 7], // Первая игра 0
  [4, 1], // Вторая игра 1
  [4, 4],
  [3, 5],
  [4, 5],
  [3, 2],
  [4, 3],
  [6, 5],
]));