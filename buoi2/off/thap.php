<?php 
function thap($height,$char='*',$delimeter = ' '){
    for ( $i = 1 ; $i <= $height; $i++){
        for($j = 1 ; $j <=$i;$j++){
            echo $char.$delimeter;
        }
        echo "<br>";
    }
}
thap(3,"A","^");
?>