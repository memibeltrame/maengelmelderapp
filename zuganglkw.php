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
            $backlink = "zuundwegfahrtswege.php";
            $backtitle = "Zurück";
            include(snippet("navBarSubpage"));?>

            <div class="flexbox">
                <div class="flex-11">
                        <div class="align-center">
                            <h2>Zugang LKW</h2>
                            <span>Baustelle: Sihlquai 131 </span>
                        </div>
                        <br>
                        <div class="micropadding"></div>

                            <h4>Bild hochladen</h4>

                            <?php if (isset($_GET ["thumbnailzeigen"])): ?>

                                <div class="flexbox">
                                    <div class="flex-1" >
                                        <img  style="border: 1px solid #ccc" class="" src="./assets/img/baustelle_thumbnail.jpg">

                                        </div>
                                    <div class="flex-10" style="padding-left:10px">
                                        <div class="micropadding"></div>
                                        <a class="btn btn-default btn-block" href="foto.php"><i class="fa fa-camera"></i> Bild ersetzen</a>
                                    </div>
                                </div>


                            <?php else:?>
                                <a href="foto.php" class="btn btn-default btn-block"><i class="fa fa-camera"></i> Foto aufnehmen</a>
                            <?php endif ?>
                            <br>

                            <h4>Status auswählen</h4>
                            <div class="btn-group flexbox " >

                            <button type="button" data-id="dangerOn" class="toggleStatus btn-off flex-1 btn btn-default">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-circle fa-stack-2x text-danger"></i>
                                  <i class="fa fa-times fa-stack-1x fa-inverse"></i>
                                </span>
                                &nbsp;&nbsp;Nicht möglich
                            </button>
                            <button type="button" id="dangerOn" class="toggleStatus hide btn-on flex-1 btn btn-danger">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-times fa-stack-1x  text-danger"></i>
                                </span>
                                &nbsp;&nbsp;Nicht möglich
                            </button>

                              <button type="button"  data-id="warningOn" class="toggleStatus btn-off flex-1 btn btn-default">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-circle fa-stack-2x text-warning"></i>
                                  <i class="fa fa-exclamation-triangle fa-stack-1x fa-inverse"></i>
                                </span>

                                Erschwert
                            </button>
                              <button type="button"  id="warningOn" class="toggleStatus btn-on hide flex-1 btn btn-warning">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-circle fa-stack-2x "></i>
                                  <i class="fa fa-exclamation-triangle fa-stack-1x text-warning"></i>
                                </span>

                                Erschwert
                            </button>
                            </div>
                        <div class="micropadding"></div>
                        <br>
                        <div class="align-center"><a href="index.php?meldunggesendet=fu" class="btn-block btn-lg btn-primary">Problem melden </a></div>
                        <br>

                        <hr>
                        <h5>Verantwortlichen kontaktieren</h5>
                        <i class="fa fa-user"></i><span> Fritz Müller </span>
                        <br>
                        <i class="fa fa-phone"></i><a href="javascript:void(0);">  077 767 33 28 </a>
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
