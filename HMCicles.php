<?php
 $perfum = [
'Туалетная_вода' =>[
 [
 'Название' => 'Диор',
 'Цена' => '150',
 'Наличие' => 'Есть'
 ],
 [
 'Название' => 'Д&Г',
 'Цена' => '130',
 'Наличие' => 'Есть'
 ],
 [
 'Название' => 'Эмпорио_армани',
 'Цена' => '180',
 'Наличие' => 'Нет'
 ],
 ],


 'Парфюмерная_вода' =>[
 [
 'Название' => 'Диор',
 'Цена' => '290',
 'Наличие' => 'Есть'
 ],
 [
 'Название' => 'Живенши',
 'Цена' => '343',
     'Наличие' => 'Нет'
 ],
 [
 'Название' => 'Антонио_бандерос',
 'Цена' => '195',
 'Наличие' => 'Нет'
 ],
 ],

 'Колонь' =>[
 [
 'Название' => 'Диор',
 'Цена' => '220',
 'Наличие' => 'Есть'
 ],
 ['Название' => 'Сэн_лоран',
 'Цена' => '400',
 'Наличие' => 'Нет'
 ],
 [
 'Название' => 'Блэк_афгано',
 'Цена' => '666',
 'Наличие' => 'Есть'
 ],
 ],
 ];
 foreach ($perfum as $category => $perfumer) {
 echo($perfumer);
 echo(':');
 echo('<br>');

 foreach ($perfumer as $key => $perfume) {
 if($perfume['Наличие'] == 'Есть'){
 echo($perfume['Название']);
 echo(' ');
 echo($perfume['Цена']);
 echo('<br>');
 }
 }

 echo('<br>');
 }


