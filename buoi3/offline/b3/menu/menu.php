<?php 
require_once('data.php');
foreach ($arrMenu as $k => $v){
    $li = sprintf('<li> <a href ="%s"> %s </a> </li>', $v['link'],$v['name']);
    if (basename($_SERVER['PHP_SELF']) == $v['link']){
        $li = sprintf('<li class="active"> <a href ="%s" > %s </a> </li>', $v['link'], $v['name']);
    }
    echo $li;
}
function scrumb($str,$arr){
    $list = [];
    foreach($arr as $k => $v){
        if ($v['name'] == $str){
            return array($v['name']);
        }
        if(isset($v['child'])){
            foreach($v['child'] as $k1 => $v1){
                if ($v1['name'] == $str){
                    return array($v['name'],$v1['name']);
                }
                if(isset($v1['child'])){
                    foreach($v1['child'] as $k2 => $v2){
                        if ($v2['name'] == $str){
                            return array($v['name'],$v1['name'],$v2['name']);   
                        }
                    }
                }
            }
        }
    }
}
echo '<pre>' ;
print_r(scrumb("Training",$arrMenu)); 
echo'<pre>';
?>