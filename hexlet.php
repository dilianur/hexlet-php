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

//МОЕ РЕШЕНИЯ
////Реализуйте функцию makeCensored, которая заменяет каждое вхождение указанных слов в предложении на последовательность $#%! и возвращает полученную строку. Аргументы:
//Текст
//Набор стоп слов
//Словом считается любая непрерывная последовательность символов, включая любые спецсимволы (без пробелов).
function makeCensored(string $text, array $array)
{
  $new = []; 
  //  if (count($array) > 2 || count($array) < 2) {
  foreach(explode(' ', $text) as $mass) {
   $new[] = str_replace($array, '$#%!', $mass);
        // print_r($new);      
    }
    
    if (count($array) <= [2] || count($array) >= [2]) {
      return implode(' ', $new);
    }      
  } 
  
  //РЕШЕНИЯ УЧИТЕЛЯ
  function makeCensored(string $text, array $stopWords)
{
    $words = explode(' ', $text);
    $result = [];
    foreach ($words as $word) {
        $result[] = in_array($word, $stopWords) ? '$#%!' : $word;
    }
 
    return implode(' ', $result);
}
//Реализуйте функцию countUniqChars, которая получает на вход строку и считает, сколько символов (уникальных символов) использовано в этой строке. Например, в строке 'yy' всего один уникальный символ — y. А в строке '111yya!' — четыре уникальных символа: 1, y, a и !.
//Задание необходимо выполнить без использования функций array_unique и count_chars.
function countUniqChars($text)
{
  // $str = str_split($text);
  // $str = iconv_strlen($text);
  // print_r($str);
 // $i = 0;
 $count = [];
 for ($i = 0; $i < strlen($text); $i++) {
      if (!in_array($text[$i], $count)) {
        $count[] = $text[$i];  
      }
  }
  return count($count);
}
print_r(countUniqChars('You know nothing Jon Snow')); //13
print_r("\n");
function bubbleSort($coll)
{
    $size = count($coll);
    // do..while цикл. Работает почти идентично while
    // Разница в проверке. Тут она делается не до выполнения тела, а после.
    // Такой цикл полезен там, где надо выполнить тело хотя бы раз в любом случае.
    do {
        // Объявляем переменную swapped, значение которой показывает был ли
        // совершен обмен элементов во время перебора массива
        $swapped = false;
        // Перебираем массив и меняем местами элементы, если предыдущий
        // больше, чем следующий
        for ($i = 0; $i < $size - 1; $i++) {
            if ($coll[$i] > $coll[$i + 1]) {
                // temp – временная переменная для хранения текущего элемента
                $temp = $coll[$i];
                $coll[$i] = $coll[$i + 1];
                $coll[$i + 1] = $temp;
                // Если сработал if и была совершена перестановка,
                // присваиваем swapped значение true
                $swapped = true;
            }
        }
        // Уменьшаем счетчик на 1, т.к. самый большой элемент уже находится
        // в конце массива
        $size--;
    } while ($swapped); // продолжаем, пока swapped === true

    return $coll;
}

print_r(bubbleSort([3, 2, 10, -2, 0]));
// => Array
// => (
// =>     [0] => -2
// =>     [1] => 0
// =>     [2] => 2
// =>     [3] => 3
// =>     [4] => 10
// => )
//сбалансированные скобочки
function isBalan($str)
{
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        $count = $str[$i] === '(' ? $count + 1 : $count - 1;
        if ($count < 0) {
            return false;
        }
    }
 
    return $count === 0;
}
print_r(isBalan('('));
//балансировка скобок, в арифметических выражениях
function checkIfBalanced($str)
{
    $stack = [];
    for ($i = 0; $i < strlen($str); $i++) {
        $cu = $str[$i];
        if ($cu === '(') {
        array_push($stack, $cu);
    } elseif ($cu === ')') {
        if (empty($stack)) {
            return false;
        }
        array_pop($stack);
      }
    }
    return count($stack) === 0;
}
//Реализуйте функцию normalize(), которая "нормализует" данные переданного урока. 
//То есть приводит их к определенному виду.
//На вход этой функции подается ассоциативный массив, описывающий собой урок курса. 
//В уроке содержатся два поля: имя и описание.
//по ссылке
function normalize(array &$lesson): void
{
    $lesson['name'] = ucfirst(mb_strtolower($lesson['name']));
    $lesson['description'] = mb_strtolower($lesson['description']);
}
//Реализуйте функцию get, которая извлекает из массива элемент по указанному индексу, если индекс существует, либо возвращает значение по умолчанию. Функция принимает на вход три аргумента:
//Массив
//Индекс
//Значение по умолчанию (равно null)
echo "<br>";

