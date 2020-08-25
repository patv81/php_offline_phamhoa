<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Index Menu Level 1</title>
    <link rel="stylesheet" href="./css/styles.css" />
</head>

<body>
    <div class="menuBackground">
        <div class="center">
            <ul class="dropDownMenu">
                <?php
                require_once('menu/menu.php');
                ?>
            </ul>
        </div>
    </div>

    <div class="breadcrumb">
        <a href="index.php">Home</a>
        <span>></span>
        <span>About</span>
    </div>

    <h3>Contact</h3>
</body>

</html>