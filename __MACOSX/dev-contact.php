<?php
require_once( "./include/fgcontactform.php" );
$formproc = new FGContactForm();
//1. Add your email address here.
//You can add more than one receipients.
//$formproc->AddRecipient( 'info@forecom.co.in' );
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
		exit;5555555555555555555
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
	<title>Contact | UPS for IT load | Surveillance & security </title>
	
	 <!-- Open Grapg Seo tag details -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@forecom">
    <meta name="twitter:title" content="Digital Class Room | Video conferencing system | Forecom">
    <meta name="twitter:description" content="Forecom provide complete solutions For Digital class rooms, UPS for IT infrastructure, Firewall & internet policy management, Time & attendance Automation, Video conferencing system, Virtual meeting & monitoring of patients in CCU, Video conferencing, Smart class room, Digital Class Room  Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu, Digital library Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu, Digital Projectors Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu, Virtual training Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu, Virtual Meetings Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu, Surveillance & security Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu, Wired & Wi-Fi network Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu, UPS for IT load, Firewall & Cyber security Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu, Digital Projectors & board room Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu, Video conferencing system Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu, Time & attendance Automation Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu, RFID solutions Setting Services in Cochin Kerala Ernakulam Karnataka Tamilnadu">
    <meta name="twitter:url" content="https://twitter.com/forecom">
    <!-- Twitter Summary card images must be at least 120x120px -->

	<meta name="keywords" content="Forecom contact, contacting video conferencing in kochi, Surveillance & security in kochi, virtual training in kochi, interactive conferencing in kochi"/>
	<meta name="description" content="Contact - Fill out the form and submit. We will contact you shortly, WE Provide Surveillance & security, virtual training"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="pictures/fav-icon.png">
