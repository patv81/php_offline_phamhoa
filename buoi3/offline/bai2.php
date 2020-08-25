<?php
$input = '69';
$strID = "78, 60,62,68,69,68,73,85,66 ,69,65,74,63,67 ,65,64,68,73,75,69,73,169";
$arr = explode(",",$strID);
$sum=0;
foreach($arr as $k =>$v){
    if ($input==trim($v)){
        $sum++;
    }
}
echo '<pre>' ;
print_r($arr); 
echo'<pre>';
echo '<pre>' ;
print_r($sum); 
echo'<pre>';
?>