<!DOCTYPE html>
<html>
<head>
<style>
table {width=19% border=2 font size = "2" 
       <caption> Показания датчиков за текущий день </caption>
       <  col width=41%>
       <tr>
	      <th rowspan=2>Дата время</th>
		  <th colspan=3>Температура</th>
	    </tr>
        <tr align=center>
		   <th>в доме </th>
		   <th>за окном</th>
		   <th>в теплице</th>
	    </tr>";
		}
    <body>
<?php
     mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
     $con = mysqli_connect('localhost','root','root','arduino');
      if (!$con) {
        die('Ошибка подключения: ' . mysqli_error($con));
                 }


	//    $host = 'localhost'; //имя хоста, на локальном компьютере это localhost
	//	$user = 'root'; //имя пользователя, по умолчанию это root
	//	$password = 'root'; //пароль, по умолчанию пустой
	//	$db_name = 'arduino'; //имя базы данных
	//	$link = mysqli_connect($host, $user, $password, $db_name); 
	//	$query = "SELECT * FROM temp WHERE TO_DAYS(NOW()) - TO_DAYS(datatime) = 0 ORDER BY datatime DESC ";
	//	$query = "SELECT * FROM temp";
	//	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	    mysqli_select_db($con,"arduino");
        $sql="SELECT * FROM ";
//		ajax_demo WHERE id = '".$q."'";
        $result = mysqli_query($con,$sql);
		
	echo "<table ">
        
		
       WHILE($row = mysqli_fetch_array($result)) {
	     ECHO "<tr>";
		 ECHO "<td>" . $row['dom'] . "</td>";
		 ECHO "<td>" . $row['ulica'] . "</td>";
		 ECHO "<td>" . $row['teolica'] . "</td>";
	     ECHO "</tr>";
		}
	echo "</table>";

		

?>
</body>
</html>