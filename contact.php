<?php 


	$title = "Contact Hits for Hope";
	$metaKeywords = "";
	$metaDescription = "";

	include('includes/head.php');
	include('includes/processForm.php');
	
?>

    <a name="about"></a>
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

	<div class="mainContent">
        <div class="container">
            <div class="row">
				<div class="col-xs-12">
					<h1>Contact Hits for Hope</h1>
					<?php echo("<h3 class='bg-success'>" . @$_SESSION['success'] . "</h3>");?>
					<p class="lead">Please contact us if you have any questions about the event or about how you can help.</p>
				</div>
            </div>
			
			<div class="row">
				<div class="col-sm-8">
					<form name="contactform" method="post" action="/contact/" enctype="multipart/form-data">
						<div class="form-group row">
							<label for="first_name" class="col-sm-2 control-label">
								<i class="fa fa-user bigicon"></i><span class="fa fa-asterisk required"></span>
							</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="first_name" maxlength="50" size="30" value="<?php echo(@$_POST['first_name']); ?>" placeholder="First Name" />
								<?php echo("<p class='text-danger'>" . @$_SESSION['fNameError'] . "</p>");?>
							</div>
						</div>
						<div class="form-group row">
							<label for="last_name" class="col-sm-2 control-label">
								<i class="fa fa-user bigicon"></i><span class="fa fa-asterisk required"></span>
							</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="last_name" maxlength="50" size="30" value="<?php echo(@$_POST['last_name']); ?>" placeholder="Last Name" />
								<?php echo("<p class='text-danger'>" . @$_SESSION['lNameError'] . "</p>");?>
							</div>
						</div>
						<div class="form-group row">
							<label for="email" class="col-sm-2 control-label">
								<i class="fa fa-envelope-o bigicon"></i><span class="fa fa-asterisk required"></span>
							</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" id="email" name="email" maxlength="80" size="30" value="<?php echo($_POST['email']); ?>" placeholder="Email Address" />
								<?php echo("<p class='text-danger'>" . @$_SESSION['emailError'] . "</p>");?>
							</div>
						</div>
						<div class="form-group row">
							<label for="telephone" class="col-sm-2 control-label pushl25">
								<i class="fa fa-phone bigicon"></i>&nbsp;
							</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="telephone" maxlength="30" size="30" value="<?php echo($_POST['telephone']); ?>" placeholder="Telephone" />
							</div>
						</div>
						<div class="form-group row">
							<label for="comments" class="col-sm-2 control-label">
								<i class="fa fa-comments bigicon"></i><span class="fa fa-asterisk required"></span>
							</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="comments" maxlength="1000" cols="25" rows="6" placeholder="Comments"><?php echo($_POST['comments']); ?></textarea>
								<?php echo("<p class='text-danger'>" . @$_SESSION['noteError'] . "</p>");?>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-10 col-sm-offset-2">
								<div class="g-recaptcha" id="contactCaptcha"></div>
								<?php echo("<p class='text-danger'>" . @$_SESSION['gCaptchaError'] . "</p>");?>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-10 col-sm-offset-2">
								<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
							</div>
						</div>				
					</form>
				</div>
			</div>

        </div>		
	</div>
<?php
	include('includes/footer.php');
?>