<?php
require_once( "./include/fgcontactform.php" );
$formproc = new FGContactForm();
//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient( 'logicbrace@gmail.com' );
//<<---Put your email address here
//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey( 'CnRrspl1FyEylUj' );
if ( isset( $_POST[ 'submit' ] ) ) {
	//header("Location: thank-you.php");
	//exit;
	//$formproc->RedirectToURL("thank-you.php");
	if ( $formproc->ProcessForm() ) {
		// $formproc->RedirectToURL("thank-you.php");
		header( "Location: thank-you.php" );
		exit;
	}
}
//header("Location: http://forecom.co.in/thank-you.php");
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/simple-php-contact-form.html
*/
//exit;
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cyber Security Firewall | Surveillance & security Cameras-Forecom</title>

  <!-- Open Grapg Seo tag details -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@forecom">
  <meta name="twitter:title" content="Digital Classroom | Video conferencing system | Forecom">
  <meta name="twitter:description"
    content="Forecom provide complete solutions For Digital classrooms, UPS for IT infrastructure, Firewall & internet policy management, Time & attendance Automation, Video conferencing system, Virtual meeting & monitoring of patients in CCU, Video conferencing, Surveillance & security, Smart classroom, Digital Class Room  Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu, Digital library Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu, Digital Projectors Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu, Virtual training Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu, Virtual Meetings Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu, Surveillance & security Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu, Wired & Wi-Fi network Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu, UPS for IT load, Firewall & Cyber security Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu, Digital Projectors & board room Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu, Video conferencing system Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu, Time & attendance Automation Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu, RFID solutions Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu">
  <meta name="twitter:url" content="https://twitter.com/forecom">
  <!-- Twitter Summary card images must be at least 120x120px -->

  <meta name="geo.position" content="10.030077;76.305622">
  <meta name="geo.country" content="India">
  <meta name="geo.region" content="Kerala">
  <meta name="geo.placename" content="Edappally, Ernakulam, Kerala">
  <!--     -->
  <meta name="OWNER" content="Forecome Infratech Systems" />
  <meta name="AUTHOR" content="Forecome Infratech Systems" />
  <meta name="ROBOTS" content="index,follow" />
  <meta name="distribution" content="Global" />
  <meta name="rating" content="General" />
  <meta name="googlebot" content="index, follow" />
  <meta name="classification"
    content="video conferencing, Smart classroom design and equipment, Digital Classroom, Digital library, Digital Projectors, Virtual training, Vertual Meetings, Surveillance &security, Wired & Wi-Fi network, UPS for IT load, Firewall & Cyber security, Digital Projectors & board room, Video conferencing system, Time & attendance Automation, RFID solutions, Kochi Kerala Tamilnadu Karnataka">
  <meta name="subject"
    content="We provides the best services in Video conferencing, Smart class room, Digital Class Room, Digital library, Digital Projectors, Virtual training, Vertual Meetings,etc." />
  <meta name="city" content="Ernakulam" />
  <meta name="state" content="Kerala" />
  <meta name="country" content="India" />
  <meta name="resource-type" content="document" />
  <meta name="category"
    content="Video conferencing, Smart class room in kochi, Digital Class Room Ernakulam, Digital library in Kochi, Digital Projectors kakkanad, Virtual training, Vertual Meetings, Surveillance &security kerala, Wired & Wi-Fi network kerala, UPS for IT load, Firewall & Cyber security, Digital Projectors & board room in kerala, Video conferencing system, Time & attendance Automation, RFID solution in kakkanad, Kochi, Kerala, Tamilnadu, Karnataka" />
  <link rel="canonical" href="http://www.forecom.co.in" />


  <meta name="keywords"
    content="Video conferencing, Smart classroom design and equipment, Digital Classroom designing and equipment, Digital library, Digital Projectors, Virtual training, Vertual Meetings, Surveillance &security, Wired & Wi-Fi network, UPS for IT load, Firewall & Cyber security, Digital Projectors & board room, Video conferencing system, Time & attendance Automation, RFID solutions, Kochi Kerala Tamilnadu Karnataka" />

  <meta name="description"
    content="We provides the best services in Video conferencing, Smart classroom designing and equipment, Digital Classroom designing and equipment, Digital library, Digital Projectors,Virtual training, digital classes in schools, digital classroom requirements, how to make digital classroom, Surveillance & security, Virtual Meetings, in Kochi Ernakulam, Tamilandau, Kerala">

  <link rel="icon" href="pictures/fav-icon.png">
  <link href="css/demo.css" rel="stylesheet" type="text/css">
  <link href="css/forecom.css" rel="stylesheet" type="text/css">
  <link href="animate-css/animate.min.css" rel="stylesheet">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="company-slider.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/jquery.smint.js" type="text/javascript"></script>
  <style>
   .s1,
    .s2 {
      min-height: 686px
    } 

    .s3,
    .s4 {
      min-height: 497px
    }

    .s5,
    .s6 {
      min-height: 605px
    }

    .row {
      width: 100% !important
    }
    /* .sTop {
    height: 620px;
    } */
    /* .navbar-default {
	background: white !important;
} */
  </style>
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-QQY5CTZKK0"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-QQY5CTZKK0');
  </script>
