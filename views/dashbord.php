
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Modist - Free Bootstrap 4 Template by Colorlib</title>
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
  <body >
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
                <a class="dropdown-item" href="cart.php">Cart</a>
                <a class="dropdown-item" href="checkout.php">Checkout</a>
              </div>
            </li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
            <li class="nav-item"><a href="login.php" class="nav-link">logout</a></li>


	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
		
    <?php
session_start();

include "../core/compteC.php";

echo "<br> <br> <br> <br>";
 
$username=$_SESSION["username"];

$sql="SElECT * From compte where username='".$username."'";

$db = config::getConnexion();

$liste=$db->query($sql);

foreach($liste as $row){
	?>
        <tbody>
           
            <tr>
            <td><?PHP echo "iD" ?></td>

            <td><?PHP echo $row['id']; ?></td>
            <br>
            <td><?PHP echo "username" ?></td>
    <td><?PHP echo $row['username']; ?></td>
    <br>
    <td><?PHP echo "nom" ?></td>
	<td><?PHP echo $row['nom']; ?></td>
    <br>
    <td><?PHP echo "prenom" ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
    <br>
    <td><?PHP echo "password" ?></td>
	<td><?PHP echo $row['pasword']; ?></td>
    <br>
    <td><?PHP echo "numero" ?></td>
    <td><?PHP echo $row['numero']; ?></td>
    <br>
    <td><?PHP echo "email" ?></td>
    <td><?PHP echo $row['email']; ?></td>
    <br>
                <td><form method="POST" action="supprimercompte.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
  </td>
  
	<td><a style="color:rgba(47, 62, 94, 1); padding-left:47%" href="modifiercompte_utlisateur.php?id=<?PHP echo $row['id']; ?>">
  Modifier</a></td>
  <hr style="color:black">
            </tr>
           
        </tbody>
        <?PHP
    }
    ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    
  </body>
</html>