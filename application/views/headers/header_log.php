<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
      <title>Malayali Marriages.com</title>
      <meta name="description" content="">
      <meta name="keywords" CONTENT="">
      <meta name="author" content="">
      <!-- Twitter Card data -->
      <meta name="twitter:card" value="summary">
      <!-- Open Graph data -->
      <meta property="og:title" content="Malayali Marry.com" />
      <meta property="og:type" content="article" />
      <meta property="og:url" content="" />
      <meta property="og:image" content="" />
      <meta property="og:description" content="" />
      <!-- Schema.org markup for Google+ -->
      <meta itemprop="name" content="Malayali Marry.com">
      <meta itemprop="description" content="">
      <meta itemprop="image" content="">
      <!-- fb -->
      <meta property="og:url" content="" />
      <meta property="og:title" content="Malayali Marry.com" />
      <meta property="og:image" content="">
      <meta property="og:site_name" content="" />
      <meta property="og:description" content="" />
      <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
     
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/home1.css" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/innerpage.css" rel="stylesheet">
       <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Ledger&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> 
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <title>Malayali Marriages.com</title>
  </head>
  <body>

<nav class="navbar navbar-expand-md">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home"><img src="<?php echo base_url(); ?>assets/images/hed-logo.png" class="img-responsive animateds pulse" alt="logo"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"> <i class="fas fa-bars" style="color:#f50767; font-size:28px;"></i></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="nav navbar-nav navbar-left" style="width: 70%;">

                  <li class=""><a href="<?php echo base_url(); ?>index.php/home/about_us">About Us</a></li>
                  <li class=""><a href="<?php echo base_url(); ?>index.php/home/services">Services</a></li>
                   <li class=""><a href="<?php echo base_url(); ?>index.php/home/about_us">Payment</a></li>
                  <!--   <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Language</a>
                     <ul class="dropdown-menu">
                        <li><a href="http://malayalimarriages.com/index.php/packages">English</a></li>
                        <li><a href="http://malayalimarriages.com/index.php/packages">Malayalam</a></li>
                        
                     </ul>
                  </li> -->
                    
               
                  <li class="contact-nav-last"><a href="<?php echo base_url(); ?>index.php/home/contact">Contact us</a></li>

               </ul>
        <ul class="navbar-nav reg-nav nav-bt">
          <li class="nav-item hom-login-btn">
            <?php if($this->session->userdata('user_id')){?>
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/user">profile<?php echo $this->session->userdata('name');?></a>
            <?php }else{ ?>
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/Register/login_view">Login</a>
              <?php }?>
          </li>
          <li class="nav-item register-btn">
            <?php if($this->session->userdata('user_id')){?>

            <a class="nav-link" href="<?php echo base_url(); ?>index.php/register/logout">Logged Out &nbsp; &nbsp; &nbsp; &nbsp;<i class="fa fa-arrow-right bounce"></i></a>

            <?php }else{ ?>

              <a class="nav-link" href="<?php echo base_url(); ?>index.php/register">Register Free &nbsp; &nbsp; &nbsp; &nbsp;<i class="fa fa-arrow-right bounce"></i></a>

              <?php }?>
          </li>
        </ul>
      </div>
  </div>
    </nav>