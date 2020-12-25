<?php
/*Определяем переменные для хранения адреса хоста, названия базы данных, таблицы базы данных, имени и пароля пользователя
*/
$host="localhost";
$user="root";
$pass="";
$db="catsdb";
$usertable="catspotery";


 
//Соединяемся с базой данных
$link = mysqli_connect($host, $user, $pass, $db) 
    or die("Ошибка " . mysqli_error($link));
//Формируем текст запроса
$query="select id, por, day, month, year, place, pol, age, outline, contact, dop_info from $usertable";
 
//Выполняем запрос с сохранением идентификатора результата
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 
//Печатаем шапку таблицы
print ("<p align=center><font face=verdana><b>&#10071;Найденные&#10071;</b>
<table border=1 align=center width=90% cellpadding=5>
<tr bgcolor=#ffffcc align=center>
<td>Порода</td>
<td>Дата находки</td>
<td>Район</td>
<td>Пол</td>
<td>Возраст</td>
<td>Приметы</td>
<td>Контакты</td>
<td>Дополнительная информация</td>
</tr>");
 
//Печатаем содержимое таблицы
while ($a=mysqli_fetch_array($result))
{
$id=$a['id'];
$poroda=$a['por'];
$dat_day=$a['day'];
$dat_month=$a['month'];
$dat_year=$a['year'];
$place_find=$a['place'];
$pol_por=$a['pol'];
$age_por=$a['age'];
$outline_por=$a['outline'];
$contact_por=$a['contact'];
$dop_info=$a['dop_info'];
 
print ("<tr>
<td>$poroda</td>
<td>$dat_day $dat_month $dat_year</td>
<td>$place_find</td>
<td>$pol_por</td>
<td>$age_por</td>
<td>$outline_por</td>
<td>$contact_por</td>
<td>$dop_info</td>
</tr>");
}
print ("</table>");
 
//Закрываем соединение
mysqli_close($link);
?>
