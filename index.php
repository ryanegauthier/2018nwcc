<?php
	$title = "Vball Tourney | Sally's House | HitsforHope | HOPEWorldwide Spokane";
	$metaKeywords = "HOPE worldwide, Hits for Hope, Spokane, WA, Church, Christ, members, volleyball, Sally's House, Salvation Army,  HOPE Worldwide, nonprofit fundraising, non-profit, not-for-profit, online fundraiser, fund-raising events, fund raising, donor, donate, donations, philanthropy, philanthropic, charity, charities, charitable, giving, tax deductible";
	$metaDescription = "Hits for Hope is a 6on6 charity volleyball tournament fundraiser benefitting Salvation Army's Sally's House and the Spokane Chapter of HOPE Worldwide.";
	include('includes/head.php');
	include('includes/processForm.php');
?>

		<div class="mainContent">
		    <!-- Header -->
		    <div class="intro-header">
		        <div class="container">

		            <div class="row">
		                <div class="col-lg-12">
		                    <div class="intro-message">
														<h1>2018 NW Christian Conference</h1>
		                        <h3>Volleyball Tournament to support Sally's House</h3>
		                        <hr class="intro-divider">
		                    </div>
		                </div>
		            </div>

		        </div>
		        <!-- /.container -->

		    </div>
		    <!-- /.intro-header -->

		    <!-- Page Content -->

		    <div class="content-section-b" id="about">

		        <div class="container">
		            <div class="row">
		                <div class="col-lg-7 col-sm-6">
		                    <h2 class="section-heading">Hits for Hope 2016</h2>
		                    <hr class="section-heading-spacer">
		                    <div class="clearfix"></div>
		                    <p class="lead"><strong>What:</strong> 6x6 Co-ed Volleyball</p>
		                    <p class="lead"><strong>Where:</strong> Valley Christian School Football Field</p>
		                    <p class="lead address2">10212 E 9th Ave, Spokane, WA 99206 (Old University High School)</p>
		                    <p class="lead"><strong>When:</strong> August 20, 2016 (Starting at 8AM)</p>
		                </div>
		                <div class="col-lg-5 col-sm-6">
		                    <img class="img-responsive" src="img/Hits4Hope2016.png" alt="">
		                </div>
		            </div>

		        </div>
		        <!-- /.container -->

		    </div>
		    <!-- /.content-section-a -->

		    <div class="content-section-a">

		        <div class="container">

		            <div class="row">
		                <div class="col-lg-5 col-sm-6">
		                    <img class="img-responsive" src="img/sallysHouse2.png" alt="">
		                </div>
		                <div class="col-lg-7 col-sm-6">
		                    <h2 class="section-heading">Why support Hits for Hope?</h2>
		                    <hr class="section-heading-spacer">
		                    <div class="clearfix"></div>
							<p class="lead">Last year, we raised over 15,000 dollars making it possible for us to help support Sally's house, the only emergency foster care program in Washington, providing CPS emergency foster care for children. Some of the children have been abandoned, abused or neglected. Others are victims of domestic violence. Some lived with sex offenders, in drug houses, or their parents were arrested and taken to jail.</p>
							<p class="lead">If you are interested in making a donation, you can do so by visiting <a href="http://hitsforhope2016.causevox.com/">hitsforhope2016.causevox.com</a>. Or if you are interested in sponsoring the day of the event, we have sponsorship packages available below in the sponsorship tab. Feel free to use our <a href="/contact">contact form</a> or give us a call at (937) 305-7858 with any questions or concerns. We thank you in advance for your support!
	</p>
		                </div>
		            </div>

		        </div>
		        <!-- /.container -->

		    </div>
		    <!-- /.content-section-b -->

		    <div class="content-section-b" id="signUp">
		        <div class="container">
					<div class="row">
						<?php echo("<h3 class='bg-success'>" . @$_SESSION['success'] . "</h3>");?>
						<div class="tabs">
						    <!-- Radio button and lable for #tab-content1 -->
						    <input type="radio" name="tabs" id="tab1" checked >
						    <label for="tab1">
						        <i class="fa fa-users"></i><span>PLAYERS</span>
						    </label>
						    <!-- Radio button and lable for #tab-content2 -->
						    <input type="radio" name="tabs" id="tab2">
						    <label for="tab2">
						        <i class="fa fa-support"></i><span>SPONSORS</span>
						    </label>
						    <div id="tab-content1" class="tab-content">
			                    <h2 class="section-heading">Looking to signup?</h2>
			                    <ul>
				                    <li class="lead"><i class="fa fa-hand-o-right"></i>View and download the signup form here</li>
				                    <li class="lead"><i class="fa fa-hand-o-right"></i>Print it, fill it out, and take a photo of it with your phone</li>
				                    <li class="lead"><i class="fa fa-hand-o-right"></i>OR You can use an editor to fill it out and save it to your computer</li>
				                    <li class="lead"><i class="fa fa-hand-o-right"></i>THEN come back here to upload it</li>
			                    </ul>
			                    <p class="lead">How simple is that?</p>
								<div class="col-sm-8">
									<form name="signupform" method="post" action="/#signUp" enctype="multipart/form-data">
										<div class="form-group row">
											<span class="col-sm-2 control-label pushl25">
												<i class="fa fa-download bigicon"></i>&nbsp;
											</span>
											<div class="col-sm-10">
												<a href="forms/Hits4Hope2016Registration.pdf" target="_blank">Hits for HOPE volleyball registration</a>
											</div>
										</div>
									<div class="form-group row">
										<span class="col-sm-2 control-label">
											<i class="fa fa-user bigicon"></i><span class="fa fa-asterisk required"></span>
										</span>
										<div class="col-sm-10">
											<input class="form-control" type="text" name="captain_name" maxlength="50" size="30" value="<?php echo(@$_POST['captain_name']); ?>" placeholder="Captain Name" />
											<?php echo("<p class='text-danger'>" . @$_SESSION['cNameError'] . "</p>");?>
										</div>
									</div>
									<div class="form-group row">
										<span class="col-sm-2 control-label">
											<i class="fa fa-user bigicon"></i><span class="fa fa-asterisk required"></span>
										</span>
										<div class="col-sm-10">
											<input class="form-control" type="text" name="team_name" maxlength="50" size="30" value="<?php echo(@$_POST['team_name']); ?>" placeholder="Team Name" />
											<?php echo("<p class='text-danger'>" . @$_SESSION['tNameError'] . "</p>");?>
										</div>
									</div>
									<div class="form-group row">
										<span class="col-sm-2 control-label">
											<i class="fa fa-envelope-o bigicon"></i><span class="fa fa-asterisk required"></span>
										</span>
										<div class="col-sm-10">
											<input class="form-control" type="text" name="team_email" maxlength="80" size="30" value="<?php echo($_POST['team_email']); ?>" placeholder="Captain Email Address" />
											<?php echo("<p class='text-danger'>" . @$_SESSION['emailError'] . "</p>");?>
										</div>
									</div>
										<div class="form-group row">
											<span class="col-sm-2 control-label pushl25">
			<!-- 									<i class="fa fa-file-pdf-o bigicon"></i>&nbsp; -->
												<i class="fa fa-upload bigicon"></i>&nbsp;
											</span>
											<div class="col-sm-10">
												<input class="form-control" type="file" name="signup" maxlength="40" size="30" value="<?php echo($_POST['signup']); ?>" placeholder="Upload" />
											<?php echo("<p class='text-danger'>" . @$_SESSION['fTypeError'] . "</p>");?>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-10 col-sm-offset-2">
												<div class="g-recaptcha" id="teamCaptcha"></div>
												<?php echo("<p class='text-danger'>" . @$_SESSION['gCaptchaError'] . "</p>");?>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-10 col-sm-offset-2">
												<input type="hidden" name="formType" value="teamSignup"/>
												<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
											</div>
										</div>
									</form>
								</div>
						    </div> <!-- #tab-content1 -->
						    <div id="tab-content2" class="tab-content">
			                    <h2 class="section-heading">Looking to sponsor HOPE Worldwide?</h2>
			                    <ul>
				                    <li class="lead"><i class="fa fa-hand-o-right"></i>View and download the sponsorship form here</li>
				                    <li class="lead"><i class="fa fa-hand-o-right"></i>Print it, fill it out, and take a photo of it with your phone</li>
				                    <li class="lead"><i class="fa fa-hand-o-right"></i>OR You can use an editor to fill it out and save it to your computer</li>
				                    <li class="lead"><i class="fa fa-hand-o-right"></i>THEN come back here to upload it</li>
			                    </ul>
			                    <p class="lead">How simple is that?</p>
								<div class="col-sm-8">
									<form name="sponsorform" method="post" action="/#signUp" enctype="multipart/form-data">
										<div class="form-group row">
											<span class="col-sm-2 control-label pushl25">
												<i class="fa fa-download bigicon"></i>&nbsp;
											</span>
											<div class="col-sm-10">
												<a href="forms/Hits4HopeSponsorships.pdf" target="_blank">Hits for HOPE Sponsorship form</a>
											</div>
										</div>
									<div class="form-group row">
										<span class="col-sm-2 control-label">
											<i class="fa fa-user bigicon"></i><span class="fa fa-asterisk required"></span>
										</span>
										<div class="col-sm-10">
											<input class="form-control" type="text" name="sponsor_name" maxlength="50" size="30" value="<?php echo(@$_POST['sponsor_name']); ?>" placeholder="Your Name" />
											<?php echo("<p class='text-danger'>" . @$_SESSION['sNameError'] . "</p>");?>
										</div>
									</div>
									<div class="form-group row">
										<span class="col-sm-2 control-label">
