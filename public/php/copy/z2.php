<?php
$q = $_GET['q'];
	    $host = 'localhost'; //имя хоста, на локальном компьютере это localhost
		$user = 'root'; //имя пользователя, по умолчанию это root
		$password = 'root'; //пароль, по умолчанию пустой
		$db_name = 'arduino'; //имя базы данных
		$link = mysqli_connect($host, $user, $password, $db_name);
        if ($q == 'Текущий день'		)
		  { $query = "SELECT * FROM temp WHERE TO_DAYS(NOW()) - TO_DAYS(datatime) = 0 ORDER BY datatime DESC "; 
		    $cap= '<caption> Показания датчиков за текущий день </caption>'; 
		  }
		else
		   {$query = "SELECT * FROM temp ";
		   $cap= '<caption> Показания датчиков </caption>';
		   }
		
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	//	$result = ' ';
	     $result = '<table ';
//	    $result = '<table width=500px border=2 font size = "2" ';
       //<caption> Показания датчиков за текущий день </caption>;
       $result .=  '<col width=22%>';	
		foreach ($data as $elem) {	
           	$result .= '<tr>';
			$result .= '<td align=center> ' . date("H:i",strtotime($elem['datatime'])) . '</td>';
			$result .= '<td align=center >' . $elem['dom'] . '</td>';
			$result .= '<td align=center>' . $elem['ulica'] . '</td>';
			$result .= '<td align=center>' . $elem['teplica'] . '</td>';
			$result .= '</tr>';
		}
		$result .='</table >';
	  	echo $result;
	//echo $q;
?>