<?php 
$section1=selectContent($conn,"settings_about_section1",['visibility'=>'show'])[0];
$addition1=selectContent($conn,"addition_about_section1",['visibility'=>'show']);
$addition2=selectContent($conn,"addition_about_section2",['visibility'=>'show']);
$section4=selectContent($conn,"settings_about_section4",['visibility'=>'show'])[0];
$addition4=selectContent($conn,"addition_about_section4",['visibility'=>'show']);
$section5=selectContent($conn,"settings_about_section5",['visibility'=>'show'])[0];
$addition5=selectContent($conn,"addition_about_section5",['visibility'=>'show']);
$addition5a=selectContent($conn,"addition_about_section5a",['visibility'=>'show']);










 ?>



<?php include "includes/header.php"; ?>

     <div class="teacher_bg" style="background-image: url(<?=$section1['image_1']?>);">
            <div class="header_title">
                  <h1><?=$section1['input_link_text']?></h1>
                  <hr class="tital_border">
            </div>
      </div>

      <div class="breadcrumb_bg">
            <div class="container">
                  <ul class="breadcrumb breadcrumb-arrow">
                        <li><a href="index.html"><?=$section1['input_title']?></a></li>
                        <li class="active"><span><?=$section1['input_subtitle']?></span></li>
                  </ul>
            </div>
      </div>

      <section>
            <div class="container">
                   <div class="row justify-content-center">
                        <?php foreach ($addition1 as $key => $value): ?>
                             
                              <div class="col-md-6">
                              <div class="<?=$value['class']?>">
                                    <h2><?=$value['input_title']?></h2>
                                    <hr class="tital_border">
                                    <p><?=$value['input_text']?></p>
                                    <br>
                                    <p><?=$value['input_text2']?></p>
                              </div>
                        </div>
                 
                        <?php endforeach ?>
                         </div>
                       
                  
            </div>
      </section>


      <section class="register_bg">
            <div class="container">
                  <div class="row">
                        <?php foreach ($addition2 as $key => $value): ?>
                               <div class="col-sm-3">
                              <div class="counter_text">
                                    <i class="<?=$value['icon_icon']?>"></i>
                                    <h1 class="counter-count"><?=$value['input_text']?></h1>
                                    <h4><?=$value['input_title']?></h4>
                              </div>
                        </div>
                        <?php endforeach ?>
                       
                  </div>
            </div>
      </section>


      <section>
            <div class="container">
                  <div class="row">
                        <div class="col-sm-12">
                              <div class="page_tital text-center">
                                    <h2><?=$section4['input_title']?></h2>
                                    <hr class="tital_border">
                                    <p><?=$section4['input_subtitle']?></p>
                              </div>
                        </div>
                  </div>
                  <div class="row p-t-50">
                        <?php foreach ($addition4 as $key => $value): ?>
                               <div class="col-sm-4 col-12">
                              <div class="m-b-30">
                                    <div class="teachers_pro custom_hover_img">
                                          <img src="<?=$value['image_1']?>" alt="Certificate" class="img-responsive" />
                                    </div>
                              </div>
                        </div>
                        <?php endforeach ?>
                  </div>
            </div>
      </section>


      <section class="bg-light">
            <div class="container">
                  <div class="row">
                        <div class="col-sm-12">
                              <div class="page_tital text-center">
                                    <h2><?=$section5['input_title']?></h2>
                                    <hr class="tital_border">
                                    <p><?=$section5['input_subtitle']?></p>
                              </div>
                        </div>
                  </div>
                  <div class="row p-t-50">
                        <?php foreach ($addition5 as $key => $value): ?>
                              <div class="col-sm-6">
                              <div class="row m-b-30">
                                    <div class="col-4 col-sm-4">
                                          <div class="teachers_pro custom_hover_img">
                                                <img src="<?=$value['image_1']?>" alt="Teacher Profile" class="img-responsive" />
                                          </div>
                                    </div>
                                    <div class="col-8 col-sm-8">
                                          <div class="teacher_text">
                                                <h5> <a href="teacher-profile.html"><?=$value['input_title']?></a></h5>
                                                <h6><?=$value['input_text']?></h6>
                                                <p><?=$value['input_text2']?></p>
                                     <button class="btn btn-default profile_btn" type="button" onclick='window.location.href=""'>
                                                      <?=$value['input_link_text']?>
                                                </button>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <?php endforeach ?>
                  </div>
                  <div class="row p-t-50">
                        <?php foreach ($addition5a as $key => $value): ?>
                              <div class="col-sm-6">
                              <div class="row m-b-30">
                                    <div class="col-4 col-sm-4">
                                          <div class="teachers_pro custom_hover_img">
                                                <img src="<?=$value['image_1']?>" alt="Teacher Profile" class="img-responsive" />
                                          </div>
                                    </div>
                                    <div class="col-8 col-sm-8">
                                          <div class="teacher_text">
                                                <h5> <a href="teacher-profile.html"><?=$value['input_title']?></a></h5>
                                                <h6><?=$value['input_text']?></h6>
                                                <p><?=$value['input_text2']?></p>
                                                <button class="btn btn-default profile_btn" type="button" onclick='window.location.href="teacher-profile.html"'>
                                                     <?=$value['input_link_text']?>
                                                </button>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <?php endforeach ?>
                        
                        
                  </div> 
                  <div class="p-t-50 text-center"><button class="btn btn-default custom_btn custom_btn_full" type="button" onclick='window.location.href="teacher.html"'>view more</button></div>
            </div>
      </section>


      <section class="partner-sec text-center">
            <div class="container">
                  <div class="logo-slider-block">
                        <div id="logo-slider" class="owl-carousel owl-theme">
                              <div>
                                    <a class="logo-block" href="javascript:void(0)"><img src="assets/images/nsdlo.png" alt="company logo"></a>
                              </div>
                              <div>
                                    <a class="logo-block" href="javascript:void(0)"><img src="assets/images/nsdlo.png" alt="company logo"></a>
                              </div>
                              <div>
                                    <a class="logo-block" href="javascript:void(0)"><img src="assets/images/nsdlo.png" alt="company logo"></a>
                              </div>
                              <div>
                                    <a class="logo-block" href="javascript:void(0)"><img src="assets/images/nsdlo.png" alt="company logo"></a>
                              </div>
                              <div>
                                    <a class="logo-block" href="javascript:void(0)"><img src="assets/images/nsdlo.png" alt="company logo"></a>
                              </div>
                        </div>
                  </div>
            </div>
      </section>


      <div class="newsletter_sec">
            <div class="container">
                  <div class="row d-flex align-items-center">
                        <div class="col-sm-12 col-lg-6">
                              <div class="newsletter_text">
                                    <h2>Subscribe to our Newsletter </h2>
                                    <hr class="tital_border m-l-0">
                                    <p>Sign up to receive email updates about courses</p>
                              </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                              <form class="form-group subscribe_form mb-0" method="post">
                                    <input type="email" placeholder="Enter your email" name="email" required>
                                    <button class="btn btn-default custom_btn pull-right custom_btn_full" type="submit"> subscribe </button>
                              </form>
                        </div>
                  </div>
            </div>
      </div>

<?php include "includes/footer.php"; ?>