<!-- 											<i class="fa fa-user bigicon"></i><span class="fa fa-asterisk required"></span> -->
										</span>
										<div class="col-sm-10 col-sm-offset-2">
											<input class="form-control" type="text" name="corporation_name" maxlength="50" size="30" value="<?php echo(@$_POST['corporation_name']); ?>" placeholder="Your corporation" />
											<?php echo("<p class='text-danger'>" . @$_SESSION['corpNameError'] . "</p>");?>
										</div>
									</div>
									<div class="form-group row">
										<span class="col-sm-2 control-label">
											<i class="fa fa-envelope-o bigicon"></i><span class="fa fa-asterisk required"></span>
										</span>
										<div class="col-sm-10">
											<input class="form-control" type="text" name="sponsor_email" maxlength="80" size="30" value="<?php echo($_POST['sponsor_email']); ?>" placeholder="Captain Email Address" />
											<?php echo("<p class='text-danger'>" . @$_SESSION['sEmailError'] . "</p>");?>
										</div>
									</div>
										<div class="form-group row">
											<span class="col-sm-2 control-label pushl25">
			<!-- 									<i class="fa fa-file-pdf-o bigicon"></i>&nbsp; -->
												<i class="fa fa-upload bigicon"></i>&nbsp;
											</span>
											<div class="col-sm-10">
												<input class="form-control" type="file" name="sponsor" maxlength="40" size="30" value="<?php echo($_POST['sponsor']); ?>" placeholder="Upload" />
											<?php echo("<p class='text-danger'>" . @$_SESSION['sponTypeError'] . "</p>");?>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-10 col-sm-offset-2">
												<div class="g-recaptcha" id="sponsorCaptcha"></div>
												<?php echo("<p class='text-danger'>" . @$_SESSION['gCaptchaError'] . "</p>");?>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-10 col-sm-offset-2">
												<input type="hidden" name="formType" value="sponsorship"/>
												<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
											</div>
										</div>
									</form>
								</div>
						    </div> <!-- #tab-content2 -->
						</div>
					</div>
		        </div>
		    </div>








		    <div class="banner">

		        <div class="container">

		            <div class="row">
		                <div class="col-lg-10">
		                    <h2>Connect to Hope Worldwide Spokane Chapter:</h2>
		                </div>
		                <div class="col-lg-2">
		                    <ul class="list-inline banner-social-buttons pull-left">
		                        <li>
		                            <a href="/contact" class="btn btn-default btn-lg"><i class="fa fa-envelope fa-fw"></i> <span class="network-name">Email</span></a>
		                        </li>
		                    </ul>
		                </div>
		            </div>

		        </div>
		        <!-- /.container -->

		    </div>
		    <!-- /.banner -->
		</div>

<?php include('includes/footer.php'); ?>
