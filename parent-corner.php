<?php
include'ck.php';
if($ck!=1 or $ck!="1")
{
  header("Location: index.php");
}
else
{
  if($role == "parent")
  {

?>  
<?php include("navbar.php") ?>
  <!-- Start main-content -->
  <div class="main-content">
  
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">Parent Corner</h2>
              <h3><span style="color:white;">Welcome, </span><span class="text-theme-colored2"><b>Parent Name</b><span></h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->
    <section>
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-2">
            <div class="vertical-tab">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab16" data-toggle="tab">Lecture Schedule</a></li>
                <li><a href="#tab17" data-toggle="tab">Test Schedule</a></li>
                <li><a href="#tab18" data-toggle="tab">Result & Analysis</a></li>
                <li><a href="#tab20" data-toggle="tab">Online Attendence Report</a></li>
                <li><a href="#tab21" data-toggle="tab">Parent Speak</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-10">
            <div class="tab-content">
              <div class="tab-pane fade in active" id="tab16">
                <div class="row">
                  <div class="col-md-12">
                    <?php include("lecture-schedule.php"); ?>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab17">
                <div class="row">
                  <div class="col-md-12">
                    <?php include("test-schedule.php") ?>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab18">
                <div class="row">
                  <div class="col-md-12">                          
                  	<?php include("result.php") ?>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab20">
                <div class="row">
                  <div class="col-md-12">
                    <?php include("attendance-report.php"); ?>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab21">
                <div class="row">
                  <div class="col-md-12">
                    <img class="pull-left flip pr-20" width="300" src="http://placehold.it/155x90" alt="">
                    <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae. molestiae.consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
    </section>


  </div>  
  <!-- end main-content -->

  <!-- Footer -->
<?php include("footer.php") ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>
<?php 
}}
?>