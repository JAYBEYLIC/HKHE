<?php 
$section1=selectContent($conn,"settings_course_section1",['visibility'=>'show'])[0];
$addition1=selectContent($conn,"addition_course_section1",['visibility'=>'show']);


 ?>



<?php include "includes/header.php"; ?>

<div class="breadcrumb_bg">
   <div class="container">
      <ul class="breadcrumb breadcrumb-arrow">
         <li><a href="index.html">Home</a></li>
         <li class="active"><span>Course List</span></li>
      </ul>
   </div>
</div>

<section class="p-b-0">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <h2><?=$section1['input_title'] ?></h2>
         </div>
      </div>

      <div class="row">
      	<?php foreach ($addition1 as $key => $value): ?>
      		<div class="col-md-3 col-sm-6">
            <div class="admin_profile">
               <img src="<?=$value['image_1']?>" />
               <h5> <?=$value['input_text']?></h5>
            </div>
         </div>
      	<?php endforeach ?>
         
      </div>
   </div>
</section>

<div class="course_bg"></div>
<section>

   <div class="container">
      <div class="course_tab_hd">
         <div class="row">
            <div class="col-sm-12">
               <ul class="nav nav-tabs">
                  <li class="active">
                     <a href="#tab1" data-toggle="tab">
                        <i class="fa fa-bookmark" aria-hidden="true"></i>
                        <p> 100L </p>
                     </a>
                  </li>
                 <li>
                     <a href="#tab2" data-toggle="tab">
                        <i class="fa fa-cube" aria-hidden="true"></i>
                       <a href="100200L"><p>1st Semester</p></a> 
                     </a>
                  </li> 
                 <!--  <li>
                     <a href="#tab3" data-toggle="tab">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <p> 2nd Semester</p>
                     </a>
                  </li> -->
                  <!-- <li>
                     <a href="#tab4" data-toggle="tab">
                        <i class="fa fa-comments" aria-hidden="true"></i>
                        <p>Processing</p>
                     </a>
                  </li> -->
               </ul>
               <div class="tab-content">
                  <div class="tab-pane active" id="tab1">
                     <p class="m-t-30">If you want to build a successful business online, watch the promo video to see why 13,000+ students are using this online entrepreneurship course to learn.</p>
                     <p class="m-t-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an </p>
                     <p class="m-t-20">unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic </p>
                     <p class="m-t-20">typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently </p>
                     with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </div>
                  <div class="tab-pane" id="tab2">
                     <div class="row m-t-30">
                        <div class="col-sm-3">
                           <img src="assets/images/course/courses-1.jpg" alt="course" class="img-responsive">
                        </div>
                        <div class="col-sm-9">
                           <h4 class="m-b-20"> CODAR JAY </h4>
                           <p>
                              If you want to build a successful business online, watch the promo video to see why 13,000+ students are using this online entrepreneurship course to learn.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane" id="tab3">
                     <p class="m-t-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        <p class="m-t-20">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <p class="m-t-20">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                     </div>
                     <div class="tab-pane m-t-30" id="tab4">
                        <div class="row">
                           <div class="col-sm-3">
                              <img src="assets/images/course/courses-2.jpg" alt="course" class="img-responsive">
                           </div>
                           <div class="col-sm-9">
                              <ul>
                                 <li> 5 Stars </li>
                              </ul>
                              <div class="progress">
                                 <div class="progress-bar progress-bar_1">
                                    <span class="sr-only">100% Complete</span>
                                 </div>
                              </div>
                              <ul>
                                 <li> 3 Stars </li>
                              </ul>
                              <div class="progress">
                                 <div class="progress-bar progress-bar_2">
                                    <span class="sr-only">50% Complete</span>
                                 </div>
                              </div>
                              <ul>
                                 <li> 6 Stars </li>
                              </ul>
                              <div class="progress">
                                 <div class="progress-bar progress-bar_3">
                                    <span class="sr-only">80% Complete</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="container course_study_det">
         <div class="row">
            <div class="col-sm-12">
               <h2 class="p-t-50"> What You'll Study </h2>
               <hr class="tital_border m-l-0">
               <p>
                 FIRST SEMESTER
                  <br />
                  per inceptos himenaeos. Aliquam erat volutpat. Mauris viverra quis velit ac lobortis. Donec fringilla rhoncus magna. Maecenas elit lorem, tincidunt non gravida sed,
                  <br />
                  consectetur sed nunc. Suspendisse pretium elit ac viverra faucibus.
               </p>
            </div>
         </div>
         <div class="row m-t-30">
            <div class="col-sm-4">
               <ul>
                  <li>
                     <i class="fa fa-check" aria-hidden="true"></i>
                     Hke 101 - Introduction to Basket ball
                  </li>
                  <li>
                     <i class="fa fa-check" aria-hidden="true"></i>
                     Hke 101 - Introduction to Basket ball
                  </li>
                  <li>
                     <i class="fa fa-check" aria-hidden="true"></i>
                     Hke 101 - Introduction to Basket ball
                  </li>
               </ul>
            </div>
            <div class="col-sm-4">
               <ul>
                  <li>
                     <i class="fa fa-check" aria-hidden="true"></i>
                     Hke 101 - Introduction to Basket ball
                  </li>
                  <li>
                     <i class="fa fa-check" aria-hidden="true"></i>
                     Hke 101 - Introduction to Basket ball
                  </li>
                  <li>
                     <i class="fa fa-check" aria-hidden="true"></i>
                     Hke 101 - Introduction to Basket ball
                  </li>
               </ul>
            </div>
            <div class="col-sm-4">
               <ul>
                  <li>
                     <i class="fa fa-check" aria-hidden="true"></i>
                     Hke 101 - Introduction to Basket ball
                  </li>
                  <li>
                     <i class="fa fa-check" aria-hidden="true"></i>
                     Hke 101 - Introduction to Basket ball
                  </li>
               </ul>
            </div>
         </div>
      </div>


      <div class="container course_study_det">
         <div class="row">
            <div class="col-sm-12">
               <h2 class="p-t-50"> What You'll Study </h2>
               <hr class="tital_border m-l-0">
               <p>
                  SECOND SEMESTER
                  <br />
                  per inceptos himenaeos. Aliquam erat volutpat. Mauris viverra quis velit ac lobortis. Donec fringilla rhoncus magna. Maecenas elit lorem, tincidunt non gravida sed,
                  <br />
                  consectetur sed nunc. Suspendisse pretium elit ac viverra faucibus.
               </p>
            </div>
         </div>
         <div class="row m-t-30">
            <div class="col-sm-4">
               <ul>
                  <li>
                     <i class="fa fa-check" aria-hidden="true"></i>
                    Hke 121 - Introduction to Psychology
                  </li>
                  <li>
                     <i class="fa fa-check" aria-hidden="true"></i>
                     Hke 121 - Introduction to Psychology
                  </li>
                  <li>
                     <i class="fa fa-check" aria-hidden="true"></i>
                     Hke 121 - Introduction to Psychology
                  </li>
               </ul>
            </div>
            <div class="col-sm-4">
               <ul>
                  <li>
                     <i class="fa fa-check" aria-hidden="true"></i>
                     Hke 121 - Introduction to Psychology
                  </li>
                  <li>
                     <i class="fa fa-check" aria-hidden="true"></i>
                     Hke 121 - Introduction to Psychology
                  </li>
                  <li>
                     <i class="fa fa-check" aria-hidden="true"></i>
                     Hke 121 - Introduction to Psychology
                  </li>
               </ul>
            </div>
            <div class="col-sm-4">
               <ul>
                  <li>
                     <i class="fa fa-check" aria-hidden="true"></i>
                     Hke 121 - Introduction to Psychology
                  </li>
                  <li>
                     <i class="fa fa-check" aria-hidden="true"></i>
                     Hke 121 - Introduction to Psychology
                  </li>
               </ul>
            </div>
         </div>
      </div>

   </section>
<?php include "includes/footer.php"; ?>