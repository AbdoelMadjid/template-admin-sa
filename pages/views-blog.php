<?php

//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Blog";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["views"]["sub"]["blog"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
		<!-- MAIN PANEL -->
		<div id="main" role="main">

			<?php
			//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
			//$breadcrumbs["New Crumb"] => "http://url.com"
			$breadcrumbs["App Views"] = "";
			include("inc/ribbon.php");
			?>
			
			

			<!-- MAIN CONTENT -->
			<div id="content">

				<!-- row -->
				<div class="row">

					<!-- col -->
					<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
						<h1 class="page-title txt-color-blueDark">
							<!-- PAGE HEADER -->
							<i class="fa-fw fa fa-home"></i> App Views <span>>
								Blog </span>
						</h1>
					</div>
					<!-- end col -->

					<!-- right side of the page with the sparkline graphs -->
					<!-- col -->
					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
						<!-- sparks -->
						<ul id="sparks">
							<li class="sparks-info">
								<h5> My Income <span class="txt-color-blue">$47,171</span></h5>
								<div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
									1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
								</div>
							</li>
							<li class="sparks-info">
								<h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
								<div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
									110,150,300,130,400,240,220,310,220,300, 270, 210
								</div>
							</li>
							<li class="sparks-info">
								<h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
								<div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
									110,150,300,130,400,240,220,310,220,300, 270, 210
								</div>
							</li>
						</ul>
						<!-- end sparks -->
					</div>
					<!-- end col -->

				</div>
				<!-- end row -->
				
				<div class="row">

					<div class="col-sm-9">

						<div class="well padding-10">

							<div class="row">
								<div class="col-md-4">
									<img src="img/superbox/superbox-full-15.jpg" class="img-responsive" alt="img">
									<ul class="list-inline padding-10">
										<li>
											<i class="fa fa-calendar"></i>
											<a href="javascript:void(0);"> March 12, 2015 </a>
										</li>
										<li>
											<i class="fa fa-comments"></i>
											<a href="javascript:void(0);"> 38 Comments </a>
										</li>
									</ul>
								</div>
								<div class="col-md-8 padding-left-0">
									<h3 class="margin-top-0"><a href="javascript:void(0);"> Why Should You Make A Separate Mobile Website for your Business? </a><br><small class="font-xs"><i>Published by <a href="javascript:void(0);">John Doe</a></i></small></h3>
									<p>
										At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. 

										<br><br>Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
										<br><br>
									</p>
									<a class="btn btn-primary" href="javascript:void(0);"> Read more </a>
									<a class="btn btn-warning" href="javascript:void(0);"> Edit </a>
									<a class="btn btn-success" href="javascript:void(0);"> Publish </a>
								</div>
							</div>
							<hr>

							<div class="row">
								<div class="col-md-4">
									<img src="img/superbox/superbox-full-19.jpg" class="img-responsive" alt="img">
									<ul class="list-inline padding-10">
										<li>
											<i class="fa fa-calendar"></i>
											<a href="javascript:void(0);"> March 12, 2015 </a>
										</li>
										<li>
											<i class="fa fa-comments"></i>
											<a href="javascript:void(0);"> 38 Comments </a>
										</li>
									</ul>
								</div>
								<div class="col-md-8 padding-left-0">
									<h3 class="margin-top-0"><a href="javascript:void(0);"> Mums favorite shopping malls in USA </a><br><small class="font-xs"><i>Published by <a href="javascript:void(0);">John Doe</a></i></small></h3>
									<p>
										At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. 

										<br><br>Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
										<br><br>
									</p>
									<a class="btn btn-primary" href="javascript:void(0);"> Read more </a>
								</div>
							</div>
							<hr>

							<div class="row">
								<div class="col-md-4">
									<img src="img/superbox/superbox-full-24.jpg" class="img-responsive" alt="img">
									<ul class="list-inline padding-10">
										<li>
											<i class="fa fa-calendar"></i>
											<a href="javascript:void(0);"> March 12, 2015 </a>
										</li>
										<li>
											<i class="fa fa-comments"></i>
											<a href="javascript:void(0);"> 38 Comments </a>
										</li>
									</ul>
								</div>
								<div class="col-md-8 padding-left-0">
									<h3 class="margin-top-0"><a href="javascript:void(0);"> Best (and Basic) Practices of Mobile Web Design </a><br><small class="font-xs"><i>Published by <a href="javascript:void(0);">John Doe</a></i></small></h3>
									<p>
										With the plethora of smartphones, mobile phones, and tablets available on the market today, research suggests that mobile devices will soon overtake PCs and laptops in a year. More and more,different platforms are made available for all types of consumers to access the web, even including TVs and gaming consoles. 

										<br><br>

										And all this in rapid-fire turnover—new models and technologies quickly coming and going like fashion trends. So much so that any website that is not mobile friendly cannot claim to be user-friendly anymore. Increasingly, web developers and designers utilize fluid layouts allowing users to browse across different platforms.

										<br><br>
									</p>
									<a class="btn btn-primary" href="javascript:void(0);"> Read more </a>
								</div>
							</div>

							<hr>

							<div class="row">
								<div class="col-md-4">
									<img src="img/superbox/superbox-full-7.jpg" class="img-responsive" alt="img">
									<ul class="list-inline padding-10">
										<li>
											<i class="fa fa-calendar"></i>
											<a href="javascript:void(0);"> March 12, 2015 </a>
										</li>
										<li>
											<i class="fa fa-comments"></i>
											<a href="javascript:void(0);"> 38 Comments </a>
										</li>
									</ul>
								</div>
								<div class="col-md-8 padding-left-0">
									<h3 class="margin-top-0"><a href="javascript:void(0);"> Responsive Design: Best Practices for Designing a Website </a><br><small class="font-xs"><i>Published by <a href="javascript:void(0);">John Doe</a></i></small></h3>
									<p>
										The term Responsive design means developing a website in a way that adapts all the computer screen resolutions. Particularly this concept allows a 4 column layout that is 1292px wide, on 1025px wide screen that is divided into 2 columns automatically. It is adaptable for android phones and tablet screens. This designing method is known as “responsive web design”

										<br><br>
										
										Responsive designing is a different concept from traditional web designing, so the question arises how you should build a good responsive website. Here is a general practices that can help you to build a responsive website design.

										<br><br>
									</p>
									<a class="btn btn-primary" href="javascript:void(0);"> Read more </a>
								</div>
							</div>	

						</div>

					</div>

					<div class="col-sm-3">
						<div class="well padding-10">
							<h5 class="margin-top-0"><i class="fa fa-search"></i> Blog Search...</h5>
							<div class="input-group">
								<input type="text" class="form-control">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button">
										<i class="fa fa-search"></i>
									</button> </span>
							</div>
							<!-- /input-group -->
						</div>
						<!-- /well -->
						<div class="well padding-10">
							<h5 class="margin-top-0"><i class="fa fa-tags"></i> Popular Tags:</h5>
							<div class="row">
								<div class="col-lg-6">
									<ul class="list-unstyled">
										<li>
											<a href=""><span class="badge badge-info">Windows 8</span></a>
										</li>
										<li>
											<a href=""><span class="badge badge-info">C#</span></a>
										</li>
										<li>
											<a href=""><span class="badge badge-info">Windows Forms</span></a>
										</li>
										<li>
											<a href=""><span class="badge badge-info">WPF</span></a>
										</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list-unstyled">
										<li>
											<a href=""><span class="badge badge-info">Bootstrap</span></a>
										</li>
										<li>
											<a href=""><span class="badge badge-info">Joomla!</span></a>
										</li>
										<li>
											<a href=""><span class="badge badge-info">CMS</span></a>
										</li>
										<li>
											<a href=""><span class="badge badge-info">Java</span></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /well -->
						<div class="well padding-10">
							<h5 class="margin-top-0"><i class="fa fa-thumbs-o-up"></i> Follow Us!</h5>
							<ul class="no-padding no-margin">
								<p class="no-margin">
									<a title="Facebook" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x"></i></span></a>
									<a title="Twitter" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x"></i></span></a>
									<a title="Google+" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-google-plus fa-stack-1x"></i></span></a>
									<a title="Linkedin" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x"></i></span></a>
									<a title="GitHub" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-github fa-stack-1x"></i></span></a>
									<a title="Bitbucket" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-bitbucket fa-stack-1x"></i></span></a>
								</p>
							</ul>
						</div>
						<!-- /well -->
						<!-- /well -->
						<div class="well padding-10">
							<h5 class="margin-top-0"><i class="fa fa-fire"></i> Popular Posts:</h5>
							<ul class="no-padding list-unstyled">
								<li>
									<a href="javascript:void(0);" class="margin-top-0">WPF vs. Windows Forms-Which is better?</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="padding-top-5 display-block">How to create responsive website with Bootstrap?</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="margin-top-5">The best Joomla! templates 2014</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="margin-top-5">ASP .NET cms list</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="margin-top-5">C# Hello, World! program</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="margin-top-5">Java random generator</a>
								</li>
							</ul>
						</div>
						<!-- /well -->

						<!-- /well -->
						<div class="well padding-10">
							<h5 class="margin-top-0"><i class="fa fa-video-camera"></i> Featured Videos:</h5>
							<div class="row">

								<div class="col-lg-12">

									<ul class="list-group no-margin">
										<li class="list-group-item">
											<a href=""> <span class="badge pull-right">15</span> Photograph </a>
										</li>
										<li class="list-group-item">
											<a href=""> <span class="badge pull-right">30</span> Life style </a>
										</li>
										<li class="list-group-item">
											<a href=""> <span class="badge pull-right">9</span> Food </a>
										</li>
										<li class="list-group-item">
											<a href=""> <span class="badge pull-right">4</span> Travel world </a>
										</li>
									</ul>

								</div>

								<div class="col-lg-12">
									<div class="margin-top-10">
										<iframe allowfullscreen="" frameborder="0" height="210" mozallowfullscreen="" src="http://player.vimeo.com/video/87025094" webkitallowfullscreen="" width="100%"></iframe>
									</div>
								</div>
							</div>

						</div>
						<!-- /well -->

					</div>

				</div>

			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->
<!-- ==========================CONTENT ENDS HERE ========================== -->

<!-- PAGE FOOTER -->
<?php
	// include page footer
	include("inc/footer.php");
?>
<!-- END PAGE FOOTER -->

<?php 
	//include required scripts
	include("inc/scripts.php"); 
?>

<!-- PAGE RELATED PLUGIN(S) 
<script src="<?php echo ASSETS_URL; ?>/js/plugin/YOURJS.js"></script>-->

<script>

	$(document).ready(function() {
		// PAGE RELATED SCRIPTS
	})

</script>

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>