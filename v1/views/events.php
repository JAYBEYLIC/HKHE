<?php 
$section1=selectContent($conn,"settings_events_section1",['visibility'=>'show'])[0];
$addition1=selectContent($conn,"addition_events_section1",['visibility'=>'show']);



 ?>


<?php include "includes/header.php"; ?>

<div class="event_bg">
   <div class="header_title">
      <h1>Events</h1>
      <hr class="tital_border">
   </div>
</div>

<div class="breadcrumb_bg">
   <div class="container">
      <ul class="breadcrumb breadcrumb-arrow">
         <li><a href="index.html">Home</a></li>
         <li class="active"><span>Events</span></li>
      </ul>
   </div>
</div>

<section>
   <div class="container"> 
      <div class="row">
         <div class="col-sm-12">
            <div class="page_tital">
               <h2><?=$section1['input_title']?></h2>
               <hr class="tital_border m-l-0">
               <p><?=$section1['input_subtitle']?></p>
            </div>
         </div>
      </div>
      <div class="row">
         <?php foreach ($addition1 as $key => $value): ?>
             <div class="col-sm-6 col-md-4">
            <div class="event_img">
               <img src="<?=$value['image_1'] ?>" alt="event-img" class="img-responsive" />
            </div>
            <div class="event_text">
               <h4><a href="event-detail.html"><?=$value['input_link_text'] ?></a></h4>
               <p><?=$value['input_title'] ?></p>
               <span class="event_map">
                  <i class="fa fa-clock-o"></i><?=$value['input_text'] ?>
               </span>
               <span class="event_clock">
                  <i class="fa fa-map-marker"></i><?=$value['input_text2'] ?>
               </span>
            </div>
         </div>
         <?php endforeach ?>
        

        <!--  <div class="col-sm-6 col-md-4">
            <div class="event_img">
               <img src="assets/images/event/event_8.jpg" alt="event-img" class="img-responsive" />
            </div>
            <div class="event_text">
               <h4><a href="evdt">Summer Camp - Allerton Artists</a></h4>
               <p>We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
               <span class="event_map">
                  <i class="fa fa-clock-o"></i>April 19,2019 3:15pm
               </span>
               <span class="event_clock">
                  <i class="fa fa-map-marker"></i>Paris,Rue 82
               </span>
            </div>
         </div> -->
         
        
         
         
         
         
         
      </div>
   </div>
</section>

<div class="newsletter_sec">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-md-6">
            <div class="newsletter_text">
               <h2>Subscribe to our Newsletter </h2>
               <hr class="tital_border m-l-0">
               <p>Sign up to receive email updates about courses</p>
            </div>
         </div>
         <div class="col-sm-12 col-md-6">
            <form class="form-group subscribe_form" method="post">
               <input type="email" placeholder="Enter your email" name="email" required>
               <button class="btn btn-default custom_btn pull-right custom_btn_full" type="submit"> subscribe </button>
            </form>
         </div>
      </div>
   </div>
</div>

<?php include "includes/footer.php"; ?>