<?php 
$test= "https://github.com/patv81/php_offline_phamhoa.git";
function exten($url){
    $arr = explode('/',$url);
    $lastitem  = array_pop($arr);    
    $result = explode('.',$lastitem);
    return array($result[0] => $result[1]);
}
$a= exten($test);
$b= array(
    "extension" => pathinfo($test, PATHINFO_EXTENSION),
    "name" => pathinfo($test,PATHINFO_FILENAME)
);
echo '<pre>' ;
print_r($b); 
echo'<pre>';
?>