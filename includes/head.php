<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title><?php echo($title); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
	<meta name="keywords" content="<?php echo($metaKeywords); ?>">
	<meta name="Description" content="<?php echo($metaDescription); ?>">
	<meta name="robots" content="all,index,follow">
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/main.css?v=<?php echo(time()); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- 	<script src="http://www.google.com/recaptcha/api.js"></script> -->
	<script src="http://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit&hl=en"></script>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
<!--                 <a class="navbar-brand topnav" href="/">Hits For Hope</a> -->
                <a class="navbar-brand topnav" href="/"><img src="../img/h4hLogo.png" alt="h4hLogo" />Hits For Hope</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/#about" id="topNav-about">
		                	<i class="fa fa-info-circle navIcon"></i>
	                        About
	                    </a>
                    </li>
                    <li>
                        <a href="/#signUp" id="topNav-signUp">
		                	<i class="fa fa-pencil navIcon"></i>
	                        Sign-Up
	                    </a>
                    </li>
                    <li>
                        <a href="/contact" id="topNav-contact">
		                	<i class="fa fa-send navIcon"></i>
	                        Contact
	                    </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
