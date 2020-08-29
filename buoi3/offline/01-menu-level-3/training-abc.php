<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
   <?php require_once("./html/head.php") ?>
   <?php require_once("./html/data.php") ?>
   <?php require_once("./libs/my-func.php") ?>
</head>

<body>
   <div class="menuBackground">
      <div class="center">
         <?php require_once('./html/menu.php') ?>
      </div>
   </div>
   <div class="breadcrumb">
      <?php
      $listNamesLinks = scrumbLink2ListNameLink($current, $arrMenu);
      $re = [];
      $re[] .= '<a href="index.php">Home</a>';
      //$re .= '<span>></span>';
      foreach ($listNamesLinks as $name => $link) {
         if ($name == 'Home') continue;
         $re[] = sprintf('<a href="%s">%s</a>', $link, $name);
         //$re.='<span>></span>';
      }
      echo implode('<span>></span>', $re);
      ?>
   </div>
   <h3>Toyota</h3>
</body>

</html>