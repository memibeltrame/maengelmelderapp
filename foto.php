<?php

/** --- B A S E F U N C T I O N S ---
    This file sets up project-wide things like authentication -
    DO NOT REMOVE
**/
include('core/protostrap.php');

/** Define VALUES  valid for this file **/
$activeNavigation = "home";


?><!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $brand ;?></title>
        <?php
        // this includes all the markup that loads css files and similar stuff,
        // if you have to add more css, that's the place to do it.
        // DO NOT REMOVE
        include('./snippets/meta_headTag.php');?>
    </head>

<a href="zuganglkw.php?thumbnailzeigen=fu"><img src="./assets/img/foto.jpg" style="width:100%; height:auto;"></a>

        <?php include ('./snippets/meta_javascripts.php');?>

  </body>
</html>
