<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Jobhunt</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="CreativeLayers">

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset ('jobhunt/css/bootstrap-grid.css')}}" />
	<link rel="stylesheet" href="{{ asset ('jobhunt/css/icons.css')}}">
	<link rel="stylesheet" href="{{ asset ('jobhunt/css/animate.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('jobhunt/css/style.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset ('jobhunt/css/responsive.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset ('jobhunt/css/chosen.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset ('jobhunt/css/colors/colors.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset ('jobhunt/css/bootstrap.css')}}" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
	
</head>
<body>

<div class="page-loading">
	<img src="{{ asset ('jobhunt/images/loader.gif')}}" alt="" />
</div>

<div class="theme-layout" id="scrollup">
	
	<div class="responsive-header">
		<div class="responsive-menubar">
			<div class="res-logo"><a href="{{ url ('/')}}" title=""><img src="https://trello-attachments.s3.amazonaws.com/5c5beabcda47348e8c7d43e0/5c8791d64b12f23707c78f3b/5fe6db9eda5cbaa5204f0d9cf1ad3bdd/logo.png" alt="" /></a></div>
			<div class="menu-resaction">
				<div class="res-openmenu">
					<img src="images/icon.png" alt="" /> Menu
				</div>
				<div class="res-closemenu">
					<img src="images/icon2.png" alt="" /> Close
				</div>
			</div>
		</div>
		<div class="responsive-opensec">
			<div class="btn-extars">
				<a href="#" title="" class="post-job-btn"><i class="la la-plus"></i>Post Jobs</a>
				<ul class="account-btns">
					<li class="signup-popup"><a title=""><i class="la la-key"></i> Sign Up</a></li>
					<li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Login</a></li>
				</ul>
			</div><!-- Btn Extras -->
			<form class="res-search">
				<input type="text" placeholder="Job title, keywords or company name" />
				<button type="submit"><i class="la la-search"></i></button>
			</form>
			<div class="responsivemenu">
				<ul>
						<li class="menu-item-has-children">
							<a href="#" title="">Home</a>
							<ul>
								<li><a href="index.html" title="">Home Layout 1</a></li>
								<li><a href="index2.html" title="">Home Layout 2</a></li>
								<li><a href="index3.html" title="">Home Layout 3</a></li>
								<li><a href="index4.html" title="">Home Layout 4</a></li>
								<li><a href="index5.html" title="">Home Layout 5</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#" title="">Employers</a>
							<ul>
								<li><a href="employer_list1.html" title=""> Employer List 1</a></li>
								<li><a href="employer_list2.html" title="">Employer List 2</a></li>
								<li><a href="employer_list3.html" title="">Employer List 3</a></li>
								<li><a href="employer_list4.html" title="">Employer List 4</a></li>
								<li><a href="employer_single1.html" title="">Employer Single 1</a></li>
								<li><a href="employer_single2.html" title="">Employer Single 2</a></li>
								<li class="menu-item-has-children">
									<a href="#" title="">Employer Dashboard</a>
									<ul>
										<li><a href="employer_manage_jobs.html" title="">Employer Job Manager</a></li>
										<li><a href="employer_packages.html" title="">Employer Packages</a></li>
										<li><a href="employer_post_new.html" title="">Employer Post New</a></li>
										<li><a href="employer_profile.html" title="">Employer Profile</a></li>
										<li><a href="employer_resume.html" title="">Employer Resume</a></li>
										<li><a href="employer_transactions.html" title="">Employer Transaction</a></li>
										<li><a href="employer_job_alert.html" title="">Employer Job Alert</a></li>
										<li><a href="employer_change_password.html" title="">Employer Change Password</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#" title="">Candidates</a>
							<ul>
								<li><a href="candidates_list.html" title="">Candidates List 1</a></li>
								<li><a href="candidates_list2.html" title="">Candidates List 2</a></li>
								<li><a href="candidates_list3.html" title="">Candidates List 3</a></li>
								<li><a href="candidates_single.html" title="">Candidates Single 1</a></li>
								<li><a href="candidates_single2.html" title="">Candidates Single 2</a></li>
								<li class="menu-item-has-children">
									<a href="#" title="">Candidates Dashboard</a>
									<ul>
										<li><a href="candidates_my_resume.html" title="">Candidates Resume</a></li>
										<li><a href="candidates_my_resume_add_new.html" title="">Candidates Resume new</a></li>
										<li><a href="candidates_profile.html" title="">Candidates Profile</a></li>
										<li><a href="candidates_shortlist.html" title="">Candidates Shortlist</a></li>
										<li><a href="candidates_job_alert.html" title="">Candidates Job Alert</a></li>
										<li><a href="candidates_dashboard.html" title="">Candidates Dashboard</a></li>
										<li><a href="candidates_cv_cover_letter.html" title="">CV Cover Letter</a></li>
										<li><a href="candidates_change_password.html" title="">Change Password</a></li>
										<li><a href="candidates_applied_jobs.html" title="">Candidates Applied Jobs</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#" title="">Blog</a>
							<ul>
								<li><a href="blog_list.html"> Blog List 1</a></li>
								<li><a href="blog_list2.html">Blog List 2</a></li>
								<li><a href="blog_list3.html">Blog List 3</a></li>
								<li><a href="blog_single.html">Blog Single</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#" title="">Job</a>
							<ul>
								<li><a href="job_list_classic.html">Job List Classic</a></li>
								<li><a href="job_list_grid.html">Job List Grid</a></li>
								<li><a href="job_list_modern.html">Job List Modern</a></li>
								<li><a href="job_single1.html">Job Single 1</a></li>
								<li><a href="job_single2.html">Job Single 2</a></li>
								<li><a href="job-single3.html">Job Single 3</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#" title="">Pages</a>
							<ul>
								<li><a href="about.html" title="">About Us</a></li>
								<li><a href="404.html" title="">404 Error</a></li>
								<li><a href="contact.html" title="">Contact Us 1</a></li>
								<li><a href="contact2.html" title="">Contact Us 2</a></li>
								<li><a href="faq.html" title="">FAQ's</a></li>
								<li><a href="how_it_works.html" title="">How it works</a></li>
								<li><a href="login.html" title="">Login</a></li>
								<li><a href="pricing.html" title="">Pricing Plans</a></li>
								<li><a href="register.html" title="">Register</a></li>
								<li><a href="terms_and_condition.html" title="">Terms & Condition</a></li>
							</ul>
						</li>
					</ul>
			</div>
		</div>
	</div>
	
	<header class="stick-top forsticky">
		<div class="menu-sec">
			<div class="container">
				<div class="logo">
					<a href="{{url('/')}}" title=""><img class="hidesticky" src="https://trello-attachments.s3.amazonaws.com/5c5beabcda47348e8c7d43e0/5c8791d64b12f23707c78f3b/5fe6db9eda5cbaa5204f0d9cf1ad3bdd/logo.png" alt="" /></a>
				</div><!-- Logo -->
				<div class="btn-extars">
					<a href="#" title="" class="post-job-btn"><i class="la la-plus"></i>Post Jobs</a>
					<ul class="account-btns">
						<li class="signup-popup"><a title=""><i class="la la-key"></i> Sign Up</a></li>
						<li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Login</a></li>
					</ul>
				</div><!-- Btn Extras -->
				<nav>
					<ul>
						<li class="menu-item-has-children">
							<a href="#" title="">Home</a>
							<ul>
								<li><a href="index.html" title="">Home Layout 1</a></li>
								<li><a href="index2.html" title="">Home Layout 2</a></li>
								<li><a href="index3.html" title="">Home Layout 3</a></li>
								<li><a href="index4.html" title="">Home Layout 4</a></li>
								<li><a href="index5.html" title="">Home Layout 5</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#" title="">Employers</a>
							<ul>
								<li><a href="employer_list1.html" title=""> Employer List 1</a></li>
								<li><a href="employer_list2.html" title="">Employer List 2</a></li>
								<li><a href="employer_list3.html" title="">Employer List 3</a></li>
								<li><a href="employer_list4.html" title="">Employer List 4</a></li>
								<li><a href="employer_single1.html" title="">Employer Single 1</a></li>
								<li><a href="employer_single2.html" title="">Employer Single 2</a></li>
								<li class="menu-item-has-children">
									<a href="#" title="">Employer Dashboard</a>
									<ul>
										<li><a href="employer_manage_jobs.html" title="">Employer Job Manager</a></li>
										<li><a href="employer_packages.html" title="">Employer Packages</a></li>
										<li><a href="employer_post_new.html" title="">Employer Post New</a></li>
										<li><a href="employer_profile.html" title="">Employer Profile</a></li>
										<li><a href="employer_resume.html" title="">Employer Resume</a></li>
										<li><a href="employer_transactions.html" title="">Employer Transaction</a></li>
										<li><a href="employer_job_alert.html" title="">Employer Job Alert</a></li>
										<li><a href="employer_change_password.html" title="">Employer Change Password</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#" title="">Candidates</a>
							<ul>
								<li><a href="candidates_list.html" title="">Candidates List 1</a></li>
								<li><a href="candidates_list2.html" title="">Candidates List 2</a></li>
								<li><a href="candidates_list3.html" title="">Candidates List 3</a></li>
								<li><a href="candidates_single.html" title="">Candidates Single 1</a></li>
								<li><a href="candidates_single2.html" title="">Candidates Single 2</a></li>
								<li class="menu-item-has-children">
									<a href="#" title="">Candidates Dashboard</a>
									<ul>
										<li><a href="candidates_my_resume.html" title="">Candidates Resume</a></li>
										<li><a href="candidates_my_resume_add_new.html" title="">Candidates Resume new</a></li>
										<li><a href="candidates_profile.html" title="">Candidates Profile</a></li>
										<li><a href="candidates_shortlist.html" title="">Candidates Shortlist</a></li>
										<li><a href="candidates_job_alert.html" title="">Candidates Job Alert</a></li>
										<li><a href="candidates_dashboard.html" title="">Candidates Dashboard</a></li>
										<li><a href="candidates_cv_cover_letter.html" title="">CV Cover Letter</a></li>
										<li><a href="candidates_change_password.html" title="">Change Password</a></li>
										<li><a href="candidates_applied_jobs.html" title="">Candidates Applied Jobs</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#" title="">Blog</a>
							<ul>
								<li><a href="blog_list.html"> Blog List 1</a></li>
								<li><a href="blog_list2.html">Blog List 2</a></li>
								<li><a href="blog_list3.html">Blog List 3</a></li>
								<li><a href="blog_single.html">Blog Single</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#" title="">Job</a>
							<ul>
								<li><a href="job_list_classic.html">Job List Classic</a></li>
								<li><a href="job_list_grid.html">Job List Grid</a></li>
								<li><a href="job_list_modern.html">Job List Modern</a></li>
								<li><a href="job_single1.html">Job Single 1</a></li>
								<li><a href="job_single2.html">Job Single 2</a></li>
								<li><a href="job-single3.html">Job Single 3</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#" title="">Pages</a>
							<ul>
								<li><a href="about.html" title="">About Us</a></li>
								<li><a href="404.html" title="">404 Error</a></li>
								<li><a href="contact.html" title="">Contact Us 1</a></li>
								<li><a href="contact2.html" title="">Contact Us 2</a></li>
								<li><a href="faq.html" title="">FAQ's</a></li>
								<li><a href="how_it_works.html" title="">How it works</a></li>
								<li><a href="login.html" title="">Login</a></li>
								<li><a href="pricing.html" title="">Pricing Plans</a></li>
								<li><a href="register.html" title="">Register</a></li>
								<li><a href="terms_and_condition.html" title="">Terms & Condition</a></li>
							</ul>
						</li>
					</ul>
				</nav><!-- Menus -->
			</div>
		</div>
	</header>

	<section>
		<div class="block no-padding">
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="main-featured-sec">
							<ul class="main-slider-sec text-arrows">
								<li class="slideHome"><img src="http://placehold.it/1600x800" alt="" /></li>
								<li class="slideHome"><img src="http://placehold.it/1600x800" alt="" /></li>
								<li class="slideHome"><img src="http://placehold.it/1600x800" alt="" /></li>
							</ul>
							<div class="job-search-sec">
								<div class="job-search">
									<h3>The Easiest Way to Get Your New Job</h3>
									<span>Find Jobs, Employment & Career Opportunities</span>
									<form>
										<div class="row">
											<div class="col-lg-7 col-md-5 col-sm-5 col-xs-12">
												<div class="job-field">
													<input type="text" placeholder="Job title, keywords or company name" />
													<i class="la la-keyboard-o"></i>
												</div>
											</div>
											<div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
												<div class="job-field">
													<select data-placeholder="City, province or region" class="chosen-city">
														<option>Istanbul</option>
														<option>New York</option>
														<option>London</option>
														<option>Russia</option>
													</select>
													<i class="la la-map-marker"></i>
												</div>
											</div>
											<div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
												<button type="submit"><i class="la la-search"></i></button>
											</div>
										</div>
									</form>
									<div class="or-browser">
										<span>Or browse job offers by </span>
										<a href="#" title="">category</a>
									</div>
								</div>
							</div>
							<div class="scroll-to">
								<a href="#scroll-here" title=""><i class="la la-arrow-down"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="scroll-here">
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading">
							<h2>Popular Categories</h2>
							<span>37 jobs live - 0 added today.</span>
						</div><!-- Heading -->
						<div class="cat-sec">
							<div class="row no-gape">
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-bullhorn"></i>
											<span>Design, Art & Multimedia</span>
											<p>(22 open positions)</p>
										</a>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-graduation-cap"></i>
											<span>Education Training</span>
											<p>(6 open positions)</p>
										</a>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-line-chart "></i>
											<span>Accounting / Finance</span>
											<p>(3 open positions)</p>
										</a>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-users"></i>
											<span>Human Resource</span>
											<p>(3 open positions)</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="cat-sec">
							<div class="row no-gape">
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-phone"></i>
											<span>Telecommunications</span>
											<p>(22 open positions)</p>
										</a>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-cutlery"></i>
											<span>Restaurant / Food Service</span>
											<p>(6 open positions)</p>
										</a>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-building"></i>
											<span>Construction / Facilities</span>
											<p>(3 open positions)</p>
										</a>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="#" title="">
											<i class="la la-user-md"></i>
											<span>Health</span>
											<p>(3 open positions)</p>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="browse-all-cat">
							<a href="#" title="">Browse All Categories</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block double-gap-top double-gap-bottom">
			<div data-velocity="-.1" style="background: url(http://placehold.it/1920x1000) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="simple-text-block">
							<h3>Make a Difference with Your Online Resume!</h3>
							<span>Your resume in minutes with JobHunt resume assistant is ready!</span>
							<a href="#" title="">Create an Account</a>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</section>

	<section>
		<div class="block">
			<div class="container">
				 <div class="row">
				 	<div class="col-lg-12">
				 		<span class="emlthis"><a href="mailto:example.com" title=""><i class="la la-envelope-o"></i> Email me Jobs Like These</a></span>
				 		<div class="filterbar">
				 			<h5>98 Jobs & Vacancies</h5>
				 			<div class="sortby-sec">
				 				<span>Sort by</span>
				 				<select data-placeholder="Most Recent" class="chosen">
									<option>Most Recent</option>
									<option>Most Recent</option>
									<option>Most Recent</option>
									<option>Most Recent</option>
								</select>
								<select data-placeholder="20 Per Page" class="chosen">
									<option>30 Per Page</option>
									<option>40 Per Page</option>
									<option>50 Per Page</option>
									<option>60 Per Page</option>
								</select>
				 			</div>
				 		</div>
				 		<div class="job-grid-sec">
							<div class="row">
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<div class="job-grid border">
										<div class="job-title-sec">
											<div class="c-logo"> <img src="http://placehold.it/235x115" alt="" /> </div>
											<h3><a href="#" title="">Web Designer / Developer</a></h3>
											<span>Massimo Artemisis</span>
											<span class="fav-job"><i class="la la-heart-o"></i></span>
										</div>
										<span class="job-lctn">Sacramento, California</span>
										<a  href="#" title="">APPLY NOW</a>
									</div><!-- JOB Grid -->
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<div class="job-grid border">
										<div class="job-title-sec">
											<div class="c-logo"> <img src="http://placehold.it/235x115" alt="" /> </div>
											<h3><a href="#" title="">Marketing Director</a></h3>
											<span>Massimo Artemisis</span>
											<span class="fav-job"><i class="la la-heart-o"></i></span>
										</div>
										<span class="job-lctn">Sacramento, California</span>
										<a  href="#" title="">APPLY NOW</a>
									</div><!-- JOB Grid -->
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<div class="job-grid border">
										<div class="job-title-sec">
											<div class="c-logo"> <img src="http://placehold.it/235x115" alt="" /> </div>
											<h3><a href="#" title="">Application Developer For Android</a></h3>
											<span>Altes Bank</span>
											<span class="fav-job"><i class="la la-heart-o"></i></span>
										</div>
										<span class="job-lctn">Sacramento, California</span>
										<a  href="#" title="">APPLY NOW</a>
									</div><!-- JOB Grid -->
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<div class="job-grid border">
										<div class="job-title-sec">
											<div class="c-logo"> <img src="http://placehold.it/235x115" alt="" /> </div>
											<h3><a href="#" title="">Web Designer / Developer</a></h3>
											<span>Massimo Artemisis</span>
											<span class="fav-job"><i class="la la-heart-o"></i></span>
										</div>
										<span class="job-lctn">Sacramento, California</span>
										<a  href="#" title="">APPLY NOW</a>
									</div><!-- JOB Grid -->
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<div class="job-grid border">
										<div class="job-title-sec">
											<div class="c-logo"> <img src="http://placehold.it/235x115" alt="" /> </div>
											<h3><a href="#" title="">Web Designer / Developer</a></h3>
											<span>MediaLab</span>
											<span class="fav-job"><i class="la la-heart-o"></i></span>
										</div>
										<span class="job-lctn">Sacramento, California</span>
										<a  href="#" title="">APPLY NOW</a>
									</div><!-- JOB Grid -->
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<div class="job-grid border">
										<div class="job-title-sec">
											<div class="c-logo"> <img src="http://placehold.it/235x115" alt="" /> </div>
											<h3><a href="#" title="">Web Designer / Developer</a></h3>
											<span>StarHealth</span>
											<span class="fav-job"><i class="la la-heart-o"></i></span>
										</div>
										<span class="job-lctn">Sacramento, California</span>
										<a  href="#" title="">APPLY NOW</a>
									</div><!-- JOB Grid -->
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<div class="job-grid border">
										<div class="job-title-sec">
											<div class="c-logo"> <img src="http://placehold.it/235x115" alt="" /> </div>
											<h3><a href="#" title="">Web Designer / Developer</a></h3>
											<span>Massimo Artemisis</span>
											<span class="fav-job"><i class="la la-heart-o"></i></span>
										</div>
										<span class="job-lctn">Sacramento, California</span>
										<a  href="#" title="">APPLY NOW</a>
									</div><!-- JOB Grid -->
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<div class="job-grid border">
										<div class="job-title-sec">
											<div class="c-logo"> <img src="http://placehold.it/235x115" alt="" /> </div>
											<h3><a href="#" title="">Web Designer / Developer</a></h3>
											<span>MediaLab</span>
											<span class="fav-job"><i class="la la-heart-o"></i></span>
										</div>
										<span class="job-lctn">Sacramento, California</span>
										<a  href="#" title="">APPLY NOW</a>
									</div><!-- JOB Grid -->
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<div class="job-grid border">
										<div class="job-title-sec">
											<div class="c-logo"> <img src="http://placehold.it/235x115" alt="" /> </div>
											<h3><a href="#" title="">Web Designer / Developer</a></h3>
											<span>StarHealth</span>
											<span class="fav-job"><i class="la la-heart-o"></i></span>
										</div>
										<span class="job-lctn">Sacramento, California</span>
										<a  href="#" title="">APPLY NOW</a>
									</div><!-- JOB Grid -->
								</div>
							</div>
						</div>
						<div class="pagination">
							<ul>
								<li class="prev"><a href=""><i class="la la-long-arrow-left"></i> Prev</a></li>
								<li><a href="">1</a></li>
								<li class="active"><a href="">2</a></li>
								<li><a href="">3</a></li>
								<li><span class="delimeter">...</span></li>
								<li><a href="">14</a></li>
								<li class="next"><a href="">Next <i class="la la-long-arrow-right"></i></a></li>
							</ul>
						</div><!-- Pagination -->
				 	</div>
				 </div>
			</div>
		</div>
	</section>
	<section>
		<div class="block">
			<div data-velocity="-.1" style="background: url(http://placehold.it/1920x1000) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color light"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading light">
							<h2>Kind Words From Happy Candidates</h2>
							<span>What other people thought about the service provided by JobHunt</span>
						</div><!-- Heading -->
						<div class="reviews-sec" id="reviews-carousel">
							<div class="col-lg-6">
								<div class="reviews">
									<img src="http://placehold.it/101x101" alt="" />
									<h3>Augusta Silva <span>Web designer</span></h3>
									<p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
								</div><!-- Reviews -->
							</div>
							<div class="col-lg-6">
								<div class="reviews">
									<img src="http://placehold.it/101x101" alt="" />
									<h3>Ali Tufan <span>Web designer</span></h3>
									<p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
								</div><!-- Reviews -->
							</div>
							<div class="col-lg-6">
								<div class="reviews">
									<img src="http://placehold.it/101x101" alt="" />
									<h3>Augusta Silva <span>Web designer</span></h3>
									<p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
								</div><!-- Reviews -->
							</div>
							<div class="col-lg-6">
								<div class="reviews">
									<img src="http://placehold.it/101x101" alt="" />
									<h3>Ali Tufan <span>Web designer</span></h3>
									<p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
								</div><!-- Reviews -->
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</section>

	<section>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading">
							<h2>Companies We've Helped</h2>
							<span>Some of the companies we've helped recruit excellent applicants over the years.</span>
						</div><!-- Heading -->
						<div class="comp-sec">
							<div class="company-img">
								<a href="#" title=""><img src="http://placehold.it/180x80" alt="" /></a>
							</div><!-- Client  -->
							<div class="company-img">
								<a href="#" title=""><img src="http://placehold.it/180x80" alt="" /></a>
							</div><!-- Client  -->
							<div class="company-img">
								<a href="#" title=""><img src="http://placehold.it/180x80" alt="" /></a>
							</div><!-- Client  -->
							<div class="company-img">
								<a href="#" title=""><img src="http://placehold.it/180x80" alt="" /></a>
							</div><!-- Client  -->
							<div class="company-img">
								<a href="#" title=""><img src="http://placehold.it/180x80" alt="" /></a>
							</div><!-- Client  -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block">
			<div data-velocity="-.1" style="background: url(http://placehold.it/1920x655) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading">
							<h2>Quick Career Tips</h2>
							<span>Found by employers communicate directly with hiring managers and recruiters.</span>
						</div><!-- Heading -->
						<div class="blog-sec">
							<div class="row">
								<div class="col-lg-4">
									<div class="my-blog">
										<div class="blog-thumb">
											<a href="#" title=""><img src="http://placehold.it/360x200" alt="" /></a>
											<div class="blog-metas">
												<a href="#" title="">March 29, 2017</a>
												<a href="#" title="">0 Comments</a>
											</div>
										</div>
										<div class="blog-details">
											<h3><a href="#" title="">Attract More Attention Sales And Profits</a></h3>
											<p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
											<a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="my-blog">
										<div class="blog-thumb">
											<a href="#" title=""><img src="http://placehold.it/360x200" alt="" /></a>
											<div class="blog-metas">
												<a href="#" title="">March 29, 2017</a>
												<a href="#" title="">0 Comments</a>
											</div>
										</div>
										<div class="blog-details">
											<h3><a href="#" title="">11 Tips to Help You Get New Clients</a></h3>
											<p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
											<a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="my-blog">
										<div class="blog-thumb">
											<a href="#" title=""><img src="http://placehold.it/360x200" alt="" /></a>
											<div class="blog-metas">
												<a href="#" title="">March 29, 2017</a>
												<a href="#" title="">0 Comments</a>
											</div>
										</div>
										<div class="blog-details">
											<h3><a href="#" title="">An Overworked Newspaper Editor</a></h3>
											<p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
											<a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block no-padding">
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="simple-text">
							<h3>Gat a question?</h3>
							<span>We're here to help. Check out our FAQs, send us an email or call us at 1 (800) 555-5555</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 column">
						<div class="widget">
							<div class="about_widget">
								<div class="logo">
									<a href="#" title=""><img src="http://placehold.it/178x40" alt="" /></a>
								</div>
								<span>Collin Street West, Victor 8007, Australia.</span>
								<span>+1 246-345-0695</span>
								<span>info@jobhunt.com</span>
								<div class="social">
									<a href="#" title=""><i class="fa fa-facebook"></i></a>
									<a href="#" title=""><i class="fa fa-twitter"></i></a>
									<a href="#" title=""><i class="fa fa-linkedin"></i></a>
									<a href="#" title=""><i class="fa fa-pinterest"></i></a>
									<a href="#" title=""><i class="fa fa-behance"></i></a>
								</div>
							</div><!-- About Widget -->
						</div>
					</div>
					<div class="col-lg-4 column">
						<div class="widget">
							<h3 class="footer-title">Frequently Asked Questions</h3>
							<div class="link_widgets">
								<div class="row">
									<div class="col-lg-6">
										<a href="#" title="">Privacy & Seurty </a>
										<a href="#" title="">Terms of Serice</a>
										<a href="#" title="">Communications </a>
										<a href="#" title="">Referral Terms </a>
										<a href="#" title="">Lending Licnses </a>
										<a href="#" title="">Disclaimers </a>	
									</div>
									<div class="col-lg-6">
										<a href="#" title="">Support </a>
										<a href="#" title="">How It Works </a>
										<a href="#" title="">For Employers </a>
										<a href="#" title="">Underwriting </a>
										<a href="#" title="">Contact Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2 column">
						<div class="widget">
							<h3 class="footer-title">Find Jobs</h3>
							<div class="link_widgets">
								<div class="row">
									<div class="col-lg-12">
										<a href="#" title="">US Jobs</a>	
										<a href="#" title="">Canada Jobs</a>	
										<a href="#" title="">UK Jobs</a>	
										<a href="#" title="">Emplois en Fnce</a>	
										<a href="#" title="">Jobs in Deuts</a>	
										<a href="#" title="">Vacatures China</a>	
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 column">
						<div class="widget">
							<div class="download_widget">
								<a href="#" title=""><img src="http://placehold.it/230x65" alt="" /></a>
								<a href="#" title=""><img src="http://placehold.it/230x65" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-line">
			<span>© 2018 Jobhunt All rights reserved. Design by Creative Layers</span>
			<a href="#scrollup" class="scrollup" title=""><i class="la la-arrow-up"></i></a>
		</div>
	</footer>

