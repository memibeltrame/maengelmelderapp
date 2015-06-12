<?php
// Define Navigation keys
// You can use these to specify which item should be active

if(empty($pagetitle)){
    $pagetitle = $brand;
}

if(empty($backtitle)){
    $backtitle = "Home";
    $backlink = "index.php";
}

$nextIconDisplayClass = "";
$rightPaddingClass = "";
if(empty($nextIcon)){
    $nextIcon = "";
    $nextIconDisplayClass = "hide";
    $rightPaddingClass = "noIcon";
}


?>


<header role="banner" class="topBar navbar navbar-default navbar-fixed-top "> 
  <div class="container ">
    <div class="navbar-header">

        <div class="flexbox">
            <div class="flex-11" >
                <a href="<?php echo $backlink ;?>"  style="color:grey; padding: 10px 0 0 10px;" class="topBarButtonLeft pull-left">
                    <span class="icon icon-left-nav"></span> <?php echo $backtitle ;?>
                </a>
            </div>
            <div class="flex-1" ></div>
            <div class="flex-1" >



            <span class="<?php echo $nextIconDisplayClass ;?> pull-right topBarButtonRight"><a href="profil.php"><span class="icon icon-<?php echo $nextIcon ;?>"></span></a></span></div>
        </div>






    </div>

  </div>
</header>