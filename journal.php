<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Просмотр документов</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
</head>
<body>
	<?php

	$marker = 'C:\Users\home\workspace\PhpProjects\Document_Journal\texts';
	$storage = [];

	foreach (glob('C:\Users\home\workspace\PhpProjects\Document_Journal\texts\*.txt') as $file)			
		 	array_push($storage, $file);		 	
		
		echo '<ul>';
	    for ($i = 0; $i < count($storage); $i++) {
	    	$file_name = substr($storage[$i], strlen($marker) + 1);
	    	echo "<li>$file_name</li>";       
	    }
	    echo '</ul>';
	
	    $len = count($storage);
	    echo "В папке " . $len . " документа(ов).";
	?>	
</body>
</html>