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

           <h2>Training</h2>
           <div class="breadcrumbs">
              <ul>
                 <li><a href="index.php">Home</a></li>
                 <li class="breadcrumbs-active">Training</li>
              </ul>
           </div>
        </div>
     </div>
  </div>
</div>


<div class="train">
  <div id="horizontalTab">
  
        <ul>
            <li><a href="#tab-1">Students Training</a></li>
            <li><a href="#tab-2">Graduates Training</a></li>
        </ul>

        <div id="tab-1">
        <form action="training_mail.php" method="post" enctype="multipart/form-data">
              <div class="pd-txt animated slideInUp">
  <div class="container">
     <div class="col-md-12 no-padding clearfix">
      <h4>Personal Details <img src="images/icons/pd.png"></h4>
          <div class="row">
               <div class="col-md-4">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p>First Name</p>
                    <input name="first_name" type="text" class="form-control" id="email" required>
                    <label for="email" class="user" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-4">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p>Last Name</p>
                    <input name="last_name" type="text" class="form-control" id="email" required>
                    <label for="email" class="user" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-4">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p>Qatar ID Number</p>
                    <input name="qatar_id" type="text" class="form-control" id="email" required>
                    <label for="email" class="user" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-4">
                    <div class="form-group">
                      <p>Date of birth</p>
                <div class="input-group">
            <input name="dob" type="text" class="form-control" name="date" id="date" data-select="datepicker" data-locked="25/12/2014;1/1/2015" data-toggle="datepicker" required>
            <span class="input-group-btn"><button type="button" class="btn" data-toggle="datepicker"><i class="fa fa-calendar"></i></button></span>
          </div>
            </div>
            </div>
            
            <div class="col-md-4">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p>Mobile Number</p>
                    <input name="phone" type="number" class="form-control" id="email">
                    <label for="email" class="fphone" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-4">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p>Email Address</p>
                    <input name="email" type="email" class="form-control" id="email" required>
                    <label for="email" class="femail" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
     </div>
  </div>
</div>
</div>


<div class="ad animated slideInUp">
  <div class="container">
      <div class="col-md-12 no-padding">
        <h4>Acadamic Details <img src="images/icons/pd.png"></h4>
      <div class="row">
               <div class="col-md-6">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p>High School Attended:</p>
                    <input name="high_school_attended" type="text" class="form-control" id="email" required>
                    <label for="email" class="hsa" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-6">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p>High School Results:</p>
                    <input name="high_school_results" type="text" class="form-control" id="email" required>
                    <label for="email" class="hsr" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-6">
            <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p>University Name:</p>
                    <input name="university_name" type="text" class="form-control" id="email" required>
                    <label for="email" class="un" rel="tooltip" title="email"></label>
                </div>
               </div>
                    
            </div>
            
            <div class="col-md-3">
                    <div class="form-group">
                     <p>Year of study:</p>
                    <div class="input-group">
            <input name="year_of_study" type="text" class="form-control" id="date" data-select="datepicker" data-locked="25/12/2014;1/1/2015"  data-toggle="datepicker" required>
            <span class="input-group-btn"><button type="button" class="btn" data-toggle="datepicker"><i class="fa fa-calendar"></i></button></span>
          </div>
               </div>
            </div>
            
            <div class="col-md-3">
                    <div class="form-group">
                     <p>Year of graduation:</p>
                    <div class="input-group">
            <input name="year_of_graduation" type="text" class="form-control" name="date" id="date" data-select="datepicker" data-locked="25/12/2014;1/1/2015"  data-toggle="datepicker" required>
            <span class="input-group-btn"><button type="button" class="btn" data-toggle="datepicker"><i class="fa fa-calendar"></i></button></span>
          </div>
               </div>
            </div>


            <div class="col-md-3">
                    
                    
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p>Results Achieved in 3rd year</p>
                    <input name="results_achieved" type="text" class="form-control" id="email" required>
                    <label for="email" class="ray" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-3">
            <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p>Predicted graduation results:</p>
                    <input name="predicted_graduation_results" type="text" class="form-control" id="email" required>
                    <label for="email" class="hsr" rel="tooltip" title="email"></label>
                </div>
               </div>
                    
            </div>
            
            <div class="col-md-3">
                    <div class="form-group">
                     <p>University Reference</p>

                       <span id="filename" class="filename">Select your file</span>
    <label for="file-upload">Browse<input name="file" type="file" id="file-upload" class="file-upload" required></label>
    <!-- <p class="help-block">upload pdf, doc, jpg, png</p> -->

               </div>
            </div>
            
            <div class="col-md-3">
                    <div class="form-group">
                     <p>&nbsp;</p>
                    <div class="form-group">
                <input type="hidden" name="subject" value="Students Training Enquiry">
                <input type="hidden" name="location" value="<?php echo '#tab-1'; ?>">
                <button type="submit" name="submit" class="button button--shikoba button--round-s button--border-thin"><i class="button__icon"></i><span>Submit Now</span></button>
            </div>
               </div>
            </div>

     </div>
      </div>
  </div>
