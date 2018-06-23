
<!DOCTYPE html>
<html>
<head>
<title>BookIt - Lets Book Something</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!-- //js -->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,700,500italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //fonts -->
<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
<!--pop-up-->
<script src="js/menu_jquery.js"></script>
<!--//pop-up-->
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-grids">
				<div class="logo">
					<h1><a  href="index.html"><span>BookIt</span></a></h1>
				</div>
				<!--navbar-header-->
        <div class="header-dropdown">
          <div class="emergency-grid">
            <ul>
              <li>	<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
                  <div id="loginBox">
                <form id="loginForm">
                  <div class="login-grids">
                    <div class="login-grid-left">
                      <fieldset id="body">
                        <fieldset>
                          <label for="email">Email Address</label>
                          <input type="text" name="email" id="email">
                        </fieldset>
                        <fieldset>
                          <label for="password">Password</label>
                          <input type="password" name="password" id="password">
                        </fieldset>
                        <input type="submit" id="login" value="Sign in">
                        <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                      </fieldset>
                      <span><a href="forgotpass.php">Forgot your password?</a></span>
                      <div class="or-grid">
                        <p>OR</p>
                      </div>
                      <div class="social-sits">
                        <div class="facebook-button">
                          <a href="#">Connect with Facebook</a>
                        </div>
                        <div class="chrome-button">
                          <a href="#">Connect with Google</a>
                        </div>
                        <div class="button-bottom">
                          <p>New account? <a href="signup.html">Signup</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              </div></li>
            </ul>
          </div>
          <div class="clearfix"> </div>
        </div>
				<div class="clearfix"> </div>
			</div>
			<div class="nav-top">
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt="" /></span>
					<ul class="nav1">
						<li><a href="nonuserNewride.php">New Ride</a></li>
						<li class="active"><a href="nonuserAbout.php">About Us</a></li>
					</ul>
					<div class="clearfix"> </div>
					<!-- script-for-menu -->
							 <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });

							</script>
						<!-- /script-for-menu -->
				</div>
				</div>
		</div>
	</div>
	<!--//header-->
	<!-- banner-bottom -->
		<!-- container -->

            <div class="container">
			<div class="about-info">
				<h2>A brief history of marQ</h2>
			</div>
			<div class="about-grids">
				<div class="col-md-8 about-left">
					<h3>Good Start at 2k17</h3>
					<p>We Started this project in later 2017 and we are happy to see you in our website as a part.</p>
					<br>
					<h3>Our Goal</h3>
					<p>Our Goal is to take marQ (our parent organisation) to take to the next level</p>
				</div>
				<div class="col-md-4 about-right">
          <img src="old.png" alt="" />
				</div>
			</div>
		</div>
		<!-- //container -->
	<!-- //banner-bottom -->
	<!-- footer -->
	<!-- //footer -->
	<div class="footer-bottom-grids">
		<!-- container -->
		<div class="container">

					<div class="clearfix"> </div>
					<div class="copyright">
						<p>Copyrights © BookIt by Old technologies</p>
					</div>
				</div>
		</div>
	<script defer src="js/jquery.flexslider.js"></script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
			});
			$(window).load(function(){
			$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			$('body').removeClass('loading');
			}
			});
		});
	</script>
</body>
</html>
