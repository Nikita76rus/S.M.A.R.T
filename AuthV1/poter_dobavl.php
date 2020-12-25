<?php
//Создание коротких переменных
$name=$_POST['tbname'];
$surname=$_POST['tbsur'];
$email=$_POST['tbemail'];
$message=$_POST['tbmess'];

 
$host="localhost";
$user="root";
$pass="";
$db="weblife-gadm";
$usertable="feedback";
 
$link = mysqli_connect($host, $user, $pass, $db) 
    or die("Ошибка " . mysqli_error($link));

 
$query="insert into $usertable (Имя,Фамилия,Email,Сообщение) values ('$name', '$surname', '$email', '$message')";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    echo "Данные занесены";
}
 
mysqli_close($link);
exit();
 
?>