<!--	<link href="css/menu.css" rel="stylesheet">-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link href="css/demo.css" rel="stylesheet" type="text/css">
	<link href="css/forecom.css" rel="stylesheet" type="text/css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<style type="text/css">
		.row {
			width: 100% !important;
		}
		
		.nogutter {
			margin-right: 0 !important;
			margin-left: 0 !important;
			padding-left: 0 !important;`
			padding-right: 0 !important;
		}
	</style>
	<script>
		$( document ).ready( function () {
			$( "#menu-toggle" ).click( function ( e ) {
				e.preventDefault();
				$( "#sidebar-wrapper" ).toggleClass( "active" );
			} );

			$( "#close-menu" ).click( function ( e ) {
				e.preventDefault();
				$( "#sidebar-wrapper" ).toggleClass( "active" );
			} );

		} );
		
		function subjectSelect(x){
			var y = x.split('#');
			if(y[1]){
				$("#enquiry").val((y[1]));
			}
}
	</script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-QQY5CTZKK0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-QQY5CTZKK0');
</script>
</head>

<body onload="subjectSelect($(location).attr('href'))">
	<!-- menu-->
	<div id="navigation-bar">
		<nav class="navbar navbar-default navbar-static-top " role="navigation">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" id="desktop-logo" href="index.html"><img src="pictures/logo.png" id="logo" alt="Video conferencing, Smart class room, Surveillance & security, virtual training,  Kerala Ernakulam Karnataka Tamilnadu" /></a>
					<a class="navbar-brand" id="mobile-logo" style="display: none" href="index.html"><img src="pictures/logo.png" id="logo" alt="Digital Class Room, Surveillance & security, virtual training, Digital library, Kerala Ernakulam Karnataka Tamilnadu"/></a>
					<button type="button" class="navbar-toggle" id="menu-toggle">
                        <span class="glyphicon glyphicon-menu-hamburger"></span>
                    </button>

				</div>
				<!-- Side bar  -->
				<div id="sidebar-wrapper">
					<p>MENU<a href="#" class="btn btn-danger btn-sm pull-right" id="close-menu"><i  class="glyphicon glyphicon-remove"></i></a>
					</p>
					<div class="list-group panel remove-border">
						<a href="#solutions" class="list-group-item list-group-item-success sidebar-menu-heading remove-border" data-toggle="collapse" data-parent="#sidebar-wrapper">Core Competency</a>
						<div class="collapse" id="solutions">
							<a href="core-competency.html#it_telecom" class="list-group-item sidebar-menuitem  remove-border">IT & Telecom Infrastructure solutions</a>
							<a href="core-competency.html#educational_technology" class="list-group-item sidebar-menuitem  remove-border">Educational Technology solutions</a>
							<a href="core-competency.html#physical_security" class="list-group-item sidebar-menuitem  remove-border">Physical Security & Automation</a>
							<a href="core-competency.html#power_solutions" class="list-group-item sidebar-menuitem  remove-border">Power & protection solutions</a>
						</div>
						<a href="#services" class="list-group-item list-group-item-success sidebar-menu-heading remove-border" data-toggle="collapse" data-parent="#sidebar-wrapper">SERVICES</a>
						<div class="collapse" id="services">
							<a href="services.html#consultancy" class="list-group-item sidebar-menuitem  remove-border">Consultancy</a>
							<a href="services.html#design" class="list-group-item sidebar-menuitem  remove-border">Design</a>
							<a href="services.html#deployment" class="list-group-item sidebar-menuitem  remove-border">Deployment</a>
							<a href="services.html#training" class="list-group-item sidebar-menuitem  remove-border">Training</a>
							<a href="services.html#support" class="list-group-item sidebar-menuitem  remove-border">Support</a>
						</div>
						<a href="#products" class="list-group-item list-group-item-success sidebar-menu-heading remove-border"
              				data-toggle="collapse" data-parent="#sidebar-wrapper">PRODUCTS</a>
            				<div class="collapse" id="products">
              				<a href="video-conferencing- solutions.html" class="list-group-item sidebar-menuitem remove-border">Video conferencing solutions</a>
              				<a href="educational-technology-solutions.html" class="list-group-item sidebar-menuitem remove-border">Educational Technology Solutions</a>
              				<a href="enterprises-system&connectivity-solutions.html" class="list-group-item sidebar-menuitem remove-border">Enterprises System & Connectivity solutions</a>
              				<a href="digitization-solutions.html" class="list-group-item sidebar-menuitem remove-border">Digitization solutions</a>
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
						<a href="know-us-closer.html" class="list-group-item list-group-item-success sidebar-menu-heading remove-border">Know us closer</a>
						<a href="contact.php" class="list-group-item list-group-item-success sidebar-menu-heading remove-border mobile-active-link">Contact</a>


					</div>
				</div>

				<!-- dropdowns -->
				<div class="collapse navbar-collapse navbar-right" id="dropdown-desktop-menubar">
					<ul class="nav navbar-nav menubar">
						<li class="dropdown" id="dropdown-desktop">
							<a class="dropdown-toggle" href="core-competency.html"><span class="menu-item ">Core Competency</span></a>
							<ul class="dropdown-menu core-competency-ul" id="dropdown-menu-desktop">
								<li><a href="core-competency.html#it_telecom">IT & Telecom Infrastructure solutions</a>
								</li>
								<li><a href="core-competency.html#educational_technology">Educational Technology solutions</a>
								</li>
								<li><a href="core-competency.html#physical_security">Physical Security & Automation</a>
								</li>
								<li><a href="core-competency.html#power_solutions">Power & protection solutions</a>
								</li>
							</ul>
						</li>
						<li class="dropdown" id="dropdown-desktop">
							<a class="dropdown-toggle" href="services.html"><span class="menu-item ">SERVICES</span></a>
							<ul class="dropdown-menu" id="dropdown-menu-desktop">
								<li><a href="services.html#consultancy">Consultancy</a>
								</li>
								<li><a href="services.html#design">Design</a>
								</li>
								<li><a href="services.html#deployment">Deployment</a>
								</li>
								<li><a href="services.html#training">Training</a>
								</li>
								<li><a href="services.html#support">Support</a>
								</li>
							</ul>
						</li>
						<li class="dropdown" id="dropdown-desktop">
              				<a class="dropdown-toggle" href="#"><span
                  			class="menu-item">PRODUCTS</span></a>
              			<ul class="dropdown-menu" id="dropdown-menu-desktop">
                		<li><a href="video-conferencing- solutions.html">Video conferencing solutions</a></li>
                		<li><a href="educational-technology-solutions.html">Educational Technology Solutions</a></li>
                		<li><a href="enterprises-system&connectivity-solutions.html">Enterprises System & Connectivity
                   	 	solutions</a></li>
                		<li><a href="digitization-solutions.html">Digitization solutions</a></li>
              </ul>
            </li>
						<li class="dropdown" id="dropdown-desktop">
							<a class="dropdown-toggle" href="customer.html"><span class="menu-item ">CUSTOMER</span></a>
							<ul class="dropdown-menu" id="dropdown-menu-desktop">
								<li><a href="customer.html#k-12-education">K-12 Education</a>
								</li>
								<li><a href="customer.html#higher_education">Higher Education</a>
								</li>
								<li><a href="customer.html#health_care">Healthcare</a>
								</li>
								<li><a href="customer.html#hospitality">Hospitality</a>
								</li>
								<li><a href="customer.html#government">Government</a>
								</li>
								<li><a href="customer.html#retail_enterprise">Retail Enterprise</a>
								</li>
								<li><a href="customer.html#banking">Banking</a>
								</li>
								<li><a href="customer.html#industrial">Industrial</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="dropdown-toggle" href="know-us-closer.html"><span class="menu-item ">Know us closer</span></a>

						</li>
						<li>
							<a class="dropdown-toggle" href="contact.php"><span class="menu-item active-link ">Contact</span></a>

						</li>
						<!-- <li><a href="contact.php"><span class="menu-item">BLOG</span></a></li>  -->
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<!--menu end -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link href="css/menu-color.css" rel="stylesheet" type="text/css">

	<img class="about headimage" src="pictures/carousel1.jpg">
	<div class="allaboutsection">
		<div class="aboutsection">
			<label class="contact-heading"><h2>"Trust is the residue of promises fulfilled"</h2></label>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-lg-4 col-sm-12 contactdetails">
						<label class="address"><i class="fa fa-map-marker contact-font-awesome"></i>Forecom Infratech Systems Private Limited<br> #50/2349B, Maliam Veedu Lane, <br> Cheranellore Main Road, <br> Edappally Kochi-682024</label>
						<br><br>
						<label class="phone"><i class="fa fa-home contact-font-awesome""></i>+91 81290 88188</label><br>
						<label class="phone"><i class="fa fa-headphones contact-font-awesome""></i>+91 98955 00803</label><br>
						<label class="phone"><i class="fa fa-phone contact-font-awesome""></i>+91 90611 30000 </label><br>
						<br><label class="email"><i class="fa fa-envelope-o contact-font-awesome""></i>info@forecom.co.in</label>
					</div>
					<div class="col-md-8 col-lg-8 col-sm-12 contactform">

						<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
							<input type='hidden' name='submitted' id='submitted' value='1'/>
							<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
							<input type='hidden' class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>'/>

							<!-- <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div> -->
							<div class="form-group" style="display:none;">
								<!-- <label for="name" class="col-sm-2 control-label">Name</label> -->
								<div class="col-sm-12">
								<select id="enquiry" name="enquiry" disabled>
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
											
  									</select>
								</div>
							</div>
							<div class="form-group">
								<!-- <label for="name" class="col-sm-2 control-label">Name</label> -->
								<div class="col-sm-12">
									<input class="form-control required" id="name" name="name" placeholder="First &amp; Last Name" value="<?php echo $formproc->SafeDisplay('name') ?>" type="text">
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
						<div class="clearfix"></div>
					</div>
				</div>

			</div>




			<div class="row map nogutter">
				<div class="col-md-12 col-lg-12 nogutter">
					<iframe src="https://www.google.com/maps/embed?origin=mfe&pb=!1m2!2m1!1s%5BForecom+Infratech+Systems+Pvt.Ltd%5D" style="border:0;line-height: 0" width="100%" height="430px" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div id="copyright">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<a href="https://www.facebook.com/Forecom-Infratech-Systems-400155677280776" target="_blank">
          <i class="fa fa-facebook" aria-hidden="true"></i></a>
			




				<a href="https://plus.google.com/u/0/114417124593791795290" target="_blank">
            <i class="fa fa-google-plus" aria-hidden="true"></i></a>
			




				<a href="https://www.linkedin.com/in/forecom-infratech-system-pvt-ltd-136a30129?trk=nav_responsive_tab_profile" target="_blank">
            <i class="fa fa-linkedin" aria-hidden="true"></i></a>
			




				<a href="https://twitter.com/forecom_kochi#" target="_blank">
          <i class="fa fa-twitter" aria-hidden="true"></i></a>
			




				<!-- <a href="https://www.youtube.com/results?search_query=forecom" target="_blank">
            <i class="fa fa-youtube-square" aria-hidden="true"></i></a> -->


			</div>

		</div>
		<label id="copyrightlabel">© 2016 Forecom All rights reserved. | Powered by       <a href="http://www.logicbrace.com">
        <img src="pictures/logicBrace-logo.png" class="bylogo">
      </a></label>
	</div>

</body>

</html>