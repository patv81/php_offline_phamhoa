<?php 
$stu= array(
    array(
        "name"=>"Hoa",
        "sex" =>"M" ,
        "age" =>21
    ),
    array(
        "name"=>"Toan",
        "sex"=>"M",
        "age"=>10
    ),
    array(
        "name"=>"hj",
        "sex"=>"F",
        "age"=>20
    )
);
echo '<pre>' ;
print_r($stu); 
echo'<pre>';
$arr= array(array("name"=>"Hoa","age"=>1),"hi",1);
//array_flip($arr);
$te = array("1"=>"2","1"=>"3");
echo '<pre>' ;
print_r($te); 
echo'<pre>';
echo $te["1"];
// echo '<pre>' ;
// print_r($arr); 
// echo'<pre>';
// function test (&$arr){
//     array_pop($arr);
// }
// test($arr);
// echo '<pre>' ;
// print_r($arr); 
// echo'<pre>';
?>