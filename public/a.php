<?php
//exit();
if(isset($_GET['tt'])){$tet = $_GET['tt'];}
 if(isset($_GET['td'])){$ted = $_GET['td'];} 
  if(isset($_GET['tu'])){$teu = $_GET['tu'];} 
  $filename = 'data.txt';

//$tet = isset($_GET['tt']) ? $_GET['tt'] : 0;  
//$tet = $_GET['tt'] ?? 0;  
  
if (file_exists($filename)) {//echo "Файл $filename не существует";

} else
 {// echo "Файл $filename существует";
   $f_hdl = fopen($filename, 'w');
// Записываем в файл $text
fwrite($f_hdl, $tet.PHP_EOL);
fwrite($f_hdl, $ted.PHP_EOL);
fwrite($f_hdl, $teu);
// Закрывает открытый файл
fclose($f_hdl);
}
  
 //  $file_pionter = fopen ("inf.txt", "r+");
   
    $host = 'localhost'; //имя хоста, на локальном компьютере это localhost
	$user = 'root'; //имя пользователя, по умолчанию это root
	$password = ''; //пароль, по умолчанию пустой
	$db_name = 'arduino'; //имя базы данных
	$link = mysqli_connect($host, $user, $password, $db_name); 
	$query = "INSERT INTO temps (dom, ulica,teplica)VALUES (".$ted.",".$teu.",".$tet.")";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
?>
