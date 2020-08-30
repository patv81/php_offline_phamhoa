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
function scrumbLink2ListKeysLink($link, $arr)
{
    $list = [];
    foreach ($arr as $k => $v) {
        if ($v['link'] == $link) {
            return array($k=>$v['link']);
        }
        if (isset($v['child'])) {
            foreach ($v['child'] as $k1 => $v1) {
                if ($v1['link'] == $link) {
                    return array($k => $v['link'], $k1 => $v1['link']);
                }
                if (isset($v1['child'])) {
                    foreach ($v1['child'] as $k2 => $v2) {
                        if ($v2['link'] == $link) {
                            return array($k => $v['link'], $k1 => $v1['link'], $k2 => $v2['link']);
                        }
                    }
                }
            }
        }
    }
}

function scrumb($str, $arr)
{
    $list = [];
    foreach ($arr as $k => $v) {
        if ($v['name'] == $str) {
            return array($v['name']);
        }
        if (isset($v['child'])) {
            foreach ($v['child'] as $k1 => $v1) {
                if ($v1['name'] == $str) {
                    return array($v['name'], $v1['name']);
                }
                if (isset($v1['child'])) {
                    foreach ($v1['child'] as $k2 => $v2) {
                        if ($v2['name'] == $str) {
                            return array($v['name'], $v1['name'], $v2['name']);
                        }
                    }
                }
            }
        }
    }
}
function scrumbLink2Name($link, $arr)
{
    $list = [];
    foreach ($arr as $k => $v) {
        if ($v['link'] == $link) {
            return array($v['name']);
        }
        if (isset($v['child'])) {
            foreach ($v['child'] as $k1 => $v1) {
                if ($v1['link'] == $link) {
                    return array($v['name'],$v1['name']);
                }
                if (isset($v1['child'])) {
                    foreach ($v1['child'] as $k2 => $v2) {
                        if ($v2['link'] == $link) {
                            return array($v['name'],$v1['name'],$v2['name']);
                        }
                    }
                }
            }
        }
    }
}
?>