<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .content {
            text-align: center;
            border: 1px solid black;
        }

        #selectbox {
            height: 40px;
            width: 80px;
        }
    </style>
</head>

<body>
    <?php

    $arr = array("a", "b", "c", "d", "e");
    function ff($arr)
    {
        $xhtml = '<select name="select" id="selectbox" >';
        foreach ($arr as $key => $value) {
            $xhtml .= ' <option value="' . $key . '">' . $value . '</option>';
        }
        $xhtml .= '</select>';
        echo $xhtml;
    }
    ?>
    <div class="content">
        <?php
        ff($arr);
        ?>

    </div>
</body>

</html>