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
 <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/60c345627f4b000ac03712ee/1f7tce2ss';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
    <!-- Topbar Start -->
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
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="information.php" class="nav-item nav-link">Information</a>
                        <a href="login.php" class="nav-item nav-link">Wanted</a>
                        <a href="workshop.php" class="nav-item nav-link">Workshop</a>
                        <a href="gallery.php" class="nav-item nav-link">Gallery</a>
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


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="img/c1.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="img/c2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="img/c3.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                    </div>
                </div>
				 <div class="carousel-item">
                    <img class="img-fluid" src="img/c4.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center pb-1">
                <div class="col-lg-5">
                    <img class="img-thumbnail p-3" src="img/gym1.jpg" alt="">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0">
                    <h4 class="mt-2 mb-4">WELCOME TO HOME GYM AND EQUIPMENT</h4>
                    <p class="mb-4">Home Gym Equipment, we provide the best gym equipment for your home trianing</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- trend Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <h1 class="mt-2 mb-3">Trending Home Gym Equipment</h1>
					<a href="https://www.verywellfit.com/best-home-gym-4157711" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">View More</a>
                </div>
                <div class="col-lg-8 mb-5">
                    <div class="owl-carousel team-carousel">
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/l1.jpg" alt="">
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">Verywell Fit</h5>
                                <a href="https://www.verywellfit.com/best-home-gym-4157711" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Buy</a>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/l2.jpg" alt="">
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">Bowflex PR3000</h5>
                                <a href="https://www.verywellfit.com/best-home-gym-4157711" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Buy</a>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/l3.jpg" alt="">
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">Body Boss 2.0</h5>
                                <a href="https://www.verywellfit.com/best-home-gym-4157711" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Buy</a>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/l4.jpg" alt="">
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">Nordic Vault</h5>
                                <a href="https://www.verywellfit.com/best-home-gym-4157711" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Buy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- trend End -->
	
	<!-- Heavy Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <h1 class="mt-2 mb-3">Heavy Weight Home Gym Equipment</h1>
					<a href="https://www.mytopia.com.au/fitness" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">View More</a>
                </div>
                <div class="col-lg-8 mb-5">
                    <div class="owl-carousel team-carousel">
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/w1.jpg" alt="">
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">Dumbbell</h5>
                                <a href="https://www.mytopia.com.au/ativafit-2-x-40kg-adjustable-weight-dumbbell-set-for-home-gym-fitness-strength-training" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Buy</a>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/w2.jpg" alt="">
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">Waterproof Bag</h5>
                                <a href="https://www.mytopia.com.au/valk-25l-bike-rack-waterproof-pannier-bag-black?queryID=cd01ac74028b752f59f22a5517107803&objectID=4933&indexName=Production_Mytopiadefault_products" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Buy</a>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/w3.jpg" alt="">
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">Weight Bench</h5>
                                <a href="https://www.mytopia.com.au/proflex-7-in-1-weight-bench-multi-station-home-gym-b300" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Buy</a>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/w4.jpg" alt="">
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">Weight Plates</h5>
                                <a href="https://www.mytopia.com.au/proflex-pair-of-5lb-rubber-coated-olympic-weight-plates-for-gym-home-fitness-bodybuilding-weights-training?queryID=6ff1240ca058df6cfcff51e1fcdc29f9&objectID=3916&indexName=Production_Mytopiadefault_products" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Buy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Heavy End -->
	
		   <!-- Wearable Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <h1 class="mt-2 mb-3">Our Wearable Home Gym Equipment</h1>
					<a href="https://www.verywellfit.com/best-home-gym-4157711" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">View More</a>
                </div>
                <div class="col-lg-8 mb-5">
                    <div class="owl-carousel team-carousel">
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/ww1.jpg" alt="">
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">Reflective Strap</h5>
                                <a href="https://www.aliexpress.com/item/1005002029450158.html?spm=a2g0o.detail.0.0.2c57503aVMzqXN&gps-id=pcDetailBottomMoreThisSeller&scm=1007.13339.291025.0&scm_id=1007.13339.291025.0&scm-url=1007.13339.291025.0&pvid=cc17de45-6f10-4e29-b470-2edfe0db858e&_t=gps-id:pcDetailBottomMoreThisSeller,scm-url:1007.13339.291025.0,pvid:cc17de45-6f10-4e29-b470-2edfe0db858e,tpp_buckets:668%232846%238114%231999&pdp_ext_f=%7B%22sku_id%22%3A%2212000018466433239%22%2C%22sceneId%22%3A%223339%22%7D&pdp_npi=2%40dis%21GHS%219.2%216.85%21%21%21%21%21%402103222516642824280637280e1598%2112000018466433239%21rec" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Buy</a>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/ww2.jpg" alt="">
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">Flashing Lamp</h5>
                                <a href="https://www.aliexpress.com/item/1005001556947046.html?spm=a2g0o.detail.1000060.2.6e695046gdjPCe&gps-id=pcDetailBottomMoreThisSeller&scm=1007.13339.291025.0&scm_id=1007.13339.291025.0&scm-url=1007.13339.291025.0&pvid=61246813-0385-46f2-a0da-4f56505fee48&_t=gps-id:pcDetailBottomMoreThisSeller,scm-url:1007.13339.291025.0,pvid:61246813-0385-46f2-a0da-4f56505fee48,tpp_buckets:668%232846%238114%231999&pdp_ext_f=%7B%22sku_id%22%3A%2212000016580288439%22%2C%22sceneId%22%3A%223339%22%7D&pdp_npi=2%40dis%21GHS%2130.26%2123.0%21%21%21%21%21%402103222716642824684444350e5ed2%2112000016580288439%21rec" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Buy</a>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/ww3.jpg" alt="">
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">Compression Socks</h5>
                                <a href="https://www.aliexpress.com/item/1005003718482848.html?spm=a2g0o.detail.1000060.3.1b894a84uBz6Ef&gps-id=pcDetailBottomMoreThisSeller&scm=1007.13339.291025.0&scm_id=1007.13339.291025.0&scm-url=1007.13339.291025.0&pvid=afcb775d-d375-42a3-9f6d-8a1118738992&_t=gps-id:pcDetailBottomMoreThisSeller,scm-url:1007.13339.291025.0,pvid:afcb775d-d375-42a3-9f6d-8a1118738992,tpp_buckets:668%232846%238114%231999&pdp_ext_f=%7B%22sku_id%22%3A%2212000026921773486%22%2C%22sceneId%22%3A%223339%22%7D&pdp_npi=2%40dis%21GHS%2192.01%2161.65%21%21%21%21%21%40210312cb16642828534562746e1e01%2112000026921773486%21rec" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Buy</a>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/ww4.jpg" alt="">
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">Telescopic Rope</h5>
                                <a href="https://www.aliexpress.com/item/1005001582341954.html?spm=a2g0o.detail.1000060.1.4e9b58afQgzWOQ&gps-id=pcDetailBottomMoreThisSeller&scm=1007.13339.291025.0&scm_id=1007.13339.291025.0&scm-url=1007.13339.291025.0&pvid=28b7d96d-20ee-4fcb-9d74-bc267cf748c7&_t=gps-id:pcDetailBottomMoreThisSeller,scm-url:1007.13339.291025.0,pvid:28b7d96d-20ee-4fcb-9d74-bc267cf748c7,tpp_buckets:668%232846%238114%231999&pdp_ext_f=%7B%22sku_id%22%3A%2212000016684718283%22%2C%22sceneId%22%3A%223339%22%7D&pdp_npi=2%40dis%21GHS%2193.34%2166.25%21%21%21%21%21%4021032fa316642828638747846e208b%2112000016684718283%21rec" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Buy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wearable End -->
	
    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center">
                <small class="bg-primary text-white text-uppercase font-weight-bold text-center px-1">Our Blog</small>
                <h1 class="mt-2 mb-5">Video of featured products this month</h1>
            </div>
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="position-relative">
                        <embed src="video/best_home_gym_equipment_for_home_2021,_home_gym_workout_kit_Best_Quality_home_gym_combo_-Gym_Insane(720p).mp4" width="95%" height="300px"></embed> 
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="position-relative">
                        <embed src="video/Home_gym_with_smith_&_Functional_Trainer_Exercise_Video_-_Dynamo_Fitness(240p).mp4" width="95%" height="300px"></embed> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
	
	<?php
			// counter
			require('connection.php');
		//update viewsCounter

		  $sql = "UPDATE counter SET counter = counter+1 WHERE id = '1'";
		  $result = mysqli_query($con, $sql);


		$query = "SELECT * FROM counter WHERE id ='1'";
		$run = mysqli_query($con, $query);
		while ($row = mysqli_fetch_array($run)){

		$counter = $row['counter'];

		}
		?>
		Total Visitor Count: <?php echo $counter; ?>
		

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
	
			<script>
