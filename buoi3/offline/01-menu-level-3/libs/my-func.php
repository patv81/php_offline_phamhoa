<?php
//include_once('./../html/data.php');
function scrumbLink2Keys($link, $arr)
{
    $list = [];
    foreach ($arr as $k => $v) {
        if ($v['link'] == $link) {
            return array($k);
        }
        if (isset($v['child'])) {
            foreach ($v['child'] as $k1 => $v1) {
                if ($v1['link'] == $link) {
                    return array($k, $k1);
                }
                if (isset($v1['child'])) {
                    foreach ($v1['child'] as $k2 => $v2) {
                        if ($v2['link'] == $link) {
                            return array($k, $k1, $k2);
                        }
                    }
                }
            }
        }
    }
}
function scrumbLink2ListNameLink($link, $arr)
{
    $list = [];
    foreach ($arr as $k => $v) {
        if ($v['link'] == $link) {
            return array($v['name'] => $v['link']);
        }
        if (isset($v['child'])) {
            foreach ($v['child'] as $k1 => $v1) {
                if ($v1['link'] == $link) {
                    return array($v['name'] => $v['link'], $v1['name'] => $v1['link']);
                }
                if (isset($v1['child'])) {
                    foreach ($v1['child'] as $k2 => $v2) {
                        if ($v2['link'] == $link) {
                            return array($v['name'] => $v['link'], $v1['name'] => $v1['link'], $v2['name'] => $v2['link']);
                        }
                    }
                }
            }
        }
    }
}
?>