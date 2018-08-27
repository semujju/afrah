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
         <a href="../pages/index.php">Home</a><i> / </i>
        <a href="../pages/activities.php">Activities</a>
        <i> / </i>';
        if($page=='health')
          echo 'Health and Medical Care';
        if($page=='education')
          echo 'Education Support';
        if($page=='relief')
          echo 'Emergency Relief';
        if($page=='environment')
          echo 'Environmental Protection and Reservation';
        if($page=='aid')
          echo 'Micro Aid Project';
        if($page=='mosque')
          echo 'Mosque Construction and Renovation';
        if($page=='orphans')
          echo 'Orphans and Needy Support';
        if($page=='season')
          echo 'Season Programs';
        if($page=='water')
          echo 'Water and Sanitation';
        echo '</div>
      </div>
      <div class="col-md-6"> </div>
    </div>
  </div>
</div>';
//-- END Pagenation --

//-- Content --

echo '<div id="about-us" class="text-center">
  <div class="container">';

        if($page=='health')
          include("health.php");
        if($page=='education')
          include("education.php");
        if($page=='relief')
          include("relief.php");
        if($page=='environment')
          include("environment.php");
        if($page=='aid')
          include("aid.php");
        if($page=='mosque')
          include("mosque.php");
        if($page=='orphans')
          include("orphans.php");
        if($page=='season')
          include("season.php");
        if($page=='water')
          include("water.php");
   
echo '</div>
</div>';
include('../re-usable/footer.php');
?>
<!-- END Content --> 