var free_cookieconsent = {
    cookievalue : "",
	cookiename: "FREE_CONSENT",
	reload: true,
	self : this,
	analytic : "checked",
	advertisements : "checked",
	personalisation : "checked",
	restorechecked : true,
	init: function(objname){
		this.setCSS();
		this.createCC(objname);
		this.hideCC();
		this.setHeadText('<h3>We use cookies</h3>');
		this.setMainText('When you click &apos;Ok&apos;, you accept all cookies on our website. We can optimize our website. More info see <a href="/privacy-cookies">privacy- en cookies</a>');
		this.setAcceptButtonText('Ok');
		this.setRejectButtonText('No Thanks');		
		if(this.getCookie(this.cookiename)==""){
			this.showCC();
		}
	},
    setHeadText: function(text) {
		document.getElementById("headtext").innerHTML=text;
    },
    setMainText: function(text) {
		document.getElementById("maintext").innerHTML=text;
    },
    setAcceptButtonText: function(text) {
		document.getElementById("acceptbuttontext").innerHTML=text;
    },
	setRejectButtonText: function(text) {
		document.getElementById("rejectbuttontext").innerHTML=text;
    },
	hideCC: function(){
		document.getElementById('cookieConsent').style.display = "none";
	},
	showCC: function(){
		document.getElementById('cookieConsent').style.display = "block";
		var cc_cookie = this.getCookie(this.cookiename);
	},	
	getGUID: function(){
		return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
					  var r = Math.random()*16|0, v = c == 'x' ? r : (r&0x3|0x8);
					  return v.toString(16);
					});
	},
	setCookie: function(cname, cvalue, exdays, cdomain) {
		var d = new Date();
		var ccdomain="";
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+ d.toUTCString();
		if(typeof(cdomain)!="undefined"){
			 ccdomain = ";domain=" + cdomain;
		}
		document.cookie = cname + "=" + cvalue + ";" + expires + ccdomain + ";path=/";
		
	},
	getCookie: function(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for(var i = 0; i <ca.length; i++) {	
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	},
	okButton: function(){
		this.hideCC();
		this.setCookie(this.cookiename,"A"+this.cookievalue,365,location.host);
	},
	setCSS: function(){
		var css='.cookieConsent {' + 
			 'font-family: ProximaNova-Regular,Helvetica,Arial,sans-serif;' + 
			 'position: fixed;' + 
			 'width: 100%;' + 
			 'bottom: 0;' + 
			 'background-color:#222222;' + 
			 'display: none;' + 
			 'z-index:999;' + 
		'}' + 
		' .cookieConsent.open {' + 
		'	 display: block;' + 
		'}' + 
		' .cookieConsent__wrapper {' + 
			'top:0;'+
			//'position: fixed;' + 
			'bottom: inherit;' + 
			'z-index: 100;' + 
			'-webkit-box-sizing: border-box;' + 
			'box-sizing: border-box;' + 
			'width: 100%;' + 
			'padding: 25px 10px;' + 
			'background-color: #eeeeee;' + 
			'color: #ffffff;' + 
		'}' + 
		 '.cookieConsent__container {' + 
			' padding: 5px;' + 
			' margin: 0 auto;' + 
		'}' + 
		 '.cookieConsent__container a {' + 
			' color: #ffffff;' + 
			' text-decoration: underline;' + 
		'}' + 
		 '.cookieConsent__container p {' + 
			' margin-top: 0;' + 
		'}' + 
		' @media screen and (min-width: 760px) {' + 
			' .cookieConsent__container {' + 
			'	 max-width: 770px;' + 
			'	 margin: 0 auto;' + 
			'}' + 
		'}' + 
		'.cookieConsent__form {' + 
			' display: -webkit-box;' + 
			' display: -ms-flexbox;' + 
			' display: flex;' + 
			' -webkit-box-pack: justify;' + 
			' -ms-flex-pack: justify;' + 
			' justify-content: space-between;' + 
		'}' + 
		 '@media screen and (min-width: 760px) {' + 
			' .cookieConsent__form > div {' + 
				' -webkit-box-align: center;' + 
				' -ms-flex-align: center;' + 
				' align-items: center;' + 
			'}' + 
		'}' + 
		 '@media screen and (min-width: 760px) {' + 
			' .cookieConsent__form > div span {' + 
				' margin-right: 25px;' + 
			'}' + 
		'}' + 
		'.cookieConsent__form-submit {' + 
			' width: 100%;' + 
			' display: -webkit-box;' + 
			' display: -ms-flexbox;' + 
			' display: flex;' + 
			' -webkit-box-align: end;' + 
			' -ms-flex-align: end;' + 
			' align-items: flex-end;' + 
			' -webkit-box-pack: end;' + 
			' -ms-flex-pack: end;' + 
			' justify-content: flex-end;' + 
		'}' + 
		
		' .cookieConsent__form-submit > button {min-width: 180px; height: 48px;' + 
			' background-color: #64b265;' + 
			' padding: 5px 35px;' + 
			' border: none;' + 
			' border-radius: 6px;' + 
			' color: #ffffff;' + 
			' font-size: 16px;' + 
			' font-weight: 600;' + 
			' line-height: 24px;' + 
		'}' + 
		 '.consentCategories {' + 
			 'display: -webkit-box;' + 
			 'display: -ms-flexbox;' + 
			 'display: none;' + 
			 '-webkit-box-orient: vertical;' + 
			 '-webkit-box-direction: normal;' + 
			 '-ms-flex-direction: column;' + 
			 'flex-direction: column;' + 
			 'font-weight: 600;' + 
		'}' + 
		 '@media screen and (min-width: 760px) {' + 
			' .consentCategories {' + 
				' min-width: 70%;' + 
			'}' + 
		'}' + 
		' @media(max-width: 740px) {.cookieConsent__form-submit>button {width: 100%; margin-right: 0;}}' +
		' @media(min-width: 740px) {button.accept-cookies {margin-right: 20px;}}'+
		'button.accept-cookies {background-color: #40b192;margin-bottom:12px;}' +
		'button.accept-cookies:hover{background-color: #328C73;cursor: pointer}' +
		'button.reject-cookies {background-color: #ffffff; border: 2px solid #40b192; color: #40b192; margin-bottom:12px;}' +
		'button.reject-cookies:hover{border-color: #328C73;color: #328C73;cursor: pointer}' +
		'.cookieConsent__form>div{flex-wrap:wrap; justify-content:flex-start; align-items:flex-start}' +
		'.cookieConsent__form>div label{ font-weight:normal; line-height:28px; padding-left:37px;}' +
		'.cookieConsent__container h3 {color: #4e4e4e; font-size:20px; margin: 12px 0; font-family: ProximaNova-Regular,Helvetica,Arial,sans-serif; font-weight: 600;}' +
		'.cookieConsent__container p {color: #585858; margin-bottom: 12px;}' +
		'.cookieConsent__container a {color: #562772; border-bottom: none;}' +
		'.cookieConsent__container a:hover {color: #3c1b4f;}';
		head = document.head || document.getElementsByTagName('head')[0],
		style = document.createElement('style');
		style.type = 'text/css';
		if (style.styleSheet){
		  // This is required for IE8 and below.
		  style.styleSheet.cssText = css;
		} else {
		  style.appendChild(document.createTextNode(css));
		}
		head.appendChild(style);	
	},
	createCC: function(objname){
		var self = this;
		var html='<div id="cookieConsent" class="cookieConsent open">';
		html+='		<div class="cookieConsent__wrapper">';
		html+='		<div class="cookieConsent__container">';
		html+='			<div id="headtext"> </div>';
		html+='			<p id="maintext"> ';
		html+='			</p>';
		html+='			<form class="cookieConsent__form">';
		html+='				<div class="consentCategories">';
		html+='				</div>';
		html+='				<div class="cookieConsent__form-submit">';
		html+='					<button id="acceptbuttontext" type="button" class="accept-cookies" onclick="'+objname+'.setAllCookies();'+objname+'.okButton();"></button>';
		html+='					<button id="rejectbuttontext" type="button" class="reject-cookies" onclick="'+objname+'.setMinimalCookies();'+objname+'.okButton();"></button>';
		html+='				</div>';
		html+='			</form>';
		html+='		</div>';
		html+='	</div>';
		html+='</div>';
		var x = document.createElement("div");
		x.innerHTML = html;					
		document.body.appendChild(x);
	},
	setAllCookies: function(){
		this.cookievalue = 'true';
	},
	setMinimalCookies: function(){
		this.cookievalue = 'false';
	}
}
var cc = Object.create(free_cookieconsent);
cc.init("cc");
//console.log('Init cookieconsent');
</script> 
</body>

</html>