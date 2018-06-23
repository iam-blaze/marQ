<?php
session_start();
$id = $_SESSION['id'];
$_SESSION['id'] = $id;

$con = mysqli_connect("localhost","root","","BookIt");

$result = mysqli_query($con,"select * from user_table where id='$id'") or die(mysql_error());
$row = mysqli_fetch_array($result);

if($row ['id']==$id && $row ['status']==1 && $from_table!=null)
{
    $from_table = filter_input(INPUT_POST, 'from_table');
    $_SESSION['from_table'] = $from_table;

    $seats = filter_input(INPUT_POST, 'seats');

    $result1 = mysqli_query($con,"select * from $from_table") or die(mysql_error());
    $row1 = mysqli_fetch_array($result1);


?>

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
							 <li class="button-bottom">
							<div class="date_btn" style="margin-top: 0px">
                                                            	<form action="logout.php" method="POST">
                                                                <input type="submit" value="Logout">
								</form>
                                                            </div>
                                                        </li>
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
                                                <li class="active"><a href="newRide.php">New Ride</a></li>
						<li><a href="history.php">History</a></li>
						<li><a href="about.php">About Us</a></li>
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
                                            <?php
                                                $i=1;
                                                    if($result1){
                                                do{
                                                    ?>
                                            <div class="container">
					<div class="col-md-9 product-right">
                                            <form action="userbooksingle.php" method="POST" enctype="multipart/form-data">
						<div class="product-right-grids">
							<div class="product-right-top">
								<div class="p-left">
                                                                    <a>
                                                 <?php
                                                 echo '<img src="data:image/jpeg;base64,'.base64_encode( $row1['image'] ).'" name="img" style="width:200px; margin-right:0px;"/>';
                                            ?></a>
									<div class="p-right-img">

									</div>
								</div>
								<div class="p-right">

									<div class="col-md-6 p-right-left">
                                                                            <a> <?php  echo $row1["bus_name"]; ?></a>
                                                                            <p>Bus Number : <input type="text" name="bus_num" style="background: #FFF; border:0px;" value="<?php echo $row1["bus_num"]; ?>" readonly="readonly"></p>
                                                                                <p>Bus Type : <?php  echo $row1['bus_type']; ?></p>
                                                                               <p><?php  echo $from_table; ?> to <?php  echo $row1['destination']; ?></p>
                                                                                <p>Date : <?php  echo $row1['date']; ?></p>
										<p class="p-call"><?php echo $row1['ph_no'];?></p>
									</div>
									<div class="col-md-6 p-right-right">
										<h6>Rating : <?php echo $row1['rating']; ?>/5</h6>
                                                                                <h6 style="padding-top: 5px">Seats : <?php echo $row1['seats']; ?></h6>
										<p><?php echo $row1['start_time']."-->".$row1['end_time']; ?></p>
                                                                                <span class="p-offer">$<?php echo $row1['cost']; ?></span>
                                                                                <span class="p-last-price">
                                                                                    <input type="submit" id="Search" style="font-size: 18px; padding: 2px 4px 4px 2px;" value="Book">
                                                                                </span>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
                                            </form>
						</div>
					</div>
                <?php }while($row1 = mysqli_fetch_array($result1)) ;} ?>
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
<?php
mysqli_close($con);
}else {
  header(location:)
}
?>
