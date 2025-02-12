<?php
//initilize the page
require_once("inc/init.php");
//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");
/*---------------- PHP Custom Scripts ---------
YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */
$page_title = "Bootstrap Forms";
/* ---------------- END PHP Custom Scripts ------------- */
//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");
//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["forms"]["sub"]["bootstrap_forms"]["active"] = true;
include("inc/nav.php");
?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">
	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		$breadcrumbs["Forms"] = "";
		include("inc/ribbon.php");
	?>
	<!-- MAIN CONTENT -->
	<div id="content">
		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
				<h1 class="page-title txt-color-blueDark">
					<i class="fa fa-pencil-square-o fa-fw "></i> 
						Forms
					<span>> 
						Bootstrap Form Elements
					</span>
				</h1>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
				<ul id="sparks" class="">
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
			</div>
		</div>
		<!-- widget grid -->
		<section id="widget-grid" class="">
			<div class="well">
				<div class="input-group">
					<input class="form-control" type="text" placeholder="Search...">
					<div class="input-group-btn">
						<button class="btn btn-default btn-primary" type="button">
							<i class="fa fa-search"></i> Search
						</button>
					</div>
				</div>
			</div>
			<!-- row -->
			<div class="row">
				<!-- NEW WIDGET START -->
				<article class="col-sm-12 col-md-12 col-lg-6">
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false">
						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"
						-->
						<header>
							<span class="widget-icon"> <i class="fa fa-eye"></i> </span>
							<h2>Default Elements</h2>
						</header>
						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
							</div>
							<!-- end widget edit box -->
							<!-- widget content -->
							<div class="widget-body">
								<form class="form-horizontal">
									<fieldset>
										<legend>Default Form Elements</legend>
										<div class="form-group">
											<label class="col-md-2 control-label">Text field</label>
											<div class="col-md-10">
												<input class="form-control" placeholder="Default Text Field" type="text">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Auto Complete</label>
											<div class="col-md-10">
												<input class="form-control" placeholder="Type somethine..." type="text"  list="list">
												<datalist id="list">
													<option value="Alexandra">Alexandra</option>
													<option value="Alice">Alice</option>
													<option value="Anastasia">Anastasia</option>
													<option value="Avelina">Avelina</option>
													<option value="Basilia">Basilia</option>
													<option value="Beatrice">Beatrice</option>
													<option value="Cassandra">Cassandra</option>
													<option value="Cecil">Cecil</option>
													<option value="Clemencia">Clemencia</option>
													<option value="Desiderata">Desiderata</option>
													<option value="Dionisia">Dionisia</option>
													<option value="Edith">Edith</option>
													<option value="Eleanora">Eleanora</option>
													<option value="Elizabeth">Elizabeth</option>
													<option value="Emma">Emma</option>
													<option value="Felicia">Felicia</option>
													<option value="Florence">Florence</option>
													<option value="Galiana">Galiana</option>
													<option value="Grecia">Grecia</option>
													<option value="Helen">Helen</option>
													<option value="Helewisa">Helewisa</option>
													<option value="Idonea">Idonea</option>
													<option value="Isabel">Isabel</option>
													<option value="Joan">Joan</option>
													<option value="Juliana">Juliana</option>
													<option value="Karla">Karla</option>
													<option value="Karyn">Karyn</option>
													<option value="Kate">Kate</option>
													<option value="Lakisha">Lakisha</option>
													<option value="Lana">Lana</option>
													<option value="Laura">Laura</option>
													<option value="Leona">Leona</option>
													<option value="Mandy">Mandy</option>
													<option value="Margaret">Margaret</option>
													<option value="Maria">Maria</option>
													<option value="Nanacy">Nanacy</option>
													<option value="Nicole">Nicole</option>
													<option value="Olga">Olga</option>
													<option value="Pamela">Pamela</option>
													<option value="Patricia">Patricia</option>
													<option value="Qiana">Qiana</option>
													<option value="Rachel">Rachel</option>
													<option value="Ramona">Ramona</option>
													<option value="Samantha">Samantha</option>
													<option value="Sandra">Sandra</option>
													<option value="Tanya">Tanya</option>
													<option value="Teresa">Teresa</option>
													<option value="Ursula">Ursula</option>
													<option value="Valerie">Valerie</option>
													<option value="Veronica">Veronica</option>
													<option value="Wilma">Wilma</option>
													<option value="Yasmin">Yasmin</option>
													<option value="Zelma">Zelma</option>
												</datalist>
												<p class="note"><strong>Note:</strong> works in Chrome, Firefox, Opera and IE10.</p>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Password field</label>
											<div class="col-md-10">
												<input class="form-control" placeholder="Password field" type="password" value="mypassword">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Textarea</label>
											<div class="col-md-10">
												<textarea class="form-control" placeholder="Textarea" rows="4"></textarea>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<legend>Unstyled Checkbox</legend>
										<div class="form-group">
											<label class="col-md-2 control-label">Checkbox default</label>
											<div class="col-md-10">
												<div class="checkbox">
													<label>
														<input type="checkbox">
														Checkbox 1 </label>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox">
														Checkbox 2 </label>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox">
														Checkbox 3 </label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Inline</label>
											<div class="col-md-10">
												<label class="checkbox-inline">
													<input type="checkbox">
													Checkbox 2 </label>
												<label class="checkbox-inline">
													<input type="checkbox">
													Checkbox 2 </label>
												<label class="checkbox-inline">
													<input type="checkbox">
													Checkbox 3 </label>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<legend>Unstyled Radiobox</legend>
										<div class="form-group">
											<label class="col-md-2 control-label">Radios default</label>
											<div class="col-md-10">
												<div class="radio">
													<label>
														<input type="radio">
														Radiobox 1 </label>
												</div>
												<div class="radio">
													<label>
														<input type="radio">
														Radiobox 2 </label>
												</div>
												<div class="radio">
													<label>
														<input type="radio">
														Radiobox 3 </label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Inline</label>
											<div class="col-md-10">
												<label class="radio radio-inline">
													<input type="radio">
													Radiobox 1 </label>
												<label class="radio radio-inline">
													<input type="radio">
													Radiobox 2 </label>
												<label class="radio radio-inline">
													<input type="radio">
													Radiobox 3 </label>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<legend>File inputs</legend>
										<div class="form-group">
											<label class="col-md-2 control-label">File input</label>
											<div class="col-md-10">
												<input type="file" class="btn btn-default" id="exampleInputFile1">
												<p class="help-block">
													some help text here.
												</p>
											</div>
										</div>
									</fieldset>
									<fieldset class="demo-switcher-1">
										<legend>Styled Checkbox and Radiobox</legend>
										<span class="toggle-demo">
											<span>Styles: </span>
											<span class="btn-group btn-group-justified" data-toggle="buttons">
										        <label class="btn btn-default btn-xs active">
										          <input type="radio" name="demo-switcher-1" id="style-0"> 1
										        </label>
										        <label class="btn btn-default btn-xs">
										          <input type="radio" name="demo-switcher-1" id="style-1"> 2
										        </label>
										        <label class="btn btn-default btn-xs">
										          <input type="radio" name="demo-switcher-1" id="style-2"> 3
										        </label>
										        <label class="btn btn-default btn-xs">
										          <input type="radio" name="demo-switcher-1" id="style-3"> 4
										        </label>
										    </span>
										</span>
										<div class="form-group">
											<label class="col-md-2 control-label">Checkbox Styles</label>
											<div class="col-md-10">
												<div class="checkbox">
													<label>
													  <input type="checkbox" class="checkbox style-0" checked="checked">
													  <span>Checkbox 1</span>
													</label>
												</div>
												<div class="checkbox">
													<label>
													  <input type="checkbox" class="checkbox style-0">
													  <span>Checkbox 2</span>
													</label>
												</div>
												<div class="checkbox">
													<label>
													  <input type="checkbox" class="checkbox style-0">
													  <span>Checkbox 3</span>
													</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Inline</label>
											<div class="col-md-10">
												<label class="checkbox-inline">
													  <input type="checkbox" class="checkbox style-0">
													  <span>Checkbox 1</span>
												</label>
												<label class="checkbox-inline">
													  <input type="checkbox" class="checkbox style-0">
													  <span>Checkbox 2</span>
												</label>
												<label class="checkbox-inline">
													  <input type="checkbox" class="checkbox style-0">
													  <span>Checkbox 3</span>
												</label>
											</div>
										</div>
									</fieldset>
									<fieldset class="demo-switcher-1">
										<legend></legend>
										<div class="form-group">
											<label class="col-md-2 control-label">Radios Styles</label>
											<div class="col-md-10">
												<div class="radio">
													<label>
														<input type="radio" class="radiobox style-0" checked="checked" name="style-0">
														<span>Radiobox 1</span> 
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" class="radiobox style-0" name="style-0">
														<span>Radiobox 2</span> 
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" class="radiobox style-0" name="style-0">
														<span>Radiobox 3</span> 
													</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Inline</label>
											<div class="col-md-10">
												<label class="radio radio-inline">
													<input type="radio" class="radiobox" name="style-0a">
													<span>Radiobox 1</span> 
												</label>
												<label class="radio radio-inline">
													<input type="radio" class="radiobox" name="style-0a">
													<span>Radiobox 2</span>  
												</label>
												<label class="radio radio-inline">
													<input type="radio" class="radiobox" name="style-0a">
													<span>Radiobox 3</span> 
												</label>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<legend>Unstyled Select</legend>
										<div class="form-group">
											<label class="col-md-2 control-label" for="select-1">Select</label>
											<div class="col-md-10">
												<select class="form-control" id="select-1">
													<option>Amsterdam</option>
													<option>Atlanta</option>
													<option>Baltimore</option>
													<option>Boston</option>
													<option>Buenos Aires</option>
													<option>Calgary</option>
													<option>Chicago</option>
													<option>Denver</option>
													<option>Dubai</option>
													<option>Frankfurt</option>
													<option>Hong Kong</option>
													<option>Honolulu</option>
													<option>Houston</option>
													<option>Kuala Lumpur</option>
													<option>London</option>
													<option>Los Angeles</option>
													<option>Melbourne</option>
													<option>Mexico City</option>
													<option>Miami</option>
													<option>Minneapolis</option>
												</select> 
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label" for="multiselect1">Multiple select</label>
											<div class="col-md-10">
												<select multiple="multiple" id="multiselect1" class="form-control custom-scroll" title="Click to Select a City">
													<option>Amsterdam</option>
													<option selected="selected">Atlanta</option>
													<option>Baltimore</option>
													<option>Boston</option>
													<option>Buenos Aires</option>
													<option>Calgary</option>
													<option selected="selected">Chicago</option>
													<option>Denver</option>
													<option>Dubai</option>
													<option>Frankfurt</option>
													<option>Hong Kong</option>
													<option>Honolulu</option>
													<option>Houston</option>
													<option>Kuala Lumpur</option>
													<option>London</option>
													<option>Los Angeles</option>
													<option>Melbourne</option>
													<option>Mexico City</option>
													<option>Miami</option>
													<option>Minneapolis</option>
												</select>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<legend>Input States</legend>
										<div class="form-group has-warning">
											<label class="col-md-2 control-label">Input warning</label>
											<div class="col-md-10">
												<div class="input-group">
													<input class="form-control" type="text">
													<span class="input-group-addon"><i class="fa fa-warning"></i></span>
												</div>
												<span class="help-block">Something may have gone wrong</span>
											</div>
										</div>
										<div class="form-group has-error">
											<label class="col-md-2 control-label">Input error</label>
											<div class="col-md-10">
												<div class="input-group">
													<input class="form-control" type="text">
													<span class="input-group-addon"><i class="glyphicon glyphicon-remove-circle"></i></span>
												</div>
												<span class="help-block"><i class="fa fa-warning"></i> Please correct the error</span>
											</div>
										</div>
										<div class="form-group has-success">
											<label class="col-md-2 control-label">Input success</label>
											<div class="col-md-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-dollar"></i></span>
													<input class="form-control" type="text">
													<span class="input-group-addon"><i class="fa fa-check"></i></span>
												</div>
												<span class="help-block">Something may have gone wrong</span>
											</div>
										</div>
									</fieldset>	
									<fieldset>
										<legend>Input sizes</legend>
										<div class="form-group">
											<label class="control-label col-md-2">Extra Small Input</label>
											<div class="col-md-10">
												<input class="form-control input-xs" placeholder=".input-xs" type="text">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">Small Input</label>
											<div class="col-md-10">
												<input class="form-control input-sm" placeholder=".input-sm" type="text">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">Default Input</label>
											<div class="col-md-10">
												<input class="form-control" placeholder="Default input" type="text">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">Large Input</label>
											<div class="col-md-10">
												<input class="form-control input-lg" placeholder=".input-lg" type="text">
											</div>
										</div>
									</fieldset>
									<fieldset>
										<legend>Select Sizes</legend>
										<div class="form-group">
											<label class="control-label col-md-2">Small Select</label>
											<div class="col-md-10">
												<select class="form-control input-sm">
													<option>Amsterdam</option>
													<option>Atlanta</option>
													<option>Baltimore</option>
													<option>Boston</option>
													<option>Buenos Aires</option>
													<option>Calgary</option>
													<option>Chicago</option>
													<option>Denver</option>
													<option>Dubai</option>
													<option>Frankfurt</option>
													<option>Hong Kong</option>
													<option>Honolulu</option>
													<option>Houston</option>
													<option>Kuala Lumpur</option>
													<option>London</option>
													<option>Los Angeles</option>
													<option>Melbourne</option>
													<option>Mexico City</option>
													<option>Miami</option>
													<option>Minneapolis</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">Default Select</label>
											<div class="col-md-10">
												<select class="form-control">
													<option>Amsterdam</option>
													<option>Atlanta</option>
													<option>Baltimore</option>
													<option>Boston</option>
													<option>Buenos Aires</option>
													<option>Calgary</option>
													<option>Chicago</option>
													<option>Denver</option>
													<option>Dubai</option>
													<option>Frankfurt</option>
													<option>Hong Kong</option>
													<option>Honolulu</option>
													<option>Houston</option>
													<option>Kuala Lumpur</option>
													<option>London</option>
													<option>Los Angeles</option>
													<option>Melbourne</option>
													<option>Mexico City</option>
													<option>Miami</option>
													<option>Minneapolis</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">Large Select</label>
											<div class="col-md-10">
												<select class="form-control input-lg">
													<option>Amsterdam</option>
													<option>Atlanta</option>
													<option>Baltimore</option>
													<option>Boston</option>
													<option>Buenos Aires</option>
													<option>Calgary</option>
													<option>Chicago</option>
													<option>Denver</option>
													<option>Dubai</option>
													<option>Frankfurt</option>
													<option>Hong Kong</option>
													<option>Honolulu</option>
													<option>Houston</option>
													<option>Kuala Lumpur</option>
													<option>London</option>
													<option>Los Angeles</option>
													<option>Melbourne</option>
													<option>Mexico City</option>
													<option>Miami</option>
													<option>Minneapolis</option>
												</select>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<legend>Prepend &amp; Append</legend>
										<div class="form-group">
											<label class="control-label col-md-2" for="prepend">Prepended Input</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															<span class="input-group-addon">@</span>
															<input class="form-control" id="prepend" placeholder="Username" type="text">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2" for="prepend">W/ input &amp; radios</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															<span class="input-group-addon">
																<span class="checkbox">
																	<label>
																	  <input type="checkbox" class="checkbox style-0" checked="checked">
																	  <span></span>
																	</label>
																</span>
															</span>
															<input class="form-control" placeholder="" type="text">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2"></label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															<input class="form-control" placeholder="With switch" type="text">
															<span class="input-group-addon">
																<span class="onoffswitch">
																	<input type="checkbox" name="start_interval" class="onoffswitch-checkbox" id="st3">
																	<label class="onoffswitch-label" for="st3"> 
																		<span class="onoffswitch-inner" data-swchon-text="YES" data-swchoff-text="NO"></span> 
																		<span class="onoffswitch-switch"></span> 
																	</label> 
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2"></label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															<span class="input-group-addon">
																<span class="radio">
																	<label>
																		<input type="radio" class="radiobox style-0" name="style-0a2">
																		<span> Left</span> 
																	</label>
																</span>
															</span>
															<input class="form-control" placeholder="" type="text">
															<span class="input-group-addon">
																<span class="radio">
																	<label>
																		<input type="radio" class="radiobox style-0" name="style-0a2">
																		<span> Right</span> 
																	</label>
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2" for="append">Appended Input</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															<input class="form-control" id="append" type="text">
															<span class="input-group-addon">.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2" for="appendprepend">Combined</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															<span class="input-group-addon">$</span>
															<input class="form-control" id="appendprepend" type="text">
															<span class="input-group-addon">.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2" for="appendbutton">With buttons</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															<input class="form-control" id="appendbutton" type="text">
															<div class="input-group-btn">
																<button class="btn btn-default" type="button">
																	Search
																</button>
																<button class="btn btn-default" type="button">
																	Options
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">With dropdowns</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															<input type="text" class="form-control">
															<div class="input-group-btn">
																<button type="button" class="btn btn-default" tabindex="-1">Action</button>
																<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
																	<span class="caret"></span>
																</button>
																<ul class="dropdown-menu pull-right" role="menu">
																	<li><a href="javascript:void(0);">Action</a></li>
																	<li><a href="javascript:void(0);">Another action</a></li>
																	<li><a href="javascript:void(0);">Something else here</a></li>
																	<li class="divider"></li>
																	<li><a href="javascript:void(0);">Cancel</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2"></label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															<div class="input-group-btn">
																<button type="button" class="btn btn-default" tabindex="-1">Action</button>
																<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
																	<span class="caret"></span>
																</button>
																<ul class="dropdown-menu" role="menu">
																	<li><a href="javascript:void(0);">Action</a></li>
																	<li><a href="javascript:void(0);">Another action</a></li>
																	<li><a href="javascript:void(0);">Something else here</a></li>
																	<li class="divider"></li>
																	<li><a href="javascript:void(0);">Cancel</a></li>
																</ul>
															</div>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<legend>Flexible Input fields with icons</legend>
										<div class="form-group">
											<label class="control-label col-md-2" for="prepend">Addon Large</label>
											<div class="col-md-10">
												<div class="icon-addon addon-lg">
								                    <input type="text" placeholder="Email" class="form-control">
								                    <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
								                </div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2" for="prepend">Addon Medium</label>
											<div class="col-md-10">
												<div class="icon-addon addon-md">
								                    <input type="text" placeholder="Email" class="form-control">
								                    <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
								                </div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2" for="prepend">Addon Small</label>
											<div class="col-md-10">
												<div class="icon-addon addon-sm">
								                    <input type="text" placeholder="Email" class="form-control">
								                    <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
								                </div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2" for="prepend">Select Large</label>
											<div class="col-md-10">
								                <div class="icon-addon addon-lg">
								                    <select class="form-control">
								                        <option>Select Option</option>
								                        <option>Sample</option>
								                        <option>Sample</option>
								                    </select>
								                    <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
								                </div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2" for="prepend">Select Medium</label>
											<div class="col-md-10">
								                <div class="icon-addon addon-md">
								                    <select class="form-control">
								                        <option>Select Option</option>
								                        <option>Sample</option>
								                        <option>Sample</option>
								                    </select>
								                    <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
								                </div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2" for="prepend">Select Small</label>
											<div class="col-md-10">
								                <div class="icon-addon addon-sm">
								                    <select class="form-control">
								                        <option>Select Option</option>
								                        <option>Sample</option>
								                        <option>Sample</option>
								                    </select>
								                    <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
								                </div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2" for="prepend">Prepended Large</label>
											<div class="col-md-10">
								                <div class="input-group input-group-lg">
								                    <span class="input-group-addon"><i class="glyphicon glyphicon-filter"></i></span>
								                    <div class="icon-addon addon-lg">
								                        <input type="text" placeholder="Email" class="form-control">
								                        <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
								                    </div>
								                    <span class="input-group-btn">
								                        <button class="btn btn-default" type="button">Go!</button>
								                    </span>
								                </div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2" for="prepend">Prepended Medium</label>
											<div class="col-md-10">
								                <div class="input-group input-group-md">
								                    <span class="input-group-addon"><i class="glyphicon glyphicon-filter"></i></span>
								                    <div class="icon-addon addon-md">
								                        <input type="text" placeholder="Email" class="form-control">
								                        <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
								                    </div>
								                    <span class="input-group-btn">
								                        <button class="btn btn-default" type="button">Go!</button>
								                    </span>
								                </div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2" for="prepend">Prepended Small</label>
											<div class="col-md-10">
								                <div class="input-group input-group-sm">
								                    <span class="input-group-addon"><i class="glyphicon glyphicon-filter"></i></span>
								                    <div class="icon-addon addon-sm">
								                        <input type="text" placeholder="Email" class="form-control">
								                        <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
								                    </div>
								                    <span class="input-group-btn">
								                        <button class="btn btn-default" type="button">Go!</button>
								                    </span>
								                </div>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<legend>Simple input with icons</legend>
										<div class="form-group">
											<label class="control-label col-md-2">Input with icon</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-icon-left">
															<i class="fa fa-microphone"></i>
															<input class="form-control" placeholder="Left Icon" type="text">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">With right icon</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-icon-right">
															<i class="fa fa-microphone"></i>
															<input class="form-control" placeholder="" type="text">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">Input with spinner</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<input class="form-control ui-autocomplete-loading" placeholder="" type="text">
													</div>
												</div>
											</div>
										</div>
									</fieldset>
									<div class="form-actions">
										<div class="row">
											<div class="col-md-12">
												<button class="btn btn-default" type="submit">
													Cancel
												</button>
												<button class="btn btn-primary" type="submit">
													<i class="fa fa-save"></i>
													Submit
												</button>
											</div>
										</div>
									</div>
								</form>
							</div>
							<!-- end widget content -->
						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget" id="wid-id-2" data-widget-colorbutton="false" data-widget-editbutton="false">
						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"
						-->
						<header>
							<span class="widget-icon"> <i class="fa fa-eye"></i> </span>
							<h2>Horizontal Form</h2>
						</header>
						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
							</div>
							<!-- end widget edit box -->
							<!-- widget content -->
							<div class="widget-body">
								<form>
									<fieldset>
										<input name="authenticity_token" type="hidden">
										<div class="form-group">
											<label>Text field</label>
											<input class="form-control" placeholder="Text field" type="text">
										</div>
										<div class="form-group">
											<label>Password field</label>
											<input class="form-control" placeholder="Password" type="password" value="mypassword">
										</div>
										<div class="form-group">
											<label>Textarea</label>
											<textarea class="form-control" placeholder="Textarea" rows="3"></textarea>
										</div>
										<div class="form-group">
											<label>Readonly</label>
											<span class="form-control">Read only text</span>
										</div>
									</fieldset>
									<div class="form-actions">
										<div class="btn btn-primary btn-lg">
											<i class="fa fa-save"></i>
											Submit
										</div>
									</div>
								</form>
							</div>
							<!-- end widget content -->
						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget" id="wid-id-4" data-widget-colorbutton="false" data-widget-editbutton="false">
						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"
						-->
						<header>
							<span class="widget-icon"> <i class="fa fa-eye"></i> </span>
							<h2>Inline Form</h2>
						</header>
						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
							</div>
							<!-- end widget edit box -->
							<!-- widget content -->
							<div class="widget-body">
								<div class="alert adjusted alert-info fade in">
									<button class="close" data-dismiss="alert">
										×
									</button>
									<i class="fa-fw fa-lg fa fa-exclamation"></i>
									<strong>Hey hey!</strong> This is an inline form!
								</div>
								<form class="form-inline" role="form">
									<fieldset>
										<div class="form-group">
											<label class="sr-only" for="exampleInputEmail2">Email address</label>
											<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
										</div>
										<div class="form-group">
											<label class="sr-only" for="exampleInputPassword2">Password</label>
											<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" class="checkbox">
												<span>Remember me </span></label>
										</div>
										<button type="submit" class="btn btn-primary">
											Sign in
										</button>
									</fieldset>
								</form>
							</div>
							<!-- end widget content -->
						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->
				</article>
				<!-- WIDGET END -->
				<!-- NEW WIDGET START -->
				<article class="col-sm-12 col-md-12 col-lg-6">
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false">
						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"
						-->
						<header>
							<span class="widget-icon"> <i class="fa fa-eye-slash"></i> </span>
							<h2>Disabled Elements</h2>
						</header>
						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
							</div>
							<!-- end widget edit box -->
							<!-- widget content -->
							<div class="widget-body">
								<form class="form-horizontal">
									<fieldset>
										<legend>Disabled Form Elements</legend>
										<div class="form-group">
											<label class="col-md-2 control-label">Text field</label>
											<div class="col-md-10">
												<input class="form-control" disabled="disabled" placeholder="Default Text Field" type="text">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Auto Complete</label>
											<div class="col-md-10">
												<input class="form-control" disabled="disabled" placeholder="Type somethine..." type="text" list="list">
												<p class="note"><strong>Note:</strong> works in Chrome, Firefox, Opera and IE10.</p>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Password field</label>
											<div class="col-md-10">
												<input class="form-control" disabled="disabled" placeholder="Password field" type="password" value="mypassword">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Textarea</label>
											<div class="col-md-10">
												<textarea class="form-control" disabled="disabled" placeholder="Textarea" rows="4"></textarea>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<legend>Unstyled Checkbox <small>(disabled)</small></legend>
										<div class="form-group">
											<label class="col-md-2 control-label">Checkbox</label>
											<div class="col-md-10">
												<div class="checkbox">
													<label>
														<input type="checkbox" disabled="disabled" name="checkbox-3" value="">
														Checkbox 1 </label>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox" disabled="disabled" name="checkbox-3" value="">
														Checkbox 2 </label>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox" disabled="disabled" name="checkbox-3" value="">
														Checkbox 3 </label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Inline Checkbox</label>
											<div class="col-md-10">
												<label class="checkbox-inline">
													<input type="checkbox" disabled="disabled" name="checkbox-4" value="">
													Checkbox 1 </label>
												<label class="checkbox-inline">
													<input type="checkbox" disabled="disabled" name="checkbox-4" value="">
													Checkbox 2 </label>
												<label class="checkbox-inline">
													<input type="checkbox" disabled="disabled" name="checkbox-4" value="">
													Checkbox 3 </label>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<legend>Unstyled Radiobox <small>(disabled)</small></legend>
										<div class="form-group">
											<label class="col-md-2 control-label">Radios</label>
											<div class="col-md-10">
												<div class="radio">
													<label>
														<input type="radio" disabled="disabled" name="radio-3" value="">
														Radiobox 1 </label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" disabled="disabled" name="radio-3" value="">
														Radiobox 2 </label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" disabled="disabled" name="radio-3" value="">
														Radiobox 3 </label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Inline Radiobox</label>
											<div class="col-md-10">
												<label class="radio radio-inline">
													<input type="radio" disabled="disabled" name="radio-4" value="">
													Radiobox 1 </label>
												<label class="radio radio-inline">
													<input type="radio" disabled="disabled" name="radio-4" value="">
													Radiobox 2 </label>
												<label class="radio radio-inline">
													<input type="radio" disabled="disabled" name="radio-4" value="">
													Radiobox 3 </label>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<legend>File inputs <small>(disabled)</small></legend>
										<div class="form-group">
											<label class="col-md-2 control-label">File input</label>
											<div class="col-md-10">
												<input type="file" class="btn btn-default" disabled="disabled" id="exampleInputFile2">
												<p class="help-block">
													some help text here.
												</p>
											</div>
										</div>
									</fieldset>
									<fieldset class="demo-switcher-1">
										<legend>Styled Checkbox and Radiobox <small>(disabled)</small></legend>
										<div class="form-group">
											<label class="col-md-2 control-label">Checkbox Styles</label>
											<div class="col-md-10">
												<div class="checkbox">
													<label>
													  <input type="checkbox" class="checkbox style-0" checked="checked" disabled="disabled">
													  <span>Checkbox 1</span>
													</label>
												</div>
												<div class="checkbox">
													<label>
													  <input type="checkbox" class="checkbox style-0" disabled="disabled">
													  <span>Checkbox 2</span>
													</label>
												</div>
												<div class="checkbox">
													<label>
													  <input type="checkbox" class="checkbox style-0" disabled="disabled">
													  <span>Checkbox 3</span>
													</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Inline</label>
											<div class="col-md-10">
												<label class="checkbox-inline">
													  <input type="checkbox" class="checkbox style-0" disabled="disabled">
													  <span>Checkbox 1</span>
												</label>
												<label class="checkbox-inline">
													  <input type="checkbox" class="checkbox style-0" disabled="disabled">
													  <span>Checkbox 2</span>
												</label>
												<label class="checkbox-inline">
													  <input type="checkbox" class="checkbox style-0" disabled="disabled">
													  <span>Checkbox 3</span>
												</label>
											</div>
										</div>
									</fieldset>
									<fieldset class="demo-switcher-1">
										<legend></legend>
										<div class="form-group">
											<label class="col-md-2 control-label">Radios Styles</label>
											<div class="col-md-10">
												<div class="radio">
													<label>
														<input type="radio" class="radiobox style-0" checked="checked" disabled="disabled" name="style-0">
														<span>Radiobox 1</span> 
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" class="radiobox style-0" disabled="disabled" name="style-0">
														<span>Radiobox 2</span> 
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" class="radiobox style-0" disabled="disabled" name="style-0">
														<span>Radiobox 3</span> 
													</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Inline</label>
											<div class="col-md-10">
												<label class="radio radio-inline">
													<input type="radio" class="radiobox style-0" disabled="disabled" name="style-0a">
													<span>Radiobox 1</span> 
												</label>
												<label class="radio radio-inline">
													<input type="radio" class="radiobox style-0" disabled="disabled" name="style-0a">
													<span>Radiobox 2</span>  
												</label>
												<label class="radio radio-inline">
													<input type="radio" class="radiobox style-0" disabled="disabled" name="style-0a">
													<span>Radiobox 3</span> 
												</label>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<legend>Unstyled Select</legend>
										<div class="form-group">
											<label class="col-md-2 control-label">Select</label>
											<div class="col-md-10">
												<select class="form-control" disabled="disabled">
													<option>Amsterdam</option>
													<option>Atlanta</option>
													<option>Baltimore</option>
													<option>Boston</option>
													<option>Buenos Aires</option>
													<option>Calgary</option>
													<option>Chicago</option>
													<option>Denver</option>
													<option>Dubai</option>
													<option>Frankfurt</option>
													<option>Hong Kong</option>
													<option>Honolulu</option>
													<option>Houston</option>
													<option>Kuala Lumpur</option>
													<option>London</option>
													<option>Los Angeles</option>
													<option>Melbourne</option>
													<option>Mexico City</option>
													<option>Miami</option>
													<option>Minneapolis</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Multiple select</label>
											<div class="col-md-10">
												<select multiple="multiple" disabled="disabled" class="form-control custom-scroll" title="Click to Select a City">
													<option>Amsterdam</option>
													<option selected="selected">Atlanta</option>
													<option>Baltimore</option>
													<option>Boston</option>
													<option>Buenos Aires</option>
													<option>Calgary</option>
													<option selected="selected">Chicago</option>
													<option>Denver</option>
													<option>Dubai</option>
													<option>Frankfurt</option>
													<option>Hong Kong</option>
													<option>Honolulu</option>
													<option>Houston</option>
													<option>Kuala Lumpur</option>
													<option>London</option>
													<option>Los Angeles</option>
													<option>Melbourne</option>
													<option>Mexico City</option>
													<option>Miami</option>
													<option>Minneapolis</option>
												</select>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<legend>Input States <small>(disabled)</small></legend>
										<div class="form-group has-warning">
											<label class="col-md-2 control-label">Input warning</label>
											<div class="col-md-10">
												<div class="input-group">
													<input class="form-control" disabled="disabled" type="text">
													<span class="input-group-addon"><i class="fa fa-warning"></i></span>
												</div>
												<span class="help-block">Something may have gone wrong</span>
											</div>
										</div>
										<div class="form-group has-error">
											<label class="col-md-2 control-label">Input error</label>
											<div class="col-md-10">
												<div class="input-group">
													<input class="form-control" disabled="disabled" type="text">
													<span class="input-group-addon"><i class="glyphicon glyphicon-remove-circle"></i></span>
												</div>
												<span class="help-block"><i class="fa fa-warning"></i> Please correct the error</span>
											</div>
										</div>
										<div class="form-group has-success">
											<label class="col-md-2 control-label">Input success</label>
											<div class="col-md-10">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-dollar"></i></span>
													<input class="form-control" disabled="disabled" type="text">
													<span class="input-group-addon"><i class="fa fa-check"></i></span>
												</div>
												<span class="help-block">Something may have gone wrong</span>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<legend>Input sizes <small>(disabled)</small></legend>
										<div class="form-group">
											<label class="control-label col-md-2">Extra Small Input</label>
											<div class="col-md-10">
												<input class="form-control input-xs" disabled="disabled" placeholder=".input-xs" type="text">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">Small Input</label>
											<div class="col-md-10">
												<input class="form-control input-sm" disabled="disabled" placeholder=".input-sm" type="text">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">Default Input</label>
											<div class="col-md-10">
												<input class="form-control" disabled="disabled" placeholder="Default input" type="text">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">Large Input</label>
											<div class="col-md-10">
												<input class="form-control input-lg" disabled="disabled" placeholder=".input-lg" type="text">
											</div>
										</div>
									</fieldset>
									<fieldset>
										<legend>Select Sizes <small>(disabled)</small></legend>
										<div class="form-group">
											<label class="control-label col-md-2">Small Select</label>
											<div class="col-md-10">
												<select class="form-control input-sm" disabled="disabled">
													<option>Amsterdam</option>
													<option>Atlanta</option>
													<option>Baltimore</option>
													<option>Boston</option>
													<option>Buenos Aires</option>
													<option>Calgary</option>
													<option>Chicago</option>
													<option>Denver</option>
													<option>Dubai</option>
													<option>Frankfurt</option>
													<option>Hong Kong</option>
													<option>Honolulu</option>
													<option>Houston</option>
													<option>Kuala Lumpur</option>
													<option>London</option>
													<option>Los Angeles</option>
													<option>Melbourne</option>
													<option>Mexico City</option>
													<option>Miami</option>
													<option>Minneapolis</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">Default Select</label>
											<div class="col-md-10">
												<select class="form-control" disabled="disabled">
													<option>Amsterdam</option>
													<option>Atlanta</option>
													<option>Baltimore</option>
													<option>Boston</option>
													<option>Buenos Aires</option>
													<option>Calgary</option>
													<option>Chicago</option>
													<option>Denver</option>
													<option>Dubai</option>
													<option>Frankfurt</option>
													<option>Hong Kong</option>
													<option>Honolulu</option>
													<option>Houston</option>
													<option>Kuala Lumpur</option>
													<option>London</option>
													<option>Los Angeles</option>
													<option>Melbourne</option>
													<option>Mexico City</option>
													<option>Miami</option>
													<option>Minneapolis</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">Large Select</label>
											<div class="col-md-10">
												<select class="form-control input-lg" disabled="disabled">
													<option>Amsterdam</option>
													<option>Atlanta</option>
													<option>Baltimore</option>
													<option>Boston</option>
													<option>Buenos Aires</option>
													<option>Calgary</option>
													<option>Chicago</option>
													<option>Denver</option>
													<option>Dubai</option>
													<option>Frankfurt</option>
													<option>Hong Kong</option>
													<option>Honolulu</option>
													<option>Houston</option>
													<option>Kuala Lumpur</option>
													<option>London</option>
													<option>Los Angeles</option>
													<option>Melbourne</option>
													<option>Mexico City</option>
													<option>Miami</option>
													<option>Minneapolis</option>
												</select>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<legend>Prepend &amp; Append <small>(disabled)</small></legend>
										<div class="form-group">
											<label class="control-label col-md-2">Prepended Input</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															<span class="input-group-addon">@</span>
															<input class="form-control" disabled="disabled" placeholder="Username" type="text">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2" for="append">Appended Input</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															<input class="form-control" disabled="disabled" type="text">
															<span class="input-group-addon">.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2" for="prepend">W/ input &amp; radios</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															<span class="input-group-addon">
																<span class="checkbox">
																	<label>
																	  <input type="checkbox" disabled="disabled" class="checkbox style-0" checked="checked">
																	  <span></span>
																	</label>
																</span>
															</span>
															<input class="form-control" disabled="disabled" placeholder="" type="text">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2"></label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															<input class="form-control" disabled="disabled" placeholder="With switch" type="text">
															<span class="input-group-addon">
																<span class="onoffswitch">
																	<input type="checkbox" name="start_interval" disabled="disabled" class="onoffswitch-checkbox" id="st3a">
																	<label class="onoffswitch-label" for="st3a"> 
																		<span class="onoffswitch-inner" data-swchon-text="YES" data-swchoff-text="NO"></span> 
																		<span class="onoffswitch-switch"></span> 
																	</label> 
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>	
										<div class="form-group">
											<label class="control-label col-md-2"></label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															<span class="input-group-addon">
																<span class="radio">
																	<label>
																		<input type="radio" disabled="disabled" class="radiobox style-0" name="style-0t2a">
																		<span> Left</span> 
																	</label>
																</span>
															</span>
															<input class="form-control" disabled="disabled" placeholder="" type="text">
															<span class="input-group-addon">
																<span class="radio">
																	<label>
																		<input type="radio" disabled="disabled" class="radiobox style-0" name="style-0t2a">
																		<span> Right</span> 
																	</label>
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">Combined</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															<span class="input-group-addon">$</span>
															<input class="form-control" disabled="disabled" type="text">
															<span class="input-group-addon">.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2" for="appendbutton">With buttons</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															<input class="form-control" disabled="disabled" type="text">
															<div class="input-group-btn">
																<button class="btn btn-default" disabled="disabled" type="button">
																	Search
																</button>
																<button class="btn btn-default" disabled="disabled" type="button">
																	Options
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">With dropdowns</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															<input type="text" class="form-control" disabled="disabled">
															<div class="input-group-btn">
																<button type="button" class="btn btn-default" tabindex="-1" disabled="disabled">Action</button>
																<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1" disabled="disabled">
																	<span class="caret"></span>
																</button>
																<ul class="dropdown-menu pull-right" role="menu">
																	<li><a href="javascript:void(0);">Action</a></li>
																	<li><a href="javascript:void(0);">Another action</a></li>
																	<li><a href="javascript:void(0);">Something else here</a></li>
																	<li class="divider"></li>
																	<li><a href="javascript:void(0);">Cancel</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2"></label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-group">
															<div class="input-group-btn">
																<button type="button" class="btn btn-default" disabled="disabled" tabindex="-1">Action</button>
																<button type="button" class="btn btn-default dropdown-toggle" disabled="disabled" data-toggle="dropdown" tabindex="-1">
																	<span class="caret"></span>
																</button>
																<ul class="dropdown-menu" role="menu">
																	<li><a href="javascript:void(0);">Action</a></li>
																	<li><a href="javascript:void(0);">Another action</a></li>
																	<li><a href="javascript:void(0);">Something else here</a></li>
																	<li class="divider"></li>
																	<li><a href="javascript:void(0);">Cancel</a></li>
																</ul>
															</div>
															<input type="text" class="form-control" disabled="disabled">
														</div>
													</div>
												</div>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<legend>Flexible Input fields with icons</legend>
										<div class="form-group">
											<label class="control-label col-md-2" for="prepend">Addon Large</label>
											<div class="col-md-10">
												<div class="icon-addon addon-lg">
								                    <input type="text" placeholder="Email" class="form-control" disabled="disabled">
								                    <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
								                </div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2" for="prepend">Addon Medium</label>
											<div class="col-md-10">
												<div class="icon-addon addon-md">
								                    <input type="text" placeholder="Email" class="form-control" disabled="disabled">
								                    <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
								                </div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2" for="prepend">Addon Small</label>
											<div class="col-md-10">
												<div class="icon-addon addon-sm">
								                    <input type="text" placeholder="Email" class="form-control" disabled="disabled">
								                    <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
								                </div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2" for="prepend">Select Large</label>
											<div class="col-md-10">
								                <div class="icon-addon addon-lg">
								                    <select class="form-control" disabled="disabled">
								                        <option>Select Option</option>
								                        <option>Sample</option>
								                        <option>Sample</option>
								                    </select>
								                    <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
								                </div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2" for="prepend">Select Medium</label>
											<div class="col-md-10">
								                <div class="icon-addon addon-md">
								                    <select class="form-control" disabled="disabled">
								                        <option>Select Option</option>
								                        <option>Sample</option>
								                        <option>Sample</option>
								                    </select>
								                    <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
								                </div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2" for="prepend">Select Small</label>
											<div class="col-md-10">
								                <div class="icon-addon addon-sm">
								                    <select class="form-control" disabled="disabled">
								                        <option>Select Option</option>
								                        <option>Sample</option>
								                        <option>Sample</option>
								                    </select>
								                    <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
								                </div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2" for="prepend">Prepended Large</label>
											<div class="col-md-10">
								                <div class="input-group input-group-lg">
								                    <span class="input-group-addon"><i class="glyphicon glyphicon-filter"></i></span>
								                    <div class="icon-addon addon-lg">
								                        <input type="text" placeholder="Email" class="form-control" disabled="disabled">
								                        <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
								                    </div>
								                    <span class="input-group-btn">
								                        <button class="btn btn-default" type="button" disabled="disabled">Go!</button>
								                    </span>
								                </div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2" for="prepend">Prepended Medium</label>
											<div class="col-md-10">
								                <div class="input-group input-group-md">
								                    <span class="input-group-addon"><i class="glyphicon glyphicon-filter"></i></span>
								                    <div class="icon-addon addon-md">
								                        <input type="text" placeholder="Email" class="form-control" disabled="disabled">
								                        <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
								                    </div>
								                    <span class="input-group-btn">
								                        <button class="btn btn-default" type="button" disabled="disabled">Go!</button>
								                    </span>
								                </div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2" for="prepend">Prepended Small</label>
											<div class="col-md-10">
								                <div class="input-group input-group-sm">
								                    <span class="input-group-addon"><i class="glyphicon glyphicon-filter"></i></span>
								                    <div class="icon-addon addon-sm">
								                        <input type="text" placeholder="Email" class="form-control" disabled="disabled">
								                        <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
								                    </div>
								                    <span class="input-group-btn">
								                        <button class="btn btn-default" type="button" disabled="disabled">Go!</button>
								                    </span>
								                </div>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<legend>Simple input with icons (disabled)</legend>
										<div class="form-group">
											<label class="control-label col-md-2">Input with icon</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-icon-left">
															<i class="fa fa-microphone"></i>
															<input class="form-control" disabled="disabled" placeholder="Left Icon" type="text">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">With right icon</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<div class="input-icon-right">
															<i class="fa fa-microphone"></i>
															<input class="form-control" disabled="disabled" placeholder="" type="text">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">Input with spinner</label>
											<div class="col-md-10">
												<div class="row">
													<div class="col-sm-12">
														<input class="form-control ui-autocomplete-loading" disabled="disabled" placeholder="" type="text">
													</div>
												</div>
											</div>
										</div>
									</fieldset>							
									<div class="form-actions">
										<div class="row">
											<div class="col-md-12">
												<button class="btn btn-primary" disabled="disabled" type="submit">
													<i class="fa fa-save"></i>
													Submit
												</button>
												<button class="btn btn-default" disabled="disabled" type="submit">
													Cancel
												</button>
											</div>
										</div>
									</div>
								</form>
							</div>
							<!-- end widget content -->
						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget" id="wid-id-3" data-widget-colorbutton="false" data-widget-editbutton="false">
						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"
						-->
						<header>
							<span class="widget-icon"> <i class="fa fa-eye-slash"></i> </span>
							<h2>Disabled Horizontal Form</h2>
						</header>
						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
							</div>
							<!-- end widget edit box -->
							<!-- widget content -->
							<div class="widget-body">
								<form>
									<fieldset>
										<input name="authenticity_token" type="hidden">
										<div class="form-group">
											<label>Text field</label>
											<input class="form-control" disabled="disabled" placeholder="Text field" type="text">
										</div>
										<div class="form-group">
											<label>Password field</label>
											<input class="form-control" disabled="disabled" placeholder="Password" type="password" value="mypassword">
										</div>
										<div class="form-group">
											<label>Textarea</label>
											<textarea class="form-control" disabled="disabled" placeholder="Textarea" rows="3"></textarea>
										</div>
										<div class="form-group">
											<label>Readonly</label>
											<span class="form-control">Read only text</span>
										</div>
									</fieldset>
									<div class="form-actions">
										<button class="btn btn-primary btn-lg" disabled="disabled">
											<i class="fa fa-save"></i>
											Submit
										</button>
									</div>
								</form>
							</div>
							<!-- end widget content -->
						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget" id="wid-id-5" data-widget-colorbutton="false" data-widget-editbutton="false">
						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"
						-->
						<header>
							<span class="widget-icon"> <i class="fa fa-eye-slash"></i> </span>
							<h2>Inline Form Disabled</h2>
						</header>
						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
							</div>
							<!-- end widget edit box -->
							<!-- widget content -->
							<div class="widget-body">
								<div class="alert adjusted alert-warning fade in">
									<button class="close" data-dismiss="alert">
										×
									</button>
									<i class="fa fa-fw fa-lg fa-exclamation"></i>
									<strong>Hey hey!</strong> I am disabled!
								</div>
								<form class="form-inline" role="form">
									<fieldset>
										<div class="form-group">
											<label class="sr-only">Email address</label>
											<input type="email" class="form-control" disabled="disabled" placeholder="Enter email">
										</div>
										<div class="form-group">
											<label class="sr-only">Password</label>
											<input type="password" class="form-control" disabled="disabled" placeholder="Password">
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" class="checkbox" disabled="disabled">
												<span>Remember me </span>
											</label>
										</div>
										<button type="submit" disabled="disabled" class="btn btn-primary">
											Sign in
										</button>
									</fieldset>
								</form>
							</div>
							<!-- end widget content -->
						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->
				</article>
				<!-- WIDGET END -->
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row">
				<!-- NEW WIDGET START -->
				<article class="col-sm-12">
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget" id="wid-id-8" data-widget-colorbutton="false" data-widget-editbutton="false">
						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"
						-->
						<header>
							<span class="widget-icon"> <i class="fa fa-columns"></i> </span>
							<h2>Column sizing</h2>
						</header>
						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
							</div>
							<!-- end widget edit box -->
							<!-- widget content -->
							<div class="widget-body">
								<div class="row">
									<div class="col-sm-12">
										<input type="text" class="form-control" placeholder=".col-sm-12">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-6">
										<input type="text" class="form-control" placeholder=".col-sm-6">
									</div>
									<div class="col-sm-6">
										<input type="text" class="form-control" placeholder=".col-sm-6">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-6">
										<input type="text" class="form-control" placeholder=".col-sm-6">
									</div>
									<div class="col-sm-3">
										<input type="text" class="form-control" placeholder=".col-sm-3">
									</div>
									<div class="col-sm-3">
										<input type="text" class="form-control" placeholder=".col-sm-3">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-3">
										<input type="text" class="form-control" placeholder=".col-sm-3">
									</div>
									<div class="col-sm-3">
										<input type="text" class="form-control" placeholder=".col-sm-3">
									</div>
									<div class="col-sm-6">
										<input type="text" class="form-control" placeholder=".col-sm-6">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-4">
										<input type="text" class="form-control" placeholder=".col-sm-4">
									</div>
									<div class="col-sm-4">
										<input type="text" class="form-control" placeholder=".col-sm-4">
									</div>
									<div class="col-sm-4">
										<input type="text" class="form-control" placeholder=".col-sm-4">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-2">
										<input type="text" class="form-control" placeholder=".col-sm-2">
									</div>
									<div class="col-sm-2">
										<input type="text" class="form-control" placeholder=".col-sm-2">
									</div>
									<div class="col-sm-2">
										<input type="text" class="form-control" placeholder=".col-sm-2">
									</div>
									<div class="col-sm-2">
										<input type="text" class="form-control" placeholder=".col-sm-2">
									</div>
									<div class="col-sm-2">
										<input type="text" class="form-control" placeholder=".col-sm-2">
									</div>
									<div class="col-sm-2">
										<input type="text" class="form-control" placeholder=".col-sm-2">
									</div>
								</div>
							</div>
							<!-- end widget content -->
						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->
				</article>
				<!-- WIDGET END -->
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row">
				<!-- NEW WIDGET START -->
				<article class="col-sm-12 col-md-12 col-lg-6">
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget" id="wid-id-9" data-widget-colorbutton="false" data-widget-editbutton="false">
						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"
						-->
						<header>
							<span class="widget-icon"> <i class="fa fa-columns"></i> </span>
							<h2>Right Aligned</h2>
						</header>
						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
							</div>
							<!-- end widget edit box -->
							<!-- widget content -->
							<div class="widget-body">
								<div class="row">
									<div class="col-sm-2 pull-right">
										<input type="text" class="form-control" placeholder=".col-sm-2">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-3 pull-right">
										<input type="text" class="form-control" placeholder=".col-sm-3">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-4 pull-right">
										<input type="text" class="form-control" placeholder=".col-sm-4">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-5 pull-right">
										<input type="text" class="form-control" placeholder=".col-sm-5">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-6 pull-right">
										<input type="text" class="form-control" placeholder=".col-sm-6">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-7 pull-right">
										<input type="text" class="form-control" placeholder=".col-sm-7">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-8 pull-right">
										<input type="text" class="form-control" placeholder=".col-sm-8">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-9 pull-right">
										<input type="text" class="form-control" placeholder=".col-sm-9">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-10 pull-right">
										<input type="text" class="form-control" placeholder=".col-sm-10">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-11 pull-right">
										<input type="text" class="form-control" placeholder=".col-sm-11">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-12 pull-right">
										<input type="text" class="form-control" placeholder=".col-sm-12">
									</div>
								</div>
							</div>
							<!-- end widget content -->
						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->
				</article>
				<!-- WIDGET END -->
				<!-- NEW WIDGET START -->
				<article class="col-sm-12 col-md-12 col-lg-6">
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget" id="wid-id-10" data-widget-colorbutton="false" data-widget-editbutton="false">
						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"
						-->
						<header>
							<span class="widget-icon"> <i class="fa fa-columns"></i> </span>
							<h2>Left Align</h2>
						</header>
						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
							</div>
							<!-- end widget edit box -->
							<!-- widget content -->
							<div class="widget-body">
								<div class="row">
									<div class="col-sm-2 pull-left">
										<input type="text" class="form-control" placeholder=".col-sm-2">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-3 pull-left">
										<input type="text" class="form-control" placeholder=".col-sm-3">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-4 pull-left">
										<input type="text" class="form-control" placeholder=".col-sm-4">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-5 pull-left">
										<input type="text" class="form-control" placeholder=".col-sm-5">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-6 pull-left">
										<input type="text" class="form-control" placeholder=".col-sm-6">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-7 pull-left">
										<input type="text" class="form-control" placeholder=".col-sm-7">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-8 pull-left">
										<input type="text" class="form-control" placeholder=".col-sm-8">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-9 pull-left">
										<input type="text" class="form-control" placeholder=".col-sm-9">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-10 pull-left">
										<input type="text" class="form-control" placeholder=".col-sm-10">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-11 pull-left">
										<input type="text" class="form-control" placeholder=".col-sm-11">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-12 pull-left">
										<input type="text" class="form-control" placeholder=".col-sm-12">
									</div>
								</div>
							</div>
							<!-- end widget content -->
						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->
				</article>
				<!-- WIDGET END -->
			</div>
			<!-- end row -->		
		</section>
		<!-- end widget grid -->
	</div>
	<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN PANEL -->
<!-- ==========================CONTENT ENDS HERE ========================== -->
<?php 
	//include required scripts
	include("inc/scripts.php"); 
?>
<!-- PAGE RELATED PLUGIN(S)
<script src="..."></script> -->
<script type="text/javascript">
	$(document).ready(function() {
		// PAGE RELATED SCRIPTS
		// class switcher for radio and checkbox
		$('input[name="demo-switcher-1"]').change( function() {
			  //alert($(this).val())
			  $this = $(this);
			  myNewClass = $this.attr('id');
			  $('.demo-switcher-1 input[type="checkbox"]').removeClass();
			  $('.demo-switcher-1 input[type="checkbox"]').addClass("checkbox "+ myNewClass);
			  $('.demo-switcher-1 input[type="radio"]').removeClass();
			  $('.demo-switcher-1 input[type="radio"]').addClass("radiobox "+ myNewClass);
		})
	})
</script>
