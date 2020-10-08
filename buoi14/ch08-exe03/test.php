<?php 

$query[] = "WHERE `g`.`name` LIKE '%'" . $_GET['querytxt'] . "%";
$templist   = $database->listRecord($query);
echo '<pre>' ;
print_r($templist); 
echo'<pre>';
?>