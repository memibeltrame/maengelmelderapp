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
                <div class="flex-11">    
                    <h3 class="align-center">Offene Probleme <span class="badge"> 3</span></h3>
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
                            <small>10.6.15 17:38, Max Rohr,&nbsp;Baustelle Sihlquai 131</small>
                        </div>
                        <div class="flex-1" >
                            <a href="issuezuganglkw.php"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="flexbox blanklist touchfriendly ">
                        <div class="flex-10" >
                            <a href="javascript:void(0);">Einsatz Hebebühne</a>
                            <br>
                            <small>9.6.15 09:13, Fritz Kunz, Baustelle Langstrasse </small>
                        </div>
                        <div class="flex-1" ><a href=""><i class="fa fa-angle-right"></i></a></div>
                    </div>
                    <div class="flexbox blanklist touchfriendly ">
                        <div class="flex-10" >
                            <a href="javascript:void(0);">Einsatz Stapler</a>
                            <br>
                            <small>9.6.15 09:14, Fritz Kunz,&nbsp;Baustelle Langstrasse </small>
                        </div>
                        <div class="flex-1" ><a href=""><i class="fa fa-angle-right"></i></a></div>
                    </div>
                </div> 
                </div>  

        
            <br>
            <div class="container" >
                <h3 class="align-center">Ein Problem melden</h3>
                <div class="micropadding"></div>
                <h4>1. Baustelle wählen:</h4>
                <select class="selectpicker" data-width="100%" name="Baustelle" data-live-search="true" style="display: none;">
                    <option value="">Meine Position </option>
                    <option value="">Uetlibergstrasse </option>
                    <option value="">Zentralstrasse </option>
                </select>
                 <br>
                <h4>2. Bereich wählen </h4>

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
