<?php 
// include_once("./../libs/my-func.php");
// include_once("./data.php");
            // <ul class="dropDownMenu">
            //    <li ><a href="index.php">Home </a></li>
            //    <li class="active">
            //       <a href="data/about.php">About</a>
            //       <ul>
            //          <li>
            //             <a href="data/service.php">Service</a>
            //             <ul>
            //                <li><a href="data/sale.php">Sale</a></li>
            //             </ul>
            //          </li>
            //          <li>
            //             <a href="data/company.php">Company</a>
            //             <ul>
            //                <li><a href="data/toyota.php">Toyota</a></li>
            //             </ul>
            //          </li>
            //       </ul>
            //    </li>
            //    <li ><a href="data/contact.php">Contact </a></li>
            // </ul>


$current =basename($_SERVER['PHP_SELF']);
$listkeys = scrumbLink2Keys($current,$arrMenu);
function createMenu($arr,$listkeys){ 
    $result ='';
    $result .= '<ul class="dropDownMenu">';
    foreach ($arr as $k1 => $v1){
        $result.=($listkeys[0]==$k1)? '<li class="active">':'<li>';
        $result .= sprintf('<a href="%s"> %s</a>',$v1['link'],$v1['name']);
        if (isset($v1["child"])){
            $result.='<ul>';
            foreach($v1["child"] as $k2 => $v2){
                $result .= (isset($listkeys[1]) && $listkeys[1] == $k2) ? '<li class="active">' : '<li>';
                $result .= sprintf('<a href="%s">%s</a>',$v2['link'],$v2['name']);
                if (isset($v2["child"])){
                    $result .= '<ul>';
                    foreach($v2["child"] as $k3 => $v3){
                        $result .= (isset($listkeys[2]) && $listkeys[2] == $k3) ? '<li class="active">' : '<li>';
                        $result .= sprintf('<a href="%s">%s</a>', $v3['link'], $v3['name']);
                        $result .= '</li>';
                    }
                    $result .= '</ul>';

                }
                $result.='</li>';
            }
            $result.='</ul>';
        }
        $result.='</li>';
    }
    $result.= '</ul>';
    return $result;
}
echo createMenu($arrMenu,$listkeys);
// echo '<pre>' ;
// print_r($_SERVER); 
// echo'<pre>';
// echo '<pre>' ;
// print_r(createMenu($arrMenu)); 
// echo'<pre>'; 
// echo basename($_SERVER['PHP_SELF']);
?>