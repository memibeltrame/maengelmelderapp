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

    <body class="header-fixed ">
        <div class="container">

            <?php
            // this includes the header
            include(snippet("navBarTop"));?>

            <div class="flexbox">
                <div class="flex-11">
                    <h3 class="align-center">3 Offene Probleme </h3>
                    <div class="micropadding"></div>
                </div>

            </div>
                <!-- Notifications-->
                <div class="container" style="background-color: seashell;">
                <div class="list" >
                    <div class="flexbox blanklist touchfriendly ">
                        <div class="flex-10" >
                            <a href="issuezuganglkw.php">Zugang LKW</a>
                            <br>
                            <small><?php echo makeDateFromString("-1 day") ;?> 17:38, <br>Max Rohr,&nbsp;Baustelle Sihlquai 131</small>
                        </div>
                        <div class="flex-1" >
                            <a href="issuezuganglkw.php"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="flexbox blanklist touchfriendly ">
                        <div class="flex-10" >
                            <a href="javascript:void(0);">Einsatz Hebebühne</a>
                            <br>
                            <small><?php echo makeDateFromString("-3 day");?> 09:13, <br>Fritz Kunz, Baustelle Langstrasse </small>
                        </div>
                        <div class="flex-1" ><a href=""><i class="fa fa-angle-right"></i></a></div>
                    </div>
                    <div class="flexbox blanklist touchfriendly ">
                        <div class="flex-10" >
                            <a href="javascript:void(0);">Einsatz Stapler</a>
                            <br>
                            <small><?php echo makeDateFromString("-5 day");?> 15:22, <br>Fritz Kunz,&nbsp;Baustelle Langstrasse </small>
                        </div>
                        <div class="flex-1" ><a href=""><i class="fa fa-angle-right"></i></a></div>
                    </div>
                </div>
                </div>


            <br>
            <div class="container" >
                <h3 class="align-center">Ein Problem melden</h3>
                <div class="micropadding"></div>
                <h4>Baustelle wählen:</h4>
                <?php include("./snippets/baustellenwahl.php");?>

                 <br>
                <h4>Bereich wählen </h4>

            <?php
            // this includes the header
            include(snippet("meldenlist"));?>

            <?php // this includes the footer
            include(snippet("footer"));?>
        </div>
    </div><!-- /container -->

        <?php
        // JAVASCRIPT
        // This includes the needed javascript files
        // DO NOT REMOVE
        include(snippet("meta_javascripts"));?>
  </body>
</html>
