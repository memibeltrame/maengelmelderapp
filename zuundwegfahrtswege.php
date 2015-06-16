 <?php

/** --- B A S E F U N C T I O N S ---
    This file sets up project-wide things like authentication -
    DO NOT REMOVE
**/
include('core/protostrap.php');

/** Define VALUES  valid for this file **/
$activeNavigation = "one";


?><!DOCTYPE html>
<html>
    <head>
        <title><?php echo $application . " - " . $brand ;?></title>
        <?php
        // this includes all the markup that loads css files and similar stuff,
        // if you have to add more css, that's the place to do it.
        // DO NOT REMOVE
        include(snippet("meta_headTag"));?>
    </head>
<?php

// uncomment the following function to force user to be logged in
// forceLogin(); ?>


    <body class="header-fixed ">
        <div class="container">

            <?php
            // this includes the header
            $pagetitle = "Zu- und Wegfahrtswege ";
            $backlink = "index.php";
            $backtitle = "Zurück";
            include(snippet("navBarSubpage"));?>
            <br>  
            <h4>Zu- und Wegfahrtswege</h4>
            <br>
                <div class="list">             
                    <div class="flexbox blanklist touchfriendly ">
                        <div class="flex-10" ><a href="">Auffinden Lagerplätze</a></div>
                        <div class="flex-1" ><a href=""><i class="fa fa-angle-right"></i></a></div>
                    </div>
                     <div class="flexbox blanklist touchfriendly ">
                        <div class="flex-10" ><a href="">Einsatz Hebebühne </a></div>
                        <div class="flex-1" ><a href=""><i class="fa fa-angle-right"></i></a></div>
                    </div>
                    <div class="flexbox blanklist touchfriendly ">
                        <div class="flex-10" ><a href="">Einsatz Stapler</a></div>
                        <div class="flex-1" ><a href=""><i class="fa fa-angle-right"></i></a></div>
                    </div>   
                    <div class="flexbox blanklist touchfriendly ">
                        <div class="flex-10" ><a href="">Nutzung Lagerplätze</a></div>
                        <div class="flex-1" ><a href=""><i class="fa fa-angle-right"></i></a></div>
                    </div>
                    <div class="flexbox blanklist touchfriendly ">
                        <div class="flex-10" ><a href="zuundwegfahrtswege.php">Nutzung Umschlagplätze</a></div>
                        <div class="flex-1" ><a href="zuundwegfahrtswege.php"><i class="fa fa-angle-right"></i></a></div>
                    </div>
                    <div class="flexbox blanklist touchfriendly ">
                        <div class="flex-11" ><a href="zuganglkw.php">Zugang LKW</a></div>
                        <div class="flex-1" ><a href="zuganglkw.php"><i class="fa fa-angle-right"></i></a></div>
                    </div>

                </div>   

            <?php // this includes the footer
            include(snippet("footer"));?>


        </div> <!-- /container -->

        <?php
        // JAVASCRIPT
        // This includes the needed javascript files
        // DO NOT REMOVE
        include(snippet("meta_javascripts"));?>
  </body>
</html>
