<?php
/************************
*	PHP Form Processor	*
*************************/

//Trim removes white space after strip_tags gets rid of any html, javascript, etc tags from the input
$email = trim(strip_tags($_POST['email']));
$name = trim(strip_tags($_POST['name']));
$message = trim(strip_tags($_POST['message']));

//Creating a single variable to format and hold all the inputs
$body = "
Website Contact Form
Name: $name
Email Address: $email
Message: $message";

mail('joemo@mojoezone.com','SHIELD Contact Submission',$body,$email);
mail($email,'Your SHIELD Contact Submission',$body,'joemo@mojoezone.com');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
  <link rel="manifest" href="images/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <title>Home | SHIELD</title>
  <!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="css/reset.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />

</head>
<body>
  <header>
    <div>
      <div>
        <a href="tel:18001234567"><i class="icon-phone-circled"><span>1-800-123-4567</span></i></a>
        <a href="https://www.google.com/maps/place/6308+La+Valle+Plateada,+Rancho+Santa+Fe,+CA+92067/@33.0254322,-117.2005869,17z/data=!3m1!4b1!4m5!3m4!1s0x80dc0993404e6357:0x56700114c06bb9e6!8m2!3d33.0254322!4d-117.1983982" target="_blank"><i class="icon-location-circled"></i></a>
        <a href="https://www.facebook.com/" target="_blank"><i class="icon-facebook-circled"></i></a>
        <a href="https://www.instagram.com/" target="_blank"><i class="icon-instagram-circled"></i></a>
        <a href="https://www.twitter.com/" target="_blank"><i class="icon-twitter-circled"></i></a>
      </div>
    </div>
    <div>
      <a href="index.html"><img src="images/logo.svg" alt="SHIELD high-tech security Logo" /></a>
      <i id="menu" class="icon-menu"></i>
    </div>
  </header>

  <div>
    <div class="dtopversion">
      <input type="search" id="mySearch" placeholder="Search for something.."/>
      <a href="#"><i id="searchShow" class="icon-search-circled"></i></a>
      <a><i id="logIn" class="icon-login">Login</i></a>

      <div id="logInShow">
        <input type="text" id="userName" placeholder="Username"/>
        <input type="password" id="passWord" placeholder="Passwords"/>
        <p>
          <a href="https://www.google.com/maps/place/6308+La+Valle+Plateada,+Rancho+Santa+Fe,+CA+92067/@33.0254322,-117.2005869,17z/data=!3m1!4b1!4m5!3m4!1s0x80dc0993404e6357:0x56700114c06bb9e6!8m2!3d33.0254322!4d-117.1983982" target="_blank">New Member signs up at our HQ</a>
        </p>
      </div>
    </div>
  </div>

<div class="nav">
  <nav id="globalNav">
    <ul>
      <li><a class="active" href="index.html">Home</a></li>
      <li class="smcont"><a href="features.html">Features</a>
        <ul class="submenu">
          <li><a href="homesecurity.html">Home Security</a></li>
          <li><a href="officesecurity.html">Office Security</a></li>
          <li><a href="secretpathway.html">Secret Pathway</a></li>
        </ul>
      </li>
      <li class="smcont"><a href="products.html">Products</a>
        <ul class="submenu">
          <li><a href="video.html">Video</a></li>
          <li><a href="audio.html">Audio</a></li>
          <li><a href="others.html">Others</a></li>
        </ul>
      </li>
      <li><a href="staffs.html">Staff</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>
