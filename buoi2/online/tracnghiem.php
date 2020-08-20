<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
<?php 
$string ='1, 2, 3, 4';
echo $string;

$arr =explode(",",$string);
echo '<pre>' ;
print_r($arr); 
echo'<pre>';
echo var_dump($arr[1]);
?>    
</body>
</html>