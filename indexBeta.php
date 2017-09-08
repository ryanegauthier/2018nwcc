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
								<h1>Hits for Hope</h1>
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
		
		    <div class="content-section-a" id="about">
		
		        <div class="container">
		            <div class="row">
		                <div class="col-lg-7 col-sm-6">
		                    <h2 class="section-heading">Hits for Hope 2016.</h2>
		                    <hr class="section-heading-spacer">
		                    <div class="clearfix"></div>
		                    <p class="lead"><strong>What:</strong> 6x6 Co-ed Volleyball Tournament with A, B and Jungle divisions</p>
		                    <p class="lead"><strong>Where:</strong> Spokane Christian Church/Valley Christian School Football Field<br/>
		                    10212 E 9th Ave, Spokane, WA 99206 (Old University High School)</p>
		                    <p class="lead"><strong>When:</strong> August 20, 2016 (All day)</p>
		                </div>
		                <div class="col-lg-5 col-sm-6">
		                    <img class="img-responsive" src="img/Hits4Hope2016.png" alt="">
		                </div>
		            </div>
		
		        </div>
		        <!-- /.container -->
		
		    </div>
		    <!-- /.content-section-a -->
		
		    <div class="content-section-b">
		
		        <div class="container">
		
		            <div class="row">
		                <div class="col-lg-5 col-sm-6">
		                    <img class="img-responsive" src="img/sallysHouse2.png" alt="">
		                </div>
		                <div class="col-lg-7 col-sm-6">
		                    <h2 class="section-heading">Why support Hits for Hope?</h2>
		                    <hr class="section-heading-spacer">
		                    <div class="clearfix"></div>
							<p class="lead">Last year, we raised over 15,000 dollars making it possible for us to help support Sally's house, the only emergency foster care program in Washington, providing CPS emergency foster care for children. Some of the children have been abandoned, abused or neglected. Others are victims of domestic violence. Some lived with sex offenders, in drug houses, or their parents were arrested and taken to jail. If you are interested in making a donation, you can do so by visiting (INSERT FUNDRAISING WEBSITE).</p>
							<p class="lead">Also, if you are interested in sponsoring the day of the event, we have sponsorship packages available (see attached). Feel free to give us a call at (937) 305-7858 with any questions or concerns. We thank you in advance for your support!
	</p>
		                </div>
		            </div>
		
		        </div>
		        <!-- /.container -->
		
		    </div>
		    <!-- /.content-section-b -->
			
		    <div class="content-section-a" id="signUp">
		
		        <div class="container">
					<div class="row">
						
	                    <h2 class="section-heading">Looking to signup?</h2>
	                    <p class="lead">View and download the signup form here, fill it out, and come back here to upload it (we'll get it in an email and respond shortly). How simple is that?</p>
						<div class="col-sm-8">
							<form name="contactform" method="post" action="/#signUp" enctype="multipart/form-data">
								<div class="form-group row">
									<label for="signup" class="col-sm-2 control-label pushl25">
										<i class="fa fa-download bigicon"></i>&nbsp;
									</label>
									<div class="col-sm-10">
										<a href="forms/Hits4Hope2016Registration.pdf" target="_blank">Hits for HOPE volleyball registration</a>
									</div>
								</div>
							<div class="form-group row">
								<label for="captain_name" class="col-sm-2 control-label">
									<i class="fa fa-user bigicon"></i><span class="fa fa-asterisk required"></span>
								</label>
								<div class="col-sm-10">
									<input class="form-control" type="text" name="captain_name" maxlength="50" size="30" value="<?php echo(@$_POST['captain_name']); ?>" placeholder="Captain Name" />
									<?php echo("<p class='text-danger'>" . @$_SESSION['cNameError'] . "</p>");?>
								</div>
							</div>
							<div class="form-group row">
								<label for="team_name" class="col-sm-2 control-label">
									<i class="fa fa-user bigicon"></i><span class="fa fa-asterisk required"></span>
								</label>
								<div class="col-sm-10">
									<input class="form-control" type="text" name="team_name" maxlength="50" size="30" value="<?php echo(@$_POST['team_name']); ?>" placeholder="Team Name" />
									<?php echo("<p class='text-danger'>" . @$_SESSION['tNameError'] . "</p>");?>
								</div>
							</div>
							<div class="form-group row">
								<label for="team_email" class="col-sm-2 control-label">
									<i class="fa fa-envelope-o bigicon"></i><span class="fa fa-asterisk required"></span>
								</label>
								<div class="col-sm-10">
									<input class="form-control" type="text" name="team_email" maxlength="80" size="30" value="<?php echo($_POST['team_email']); ?>" placeholder="Captian Email Address" />
									<?php echo("<p class='text-danger'>" . @$_SESSION['emailError'] . "</p>");?>
								</div>
							</div>
								<div class="form-group row">
									<label for="signup" class="col-sm-2 control-label pushl25">
	<!-- 									<i class="fa fa-file-pdf-o bigicon"></i>&nbsp; -->
										<i class="fa fa-upload bigicon"></i>&nbsp;
									</label>
									<div class="col-sm-10">
										<input class="form-control" type="file" name="signup" maxlength="40" size="30" value="<?php echo($_POST['signup']); ?>" placeholder="Upload" />
									</div>
								</div>
								<div class="g-recaptcha" data-sitekey="6LdadyMTAAAAAC_PD6Il9BQV69UwkrT-eqMY9oet"></div>
								<div class="form-group row">
									<div class="col-sm-10 col-sm-offset-2">
										<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
									</div>
								</div>				
							</form>
						</div>
					</div>
		        </div>
		        <!-- /.container -->
		
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