</head>

<body onload="scrolltodesireddiv($(location).attr('href'))">
  <div id="navigation-bar">
    <nav class="navbar navbar-default navbar-static-top navbar-scroll-manupulations" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" id="desktop-logo" href="index.html">
            <img src="pictures/carousel-logo.png" id="logo" />
          </a>
          <a class="navbar-brand" id="mobile-logo" style="display: none" href="index.html">
            <img src="pictures/logo.png" id="logo" />
          </a>
          <button type="button" class="navbar-toggle" id="menu-toggle">
            <span class="glyphicon glyphicon-menu-hamburger"></span>
          </button>
        </div>
        <div id="sidebar-wrapper">
          <p>MENU
            <a href="#" class="btn btn-danger btn-sm pull-right" id="close-menu"><i
                class="glyphicon glyphicon-remove"></i></a>
          </p>
          <div class="list-group panel remove-border">
            <a href="#solutions" class="list-group-item list-group-item-success sidebar-menu-heading remove-border"
              data-toggle="collapse" data-parent="#sidebar-wrapper">Core Competency</a>
            <div class="collapse" id="solutions">
              <a href="core-competency.html#it_telecom" class="list-group-item sidebar-menuitem remove-border">IT &
                Telecom Infrastructure solutions</a>
              <a href="core-competency.html#educational_technology"
                class="list-group-item sidebar-menuitem remove-border">Educational Technology solutions</a>
              <a href="core-competency.html#physical_security"
                class="list-group-item sidebar-menuitem remove-border">Physical Security & Automation</a>
              <a href="core-competency.html#power_solutions"
                class="list-group-item sidebar-menuitem remove-border">Power & protection solutions</a>
            </div>
            <a href="#services" class="list-group-item list-group-item-success sidebar-menu-heading remove-border"
              data-toggle="collapse" data-parent="#sidebar-wrapper">SERVICES</a>
            <div class="collapse" id="services">
              <a href="services.html#consultancy" class="list-group-item sidebar-menuitem remove-border">Consultancy</a>
              <a href="services.html#design" class="list-group-item sidebar-menuitem remove-border">Design</a>
              <a href="services.html#deployment" class="list-group-item sidebar-menuitem remove-border">Deployment</a>
              <a href="services.html#training" class="list-group-item sidebar-menuitem remove-border">Training</a>
              <a href="services.html#support" class="list-group-item sidebar-menuitem remove-border">Support</a>
            </div>
            <a href="#products" class="list-group-item list-group-item-success sidebar-menu-heading remove-border mobile-active-link"
              data-toggle="collapse" data-parent="#sidebar-wrapper">PRODUCTS</a>
            <div class="collapse" id="products">
              <a href="video-conferencing- solutions.php" class="list-group-item sidebar-menuitem remove-border">Video conferencing solutions</a>
              <a href="educational-technology-solutions.php" class="list-group-item sidebar-menuitem remove-border">Educational Technology Solutions</a>
              <a href="enterprises-system&connectivity-solutions.php" class="list-group-item sidebar-menuitem remove-border">Enterprises System & Connectivity solutions</a>
              <a href="digitization-solutions.php" class="list-group-item sidebar-menuitem remove-border">Digitization solutions</a>
            </div>
            <a href="#industries" class="list-group-item list-group-item-success sidebar-menu-heading remove-border" data-toggle="collapse" data-parent="#sidebar-wrapper">Customers</a>
            <div class="collapse" id="industries">
              <a href="customer.html#k-12-education" class="list-group-item sidebar-menuitem  remove-border">K-12  Education</a>
              <a href="customer.html#higher_education" class="list-group-item sidebar-menuitem  remove-border">Higher Education</a>
              <a href="customer.html#health_care" class="list-group-item sidebar-menuitem  remove-border">Healthcare</a>
              <a href="customer.html#hospitality" class="list-group-item sidebar-menuitem  remove-border">Hospitality</a>
              <a href="customer.html#government" class="list-group-item sidebar-menuitem  remove-border">Government </a>
              <a href="customer.html#retail_enterprise" class="list-group-item sidebar-menuitem  remove-border">Retail Enterprise</a>
              <a href="customer.html#banking" class="list-group-item sidebar-menuitem  remove-border">Banking</a>
              <a href="customer.html#industrial" class="list-group-item sidebar-menuitem  remove-border">Industrial</a>
            </div>
            <a href="know-us-closer.html"
              class="list-group-item list-group-item-success sidebar-menu-heading remove-border">Know us closer</a>
            <a href="contact.php"
              class="list-group-item list-group-item-success sidebar-menu-heading remove-border">Contact</a>
          </div>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="dropdown-desktop-menubar">
          <ul class="nav navbar-nav menubar">
            <li class="dropdown" id="dropdown-desktop">
              <a class="dropdown-toggle" href="core-competency.html"><span
                  class="menu-item  menu-item-manupulations">Core Competency</span></a>
              <ul class="dropdown-menu core-competency-ul" id="dropdown-menu-desktop">
                <li>
                  <a href="core-competency.html#it_telecom">IT & Telecom Infrastructure solutions</a>
                </li>
                <li>
                  <a href="core-competency.html#educational_technology">Educational Technology solutions</a>
                </li>
                <li>
                  <a href="core-competency.html#physical_security">Physical Security & Automation</a>
                </li>
                <li>
                  <a href="core-competency.html#power_solutions">Power & protection solutions</a>
                </li>
              </ul>
            </li>
            <li class="dropdown" id="dropdown-desktop">
              <a class="dropdown-toggle" href="services.html"><span
                  class="menu-item menu-item-manupulations">SERVICES</span></a>
              <ul class="dropdown-menu" id="dropdown-menu-desktop">
                <li>
                  <a href="services.html#consultancy">Consultancy</a>
                </li>
                <li>
                  <a href="services.html#design">Design</a>
                </li>
                <li>
                  <a href="services.html#deployment">Deployment</a>
                </li>
                <li>
                  <a href="services.html#training">Training</a>
                </li>
                <li>
                  <a href="services.html#support">Support</a>
                </li>
              </ul>
            </li>
            <li class="dropdown" id="dropdown-desktop">
              <a class="dropdown-toggle" href="#"><span
                  class="menu-item menu-item-manupulations active-link">PRODUCTS</span></a>
              <ul class="dropdown-menu" id="dropdown-menu-desktop">
                <li><a href="video-conferencing- solutions.php">Video conferencing solutions</a></li>
                <li><a href="educational-technology-solutions.php">Educational Technology Solutions</a></li>
                <li><a href="enterprises-system&connectivity-solutions.php">Enterprises System & Connectivity
                    solutions</a></li>
                <li><a href="digitization-solutions.php">Digitization solutions</a></li>
              </ul>
            </li>
            <li class="dropdown" id="dropdown-desktop">
              <a class="dropdown-toggle" href="customer.html"><span
                  class="menu-item menu-item-manupulations">CUSTOMER</span></a>
            </li>
            <li class="dropdown" id="dropdown-desktop">
              <a class="dropdown-toggle" href="know-us-closer.html"><span class="menu-item menu-item-manupulations">Know
                  us closer</span></a>
            </li>
            <li>
              <a class="dropdown-toggle" href="contact.php"><span
                  class="menu-item menu-item-manupulations">Contact</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href="css/menu-color.css" rel="stylesheet" type="text/css">
  <div class="wrap">
    <img class="headimage" src="pictures/products/large-room.jpg">
    <div class="section sTop">
      <!-- <h1>"A satisfied customer is the best business strategy of all"</h1> -->
    </div>
    <!-- <div class="subMenu row">
      <div class="menubox">
        <a href="#usb" class="subNavBtn col-lg-3 col-sm-3">USB Based VC Solutions</a>
        <a href="#codec" class="subNavBtn col-lg-3 col-sm-3">Codec Based VC Solutions</a>
        <a href="#board" class="subNavBtn col-lg-3 col-sm-3">Board Room (AV) Solutions</a>
      </div>
    </div> -->
  </div>
  <div class="row content product-header">
    <div>

      <div id="usb" class="row section consultancy product">
        <label class="product-sub-heading">USB Based VC Solutions</label>
        <div class="inner col-md-5 box md product-inventory">
          <div class="col-md-12" style="margin-bottom:60px;" onclick='selectSubjectFromProduct("Poly-Eagle-Eye-Cube-USB")'>
              <!-- <a href="contact.php#Poly-Eagle-Eye-Cube-USB" id="Poly-Eagle-Eye-Cube-USB"></a> -->
            <label class="headingInSection col-md-12"></i>
              Poly Eagle Eye Cube USB</label>
            <div class="col-md-4 competency_img">
              <img width="250px" height="250px" src="pictures/products/Poly Eagle Eye Cube USB.png"
                alt="Video conferencing,Smart class room,Digital Projectors,Kerala Ernakulam Karnataka Tamilnadu">

              <!-- <button type="button" class="btn btn-primary btn-lg outline">Contact US</button> -->

            </div>
            <div class="col-md-8" >
              <label class="headingInsectionSubheading col-md-12">The advanced HD camera with intelligent group framing,
                5x zoom and legendary audio performance that turns passive meetings in small spaces into powerful
                experiences.
              </label>
            </div>
          </div>
        </div>

        <div class="inner col-md-5 box md product-inventory" >
          <div class="col-md-12" style="margin-bottom:60px" onclick='selectSubjectFromProduct("Aver-CAM340")'>
              <!-- <a href="contact.php#Aver-CAM340" id="Aver-CAM340"></a> -->
            <label class="headingInSection col-md-12"></i>
              Aver CAM340</label>
            <div class="col-md-4 competency_img">
              <img width="250px" height="250px" src="pictures/products/Aver CAM340.png"
                alt="Video conferencing,Smart class room,Digital Projectors,Kerala Ernakulam Karnataka Tamilnadu">

              <!-- <button type="button" class="btn btn-primary btn-lg outline">Contact US</button> -->

            </div>
            <div class="col-md-8" >
              <label class="headingInsectionSubheading col-md-12">4K Wide angle USB camera with inbuilt microphones that
                instantly start a next generation video
                communication experience for huddle and small conference rooms.
              </label>
            </div>
          </div>
        </div>


      </div>
      <div class="row section consultancy product">

        <div class="inner col-md-5 box md product-inventory" >
          <div class="col-md-12" style="margin-bottom:60px;"  onclick='selectSubjectFromProduct("Avaya-HC020")'>
              <a href="contact.php#Avaya-HC020" id="Avaya-HC020"></a>
            <label class="headingInSection col-md-12"></i>
              Avaya HC020</label>
            <div class="col-md-4 competency_img">
              <img width="250px" height="250px" src="pictures/products/Avaya HC020.png"
                alt="Video conferencing,Smart class room,Digital Projectors,Kerala Ernakulam Karnataka Tamilnadu">

              <!-- <button type="button" class="btn btn-primary btn-lg outline">Contact US</button> -->

            </div>
            <div class="col-md-8" >
              <label class="headingInsectionSubheading col-md-12">Full HD USB fixed camera, leveraging the quality of a
                UltraHD 4K sensor to provide a high quality
                1080p30 video signal and the option to send uncompressed signal on HDMI.
              </label>
            </div>
          </div>
        </div>

        <div class="inner col-md-5 box md product-inventory" >
          <div class="col-md-12" style="margin-bottom:60px"  onclick='selectSubjectFromProduct("Poly-Studio")'>
              <a href="contact.php#Poly-Studio" id="Poly-Studio"></a>
            <label class="headingInSection col-md-12"></i>
              Poly Studio</label>
            <div class="col-md-4 competency_img">
              <img width="250px" height="250px" src="pictures/products/Poly Studio.png"
                alt="Video conferencing,Smart class room,Digital Projectors,Kerala Ernakulam Karnataka Tamilnadu">

              <!-- <button type="button" class="btn btn-primary btn-lg outline">Contact US</button>
             -->
            </div>
            <div class="col-md-8" >
              <label class="headingInsectionSubheading col-md-12">The premium USB video bar built for small rooms
                delivering the best audio quality in its class with
                group framing and automatic speaker tracking.
              </label>
            </div>
          </div>
        </div>


      </div>
      <div class="row section consultancy product">

        <div class="inner col-md-5 box md product-inventory" >
          <div class="col-md-12" style="margin-bottom:60px;" onclick='selectSubjectFromProduct("Aver-VB342")'>
              <a href="contact.php#Aver-VB342" id="Aver-VB342"></a>
            <label class="headingInSection col-md-12"></i>
              Aver VB342</label>
            <div class="col-md-4 competency_img">
              <img width="250px" height="250px" src="pictures/products/Aver VB342.png"
                alt="Video conferencing,Smart class room,Digital Projectors,Kerala Ernakulam Karnataka Tamilnadu">

              <!-- <button type="button" class="btn btn-primary btn-lg outline">Contact US</button> -->

            </div>
            <div class="col-md-8" >
              <label class="headingInsectionSubheading col-md-12">The VB342 Video Sound bar easily puts all participants
                in clear focus with its 4K PTZ
                camera’s extraordinary video quality and its professional-grade speakers and
                microphones. Perfectly suited for huddle rooms.
              </label>
            </div>
          </div>
        </div>

        <div class="inner col-md-5 box md product-inventory" >
          <div class="col-md-12" style="margin-bottom:60px" onclick='selectSubjectFromProduct("Aver-VC-520+")'>
              <a href="contact.php#Aver-VC-520+" id="Aver-VC-520+"></a>
            <label class="headingInSection col-md-12"></i>
              Aver VC 520+</label>
            <div class="col-md-4 competency_img">
              <img width="250px" height="250px" src="pictures/products/Aver VC 520+.png"
                alt="Video conferencing,Smart class room,Digital Projectors,Kerala Ernakulam Karnataka Tamilnadu">

              <!-- <button type="button" class="btn btn-primary btn-lg outline">Contact US</button> -->

            </div>
            <div class="col-md-8" >
              <label class="headingInsectionSubheading col-md-12">Suitable for meeting rooms of all sizes, from huddle
                rooms all the way up to large
                conference rooms, the VC520+ boasts a powerful 12X pan-tilt-zoom camera and an
                advanced speakerphone.
              </label>
            </div>
          </div>
        </div>


      </div>

      <div id="codec" class="row section consultancy product">
        <label class="product-sub-heading">Codec Based VC Solutions</label>
        <div class="inner col-md-5 box md product-inventory" >
          <div class="col-md-12" style="margin-bottom:60px;" onclick='selectSubjectFromProduct("Avaya-CU360")'>
          <a href="contact.php#Avaya-CU360" id="Avaya-CU360"></a>
            <label class="headingInSection col-md-12"></i>
              Avaya CU360</label>
            <div class="col-md-4 competency_img">
              <img width="250px" height="250px" src="pictures/products/Avaya CU360.png"
                alt="Video conferencing,Smart class room,Digital Projectors,Kerala Ernakulam Karnataka Tamilnadu">
            </div>
            <div class="col-md-8">
              <label class="headingInsectionSubheading col-md-12">It provides the ultimate in simplicity of setup and
                use, integrates with your existing UC platform,
                integrates with any existing standards-based video infrastructure, and allows you to access and use
                cloud-based applications. It is all you need to turn any space—including huddle spaces or huddle
                rooms—into a cloud-enabled collaboration room.
              </label>
            </div>
          </div>
        </div>

        <div class="inner col-md-5 box md product-inventory" >
          <div class="col-md-12" style="margin-bottom:60px"  onclick='selectSubjectFromProduct("Poly-Studio-X50")'>
              <a href="contact.php#Poly-Studio-X50" id="Poly-Studio-X50"></a>
            <label class="headingInSection col-md-12"></i>
              Poly Studio X50, X30</label>
            <div class="col-md-4 competency_img">
              <img width="250px" height="250px" src="pictures/products/Poly Studio X50, X30.png"
                alt="Video conferencing,Smart class room,Digital Projectors,Kerala Ernakulam Karnataka Tamilnadu">

              <!-- <button type="button" class="btn btn-primary btn-lg outline">Contact US</button> -->

            </div>
            <div class="col-md-8" >
              <label class="headingInsectionSubheading col-md-12">IT teams can get rooms up and running in less than two
                minutes with an all-in-one, turnkey set-up
                process. There are only two components—the video bar and touch controller—that are immediately
                paired right out of the box. No extra cords, cables, USB peripherals, or PCs to hide somewhere. With
                Poly Studio X, native integration with leading cloud video services like Zoom allows users to get
                started at the touch of a button. They can enjoy the same experience they have on their desktop and
                share content wirelessly, leading to a more engaging and collaborative meeting experience.
              </label>
            </div>
          </div>
        </div>


      </div>

      <div class="row section consultancy product">

        <div class="inner col-md-5 box md product-inventory" >
          <div class="col-md-12" style="margin-bottom:60px;" onclick='selectSubjectFromProduct("Poly-Group-500")'>
              <a href="contact.php#Poly-Group-500" id="Poly-Group-500"></a>
            <label class="headingInSection col-md-12"></i>
              Poly Group 500</label>
            <div class="col-md-4 competency_img">
              <img width="250px" height="250px" src="pictures/products/Poly Group 500.png"
                alt="Video conferencing,Smart class room,Digital Projectors,Kerala Ernakulam Karnataka Tamilnadu">

              <!-- <button type="button" class="btn btn-primary btn-lg outline">Contact US</button> -->

            </div>
            <div class="col-md-8" >
              <label class="headingInsectionSubheading col-md-12">The Polycom® RealPresence® Group 500 solution is ideal
                for conference rooms and other
                collaborative environments, from small meeting rooms to larger rooms with dual screens. The
                solution offers flexible options that ensure that all participants can see and be seen, no matter
                where they are sitting. Use the optional built-in multipoint to host video calls with up to 6
                participants in HD quality.
              </label>
            </div>
          </div>
        </div>

        <div class="inner col-md-5 box md product-inventory" >
          <div class="col-md-12" style="margin-bottom:60px" onclick='selectSubjectFromProduct("Avaya-XT5000")'>
              <a href="contact.php#Avaya-XT5000" id="Avaya-XT5000"></a>
            <label class="headingInSection col-md-12"></i>
              Avaya XT5000</label>
            <div class="col-md-4 competency_img">
              <img width="250px" height="250px" src="pictures/products/Avaya XT5000.png"
                alt="Video conferencing,Smart class room,Digital Projectors,Kerala Ernakulam Karnataka Tamilnadu">

              <!-- <button type="button" class="btn btn-primary btn-lg outline">Contact US</button> -->

            </div>
            <div class="col-md-8" >
              <label class="headingInsectionSubheading col-md-12">The Avaya IX™ Room System XT5000 provides exceptional
                video, audio, and data quality along with
                ease-of-use designed to make users successful. The XT5000 incorporates dual 1080p 60fps live video
                and content, HD audio, simultaneous H.264 High Profile and Scalable Video Coding (SVC), and multi-
                party calling. Available PTZ cameras offer up to 20x optical zoom (12x digital) to view details and
                include wide-angle capability for group participation. The system also supports USB recording.
              </label>
            </div>
          </div>
        </div>


      </div>

      <div class="row section consultancy product">

        <div class="inner col-md-5 box md product-inventory" >
          <div class="col-md-12" style="margin-bottom:60px;" onclick='selectSubjectFromProduct("Aver-SVC500")'>
              <a href="contact.php#Aver-SVC500" id="Aver-SVC500"></a>
            <label class="headingInSection col-md-12"></i>
              Aver SVC500</label>
            <div class="col-md-4 competency_img">
              <img width="250px" height="250px" src="pictures/products/Aver SVC500.png"
                alt="Video conferencing,Smart class room,Digital Projectors,Kerala Ernakulam Karnataka Tamilnadu">

              <!-- <button type="button" class="btn btn-primary btn-lg outline">Contact US</button> -->

            </div>
            <div class="col-md-8" >
              <label class="headingInsectionSubheading col-md-12">The next generation of AVer’s video conferencing
                system which supports a powerful 18X total zoom
                lens and supports multi-site calls up to 16 sites. It has built in 32GB storage capacity for local
                recording and also supports remote storage as well. You could also live stream the session.
              </label>
            </div>
          </div>
        </div>

        <div class="inner col-md-5 box md product-inventory" >
          <div class="col-md-12" style="margin-bottom:60px" onclick='selectSubjectFromProduct("Poly-Trio-Visual-Collaboration-Kit")'>
              <a href="contact.php#Poly-Trio-Visual-Collaboration-Kit" id="Poly-Trio-Visual-Collaboration-Kit"></a>
            <label class="headingInSection col-md-12"></i>
              Poly Trio Visual Collaboration Kit</label>
            <div class="col-md-4 competency_img">
              <img width="250px" height="250px" src="pictures/products/Poly Trio Visual Collaboration Kit.png"
                alt="Video conferencing,Smart class room,Digital Projectors,Kerala Ernakulam Karnataka Tamilnadu">

              <!-- <button type="button" class="btn btn-primary btn-lg outline">Contact US</button> -->

            </div>
            <div class="col-md-8" >
              <label class="headingInsectionSubheading col-md-12">With Poly Trio Video Solutions, you can right-size the
                technology to meet the needs of every
                workspace. Start with Poly Trio 8800, 8500 or 8300* and select from a variety of configurations to
                meet the needs of your unique space and work habits. Polycom Trio supports your business needs
                with its unique hybrid registration feature. Simultaneously register more than one voice or UC
                platform.
              </label>
            </div>
          </div>
        </div>


      </div>

      <div id="board" class="row section consultancy product">
        <label class="product-sub-heading">Board Room (AV) Solutions</label>
        <div class="inner col-md-5 box md product-inventory" >
          <div class="col-md-12" style="margin-bottom:60px;" onclick='selectSubjectFromProduct("Huddle-room")'>
              <a href="contact.php#Huddle-room" id="Huddle-room"></a>
            <label class="headingInSection col-md-12"></i>
              Huddle room</label>
            <div class="col-md-4 competency_img">
              <img width="250px" height="250px" src="pictures/products/small-room.jpg"
                alt="Video conferencing,Smart class room,Digital Projectors,Kerala Ernakulam Karnataka Tamilnadu">

              <!-- <button type="button" class="btn btn-primary btn-lg outline">Contact US</button> -->

            </div>
            <div class="col-md-8" >
              <label class="headingInsectionSubheading col-md-12">Clientless, Native Wireless Presentation &amp;
                Collaboration From iOS, Windows, Android &amp;
                Mac OS.The solution supports 4 users content simultaneously out of which one can be from
                wired as well.
              </label>
            </div>
          </div>
        </div>

        <div class="inner col-md-5 box md product-inventory" >
          <div class="col-md-12" style="margin-bottom:60px"  onclick='selectSubjectFromProduct("Medium-Sized-room")'>
              <a href="contact.php#Medium-Sized-room" id="Medium-Sized-room"></a>
            <label class="headingInSection col-md-12"></i>
              Medium Sized room</label>
            <div class="col-md-4 competency_img">
              <img width="250px" height="250px" src="pictures/products/medium-room.jpg"
                alt="Video conferencing,Smart class room,Digital Projectors,Kerala Ernakulam Karnataka Tamilnadu">

              <!-- <button type="button" class="btn btn-primary btn-lg outline">Contact US</button> -->

            </div>
            <div class="col-md-8" >
              <label class="headingInsectionSubheading col-md-12">Ideal for 4-8 participants providing wired and
                wireless BYOD connectivity options Easy in-table cable
                connections keep your meetings clean and clutter free. The solution includes video switching and
                wireless presentation system.
              </label>
            </div>
          </div>
        </div>


      </div>

      <div class="row section consultancy product">

        <div class="inner col-md-5 box md product-inventory" >
          <div class="col-md-12" style="margin-bottom:60px;" onclick='selectSubjectFromProduct("Large-room")'>
              <a href="contact.php#Large-room" id="Large-room"></a>
            <label class="headingInSection col-md-12"></i>
              Large room</label>
            <div class="col-md-4 competency_img">
              <img width="250px" height="250px" src="pictures/products/large-room.jpg"
                alt="Video conferencing,Smart class room,Digital Projectors,Kerala Ernakulam Karnataka Tamilnadu">

              <!-- <button type="button" class="btn btn-primary btn-lg outline">Contact US</button> -->

            </div>
            <div class="col-md-8" >
              <label class="headingInsectionSubheading col-md-12">Includes wired and wireless content presentation
                capabilities, Amplified crystal clear audio, powerful
                control and automation.</label>
              </label>
            </div>
          </div>
        </div>

      </div>
      
      <div class="row section consultancy product">
        <div class="inner col-md-4 col-md-offset-4 box md product-inventory">
          <label style="color: grey;font-size: 20px;font-weight: 500 !important;">Contact Us</label>
          <div class="col-md-12" style="margin-bottom:60px;">
            <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
							<input type='hidden' name='submitted' id='submitted' value='1'/>
							<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
							<input type='hidden' class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>'/>

							<!-- <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div> -->
							<div class="form-group" style="display:none;">
								<!-- <label for="name" class="col-sm-2 control-label">Name</label> -->
								<div class="col-sm-12">
								<!-- <select id="enquiry" name="enquiry" disabled>
								<option value="">General Enquiry</option>
  									<option value="Poly-Eagle-Eye-Cube-USB">Poly Eagle Eye Cube USB</option>
    									<option value="Aver-CAM340">Aver CAM340</option>
    									<option value="Avaya-HC020">Avaya HC020</option>
    									<option value="Poly-Studio">Poly Studio</option>
    									<option value="Aver-VB342">Aver VB342</option>
    									<option value="Aver-VC-520+">Aver VC 520+</option>
    									<option value="Avaya-CU360">Avaya CU360</option>
    									<option value="Poly-Studio-X50">Poly Studio X50, X30</option>
    									<option value="Poly-Group-500">Poly Group 500</option>
    									<option value="Avaya-XT5000">Avaya XT5000</option>
    									<option value="Aver-SVC500">Aver SVC500</option>
    									<option value="Poly-Trio-Visual-Collaboration-Kit">Poly Trio Visual Collaboration Kit</option>
    									<option value="Huddle-room">Huddle Room</option>
    									<option value="Medium-Sized-room">Medium Sized Room</option>
    									<option value="Large-room">Large Room</option>
    									<option value="ScanMate-i940-Scanner">ScanMate i940 Scanner</option>
    									<option value="S2050-Scanner">S2050 Scanner</option>
    									<option value="I3200-Scanner">I3200 Scanner</option>
    									<option value="E1025-Scanner">E1025 Scanner</option>
    									<option value="FUJITSU-ScanSnap-SV600-Scanner">FUJITSU ScanSnap SV600 Scanner</option>
											<option value="Cloud-and-SaaS">Cloud & SaaS</option>
											<option value="Connectivity">Connectivity</option>
											<option value="Marketing-Solutions">Marketing Solutions</option>
											<option value="Collaboration">Collaboration</option>
											<option value="IOT-Solutions">IOT Solutions</option>
											<option value="Security-Solutions">Security-Solutions</option>
											<option value="Educational-Technology">Educational-Technology</option>
											
  									</select> -->
								</div>
							</div>
							<div class="form-group">
								<!-- <label for="name" class="col-sm-2 control-label">Name</label> -->
								<div class="col-sm-12">
									<input class="form-control required" id="name" name="name" placeholder="First &amp; Last Name" value="<?php echo $formproc->SafeDisplay('name') ?>" type="text">
									<p class="text-danger"></p>
								</div>
                            </div>
               <input class="form-control required" style="display:none;" id="product" name="product" value="" type="text">
                <div class="form-group">
								<!-- <label for="email" class="col-sm-2 control-label">Email</label> -->
								<div class="col-sm-12">
									<input class="form-control" id="phone_number" name="Phone Number" placeholder="Phone Number" value="" type="number">
									<p class="text-danger"></p>
								</div>
							</div>
							<div class="form-group">
								<!-- <label for="email" class="col-sm-2 control-label">Email</label> -->
								<div class="col-sm-12">
									<input class="form-control email required" id="email" name="email" placeholder="example@domain.com" value="<?php echo $formproc->SafeDisplay('email') ?>" type="email">

									<p class="text-danger"></p>
								</div>
							</div>
							<div class="form-group">
								<!-- 	<label for="message" class="col-sm-2 control-label">Message</label> -->
								<div class="col-sm-12">
									<textarea class="form-control required" rows="6" name="message" placeholder="Message"><?php echo $formproc->SafeDisplay('message') ?></textarea>
									<p class="text-danger"></p>
								</div>
							</div>
							<div class="form-group send-text-center">
								<div class="col-sm-12 ">
									<!-- <i class="fa fa-paper-plane" aria-hidden="true"></i> -->
									<input id="submit" name="submit" value="Send" class="btn btn-primary sendbutton icon-camera-retro" type="submit">
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-12 ">

								</div>

							</div>
							<div class="clearfix"></div>
						</form>
            <!-- <img width="100%" height="100%" style="border:1px solid #333;" src="pictures/products/kneura-video.png"
              alt="Video conferencing,Smart class room,Digital Projectors,Kerala Ernakulam Karnataka Tamilnadu"> -->
          </div>
        </div>

      </div>
    </div>

  </div>
  <div class="col-lg-2"></div>
  <div id="copyright">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <a href="https://www.facebook.com/Forecom-Infratech-Systems-400155677280776" target="_blank">
          <i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="https://plus.google.com/u/0/114417124593791795290" target="_blank">
          <i class="fa fa-google-plus" aria-hidden="true"></i></a>
        <a href="https://www.linkedin.com/in/forecom-infratech-system-pvt-ltd-136a30129?trk=nav_responsive_tab_profile"
          target="_blank">
          <i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <a href="https://twitter.com/forecom_kochi#" target="_blank">
          <i class="fa fa-twitter" aria-hidden="true"></i></a>
      </div>
    </div>
    <label id="copyrightlabel">© 2016 Forecom All rights reserved. | Powered by
      <a href="http://www.logicbrace.com">
        <img src="pictures/logicBrace-logo.png" class="bylogo">
      </a>
    </label>
  </div>
</body>

</html>