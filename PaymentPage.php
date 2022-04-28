<?php
session_start();
require 'config.php';
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link href="style/main.css?v=3<?php echo time(); ?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Merriweather" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
	<!-- MAIN NAV BAR -->
	<div class="mainNavBar">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<a class="navbar-brand text-primary" href="homepage.php" style="display: flex; align-items: center">
				<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#fd6e00" class="bi bi-play" viewBox="0 0 16 16">
  					<path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"/>
				</svg>
	
            	<span id="mainTitle">Entertainment Central</span>
            </a>
			<div class="collapse navbar-collapse" id="mainNavTabs">
				<ul class= "navbar-nav ml-auto" id="mainNav">
					<li class="nav-item" >
						<h5 class="nav-link active" id="mainNavLink" onClick="window.location='movies.php'">Movies</h5>
					</li>
					<li class="nav-item" >
						<h5 class="nav-link" id="mainNavLink" onClick="window.location='music.php'">Music</h5>
					</li>

					<li class="nav-item">
						<h5 class="nav-link" id="mainNavLink" onClick="window.location='games.php'">Games</h5>
					</li>
				</ul>
			</div>
			<div class="collapse navbar-collapse" id="rightMainNavBar">
				<ul class= "navbar-nav mr-auto">
					<li id="shoppingCartIcon">
						<button class="btn btn-outline-light" id="shoppingCartBtn" onClick="location.href='shoppingCart.php'">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
								<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
							</svg> 
						</button>
					</li>
					<li>
						<input class="form-control" type="search" placeholder="Search" aria-label="Search">
					</li>
					<li>
						<button class="btn btn-outline-success" type="submit" id="searchBtn">Search</button>
					</li>
					<li>
						<button class="btn btn-primary" type="button" id="logOutBtn" onClick="location.href='index.php'">Log Out</button>
					</li>
				</ul>
			</div>
		</nav>
	</div>

    <!-- PAYMENT PAGE -->  
    <div class="container">
		<h2 class="mb-5"> Payment information</h2>
        <form id="payment information">
            <div class="first-row">
                <div class="col-6">
				    <label for="cname">Card Holder</label>
                    <input type="text" id="cname" name="cardname" placeholder="cname"></input>
                </div>
            </div>
            <div class="second-row">
                <div class="col-6">
				    <label for="cname">Card number</label>
                    <input type="text" id="ccnum" name="Card number" placeholder="ccnum"></input> 
                </div>
                <div class="col-6">
				    <label for="expmonth">EXP Month</label>
                    <input type="text" id="expmonth" name="expmonth" placeholder="expmonth"></input>
                </div>
            </div>
            <div class="row">
               <div class="col-6">
				  <label for="expyear">EXP Year</label>
                  <input type="text" id="expyear" name="expyear" placeholder="expyear"></input>
            </div>
		    <div class="row">
			  <div class="col-6">
			    <label for"cvv">CVV</label>
			    <input type="text" id="cvv" name="cvv" placeholder="cvv"></input>
			    <img src="1200px-Visa.jpg" alt="visa" id="visaImg">
				<img src="Mastercard-Symbol.jpg" alt="mastercard" id="mastercardImg">
				<img src="American-Express-logo.jpg" alt="american express" id="americanexpressImg">
				<img src="Discover-Logo.jpg" alt="Discover" id="DiscoverImg">
		   </div>
		</div>
     </div>
			<div class="row d-flex justify-content-center">
            	<button id="continue to checkoutBtn" onClick="window.location='payment.php">
					Continue to checkout
				</button> 
			</div>
        </form>
    </div>
</body>
</html>
		