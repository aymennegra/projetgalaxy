
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from www.spruko.com/demo/splite/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:32:58 GMT -->
<head>

		
		
		<title> forum </title>



		<!--Icons css-->
		<link rel="stylesheet" href="../assets/css/icons.css">

		<!--Style css-->
		<link rel="stylesheet" href="../assets/css/style.css">

	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">



	

	


	</head>

	<body class="app ">
	<div class="hero-wrap js-fullheight" style="background-image: url('../images/Head-Ceramique.jpg');">

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
	  <a class="navbar-brand" href="index.html">Galaxy design</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="oi oi-menu"></span> Menu
	  </button>

	  <div class="collapse navbar-collapse" id="ftco-nav">
		<ul class="navbar-nav ml-auto">
		<li class="nav-item active "><a  href="dashbord.php" class="nav-link ">dashbord</a></li>
		<li class="nav-item  "><a  href="forum.php" class="nav-link ">forum</a></li>

		  <li class="nav-item "><a href="index.html" class="nav-link">Home</a></li>
		  <li class="nav-item dropdown">
		  <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
		  <div class="dropdown-menu" aria-labelledby="dropdown04">
			  <a class="dropdown-item" href="shop.html">Shop</a>
			<a class="dropdown-item" href="product-single.html">Single Product</a>
			<a class="dropdown-item" href="cart.html">Cart</a>
			<a class="dropdown-item" href="checkout.html">Checkout</a>
		  </div>
		</li>
		  <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
		  <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
		  <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
		  <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
		  <li class="nav-item"><a href="login.php" class="nav-link">logout</a></li>

		</ul>
	  </div>
	</div>
  </nav>
<!-- END nav -->
	
<?PHP
session_start();

include "../core/forumC.php";

echo "<br> <br> <br> <br>";
 
$username=$_SESSION["username"];

$forum1C=new forumC();
        $forum=$forum1C->afficherforum();

$db = config::getConnexion();
foreach($forum as $row){



	?>
<br>
<br> <br> <br>
<div style="color:black;  ">
									<div class="card-body">
										<div style="box-shadow: 2px 3px 4px 4px rgba(0,0,0,.7);">
												<thead>
													<tr> 
													<br>
                                                    <th>username</th>
													<td> : <?PHP echo $row['username']; ?></td>

													<br>
                									<th>topic</th>
													<td> : <?PHP echo $row['topic']; ?></td>

													<br>
                									<th>message</th>
													<td> : <?PHP echo $row['message']; ?></td>

													<br>
													<th>date</th>
													<td> : <?PHP echo $row['date']; ?></td>

													
													<br>
													<th></th>
													<th></th>

													</tr>
												</thead>
												
        <tbody>
            <tr>
				
			
                <td  ><form method="POST" action="supprimerforum.php">
	<input class="btn btn-danger" type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['reference']; ?>" name="reference">
	</td>
	</form>
	

</div>
            </tr>
			
           
        </tbody>
         <?PHP
    }
    ?>
           <!-- taskiret el row !-->            

                    

                       
					</section>
				</div>
				<!--app-content closed-->

			<br>
<br>


				<!-- Popupchat open-->
				<form method="POST" action="ajouterforum.php">

				<div class="popup-box chat-popup" id="qnimate">
					<div class="popup-head">
						<div class="popup-head-left pull-left"><img src="../assets/img/avatar/avatar-3.jpg" alt="iamgurdeeposahan" class="mr-2"> Alica Nestle</div>
						<div class="popup-head-right pull-right">

							<button data-widget="remove" id="removeClass" class="chat-header-button pull-right" type="button"><i class="glyphicon glyphicon-off"></i></button>
						</div>
					</div>
					<div class="popup-messages">
						
					<div class="popup-messages-footer">
					
						<textarea id="status_message" name="message" placeholder="Type a message..." rows="10" cols="40" name="message"></textarea>
						<div class="btn-footer">
						
							<button class="bg_none pull-right" type="submit" ><i class="glyphicon glyphicon-send"> </i> </button>

						</div>
					</div>
				</div>
           </form>
				<!-- Popupchat closed -->

			</div>
		</div>
		<!--app closed-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-angle-up"></i></a>

		<!-- Popup-chat -->
		<a href="#" id="addClass"><i class="ti-comment"></i></a>

		<!--Jquery.min js-->
		<script src="../assets/js/jquery.min.js"></script>

		<!--popper js-->
		<script src="../assets/js/popper.js"></script>

		<!--Tooltip js-->
		<script src="../assets/js/tooltip.js"></script>

		<!--Bootstrap.min js-->
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Jquery star rating-->
		<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>

		<!--Jquery.nicescroll.min js-->
		<script src="../assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>

		<!--Scroll-up-bar.min js-->
		<script src="../assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

		<!--Sidemenu js-->
		<script src="../assets/plugins/toggle-menu/sidemenu.js"></script>

		<!--mCustomScrollbar js-->
		<script src="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- jQuery Sparklines -->
		<script src="../assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

		<!-- ECharts -->
		<script src="../assets/plugins/echarts/dist/echarts.js"></script>

        <!--Jquery.knob js-->
		<script src="../assets/plugins/othercharts/jquery.knob.js"></script>

		<!--Othercharts js-->
		<script src="../assets/plugins/othercharts/jquery.knob.js"></script>
		<script src="../assets/plugins/othercharts/jquery.sparkline.min.js"></script>

		<!--Morris js-->
		<script src="../assets/plugins/morris/morris.min.js"></script>
		<script src="../assets/plugins/morris/raphael.min.js"></script>

		<!-- ECharts -->
		<script src="../assets/plugins/echarts/echarts.js"></script>

		<!-- Chart.js -->
		<script src="../assets/plugins/Chart.js/dist/Chart.bundle.js"></script>

		<!--Scripts js-->
		<script src="../assets/js/scripts.js"></script>

		<!-- ECharts -->
		<script src="../assets/plugins/echarts/echarts.js"></script>

		<!--Dashboard js-->
		<script src="../assets/js/dashboard5.js"></script>
		<script src="../assets/js/sparkline.js"></script>

		<!--OtherCharts js-->
		<script src="../assets/js/othercharts.js"></script>
		<script src="../assets/js/jquery.showmore.js"></script>

	</body>

<!-- Mirrored from www.spruko.com/demo/splite/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:33:03 GMT -->
</html>