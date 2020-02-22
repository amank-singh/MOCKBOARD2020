<!DOCTYPE html>
<?php

session_start();
if(!isset($_SESSION['username'])){
  header('location:index.php');
  exit();
}
?>
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


<?php

$user = 'root';
$password = ''; //To be completed if you have set a password to root
$database = 'mockboardf'; //To be completed to connect to a database. The database must exist.
$port = NULL; //Default must be NULL to use default port
$mysqli = new mysqli('localhost', $user, $password, $database, $port);


if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

$email = $_SESSION['username'];
$s = "select * from data where email ='$email'";
$result = mysqli_query($mysqli, $s);
$row = mysqli_fetch_array($result);
$_SESSION['x']=$row['x'];
$_SESSION['y']=$row['y'];
$_SESSION['z']=$row['z'];

 ?>


    <a href="logout.php">LOGOUT</a>
<center>
  <h1 id="welcome-message">  WELCOME <?php echo $_SESSION['username'];
  echo "<br>";
  echo $_SESSION['x'];
  echo $_SESSION['y'];
  echo $_SESSION['z'];
  ?> </h1>
</center>
  <a href="check.php">Check</a>






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
