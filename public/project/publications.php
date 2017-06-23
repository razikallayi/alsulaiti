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

</head>

<body id="top">

<div class="quick-response">
     <div class="quick-sec">
		<div class="quick-icon"><i class="fa fa-paper-plane"></i></div>
        <div class="quick-txt">
           <h2>Contact Form</h2>
           
           <span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="text" id="input-4" />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
						<span class="input__label-content input__label-content--hoshi">Name</span>
					</label>
				</span>
				<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="text" id="input-5" />
					<label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-5">
						<span class="input__label-content input__label-content--hoshi">Email</span>
					</label>
				</span>
				<span class="input input--hoshi">
					<input class="input__field input__field--hoshi" type="text" id="input-6" />
					<label class="input__label input__label--hoshi input__label--hoshi-color-3" for="input-6">
						<span class="input__label-content input__label-content--hoshi">Phone</span>
					</label>
				</span>
                <span class="input input--hoshi">
                    <textarea class="input__field input__field--hoshi" id="input-7"></textarea>
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-7">
						<span class="input__label-content input__label-content--hoshi">Message</span>
					</label>
				</span>
                <div class="col-md-12">
                   <button class="quick-btn">Submit</button>
                </div>
                
           
        </div>
        </div>
	</div>

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
           <h2>Publications</h2>
           <div class="breadcrumbs">
              <ul>
                 <li><a href="index.php">Home</a></li>
                 <li class="breadcrumbs-active">Publications	</li>
              </ul>
           </div>
        </div>
     </div>
  </div>
</div>


<div class="client-top">
  <h2>Latest Publications </h2>
</div>	

<div class="publication">
  <div class="container">
     <div class="col-md-12 no-padding">
        <div class="grid clearfix">
					<figure class="effect-lily">
						<a href="publications-2016.php"><img src="images/2.jpg" /></a>
						<figcaption>
							<div>
							<a href="publications-2016.php">	
                            <h2>Publications </h2>
								<p>Know More</p>
                                </a>
							</div>
							<a href="publications-2016.php">Know More</a>
						</figcaption>			
					</figure>
					
                    <figure class="effect-lily">
						<a href="litigation.php"><img src="images/2.jpg" /></a>
						<figcaption>
							<div>
							<a href="litigation.php">	
                            <h2>Insight </h2>
								<p>Know More</p>
                                </a>
							</div>
							<a href="litigation.php">Know More</a>
						</figcaption>			
					</figure>
                    
                    
					

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
