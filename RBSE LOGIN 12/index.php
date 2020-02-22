<!DOCTYPE html>

<html>
	<head>

		<!-- Website Title & Description for Search Engine purposes -->
		<title></title>
		<meta name="description" content="">

		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="includes/css/style.css" rel="stylesheet">

		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="includes/js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>



		<div class="container">
		<div class="login-icon">

			<img src="images/mockboard-logo-02.png" width="150px">

		</div>
		<div class="login-form">
			<div class="login-title">
				MockBoard Log In
			</div>
			<div class="login-input-parts">
				<form action="validation.php" method="post">
				<input class="login-input" placeholder="Roll Number"  name="user"/>
				<input class="login-input"  name="password" placeholder="Date Of Birth"/>
				<?php
 			 $fullURl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

 			 if(strpos($fullURl, "match=fail") == true){
 				 echo "Wrong Username Or Password";

 			 }

 	 	 	?>
				<button class="login-input button" type="submit">Log In</button>
			 </form>

			</div>

		</div>
		<div class="login-signup">

		</div>
	</div>











	<!-- First try for the online version of jQuery-->
	<script src="http://code.jquery.com/jquery.js"></script>

	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>

	<!-- Bootstrap JS -->
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<!-- Custom JS -->
	<script src="includes/js/script.js"></script>

	</body>
</html>
