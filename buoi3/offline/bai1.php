<?php
$str = "php/127/typescript/12/jquery/120/angular/50";
// $arr = explode("/",$str);
// $a=[];
// for ($i=0; $i <count($arr) ; $i+=2) { 
//     $a[$arr[$i]] =$arr[$i+1];
// }

// echo '<pre>' ;
// print_r($a); 
// echo'<pre>';

$matches=[];
$output=[];
if (preg_match_all('/([^\/]+)\/(\d+)/', $str, $matches)) {
    $output = array_combine($matches[1], $matches[2]);
}
echo '<pre>' ;
print_r($output); 
echo'<pre>';
?>