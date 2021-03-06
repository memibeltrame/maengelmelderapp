 <?php

/** --- B A S E F U N C T I O N S ---
    This file sets up project-wide things like authentication -
    DO NOT REMOVE
**/
include('core/protostrap.php');

/** Define VALUES  valid for this file **/
$activeNavigation = "one";


date_default_timezone_set('Europe/Berlin');
setlocale (LC_ALL, 'de_CH');
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

            <div class="flexbox">
                <div class="flex-11">
                        <div class="align-center">
                            <h2>Zugang LKW</h2>
                            <span>Baustelle: Sihlquai 131 </span>
                        </div>
                    <div class="">
                        <br>

                        <div class="row">
                            <div class="col-xs-3 align-right" style="padding-right:0;">
                                <i class="fa fa-times text-danger"></i>
                            </div>
                            <div class="col-xs-9">
                                Zugang nicht möglich
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3 align-right" style="padding-right:0;">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <div class="col-xs-9">
                                <?php echo makeDateFromString("-1 day") ;?> 17:38 Uhr
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3 align-right" style="padding-right:0;">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="col-xs-9">
                                Max Rohr
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3 align-right" style="padding-right:0;">
                            <i class="fa fa-phone"></i>
                            </div>
                            <div class="col-xs-9">
                                <a href="javascript:void(0);">077 767 33 28</a>
                            </div>
                        </div>



<!--
                        <span>Status: <i class="fa fa-times"></i> Zugang nicht möglich</span><br></span>
                        <div class="micropadding"></div>
                        <i class="fa fa-calendar"></i><span>  </span><br>
                        <i class="fa fa-user"></i><span> Max Rohr </span><br>
                        <i class="fa fa-phone"></i><a href="javascript:void(0);"> 077 767 33 28 </a>
                        <div class="micropadding"></div>  -->
                    </div>
                        <br>
                        <img src="./assets/img/baustelle.jpg" style="width:100%; height:auto;" alt="Bild Baustelle">
                        <br><br>
                        <a href="planer.php" class="btn-block btn-lg btn-primary align-center"> Problem abschliessen</a>

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
