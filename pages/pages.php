<?php 
require_once("../re_usable/head.html");

//-- Header --
echo '
<div id="home" class="bg-inner low-back-gradient-inner">
  <div class="text-con-inner low-back-up">
    <div class="container">
      <div class="row">
        <div class="lead col-lg-12 col-xm-12 text-center">
          <h1><span class="top-heading-inner"></span> </h1>
          <div class="list-o-i white">
            <p class="white no-p"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>';
//-- END Header-- 

//-- Pagenation --
echo'
<div class="pagenation-holder">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-left">
        <div class="pagenation_links">
         <a href="index.php">Home</a>
         <i> / </i>';
       // if($_GET['page']=='activities')
       //   echo 'Activities';
       
        echo '</div>
      </div>
      <div class="col-md-6"> </div>
    </div>
  </div>
</div>';
//-- END Pagenation --

//-- Content --

      /*  if($_GET['page']=='home')
          require_once("home.php");
        if($_GET['page']=='activities')
          require_once("activities.php"); */
//-- END Content -->       
require_once("../re_usable/footer.html");
?>

