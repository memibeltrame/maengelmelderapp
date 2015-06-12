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
            include(snippet("navBarTop"));?>
            <br>
            <div class="flexbox">
                <div class="flex-11 align-center">    
                    <h4>Offene Probleme <span class="badge">3</span> </h4>

                    <div class="micropadding"></div>
                </div> 
               
            </div> 
                <!-- Notifications-->
            <div class="well" >   
                    <div class="flexbox blanklist touchfriendly ">
                        <hr>
                        <div class="flex-10" > 
                            <a href="issuezuganglkw.php">Zugang LKW</a><br><small><i class="fa fa-user"></i> Max Rohr  &nbsp;<i class="fa fa-calendar"></i> 10.6.2015 17:38 Uhr</small>
                        </div>
                        <div class="flex-1" ><a href="issuezuganglkw.php"><i class="fa fa-angle-right"></i></a></div>
                    </div>
                    <hr>
                    <div class="flexbox blanklist touchfriendly ">
                        <hr>
                        <div class="flex-10" >
                            <a href="javascript:void(0);">Einsatz Hebebühne</a><br><small><i class="fa fa-user"></i> Felix Huber  &nbsp;<i class="fa fa-calendar"></i> 12.6.2015 09:05 Uhr</small>
                        </div>
                        <div class="flex-1" ><a href=""><i class="fa fa-angle-right"></i></a></div>
                    </div>
                    <hr>
                    <div class="flexbox blanklist touchfriendly ">
                        <hr>
                        <div class="flex-10" >
                            <a href="javascript:void(0);">Einsatz Stapler</a><br><small><i class="fa fa-user"></i> Felix Huber   &nbsp;<i class="fa fa-calendar"></i> 12.6.2015 09:13 Uhr</small>
                        </div>
                        <div class="flex-1" ><a href=""><i class="fa fa-angle-right"></i></a></div>
                    </div>

            </div>  
        
        <div class="micropadding"></div>
         <div class="align-center">
            <h4>Ein Problem melden</h4>
        </div>   
         <div class="container">

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
