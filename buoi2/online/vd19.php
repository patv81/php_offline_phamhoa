<?php 
// implode va explode 
$a = array("anh","hoc bai","moi ngay");
$b = implode("\n",$a);
echo '<pre>' ;
print_r($b); 
echo'<pre>';
echo '<h3 style="color:red;font-weight:bold">' . $b.'</h3>';
?>