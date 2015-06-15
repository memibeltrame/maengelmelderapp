<?php
// Define Navigation keys
// You can use these to specify which item should be active

$navKeys = ["one","two","three","four","five"];

// LEAVE ALONE
$navbarClasses = array_fill(0, 10, '');
foreach ($navKeys as $key => $item){
    if($item == $activeNavigation) {
        $navbarClasses[$key] = "active";
    }
 }
?>

<header role="banner" class="navbar navbar-default navbar-fixed-top ">
  <div class="container">
    <div class="flexbox navbar-header">
      <a class="flex-1 text-center navbar-brand " href="index.php"><?php echo  $brand;?></a>
    </div>
  </div>
</header>
