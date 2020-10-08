<?php 


class Helper{
    public static function highlight($astring, $aword) {     
        return preg_replace('/'.$aword.'/m', '<mark>' . $aword . '</mark>',$astring);
    }
    public static function hello(){
        echo "hello";
    }



    public static function selectbox($arr){
        $result='<select name="chooseStatus" id="choose">';
        foreach($arr as $key => $value){
            $result.= sprintf('<option value="%s">%s</option>',$key,$value);
        }
        $result.="</select>";
        return $result;
    }
// echo helper::highlight("hoc bai a","a");
// echo highlight2("hoc bai","b");
}
$arr=[
    "default"=>"select status",
    "1" => "active",
    "0" =>"inactive"
];
?>