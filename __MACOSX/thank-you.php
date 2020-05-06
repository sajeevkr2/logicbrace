<!DOCTYPE html>
<html>
<head>
<title></title>

<meta name = "keywords" content = "" />
<meta name = "description" content = "" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,target-densitydpi=device-dpi,  user-scalable=no" />
    <link rel="icon" href="pictures/fav-icon.png">
  <link href="menu.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="menu.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="css/demo.css" rel="stylesheet" type="text/css">
    <link href="css/forecom.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <style type="text/css">.row{width: 100% !important;}</style>
 	<script>
        $(document).ready(function(){
          $("#menu-toggle").click(function(e) {
                      e.preventDefault();
                      $("#sidebar-wrapper").toggleClass("active");
                });

                  $("#close-menu").click(function(e) {
                      e.preventDefault();
                      $("#sidebar-wrapper").toggleClass("active");
                  });
           
          });
    </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86618886-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<!-- menu-->
    <div id="navigation-bar">
        <nav class="navbar navbar-default navbar-static-top " role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" id="desktop-logo" href="index.html"><img src="pictures/logo.png" id="logo" /></a>
                        <a class="navbar-brand" id="mobile-logo" style="display: none" href="index.html"><img src="pictures/logo.png" id="logo" /></a>
                    <button type="button" class="navbar-toggle"  id="menu-toggle">
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
                            <a href="core-competency.html#it_telecom" class="list-group-item sidebar-menuitem  remove-border">IT  & Telecom Infrastructure solutions</a>
                            <a href="core-competency.html#educational_technology" class="list-group-item sidebar-menuitem  remove-border">Educational Technology solutions</a>
                            <a href="core-competency.html#physical_security" class="list-group-item sidebar-menuitem  remove-border">Physical Security & Automation</a>
                            <a href="core-competency.html#power_solutions" class="list-group-item sidebar-menuitem  remove-border">Power &  protection solutions</a>
                        </div>
                        <a href="#services" class="list-group-item list-group-item-success sidebar-menu-heading remove-border" data-toggle="collapse" data-parent="#sidebar-wrapper">SERVICES</a>
                        <div class="collapse" id="services">
                            <a href="services.html#consultancy" class="list-group-item sidebar-menuitem  remove-border">Consultancy</a>
                            <a href="services.html#design" class="list-group-item sidebar-menuitem  remove-border">Design</a>
                            <a href="services.html#deployment" class="list-group-item sidebar-menuitem  remove-border">Deployment</a>
                            <a href="services.html#training" class="list-group-item sidebar-menuitem  remove-border">Training</a>
                            <a href="services.html#support" class="list-group-item sidebar-menuitem  remove-border">Support</a>
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
                        <a href="contact.php" class="list-group-item list-group-item-success sidebar-menu-heading remove-border">Contact</a>
                        
                        
                    </div>
                </div>

                <!-- dropdowns -->
                <div class="collapse navbar-collapse navbar-right" id="dropdown-desktop-menubar">
                    <ul class="nav navbar-nav menubar">
                        <li class="dropdown" id="dropdown-desktop">
                            <a class="dropdown-toggle" href="core-competency.html"><span class="menu-item ">Core Competency</span></a>
                            <ul class="dropdown-menu core-competency-ul" id="dropdown-menu-desktop">
                                <li><a href="core-competency.html#it_telecom">IT  & Telecom Infrastructure solutions</a></li>
                                <li><a href="core-competency.html#educational_technology">Educational Technology solutions</a></li>
                                <li><a href="core-competency.html#physical_security">Physical Security & Automation</a></li> 
                                <li><a href="core-competency.html#power_solutions">Power &  protection solutions</a></li> 
                            </ul>
                        </li>
                        <li class="dropdown"  id="dropdown-desktop">
                            <a class="dropdown-toggle" href="services.html"><span class="menu-item ">SERVICES</span></a>
                            <ul class="dropdown-menu" id="dropdown-menu-desktop">
                                <li><a href="services.html#consultancy">Consultancy</a></li>
                                <li><a href="services.html#design">Design</a></li>
                                <li><a href="services.html#deployment">Deployment</a></li> 
                                <li><a href="services.html#training">Training</a></li>
                                <li><a href="services.html#support">Support</a></li> 
                            </ul>
                        </li>
                        <li class="dropdown"  id="dropdown-desktop">
                            <a class="dropdown-toggle" href="customer.html"><span class="menu-item ">CUSTOMER</span></a>
                            <ul class="dropdown-menu" id="dropdown-menu-desktop">
                                <li><a href="customer.html#k-12-education">K-12  Education</a></li>
                                <li><a href="customer.html#higher_education">Higher Education</a></li>
                                <li><a href="customer.html#health_care">Healthcare</a></li> 
                                <li><a href="customer.html#hospitality">Hospitality</a></li>
                                <li><a href="customer.html#government">Government</a></li>
                                <li><a href="customer.html#retail_enterprise">Retail Enterprise</a></li> 
                                <li><a href="customer.html#banking">Banking</a></li>
                                <li><a href="customer.html#industrial">Industrial</a></li>
                            </ul>
                        </li>
                        <li >
                            <a class="dropdown-toggle" href="know-us-closer.html"><span class="menu-item ">Know us closer</span></a>
                            
                        </li>
                          <li >
                            <a class="dropdown-toggle" href="contact.php"><span class="menu-item ">Contact</span></a>
                            
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
    <div id="content">
		<div  class="container" id="Thankyou-message-wrapper">
			<p id="thankyou-icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></p>
			<h1>Thank you for your interest in us</h1>
			<p id="thankyou-message">
				We will be connecting you soon.
			</p>
			<a href="index.html"><input type="button" class="btn btn-lg btn-danger" id="btn-go-back" value="Go back to Home"></a>
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
            <label id="copyrightlabel">© 2016 Forecom All rights reserved. | Powered by <a href="http://www.scriptnex.com"><img src="pictures/bylogo.png" class="bylogo"></a></label>
        </div>

</body>
</html>