</div>
</form>
</div>
        <div id="tab-2">
  <form action="training_mail.php" method="post" enctype="multipart/form-data">
              <div class="pd-txt animated slideInUp">
  <div class="container">
     <div class="col-md-12 no-padding clearfix">
      <h4>Personal Details <img src="images/icons/pd.png"></h4>
          <div class="row">
               <div class="col-md-4">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p>First Name</p>
                    <input name="first_name" type="text" class="form-control" id="email" required>
                    <label for="email" class="user" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-4">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p>Last Name</p>
                    <input name="last_name" type="text" class="form-control" id="email" required>
                    <label for="email" class="user" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-4">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p>Qatar ID Number</p>
                    <input name="qatar_id" type="text" class="form-control" id="email" required>
                    <label for="email" class="user" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-4">
                    <div class="form-group">
                      <p>Date of birth</p>
                <div class="input-group">
            <input name="dob" type="text" class="form-control" name="date" id="date" data-select="datepicker" data-locked="25/12/2014;1/1/2015" data-toggle="datepicker" required>
            <span class="input-group-btn"><button type="button" class="btn" data-toggle="datepicker"><i class="fa fa-calendar"></i></button></span>
          </div>
            </div>
            </div>
            
            <div class="col-md-4">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p>Mobile Number</p>
                    <input name="phone" type="number" class="form-control" id="email" >
                    <label for="email" class="fphone" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-4">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p>Email Address</p>
                    <input name="email" type="email" class="form-control" id="email" required>
                    <label for="email" class="femail" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
     </div>
  </div>
</div>
</div>


<div class="ad animated slideInUp">
  <div class="container">
      <div class="col-md-12 no-padding">
        <h4>Acadamic Details <img src="images/icons/pd.png"></h4>
      <div class="row">
               <div class="col-md-6">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p>High School Attended:</p>
                    <input name="high_school_attended" type="text" class="form-control" id="email" required>
                    <label for="email" class="hsa" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-6">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p>High School Results:</p>
                    <input name="high_school_results" type="text" class="form-control" id="email" required>
                    <label for="email" class="hsr" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-6">
            <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p>University Name:</p>
                    <input name="university_name" type="text" class="form-control" id="email" required>
                    <label for="email" class="un" rel="tooltip" title="email"></label>
                </div>
               </div>
                    
            </div>
            
            <div class="col-md-3">
                    <div class="form-group">
                     <p>Year of study:</p>
                    <div class="input-group">
            <input name="year_of_study" type="text" class="form-control" id="date" data-select="datepicker" data-locked="25/12/2014;1/1/2015"  data-toggle="datepicker" required>
            <span class="input-group-btn"><button type="button" class="btn" data-toggle="datepicker"><i class="fa fa-calendar"></i></button></span>
          </div>
               </div>
            </div>
            
            <div class="col-md-3">
                    <div class="form-group">
                     <p>Year of graduation:</p>
                    <div class="input-group">
            <input name="year_of_graduation" type="text" class="form-control" name="date" id="date" data-select="datepicker" data-locked="25/12/2014;1/1/2015"  data-toggle="datepicker" required>
            <span class="input-group-btn"><button type="button" class="btn" data-toggle="datepicker"><i class="fa fa-calendar"></i></button></span>
          </div>
               </div>
            </div>


            <div class="col-md-3">
                    
                    
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p>Results Achieved in 3rd year</p>
                    <input name="results_achieved" type="text" class="form-control" id="email" required>
                    <label for="email" class="ray" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-3">
            <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p>Predicted graduation results:</p>
                    <input name="predicted_graduation_results" type="text" class="form-control" id="email" required>
                    <label for="email" class="hsr" rel="tooltip" title="email"></label>
                </div>
               </div>
                    
            </div>
            
            <div class="col-md-3">
                    <div class="form-group">
                     <p>University Reference</p>

                       <span id="filename1" class="filename">Select your file</span>
    <label for="file-upload1">Browse<input name="file" type="file" id="file-upload1" class="file-upload" required></label>


               </div>
            </div>
            
            <div class="col-md-3">
                    <div class="form-group">
                     <p>&nbsp;</p>
                    <div class="form-group">
            <input type="hidden" name="subject" value="Graduates Training Enquiry">
            <input type="hidden" name="location" value="<?php echo '#tab-2'; ?>">
                <button type="submit" name="submit" class="button button--shikoba button--round-s button--border-thin"><i class="button__icon"></i><span>Submit Now</span></button>
            </div>
               </div>
            </div>

     </div>
      </div>
  </div>
</div>
</form>
</div>
        
        
        

    </div>
</div>






<?php @include('include/footer.php'); ?>

 


	
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
  

$('#file-upload').change(function () {
    var filepath = this.value;
    var m = filepath.match(/([^\/\\]+)$/);
    var filename = m[1];
    $('#filename').html(filename);
});

$('#file-upload1').change(function () {
    var filepath = this.value;
    var m = filepath.match(/([^\/\\]+)$/);
    var filename = m[1];
    $('#filename1').html(filename);
});

</script>

<script type="text/javascript" src="js/jquery.aniview.min.js"></script>
<script>
	$(document).ready(function(){
		$('.aniview').AniView();
	});
</script>

<script type="text/javascript" src="js/jquery.datepicker.js"></script>
    <script src="js/jquery.responsiveTabs.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            var $tabs = $('#horizontalTab');
            $tabs.responsiveTabs({
                rotate: false,
                startCollapsed: 'accordion',
                collapsible: 'accordion',
                setHash: true,
                activate: function(e, tab) {
                    $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
                },
                activateState: function(e, state) {
                    //console.log(state);
                    $('.info').html('Switched from <strong>' + state.oldState + '</strong> state to <strong>' + state.newState + '</strong> state!');
                }
            });


        });
    </script>
	

</body>
</html>
