<?php
$zend = array(
    'php' => 127,
    'zend' => 20,
    'html' => 127,
    'type' => 12,
    'javascript' => 80
);

// Input: Danh sách khóa học
// Requirement: In ra khóa học có thời lượng video nhiều nhất
// Output: Tên khóa học - thời lượng
//                  php - 127
function naitive($input){
    $max = PHP_INT_MIN;
    $arr=[];
    foreach($input as $valueOfElement){
        if ($valueOfElement > $max ){
            $max = $valueOfElement;
        }
    }
    
    foreach($input as $key => $value ){
        if ($value == $max){
            $arr[$key]=$value;
        }
    }
    return $arr;
}
naitive($zend);
echo '<pre>' ;
print_r(naitive($zend)); 
echo'<pre>';

?>