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
            <?php if (isset($_GET['meldunggesendet'])  ): ?>
                 <?php box("Das Problem <b>Zugang LKW</b> wurde erfasst und ihrem Planer gemeldet.", "success", "inherit" , "boxid" , "dismiss" ); ?>
            <?php endif ?>
            <h3 class="align-center">Hallo Herr Rohr,<br>was möchten Sie melden?</h3>
            <br>
            <h4>Baustelle wählen:</h4>
            <?php include("./snippets/baustellenwahl.php");?>
            <br>
            <h4>Bereich wählen </h4>
            <?php
            // this includes the list
            include(snippet("meldenlist"));?>

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
