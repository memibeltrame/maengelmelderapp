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
            include(snippet("navBarTop"));?>



            <div id="boxid" class="alert alert-info">
<button class="close" type="button" data-dismiss="alert">×</button>
<ul class="fa-ul">
<li style="width:96%">
<i class="fa fa-info-circle fa-lg fa-li"></i>
Das Problem Zugang LKW wurde erfasst und ihrem Planer gemeldet.</li>
</ul>
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
