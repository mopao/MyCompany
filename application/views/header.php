<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to My Company</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/caroussel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/portfolio.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/caroussel.js">	</script>
  <script src="<?php echo base_url(); ?>assets/js/portfolio.js">  </script>
        <script type="text/javascript" src="<?php echo base_url();?>js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/styles.css"/>
   <script>var base_url = '<?php echo base_url() ?>';</script>  
</head>
<body>
    <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
    <!-- <nav> Menu</nav> --
    
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    -->
  <!-- Brand 
  
  <div class="navbar-brand" style="width: 10%;">
    <a  href="#">Logo</a>
    <br>
    <span style="font-size:0.8em; color:white ; font-weight:bold; font-family:segoe print;"><br>
          <span class="typewrite" data-period="2000" data-type='[ "Applications", "Sites web", "Logiciels"]'>
              <span class="wrap"></span>
          </span>
    </span> 
  </div>
  -->
  <!-- Links 
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Link 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>
    -->
    <!-- Dropdown 
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
  </ul>
</nav>
    -->
 

 <header class="header">
     <div class="logo">
        <a href="" >LOGO</a>
        <span style="font-size:0.4em; color:red ; font-weight:bold; font-family:segoe print;">
              <span class="typewrite" data-period="2000" data-type='[ "Applications", "Sites web", "Logiciels"]'>
                  <span class="wrap"></span>
              </span>
        </span>
     </div>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
      <li><a href="#work">Applications</a></li>
      <li><a href="#about">Sites Web</a></li>
      <li><a href="#careers">Logiciels</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
</header>