function get(array $arr, int $index, $value = null)
{
	// $arr = ['moscow', 'london', 'berlin', 'porto', null];
	if (isset($arr) === $index) {
		return true;
	} else {
		return $value;
	}    
}

 
print_r(get($arr, 1)); // london
echo "<br>";
function getFileInfo($filepath)
{
    // Инициализация массива
    $info = [];

    $pathParts = explode('/', $filepath);
    // print_r($pathParts);
    $filename = $pathParts[array_key_last($pathParts)];
    // print_r($filename); 
    $info['filename'] = $filename;
    // print_r($info);

    $nameParts = explode('.', $filename);
    // print_r($nameParts);
    $extension = $nameParts[array_key_last($nameParts)];
    // print_r($extension);
    $info['extension'] = $extension;
    print_r($info);

    // return $info;
}
print_r(getFileInfo('/path/to/index.php'));
echo "<br>";
//Реализуйте функцию getDomainInfo(), которая принимает на вход имя сайта и возвращает информацию о нем:
function getDomainInfo($sayt)
{

	$itog = [];

// 	$filename1 = explode(':', $sayt);
// 	$a = $filename1[array_key_first($filename1)];
// 	var_dump($a);
	
// 	$filename = explode('//', $sayt);
// 	$b = $filename[array_key_last($filename)];
// 	print_r($b);
// 	$namePa = substr($sayt, 0, 5);
// 	$nametwo = str_replace($namePa, 'http', $namePa);
// 	// $mass = explode(' ', $nametwo);
// 	var_dump($nametwo);
		
// // return $itog;
	$result = explode('://', $sayt);
	// print_r($result);
	$itog = [];
	$val = 'http';
	for ($i = 0; $i < strlen($sayt); $i++) { 
		$one = $sayt[$i];
		$result = explode('://', $sayt);
		$f = $result[array_key_last($result)];
		// $itog['name'] = $f;
		$b = $result[array_key_first($result)];
		if (isset($b)) {
			$itog = ['name' => $f, 'chere' => 'http'];
		} else {
			$itog = ['name' => $f, 'chere' => $b];
		}
				
	}

		return $itog;
}

print_r(getDomainInfo('https://hexlet.io'));
// substr()
// str_replace()
echo "<br>";
// $a = 'https://hexlet.io';
// $b = str_replace('https', 'http', $a);
// print_r($b);https://hexlet.io
// stripos если есть такая подстрака возвращает false
// str_starts_with
$a = 'https://hexlet.io';
$b = strrpos($a, 'https');
print_r($b);

function getDomainInfo($sayt)
{
    $scheme = '';
    if (substr($sayt, 0, 8) === 'https://') {
        $scheme = 'https';
    } else {
        $scheme = 'http';
    }
 
    $name = str_replace("{$scheme}://", '', $sayt);
 
    return ['scheme' => $scheme, 'name' => $name];
}
//Реализуйте функцию enlargeArrayImage, 
//которая принимает изображение в виде двумерного массива и увеличивает его в два раза.
function Flatten(array $array)
{
    return Collection\flatten(
    array_map(fn($arr) => [$arr, $arr], $array)
    );
}
function enlargeArrayImage($array2)
{
    $name = array_map(fn($arr2) => Flatten($arr2), $array2);
    return Flatten($name);
}
print_r(enlargeArrayImage([
  ['*','*','*','*'],
  ['*',' ',' ','*'],
  ['*',' ',' ','*'],
  ['*','*','*','*']
], [
  ['*','*','*','*'],
  ['*',' ',' ','*'],
  ['*',' ',' ','*'],
  ['*','*','*','*']
]));