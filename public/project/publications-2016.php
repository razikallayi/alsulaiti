<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Alsulaiti Law Firm</title>

<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" media="all">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" media="all">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="css/bootsnav.css" media="all">
<link rel="stylesheet" type="text/css" href="css/animate.css" media="all">
<link rel="stylesheet" type="text/css" href="css/settings.css" media="all">


<script src="js/jquery-2.1.0.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<?php @include('include/mail_check_script.php'); ?>
</head>

<body id="top">

<?php @include('include/quick_response.php'); ?>

<div class="sticky-container">
		<ul class="sticky">
			<li>
				<a href="https://twitter.com/Al_Sulaiti_Law" target="_blank"><i class="fa fa-twitter"></i><p>Twitter</p></a>
			</li>
			<li>
				<a href="https://www.linkedin.com/company/10886250?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A10886250%2Cidx%3A2-1-3%2CtarId%3A1470819688915%2Ctas%3Aal%20sulaiti%20law%20" target="_blank"><i class="fa fa-linkedin"></i><p>Linkedin</p></a>
			</li>
			<li>
				<a href="https://www.facebook.com/al.sulaiti.law" target="_blank"><i class="fa fa-facebook"></i><p>Facebook</p></a>
			</li>
			<li>
				<a href="https://www.youtube.com/channel/UC2-99jokwwbp9_aChOH3vmQ" target="_blank"><i class="fa fa-youtube"></i><p>Youtube</p></a>
			</li>
            <li>
				<a href="https://plus.google.com/u/0/112276132371448273823" target="_blank"><i class="fa fa-google-plus"></i><p>Google +</p></a>
			</li>
			
		</ul>
	</div>

<?php @include('include/header.php'); ?>


   
<div class="about-ttl">
  <div class="container">
     <div class="col-md-12 no-padding">
        <div class="about-ttl-in">
        <?php @include('include/mail_alert.php'); ?>
           <h2>Publications</h2>
           <div class="breadcrumbs">
              <ul>
                 <li><a href="index.html">Home</a></li>
                 <li class="breadcrumbs-active">Publications	</li>
              </ul>
           </div>
        </div>
     </div>
  </div>
</div>


<div class="client-top">
  <h2>Publications</h2>
</div>	

<div class="publication-in">
  <div class="container">
     <div class="col-md-12 no-padding">
        <div class="row">
           
           <div class="col-md-4">
           		<div class="pub-border">
                	<a href="compliance.php" target="_blank">
             		<div class="pub-img"> <img src="images/publication/4.jpg" class="img-responsive"></div>
              	<div class="pub-txt">
              	<h4>Compliance</h4>
                <p>We are Proud to announce the 1st edition of our compliance Issue. The main purpose of this booklet is to always keep our clients up to date with the law <br><br>

</p>
</div>
</a>
</div>
           </div>
           
           
           
           <div class="col-md-4">
           		<div class="pub-border">
                	<a href="profile.php" target="_blank">
             		<div class="pub-img"> <img src="images/publication/1.jpg" class="img-responsive"></div>
              	<div class="pub-txt">
              	<h4>Our Firm Profile</h4>
                <p>Mr. Mubarak Bin Abdullah Al Sulaiti graduated from the Faculty
of Law at Beirut University. He became the head of the legal
department of the Ministry of Transportation in the State
of Qatar.

</p>
</div>
</a>
</div>
           </div>
           
           <div class="col-md-4">
           		<div class="pub-border">
                	<a href="cr-policy.php" target="_blank">
             		<div class="pub-img"> <img src="images/publication/2.jpg" class="img-responsive"> </div>
              	<div class="pub-txt">
              	<h4>Corporate Responsibility Policy</h4>
                <p>

The prime concept is to make a difference, a change, it may not be possible to amend and perfect every obstacle we face as part of this responsibility but the main objective is to strive to make a change

</p>
</div>
</a>
</div>
           </div>
           
           
           <div class="col-md-4">
           		<div class="pub-border">
                	<a href="annual-review-2016.php" target="_blank">
             		<div class="pub-img"> <img src="images/publication/3.jpg" class="img-responsive"></div>
              	<div class="pub-txt">
              	<h4>Annual Review 2016</h4>
                <p>

Firstly we would like to thank all of our clients of their continuous support and loyality to the firm. This year we are experiencing a lot of changes and developements within our firm; this involves many aspects of the firm... 

</p>
</div>
</a>
</div>
           </div>
           
           
           
           
           
        </div>
        
        
        
        
        
        
        
        
     </div>
     
     
     
     
  </div>

</div>






<?php @include('include/footer.php'); ?> 


	
<script src="js/main.js" type="text/javascript"></script> 
<script src="js/bootsnav.js" type="text/javascript"></script>
<script src="js/owl.carousel.js"></script>
<script>

	$(document).ready(function() {	
	$("#owl-demo1").owlCarousel({
	autoPlay:5000,
	items : 1,
	itemsDesktop : [1199,3],
	itemsDesktopSmall : [979,3],
	navigation : false,
	});
	});
	
  $("a[href='#top']").click(function() {
     $("html, body").animate({ scrollTop: 0 }, "slow");
     return false;
  });

</script>

<script type="text/javascript" src="js/jquery.aniview.min.js"></script>
<script>
	$(document).ready(function(){
		$('.aniview').AniView();
	});
</script>



</body>
</html>