</div>

<div class="account-popup-area signin-popup-box">
	<div class="account-popup">
		<form method="POST" action="#">
        <span class="close-popup"><i class="la la-close"></i></span>
        <h3>Masuk</h3>
        <div class="select-user" style="margin-bottom: 10%;">
            <span value="3" >Pelanggan</span>
            <span value="4" >Klien</span>
        </div>
        <form>
            <div class="cfield">
                <input type="number" name="nik" placeholder="Nomor Induk Kependudukan" />
                <i class="la la-user"></i>
            </div>
            <div class="cfield">
                <input type="password" name="password" placeholder="********" />
                <i class="la la-key"></i>
            </div>
            <a href="#" title="">Lupa Kata Sandi?</a>
            <button type="submit">Masuk</button>
        </form>
        <div class="extra-login">
            <span>atau masuk dengan</span>
            <div class="login-social">
            	<a class="google-login" href="#" title="google"><i class="fa fa-google"></i></a>
                <a class="fb-login" href="#" title="facebook"><i class="fa fa-facebook"></i></a>
                <a class="tw-login" href="#" title="twitter"><i class="fa fa-twitter"></i></a>
            </div>
        </div>
        </form>
	</div>
</div><!-- LOGIN POPUP -->

<div class="account-popup-area signup-popup-box">
	<div class="account-popup">
		<form method="POST" action="#">
        <span class="close-popup"><i class="la la-close"></i></span>
        <h3>Daftar</h3>
        <div class="select-user" style="margin-bottom: 10%;">
            <span value="3" >Pelanggan</span>
            <span value="4" >Klien</span>
        </div>
        <div></div>
            <p style="font-size: 14px; float: left; margin: 1%;">Nama</p>
            <div class="cfield">
                <input type="text" placeholder="Nama" name="nama" />
                <i class="la la-user"></i>
            </div>
            <p style="font-size: 14px; float: left; margin: 1%;">Tanggal</p>
            <div class="cfield">
                <input type="date" id="tgllahir" placeholder="Tanggal lahir" name="tanggallahir" />
                <i class="la la-la la-calendar-o"></i>
            </div>
            <p style="font-size: 14px; float: left; margin: 1%;">Foto KTP</p>       
            <div class="cfield">
                <input type="file" id="ktp" placeholder="Foto KTP" name="fotoktp" />
                <i class="la la-photo"></i>
            </div>
            <p style="font-size: 14px; float: left; margin: 1%;">Nomor KTP / NIK</p>
            <div class="cfield">
                <input type="number" placeholder="No. KTP / NIK" name="nik" />
                <i class="la la-credit-card"></i>
            </div>
            <p style="font-size: 14px; float: left; margin: 1%; ">Alamat</p>
            <i class="la la-map-marker" style="float: right;"></i>
            <div class="cfield">
                <textarea placeholder="Alamat" type="text" name="alamat" style="background-color: #fff"></textarea>
            </div>
            <p style="font-size: 14px; float: left; margin: 1%;">Jenis Kelamin</p>
            <div class="dropdown-field">
                <select data-placeholder="Jenis Kelamin" name="jeniskelamin" class="chosen">
                    <option>Laki - laki</option>
                    <option>Perempuan</option>
                </select>
            </div>
            <p style="font-size: 14px; float: left; margin: 1%;">Foto Pribadi</p>
            <div class="cfield">
                <input type="file" id="pribadi" placeholder="Foto Pribadi" name="fotopribadi" />
                <i class="la la-photo"></i>
            </div>
            <p style="font-size: 14px; float: left; margin: 1%;">Email</p>
            <div class="cfield">
                <input type="text" placeholder="Email" name="email" />
                <i class="la la-envelope-o"></i>
            </div>
            <p style="font-size: 14px; float: left; margin: 1%;">Password</p>
            <div class="cfield">
                <input type="password" placeholder="********" name="password" />
                <i class="la la-key"></i>
            </div>
            <button type="submit">Daftar</button>
        <div class="extra-login">
            <span>atau daftar dengan</span>
            <div class="login-social">
            	<a class="google-login" href="#" title="google"><i class="fa fa-google"></i></a>
                <a class="fb-login" href="#" title="facebook"><i class="fa fa-facebook"></i></a>
                <a class="tw-login" href="#" title="twitter"><i class="fa fa-twitter"></i></a>
            </div>
        </div>
    </form>
	</div>
</div><!-- SIGNUP POPUP -->

<script src="{{ asset ('jobhunt/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('jobhunt/js/modernizr.js')}}" type="text/javascript"></script>
<script src="{{ asset ('jobhunt/js/script.js')}}" type="text/javascript"></script>
<script src="{{ asset ('jobhunt/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('jobhunt/js/wow.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('jobhunt/js/slick.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('jobhunt/js/parallax.js')}}" type="text/javascript"></script>
<script src="{{ asset ('jobhunt/js/select-chosen.js')}}" type="text/javascript"></script>

</body>
</html>

