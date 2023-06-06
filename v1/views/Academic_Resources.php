<?php include "includes/header.php"; ?>

<div class="header_bg">
	<div class="header_title">
		<h1>All Courses</h1>
		<hr class="tital_border">
	</div>
</div>

<div class="breadcrumb_bg">
	<div class="container">
		<ul class="breadcrumb breadcrumb-arrow">
			<li><a href="index.html">Home</a></li>
			<li class="active"><span>Course Grid</span></li>
		</ul>
	</div>
</div>

<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-9">
				<img src="assets/images/vct.png">
				
			</div>
			<div class="col-sm-12 col-md-3">
				<div class="coures_searchbox">
					<form class="form-group" method="post">
						<div class="input-group form-group">
							<input class="search-query form-control" placeholder="Search Courses" type="search" required>
							<span class="input-group-btn">
								<button class="btn btn-info" type="submit">
									<i class="fa fa-search"></i>
								</button>
							</span>
						</div>
					</form>
				</div>
				<div class="coures_searchbox">
					<h4> All Courses </h4>
					<hr class="tital_border_tow m-l-0">
					<ul class="list-unstyled">
						<h4> Level</h4>
						<li> <a href="100200L">Year 1 </a> </li>
						<li> <a href="javascript:void(0)">Year 2 </a> </li>
						<li> <a href="javascript:void(0)">Year 3</a> </li>
						<li> <a href="javascript:void(0)">Year 4</a> </li>
						<li> <a href="javascript:void(0)">Diploma 1</a> </li>
						<li> <a href="javascript:void(0)">Diploma 2 </a> </li>
						<li> <a href="javascript:void(0)">Saka</a> </li>
					</ul>
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