<?php
include("../includes/header2.php");
?>
<div class="content-wrapper">
  <section class="content-header" style="background-color: #fbfbfb; padding: 5px; border-bottom:solid 1px;">
    <h4>
      <b>Welcome </b>
      <small><?php echo $row['user_fname']."  ".$row['user_lname']; ?></small>
    </h4>
    <ol class="breadcrumb">
      <b> <?php echo date('D, jS M ') ;?></b>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>2</h3>
            <p>Upcoming</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
          <div class="inner">
            <h3>10<sup style="font-size: 20px">%</sup></h3>
            <p>Completed</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>44</h3>
            <p>Bookings</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
          <div class="inner">
            <h3>5</h3>
            <p>Popular routes</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  </section>
</div>
<?php  include("../includes/footer.php"); ?>