</div>

  <div>
    <div id="slider">
      <ul>
        <li><img class="slide showing" src="images/hslide1000.jpg" srcset="images/hslide480.jpg 480w, images/hslide768.jpg 768w, images/hslide1000.jpg 1000w" sizes="(max-width: 530px) 480px,(max-width: 818px) 768px, 1000px" alt="SHIELD Customers" /></li>
        <li><img class="slide" src="images/pslide1000.jpg" srcset="images/pslide480.jpg 480w, images/pslide768.jpg 768w, images/pslide1000.jpg 1000w" sizes="(max-width: 530px) 480px,(max-width: 818px) 768px, 1000px" alt="SHIELD Control System" /></li>
        <li><img class="slide" src="images/system1000.jpg" srcset="images/system480.jpg 480w, images/system768.jpg 768w, images/system1000.jpg 1000w" sizes="(max-width: 530px) 480px,(max-width: 818px) 768px, 1000px" alt="SHIELD Fingerprint System" /></li>
        <li><img class="slide" src="images/oslide1000.jpg" srcset="images/oslide480.jpg 480w, images/oslide768.jpg 768w, images/oslide1000.jpg 1000w" sizes="(max-width: 530px) 480px,(max-width: 818px) 768px, 1000px" alt="SHIELD Office Face Recognition System" /></li>
        <li><img class="slide" src="images/pathslide1000.jpg" srcset="images/pathslide480.jpg 480w, images/pathslide768.jpg 768w, images/pathslide1000.jpg 1000w" sizes="(max-width: 530px) 480px,(max-width: 818px) 768px, 1000px" alt="SHIELD Secret Pathway" /></li>
      </ul>
      <div class="slidebtn">
        <ul>
          <li id="prebtn"><i class="icon-left-open"></i></li>
          <li id="nextbtn"><i class="icon-right-open"></i></li>
        </ul>
      </div>
    </div>
  </div>


  <main>
    <div>
      <h1>Protection is our #1 Goal</h1>
      <div>
        <div>
          <?php
           //if the email was sent, show the success message
            echo '<div class="success" style="border: 1px dashed #000; padding: 10px">Thanks '.$name.'. Your message was sent. We will contact you at: '.$email.' winthin 24 hours. A copy of this submission was send to '.$email.'. Thank you for your time.</div>';
           ?>
        </div>
      </div>
      <section>
        <figure>
          <img src="images/iconCall.svg" alt="Shield Customer Service" />
          <figcaption>
            <h5><a href="tel:18001234567"><i class="icon-phone-circled"></i>Call us</a></h5>
          </figcaption>

        </figure>
        <figure>
          <img src="images/locationIcon.svg" alt="Shield Location" />
          <figcaption>
            <h5><a href="https://www.google.com/maps/place/6308+La+Valle+Plateada,+Rancho+Santa+Fe,+CA+92067/@33.0254322,-117.2005869,17z/data=!3m1!4b1!4m5!3m4!1s0x80dc0993404e6357:0x56700114c06bb9e6!8m2!3d33.0254322!4d-117.1983982" target="_blank">Direction</a></h5>
          </figcaption>

        </figure>
      </section>
      <form action="index.php" method="post" name="contact" id="contact">
        <label for="email">E-Mail</label>
        <input name="email" type="text" id="email" placeholder="youremail@name.com" required />
        <label for="name">Name</label>
        <input name="name" type="text" id="name" placeholder="First name and last name" required />
        <label for="message">Message</label>
        <textarea name="message" id="message" maxlength="100" spellcheck>
        </textarea>
        <button name="submit" type="submit" id="submit">Send</button>
      </form>
    </div>
  </main>

  <div class="aff">

    <div>
      <a href="http://www.sony.com/" target="_blank"><img src="images/sony.jpg" alt="Sony HD Security Camera" /></a>
    </div>
    <div>
    <a href="http://www.plattonline.com/webcampaign/prometheus/index.html" target="_blank"><img src="images/prometheus.jpg" alt="Alex Caragan Project" /></a>
    </div>

  </div>
  <a id="toTop" href="#"><i class="icon-up-circled"></i></a>

  <footer>
    <div>
      <div>
        <a href="tel:18001234567"><i class="icon-phone-circled"><span>1-800-123-4567</span></i></a>
        <a href="https://www.google.com/maps/place/6308+La+Valle+Plateada,+Rancho+Santa+Fe,+CA+92067/@33.0254322,-117.2005869,17z/data=!3m1!4b1!4m5!3m4!1s0x80dc0993404e6357:0x56700114c06bb9e6!8m2!3d33.0254322!4d-117.1983982" target="_blank"><i class="icon-location-circled"></i></a>
        <a href="https://www.facebook.com/" target="_blank"><i class="icon-facebook-circled"></i></a>
        <a href="https://www.instagram.com/" target="_blank"><i class="icon-instagram-circled"></i></a>
        <a href="https://www.twitter.com/" target="_blank"><i class="icon-twitter-circled"></i></a>
      </div>
      <table>
        <tr>
          <th>
            <a class="active" href="index.html">Home</a>
          </th>
          <th>
            <a href="features.html">Features</a>
          </th>
          <th>
            <a href="products.html">Products</a>
          </th>
        </tr>
        <tr>
          <th>
            <a href="staffs.html">Staffs</a>
          </th>
          <td>
            <a href="homesecurity.html">Home Security</a>
          </td>
          <td>
            <a href="video.html">Video</a>
          </td>
        </tr>
        <tr>
          <th>
            <a href="about.html">About</a>
          </th>
          <td>
            <a href="officesecurity.html">Office Security</a>
          </td>
          <td>
            <a href="audio.html">Audio</a>
          </td>
        </tr>
        <tr>
          <th>
            <a href="contact.html">Contact</a>
          </th>
          <td>
            <a href="secretpathway.html">Secret Pathway</a>
          </td>
          <td>
            <a href="others.html">Others</a>
          </td>
        </tr>
        <tr>
          <td>
            <a href="career.html">Career</a>
          </td>
          <td>
            <a href="legal.html">Legals</a>
          </td>
          <td>
            <a href="sitemap.html">Site Map</a>
          </td>
        </tr>
      </table>
      <p>
        <span>&copy;</span>2017 SHIELD SECURITY, All Right Reserved.
      </p>
    </div>
  </footer>

  <script type="text/javascript">
  window.onload = function(){

    document.getElementById("menu").onclick = function(){
      var clickMenu = document.getElementById("menu").classList;
      var globalNav = document.getElementById("globalNav").classList;
     if(globalNav.contains("navOnOff")){
        clickMenu.remove("icon-cancel-circled");
        clickMenu.add("icon-menu");
        globalNav.remove("navOnOff");
      }else{
        clickMenu.remove("icon-menu");
        clickMenu.add("icon-cancel-circled");
        globalNav.add("navOnOff");
      }
    }//end nav clickMenu
    
    autoslide();
    function autoslide(){
      var carousel = document.querySelectorAll("#slider .slide");
      var currentSlide = 0;
      var next = document.getElementById("nextbtn");
      var pre = document.getElementById("prebtn");
      var slideIn = setInterval(nextSlide, 3000);

      function goNextSlide(){
        nextSlide(currentSlide+1);
      }
      function goPreSlide(){
        nextSlide(currentSlide-1);
      }
      function nextSlide(){
        carousel[currentSlide].className = "slide";
        currentSlide = (currentSlide+1)%carousel.length;
        carousel[currentSlide].className = "slide showing";
      }
      next.onclick = function(){
        goNextSlide();
        clearInterval(slideIn);
      }
      pre.onclick = function(){
        goPreSlide();
        clearInterval(slideIn);
      }//end carousel
    }

    document.getElementById("searchShow").onclick = function(){
      var search = document.getElementById("mySearch");
      if(search.style.display == "none"){
        document.getElementById("mySearch").style.display = "inline-block";
      }else if(search.style.display == "block"){
        document.getElementById("mySearch").style.display = "none";
      }else{
        document.getElementById("mySearch").style.display = "none";
      }
    }//end search

    document.getElementById("logIn").onclick = function(){
      var logInShow = document.getElementById("logInShow");
      if(logInShow.style.display == "none"){
        document.getElementById("logInShow").style.display = "block";
      }else if(logInShow.style.display == "block"){
        document.getElementById("logInShow").style.display = "none";
      }else{
        document.getElementById("logInShow").style.display = "none";
      }
    }//login


    window.onscroll = function(e){

      var element = document.getElementById("globalNav");
      var offset = element.offsetTop;
      if(offset < window.pageYOffset){
        element.classList.add("stickyNav");
      }else{
        element.classList.remove("stickyNav");
      }
      if(document.body.scrollTop > 200 || document.documentElement.scrollTop > 200){
        document.getElementById("toTop").style.display ="block";
      }else{
        document.getElementById("toTop").style.display ="none";
      }
    }//end stickyNav and toTop

    document.getElementById("toTop").onclick = function(){
      setTimeout(function () {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }, 1000);
    }//end smooth top
// if("addEventListner" in window && "classList" in document.documentElement){
//   var element = document.getElementById("globalNav");
//   var offset = element.offsetTop;
//   window.addEventListener("scroll", function(){
//     if(offset < window.pageYOffset){
//       element.classList.add("stickyNav");
//     }else{
//       element.classList.remove("stickyNav");
//     }
//   }, false);
// }


  }//end onload

  </script>
</body>
</html>
