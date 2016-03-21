<?php
/**
 * Created by PhpStorm.
 * User: archie
 * Date: 2/16/16
 * Time: 9:08 AM
 */
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Splash World Ltd |Travel Tours &amp; Leisure | Contact Us</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <!--custom css-->
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/vendor/modernizr.js"></script>
    <!--font awesome-->
    <link href="font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <!--Animate Css-->
    <link href="animate_css/animate.min.css" rel="stylesheet">
    <!--Hover Css-->
    <link href="Hover/css/hover-min.css" rel="stylesheet">
    <!--Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
    <link rel="icon" href="img/favicon.ico" type="image/ico" sizes="16x16">
    <meta name="author" content="Archie Owino Rombo">
      <meta name="description" content="">
      <meta name="generator" content="Brackets">
      <meta name="generator" content="Foundation 5">
      <meta name="contact" content="info@splashworldltd.com">
      <meta name="keywords" content="Travel,Tours,Leisure,Airport Transfers">
      <meta name="googlebot" content="noodp">
      <meta name="language" content="English">
      <meta name="robots" content="index, follow">
      <meta name="web_author" content="Bethel IT">
</head>
<body>

<div class="row"><!--Main Menu-->
    <div class=" small-12 medium-12 large-12 columns">
        <div class="">
            <nav class="top-bar" data-topbar role="navigation">
                <ul class="title-area">
                    <li class="name">
                        <a href="index.php"><img src="img/new_logo.png" class="img"> </a>
                    </li>
                    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                </ul>

                <section class="top-bar-section">
                    <!-- Right Nav Section -->
                    <ul class="right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="packages.php">Our Packages</a></li>
                        <li class="active"><a href="contact-us.php">Contact Us</a></li>
                    </ul>
                </section>
            </nav>
        </div>
    </div>
</div><!--Main Menu-->
<div class="row" style="padding-top:110px;"><!--map-->
  <div class="small-12 medium-12 columns">
    <iframe style="pointer-events:none;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.815599555847!2d36.821321214754086!3d-1.2845770990630692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d640d9d5f1%3A0x684a1d6fc8f6da02!2sIPS+Bldg%2C+Nairobi%2C+Kenya!5e0!3m2!1sen!2s!4v1456995165013" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
  </div><!--map-->
  <div class="row" style="background-color:#0973ba;padding-top:20px;padding-bottom:20px"><!-- contact info-->
    <div class="small-4 medium-4 columns"><!--home location-->


          <p class="address"></p>
          <!-- <i class="fa fa-home fa-2x" style="width:70px;height:70px;border-radius:50%;color:#fff;padding-left:20px;border:2px solid #fff;padding-top:17px;font-size:2.5em;"></i> -->
          <p style="color:#FFF;padding-left:70px;">Splash World Limited<br>Location:IPS Building, 5th Floor Kimathi Street, Nairobi<br>P.O. BOX 105697-00101 NAIROBI, KENYA</p>



    </div><!--home location-->
    <div class="small-4 medium-4 columns"><!--phone-->
      <p class="phone"></p>
      <p style="color:#FFF;padding-left:70px"><i class="fa fa-phone fa-lg"></i>&nbsp;020 2186163<br><i class="fa fa-mobile fa-lg"></i>&nbsp;+254 722775673<br><i class="fa fa-skype fa-lg"></i>&nbsp;SPLASH WORLD LIMITED</p>
    </div><!--phone-->
    <div class="small-4 medium-4 columns"><!--Email-->
      <p class="email"></p>
      <p style="color:#FFF;padding-left:70px">info@splashworldltd.com </p>
    </div><!--Email-->
  </div><!-- contact info-->
  <div class="row" style="margin-top:20px;margin-bottom:20px"><!--contact form title-->
    <div class="small-12 medium-12 columns">
      <h2 style="text-align:center;font-size:56px;line-height:74px">Get In Touch with Us</h2>
    </div>
  </div><!--contact form title-->
  <form name="contactform" method="post" action="email_form.php" id="form"><!--contact form-->
    <div class="row">
      <div class="small-1 medium-1 columns"><p>&nbsp;</p></div>
      <div class="small-10 medium-10 columns">
        <div class="row">
          <div class="small-4 columns"><!--Full Name-->
            <label>Full Name<sup>*</sup>
              <input type="text" placeholder="Enter Your Full Name" name="name" id="name" required>
            </label>
          </div><!--Full Name-->
          <div class="small-4 columns"><!--Email-->
            <label>Email<sup>*</sup>
              <input type="email" name="email" id="email" placeholder="Enter Your Email Address" required>
            </label>
          </div><!--Email-->
          <div class="small-4 columns"><!--Subject-->
            <label>Subject<sup>*</sup>
              <input type="text" name="subject" id="subject" placeholder="Enter The Subject of your message" required>
            </label>
          </div><!--Subject-->
        </div>
        <div class="row"><!--message-->
          <div class="small-12 columns">
            <label>Message<sup>*</sup>
              <textarea name="message" id="message" placeholder="Enter Your Message Here" rows="8" required></textarea>
            </label>
          </div>
        </div><!--message-->
        <div class="row"><!--send button-->
          <div class="small-6 small-offset-5 columns">
            <button type="submit" name="send" class="button radius">Send Email</button>
          </div>
        </div><!--send button-->
      </div>
      <div class="small-1 medium-1 columns"><p>&nbsp;</p></div>
    </div>
  </form><!--contact form-->


<?php include_once 'footer.php' ?>
