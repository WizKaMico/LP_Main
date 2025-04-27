<?php include('./action/web/webAction.php'); ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel='stylesheet' type='text/css' href='//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css'/>
	<script src='//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js'></script>
	<script type='text/javascript'>
		//<![CDATA[
	window.addEventListener("load",function(){
	window.cookieconsent.initialise({
	"palette": {
		"popup": {
		"background": "#212121"
		},
		"button": {
		"background": "#ff545a"
		}
	},
	"position": "bottom-left",
	"content": {
		"href": "/p/cookies-policy.html"
	}
	});
	}                                           );                                       
	//]]>
	</script>
    <!--font-family-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- title of site -->
    <title>L&P Associates | Home</title>

    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="./public/assets/logo/favicon.png" />

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="./public/assets/css/font-awesome.min.css">

    <!--linear icon css-->
    <link rel="stylesheet" href="./public/assets/css/linearicons.css">

    <!--animate.css-->
    <link rel="stylesheet" href="./public/assets/css/animate.css">

    <!--flaticon.css-->
    <link rel="stylesheet" href="./public/assets/css/flaticon.css">

    <!--slick.css-->
    <link rel="stylesheet" href="./public/assets/css/slick.css">
    <link rel="stylesheet" href="./public/assets/css/slick-theme.css">

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="./public/assets/css/bootstrap.min.css">

    <!-- bootsnav -->
    <link rel="stylesheet" href="./public/assets/css/bootsnav.css">

    <!--style.css-->
    <link rel="stylesheet" href="./public/assets/css/style.css">

    <!--messsage.css-->
    <link rel="stylesheet" href="./public/assets/css/message.css">

    <!--responsive.css-->
    <link rel="stylesheet" href="./public/assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!--header-top start -->
    <?php include('./route/web/header-top/header_top.php'); ?>
    <!--/.header-top-->
    <!--header-top end -->

    <!-- top-area Start -->
    <?php include('./route/web/navbar/navbar.php'); ?>
    <!-- /.top-area-->
    <!-- top-area End -->

    <?php if(!empty($_GET['view'])) { ?>
    <?php switch($_GET['view']) { 
			case "HOME":
					// <!--welcome-hero start -->
					include('./route/web/hero/hero.php'); 
					// <!--/.welcome-hero-->
					// <!--welcome-hero end -->
					// <!--list-topics start -->
					include('./route/web/topics/topics.php'); 
					// <!--/.list-topics-->
					// <!--list-topics end-->
					// <!--works start -->
					include('./route/web/works/works.php');
					// <!--/.works-->
					// <!--works end -->
					// <!--blog start -->
					include('./route/web/blog/blog.php');
					// <!--/.blog-->
					// <!--blog end -->
					// <!--subscription strat -->
					include('./route/web/subscription/subscription.php'); 
					// <!--/subscription-->	
					// <!--subscription end -->
					// <!--message strat -->
					include('./route/web/message/message.php'); 
					// <!--/message-->	
					// <!--message end -->
				break;
			case "CONSULTATION":
					// <!--welcome-hero start -->
					include('./route/web/hero/hero_consultation.php'); 
					// <!--/.welcome-hero-->
					// <!--welcome-hero end -->
					// <!--message strat -->
					include('./route/web/message/message.php'); 
					// <!--/message-->	
					// <!--message end -->
				break;
			case "ISMASDIGITALBRANDSTRATEGY":
					// <!--welcome-hero start -->
					include('./route/web/hero/ismas_consultation.php'); 
					// <!--/.welcome-hero-->
					// <!--welcome-hero end -->
				break;
			default:
					// <!--welcome-hero start -->
					include('./route/web/hero/hero.php'); 
					// <!--/.welcome-hero-->
					// <!--welcome-hero end -->
					// <!--list-topics start -->
					include('./route/web/topics/topics.php'); 
					// <!--/.list-topics-->
					// <!--list-topics end-->
					// <!--works start -->
					include('./route/web/works/works.php');
					// <!--/.works-->
					// <!--works end -->
					// <!--blog start -->
					include('./route/web/blog/blog.php');
					// <!--/.blog-->
					// <!--blog end -->
					// <!--subscription strat -->
					include('./route/web/subscription/subscription.php'); 
					// <!--/subscription-->	
					// <!--subscription end -->
					// <!--message strat -->
					include('./route/web/message/message.php'); 
					// <!--/message-->	
					// <!--message end -->
				break;
		?>
    <?php } }else{ 
					// <!--welcome-hero start -->
					include('./route/web/hero/hero.php'); 
					// <!--/.welcome-hero-->
					// <!--welcome-hero end -->
					// <!--list-topics start -->
					include('./route/web/topics/topics.php'); 
					// <!--/.list-topics-->
					// <!--list-topics end-->
					// <!--works start -->
					include('./route/web/works/works.php');
					// <!--/.works-->
					// <!--works end -->
					// <!--blog start -->
					include('./route/web/blog/blog.php');
					// <!--/.blog-->
					// <!--blog end -->
					// <!--subscription strat -->
					include('./route/web/subscription/subscription.php'); 
					// <!--/subscription-->	
					// <!--subscription end -->
					// <!--message strat -->
					include('./route/web/message/message.php'); 
					// <!--/message-->	
					// <!--message end -->
		?>
    <?php } ?>
    <!--footer start-->
    <?php include('./route/web/footer/footer.php'); ?>
    <!--/.footer-->
    <!--footer end-->


    <!-- Include all js compiled plugins (below), or include individual files as needed -->

    <script src="./public/assets/js/jquery.js"></script>

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!--bootstrap.min.js-->
    <script src="./public/assets/js/bootstrap.min.js"></script>

    <!-- bootsnav js -->
    <script src="./public/assets/js/bootsnav.js"></script>

    <!--feather.min.js-->
    <script src="./public/assets/js/feather.min.js"></script>

    <!-- counter js -->
    <script src="./public/assets/js/jquery.counterup.min.js"></script>
    <script src="./public/assets/js/waypoints.min.js"></script>

    <!--slick.min.js-->
    <script src="./public/assets/js/slick.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!--Custom JS-->
    <script src="./public/assets/js/custom.js"></script>


    <!--Message JS-->
    <script src="./public/assets/js/message.js"></script>
</body>

</html>