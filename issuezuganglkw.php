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

    <body class="header-fixed">
        <div class="container">

            <?php
            // this includes the header
            $pagetitle = "Zu- und Wegfahrtswege ";
            $backlink = "planer.php";
            $backtitle = "Zurück";
            include(snippet("navBarSubpage"));?>
            <br>
            <div class="flexbox">
                <div class="flex-11">
                        <h1 class="align-center">Zugang LKW</h1>
                    <div class="align-center">
                        <h4><span class="label label-default">Zugang nicht möglich</span><br></h4>
                        <div class="micropadding"></div>
                        <i class="fa fa-user"></i><span> Max Rohr </span><br>
                        <i class="fa fa-phone"></i><a href="javascript:void(0);"> 077 767 33 28 </a>
                        <div class="micropadding"></div>
                        <i class="fa fa-calendar"></i><span> 10.6.2015 17:38 Uhr </span><br>
                        
                    </div>    
                        <br>
                        <img src="./assets/img/baustelle.jpg" style="width:100%; height:auto;" alt="Bild Baustelle">
                        <br><br>
                        <a class="btn-block btn-lg btn-danger align-center"> Problem abschliessen</a>

                </div>

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
