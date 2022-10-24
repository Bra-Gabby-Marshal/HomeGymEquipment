<?php
		include 'connection.php';
	if(isset($_POST['submit'])){
$email = $_POST['email'];
	
	$query = "INSERT INTO newsletter
                (email)
                VALUES ('".$email."')";
                mysqli_query($con,$query)or die ('Error in updating Database');
                ?>
        <script type="text/javascript">
            alert("Successfully Subscribed to our daily newsletter.");
        </script>
                <?php
}
      ?>	
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home Gym Equipment</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keyword" content="Home Gym Equipment, we provide the best gym equipment for your home trianing">
	<meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
   <div class="container-fluid nav-bar p-0">
        <div class="container-lg p-0">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 text-white display-4"><img src="img/logo.jpg" alt="HGM"></h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="information.php" class="nav-item nav-link">Information</a>
                        <a href="login.php" class="nav-item nav-link">Wanted</a>
                        <a href="workshop.php" class="nav-item nav-link">Workshop</a>
                        <a href="gallery.php" class="nav-item nav-link active">Gallery</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
						<a href="featured.php" class="nav-item nav-link">Featured</a>
                    </div>
					<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Search</button>
				 </form>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5 mb-5">
        <h1 class="display-4 text-white mb-3 mt-0 mt-lg-5">Our Gallery</h1>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Gallery</p>
        </div>
    </div>
    <!-- Page Header Start -->

	<!-- Latest Start -->
    <div class="container-fluid pt-5">
        <div class="container">
		<script>
			  function showRSS(str) {
			  if (str.length==0) {
				document.getElementById("rssOutput").innerHTML="";
				return;
			  }
			  if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			  } else {  // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			  xmlhttp.onreadystatechange=function() {
				if (this.readyState==4 && this.status==200) {
				  document.getElementById("rssOutput").innerHTML=this.responseText;
				}
			  }
			  xmlhttp.open("GET","getrssfeed.php?q="+str,true);
			  xmlhttp.send();
			}
		</script>
		<center>
			<form class="newswrapper">
				<select onchange="showRSS(this.value)">
				<option value="">Select an RSS-feed:</option>
				<option value="Google">Google News</option>
				<option value="ZDN">ZDNet News</option>
				</select>
			</form>
		<br>
		<div id="rssOutput">RSS-feed will be listed here...</div>
		</center>
		  <!-- Ajax and javascript -->
		  <br><br>
		<h2 style="text-align:center"><b></h2>
            <br><br>
			<div class="row">
                <div class="col-lg-4 mb-5">
                    <h1 class="mt-2 mb-3">PRODUCTS CURRENTLY FOR SALE</h1>
					<a href="https://discountonlinefitness.com/" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">View More</a>
                </div>
                <div class="col-lg-8 mb-5">
                    <div class="owl-carousel team-carousel">
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/p1.jpg" alt="">
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">TREADMILL</h5>
                                <a href="https://www.bestusedgymequipment.com/product/true-cs-550-treadmill/" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Buy</a>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/p2.jpg" alt="">
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">ARC TRAINER</h5>
                                <a href="https://www.bestusedgymequipment.com/product/cybex-770a-arc-trainer-w-standard-console/" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Buy</a>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/ll3.jpg" alt="">
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">ab machine</h5>
                                <a href="https://www.amazon.com/Fitlaya-Fitness-Equipment-Adjustable-Equipment/dp/B0818T77J3/ref=lp_23533911011_1_3" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Buy</a>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/ll4.jpg" alt="">
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">Sandbags</h5>
                                <a href="https://www.amazon.com/Yes4All-Sandbag-Weights-Weighted-Bags/dp/B08115S1HB/ref=lp_23533911011_1_11" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Buy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 pt-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 mt-n2 text-white display-4"><span class="text-primary">Newsletter</span><span class="text-primary"></span></h1>
                </a>
                <div class="d-flex justify-content-start mt-4">
					<form class="input-group" action="#" method="post">
                            <input type="text" name="email" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-4" name="submit" type="submit">Sign Up</button>
                            </div>
                    </form>
				</div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="font-weight-bold text-primary mb-4">Quick Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="index.php"><i class="fa fa-angle-right text-primary mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="information.php"><i class="fa fa-angle-right text-primary mr-2"></i>Information</a>
                    <a class="text-white mb-2" href="login.php"><i class="fa fa-angle-right text-primary mr-2"></i>Wanted</a>
                    <a class="text-white mb-2" href="workshop.php"><i class="fa fa-angle-right text-primary mr-2"></i>Workshop</a>
                    <a class="text-white" href="gallery.php"><i class="fa fa-angle-right text-primary mr-2"></i>Gallery</a>
					<a class="text-white" href="contact.php"><i class="fa fa-angle-right text-primary mr-2"></i>Contact Us</a>
					<a class="text-white" href="featured.php"><i class="fa fa-angle-right text-primary mr-2"></i>Featured</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="font-weight-bold text-primary mb-4">Get In Touch</h5>
                <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>123 Street, Ghana, Accra</p>
                <p><i class="fa fa-phone-alt text-primary mr-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope text-primary mr-2"></i>info@homegymequipment.com</p>
				<a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>            
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center">
            &copy; <a class="font-weight-semi-bold" href="#">www.homegymequipment</a>. All Rights Reserved. Designed by
            <a class="font-weight-semi-bold" href="#">Name</a>
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>