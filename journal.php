<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Просмотр документов</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
</head>
<body>
<?php

$dir = dirname(__FILE__);
$marker = $dir . '/texts';

foreach (glob($marker . '/*.txt') as $file){         
        $storage[] = $file;     
    }
    echo '<ul>';
    for ($i = 0; $i < count($storage); $i++) {
        $file_name = basename($storage[$i]);
        echo "<li>$file_name</li>";       
    }
    echo '</ul>';

    $len = count($storage);
    echo "В папке " . $len . " документа(ов).";
?>  
</body>
</html>