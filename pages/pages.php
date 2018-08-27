<?php 
include('../re-usable/head.php');

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
        if($page=='activities')
          echo 'Activities';
       
        echo '</div>
      </div>
      <div class="col-md-6"> </div>
    </div>
  </div>
</div>';
//-- END Pagenation --

//-- Content --

        if($page=='home')
          include("home.php");
        if($page=='activities')
          include("activities.php");
        
include('../re-usable/footer.php');
?>
<!-- END Content --> 
