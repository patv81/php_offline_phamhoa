<?php 
$test= "https://github.com/patv81/php_offline_phamhoa.git";
function exten($url){
    $arr = explode('/',$url);
    $lastitem  = array_pop($arr);    
    $result = explode('.',$lastitem);
    return array($result[0] => $result[1]);
}
$a= exten($test);
echo '<pre>' ;
print_r($a); 
echo'<pre>';
?>