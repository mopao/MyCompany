

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to My Company</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script>
    document.getElementById("year").innerHTML = new Date().getFullYear();
	</script>
</head>
<body>
    <nav> Menu</nav>    
	<div class="container-fluid">
		<h1>Welcome to my company website!</h1>
        <div> animated text</div>
        <div>caroussel</div>
        <div>portfolio</div>		
		
	</div>

<footer>
	<small>&copy;<span id="year">2018</span> </small>
</footer> 

</body>
</html>