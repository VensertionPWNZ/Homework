<?php
//1. В строке текста записаны слова, разделенные пробелами в произвольном количестве.
//Сжатие текста состоит в том, что между словами оставляется по одному пробелу, а после последнего слова пробелы удаляются
//(пробелы перед первым словом сохраняются). Сжатый текст записать в другую переменную.
// Если строка содержит только пробелы, то все они сохраняются.
$text = '  Сжатый    текст    записать   в  другую  переменную.    ';
echo preg_replace('/[^\S\r\n]+/', ' ', $text);
echo '<br>';

//2. В произвольном тексте найти и вывести на экран все слова длина которых не менее трёх символов и не более пяти.
$text = 'Находим слова в тексте: три, пять, семь, шесть';
$word = explode(" ", $text);
for ($i = 0; $i < count($word); $i++) {
    if (mb_strlen($word[$i]) >= 3 and mb_strlen($word[$i]) <= 5) {
        echo $word[$i]." ";
    }
}
echo '<br>';

//3. Вводится строка. Удалить из нее все пробелы. После этого определить,
// является ли она палиндромом (перевертышем), т.е. одинаково пишется как с начала, так и с конца.
$text = ' Беларусь  самая  красивая  добрая  процветающая  страна ';
$text2 = str_replace(" ", "", $text); //удаляем пробелы
$definition = strrev($text2); //задаем переменную с определением строки

if ($text2 == $definition){
    echo "Является палиндромом";
}
else{
    echo "Не является палиндромом";
}
echo '<br>';


//4.Найти самое длинное слово и вывести его на экран. Случай, когда самых длинных слов может быть несколько,
// не обрабатывать.
$text = 'Беларусь - самая красивая, добрая, процветающая страна!';
$arr = explode(" ", $text);
$max = $arr[0];
for ($x = 0; $x < count($arr); $x++) {
    if (strlen($arr[$x]) >= strlen($max)) {
        $max = $arr[$x];
    }
}
echo $max;
echo '<br>';

//5. Посчитать количество строчных и прописных букв в строке