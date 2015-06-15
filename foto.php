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

<a href="zuganglkw.php"><img src="./assets/img/foto.jpg" style="width:100%; height:auto;"></a>



    <!--body class="" >
    <div id="fotoScreen">
            

            <header id="scannerBar" role="banner" class="navbar navbar-default navbar-fixed-bottom " style="opacity:0.7">
                <div class="micropadding"></div>
                    <div class="container flex-container ">
                        <div class="flex-item align-left" style="color:white; padding: 20px 0 0 10px" >
                            <a id="scanAbbrechen" href="javascript:void(0);" style="color:white">Abbrechen</a>
                        </div>
                        <div class="flex-item align-center" >
                            <div class="record hide">
                                    &nbsp;
                                </div>
                        </div>
                        <div class="flex-item align-right" style="color:white; padding: 20px 10px 0 0 " >
                            <a id="scanAbbrechen" href="javascript:void(0);" style="color:white"><i class="fa fa-flash"></i> Ein</a>

                        </div>
                    </div>
            </header>
        </div-->
        <?php include ('./snippets/meta_javascripts.php');?>

  </body>
</html>
