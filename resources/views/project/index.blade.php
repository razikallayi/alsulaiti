@extends('project.layout.common')

@section('content')

@include('project.layout.partials.quick_response')
@include('project.layout.partials.sticky_social_icons')
@include('project.layout.partials.header')



<div class="slider">
	<div class="container">
      <div class="owl-carousel" id="owl-demo1">
        <div class="item"><img src="{{url('project/images/slider/slider1.png')}}" alt="" /><div class="inner"><a href="#"><h2>BRIDGING LEGAL TRADITIONS</h2><p>Mr. Mubarak Bin Abdullah Al Sulaiti founded  Al Sulaiti Law Firm in 2002 after working...</p></a></div></div>
        <div class="item"><img src="{{url('project/images/slider/slider2.jpg')}}" alt="" /><div class="inner"><a href="#"><h2>BRIDGING LEGAL TRADITIONS</h2><p>Mr. Mubarak Bin Abdullah Al Sulaiti founded  Al Sulaiti Law Firm in 2002 after working...</p></a></div></div>
        <div class="item"><img src="{{url('project/images/slider/slider3.jpg')}}" alt="" /><div class="inner"><a href="#"><h2>BRIDGING LEGAL TRADITIONS</h2><p>Mr. Mubarak Bin Abdullah Al Sulaiti founded  Al Sulaiti Law Firm in 2002 after working...</p></a></div></div>
        <div class="item"><img src="{{url('project/images/slider/slider3.png')}}" alt="" /><div class="inner"><a href="#"><h2>BRIDGING LEGAL TRADITIONS</h2><p>Mr. Mubarak Bin Abdullah Al Sulaiti founded  Al Sulaiti Law Firm in 2002 after working...</p></a></div></div>
	</div>
    </div>
</div>
   
   
<div class="bnr-btm  clearfix">
	<div class="container clearfix">
       <div class="col-md-12 no-padding clearfix">
          <div id="owl-demo" class="owl-carousel clearfix">
                <div class="item"><a href="service.php?item=1"><div class="item-img2"></div> <p>Commercial Law</p></a></div>
                <div class="item"><a href="service.php?item=2"><div class="item-img4"></div> <p>Real Estate</p></a></div>
                <div class="item"><a href="service.php?item=3"><div class="item-img"></div> <p>Sports Law</p></a></div>
                <div class="item"><a href="service.php?item=4"><div class="item-img6"></div> <p>Employment Law</p></a></div>
                <div class="item"><a href="service.php?item=5"><div class="item-img7"></div> <p>Intellectual Property law</p></a></div>
                <div class="item"><a href="service.php?item=6"><div class="item-img5"></div> <p>Tax</p></a></div>
              </div>
       </div>
    </div>
</div>

<div class="abt-sec clearfix">
  <div class="container">
     <div class="col-md-12 no-padding">
          <h1 class="aniview" av-animation="slideInLeft">About <span>Us</span></h1>
          <p class="aniview" av-animation="slideInRight">Al Sulaiti Law Firm is a full service Qatari Law firm, with cutting edge legal services offered to private and public entities as well as governmental establishments and reputable international organizations. It was established in 2002 by Mr. Mubarak Bin Abdullah al Sulaiti one of Qatar’s renowned lawyers, with an outstanding reputation that always precedes him. </p>
<div class="col-md-12"><a href="about.php" class="hvr-icon-wobble-horizontal">Read More </a></div>
<img src="{{url('project/images/abt-img.png')}}" class="img-responsive" alt="Law Firms in Qatar">
     </div>
  </div>
</div>


<div class="num-sec">
  <div class="container">
     <div class="col-md-12 no-padding">
           <div class="col-md-3 clearfix margin-bottom-20-xs"><div class="count-icon aniview" av-animation="bounceIn"><img src="{{url('project/images/icons/count1.png')}}" alt="international law firms doha
"></div><div class="counting"><div class="counter">397</div><p>Count for Trusted Client</p></div></div>
           <div class="col-md-3 clearfix margin-bottom-20-xs"><div class="count-icon aniview" av-animation="bounceIn1"><img src="{{url('project/images/icons/count2.png')}}" alt="international law firms Qatar
"></div><div class="counting"><div class="counter"> 14 </div><p>Age of Practice</p></div></div>
           <div class="col-md-3 clearfix margin-bottom-20-xs"><div class="count-icon aniview" av-animation="bounceIn2"><img src="{{url('project/images/icons/count3.png')}}" alt="international law firms in Qatar"></div><div class="counting"><div class="counter">306</div><p>No of Pro bono Hours</p></div></div>
           <div class="col-md-3 clearfix margin-bottom-20-xs"><div class="count-icon aniview" av-animation="bounceIn3"><img src="{{url('project/images/icons/count4.png')}}" alt="international law firms
"></div><div class="counting"><div class="counter">50</div><p>No of lawyers</p></div></div>
     </div>
  </div>

</div>

<section class="team-section">
	<div class="container team-relative">
    <div class="team-shadow">Our Team</div>
		<div class="team-content">
			
		</div>
	</div>
	<div class="team-slider-base clearfix">
    	
		<div class="team-slider">
			<ul>
             
				<li class="show-active">
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/team1.jpg')}}" class="img-responsive" alt="international law firm"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/team1.jpg')}}" class="img-resposnive" alt="international law firms">
						</div>
						<div class="team-info-content">
                            <h3>Mubarak Al Sulaiti </h3>
                            <h5>Chairman</h5>
                            <p>Mubarak Al-Sulaiti acquired a bachelor of law from Beirut Arab University in 1997 and is currently admitted to the Qatari Bar Association as a “Cassation Advocate.” Mubarak founded Al-Sulaiti Law Firm in 2002. Since then, Al-Sulaiti Law Firm has become one of the most reputable law firms in Qatar. Mubarak is a certified arbitrator in Qatar. In 2014. Mubarak became one of the members of board of the Qatari Bar Association.</p>
                            <a href="team.php?item=1" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/team2.jpg')}}" class="img-responsive" alt="alternative dispute resolution in qatar"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/team2.jpg')}}" class="img-resposnive" alt="Real Estate & Construction Law  firm in Qatar">
						</div>
						<div class="team-info-content">
                            <h3>Hussam Tantawy</h3>
                            <h5>Senior Legal Consultant & General Manager</h5>
                            <p>Hussam Tantawi has a bachelor of law from Ain Shams University and is currently enrolled in the Egyptian Bar Association as an “appeal advocate.” Hussam’s fifteen years of litigation experience has enabled him to handle a broad range of cases in different fields of law. In recognition of Hussam’s successful representation of numerous local and foreign clients, he has been promoted to the position of senior legal consultant and then the General Manager of Al Sulaiti Law Firm. Prior to joining our office in 2009, Hussam headed a successful group of Egyptian law firms.</p>
                            <a href="team.php?item=2" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/team3.jpg')}}" class="img-responsive" alt="Alternative Dispute Resolution Services in Qatar"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/team3.jpg')}}" class="img-resposnive" alt="Sports Law firms in qatar">
						</div>
						<div class="team-info-content">
                            <h3>Mathieu R. Faupin</h3>
                            <h5>Senior Legal Consultant <br> Head of International Department</h5>
                            <p>Mathieu R. Faupin is originally from France, where he started studying Law at the age of 17. In 2002, Mathieu earned a master degree in private and economic law. Mathieu practiced in a French law firm for more than three years. During this period of time, Mathieu spent considerable time in the Middle East, where he was handling numerous cases. In 2006, Mathieu R. Faupin accepted the offer of the University of Southern California (USC, Los Angeles – USA), where he focused his studies on the Middle East. </p>
                            <a href="team.php?item=3" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/team4.jpg')}}" class="img-responsive" alt="Tax law firms in qatar"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/team4.jpg')}}" class="img-resposnive" alt="commercial law firm in Qatar">
						</div>
						<div class="team-info-content">
                            <h3>Vincenzo Bosisio</h3>
                            <h5>Senior Legal Consultant</h5>
                            <p>Vincenzo Bosisio is a highly skilled consultant with extensive experience practicing law in Europe prior to joining Al Sulaiti Law Firm in 2009. He spent fourteen years working for one of the most prominent Italian law firms before establishing his own offices in Milan and Como in 1995.</p>
                            <a href="team.php?item=4" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/team5.jpg')}}" class="img-responsive" alt="legal consultant in qatar"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/team5.jpg')}}" class="img-resposnive" alt="alternative dispute resolution qatar">
						</div>
						<div class="team-info-content">
                            <h3>Magdy M. Amin</h3>
                            <h5>Senior Legal Consultant</h5>
                            <p>Magdy acquired a bachelor of law from Cairo Universityin 1987and is a member of the Egyptian Bar Association and has been eligible to appear before the Court of Cassation since 2007. He has built his experience in the various fields of law since 1988. </p>
                            <a href="team.php?item=5" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/team6.jpg')}}" class="img-responsive" alt="commercial law firms qatar"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/team6.jpg')}}" class="img-resposnive" alt="Qatar International law firms">
						</div>
						<div class="team-info-content">
                            <h3>Ahmed Qoutb </h3>
                            <h5>Senior Legal Consultant</h5>
                            <p>AhmedQotb graduated from the Faculty of Law, Ain Shams University in 1991. He has been a member of the Egyptian Bar Association since 1992 and joined our office in 2014.</p>
                            <a href="team.php?item=6" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/team7.jpg')}}" class="img-responsive" alt="legal consultants in qatar"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/team7.jpg')}}" class="img-resposnive" alt="registered law firms qatar">
						</div>
						<div class="team-info-content">
                            <h3>Abdel Jawad Tolan</h3>
                            <h5>Senior Legal Consultant</h5>
                            <p>Abdel Jawad is a graduate of the Faculty of Law, Tanta University in 1986. He has been a member of the Egyptian Bar Association since 1988 and joined Al Sulaiti Law Firm in 2014. He has been eligible to appear before the Court of Cassation since 2009. He has built his experience in the various fields of law since 1988. Such experience has enabled him to reach a high standard of competence in the legal profession.</p>
                            <a href="team.php?item=7" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/team8.jpg')}}" class="img-responsive" alt="Employment and Immigration Law firm in Qatar"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/team8.jpg')}}" class="img-resposnive" alt="Immigration Law firm in Qatar">
						</div>
						<div class="team-info-content">
                            <h3>Mohamed Saleh </h3>
                            <h5>Senior Legal Consultant</h5>
                            <p>Mohamed has a bachelor of law from Ain Shams University in 1996, joined the Egyptian bar associate in the same year and he is enrolled in it as a “CassationAdvocate”. Since 2013 Mohamed’s eighteen years of litigation experience has enabled him to handle a broad range of cases in different fields of law.</p>
                            <a href="team.php?item=8" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/team9.jpg')}}" class="img-responsive" alt="Employment Law firm in Qatar"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/team9.jpg')}}" class="img-resposnive" alt="Immigration Law firm Qatar">
						</div>
						<div class="team-info-content">
                            <h3>Imam Own </h3>
                            <h5>Senior Associate</h5>
                            <p>Imam Own obtained his bachelor of law from Tanta University in Egypt in 2001. Imam subsequently became a member of the Egyptian Bar Association in 2002 and is enrolled as an “appeal advocate.” Imam joined Al Sulaiti Law Firm in 2003 and has been responsible for overseeing and managing an extensive portfolio of execution cases in front of Qatari courts.</p>
                            <a href="team.php?item=9" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/team10.jpg')}}" class="img-responsive" alt="registered law firm qatar"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/team10.jpg')}}" class="img-resposnive" alt="advocate  firm in Qatar">
						</div>
						<div class="team-info-content">
                            <h3>Mohammad Sami </h3>
                            <h5>Senior Associate</h5>
                            <p>Mohammad Sami has been practicing law since he obtained a bachelor of law from Alexandria University in 2003. Mohammad has been a member of the Egyptian Bar Association since 2003. Mohammad Sami has focused his practice Sports Law, tender & auction regulations. </p>
                            <a href="team.php?item=10" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/team11.jpg')}}" class="img-responsive" alt="qatari advocates firm"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/team11.jpg')}}" class="img-resposnive" alt="list of law firms in qatar">
						</div>
						<div class="team-info-content">
                            <h3>Ahmed Helmy </h3>
                            <h5>Senior Associate</h5>
                            <p>Ahmed Helmy obtained his bachelor of law from the Faculty of Law, Al-Menufeya University in Egypt in 2001. Ahmed has been a member of the Egyptian Bar Association since 2002. Ahmed joined Al Sulaiti Law Firm in 2008 and works on a wide range of civil, criminal, family, labor law matters.</p>
                            <a href="team.php?item=11" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/team12.jpg')}}" class="img-responsive" alt="Lawyers in Doha"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/team12.jpg')}}" class="img-resposnive" alt="qatari law firm">
						</div>
						<div class="team-info-content">
                            <h3>Muhammad A. Hashim </h3>
                            <h5>Senior Associate & Head of Contracts Department</h5>
                            <p>Muhammad Ameen graduated from the Faculty of Law, English Department, Alexandria University in 2008. He has been a member of the Egyptian Bar Association since 2009 and joined Al Sulaiti Law Firm in 2010. Muhammad is fluent in English. </p>
                            <a href="team.php?item=12" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/team13.jpg')}}" class="img-responsive" alt="dispute resolution services in qatar"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/team13.jpg')}}" class="img-resposnive" alt="dispute resolution  in qatar">
						</div>
						<div class="team-info-content">
                            <h3>Amr H. Eldin</h3>
                            <h5>Senior Associate</h5>
                            <p>AmrHossam joined Al Sulaiti Law Firm in 2014. AmrHossamis a highly accomplished attorney complemented with 6 years of business law experience specifically in the area of commercial; corporate, contracts, alternative dispute settlement and relevant industry experience.</p>
                            <a href="team.php?item=13" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                
                
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/15_s.jpg')}}" class="img-responsive" alt="list law firms qatar"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/15.jpg')}}" class="img-resposnive" alt="international law firms qatar">
						</div>
						<div class="team-info-content">
                            <h3>Mohamed Gomaa</h3>
                            <h5>Associate</h5>
                            <p>Mohamed Gomaa acquired a bachelor of law from Cairo University in 2001 and is currently enrolled in the Egyptian Bar Association as an “appeal advocate.” He joined our law firm in 2011. Mohammed Gomaa has thirteen years of experience in litigation procedures before the Egyptian and Qatari courts.</p>
                            <a href="team.php?item=15" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/16_s.jpg')}}" class="img-responsive" alt="lawyer services in qatar"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/16.jpg')}}" class="img-resposnive" alt="Real Estate  Law  firm in Qatar">
						</div>
						<div class="team-info-content">
                            <h3>Ali Anwar</h3>
                            <h5>Associate</h5>
                            <p>Ali acquired a bachelor of law from Cairo University in 1997 and is currently enrolled in the Egyptian Bar Association as an “appeal advocate.” Ali’s sixteen years of litigation experience has enabled him to represent numerous clients and to handle a broad range of cases in different fields of law, including criminal matters. Ali founded his own law firm in Egypt in 2006 and continues to operate it. Ali has joined Al Sulaiti Law Firm in 2013</p>
                            <a href="team.php?item=16" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/17_s.jpg')}}" class="img-responsive" alt="doha advocates firm"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/17.jpg')}}" class="img-resposnive" alt="lawyers in doha">
						</div>
						<div class="team-info-content">
                            <h3>Mohab Tantawy</h3>
                            <h5>Associate</h5>
                            <p>MuhabTantawi is a graduate of the Faculty of Law, Ain Shams University (2010). He has been a member of the Egyptian Bar Association since 2010 and joined Al Sulaiti Law Firm in 2012. Muhab has carried out litigation procedures before the Public Prosecution and the courts in Egypt</p>
                            <a href="team.php?item=17" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/18_s.jpg')}}" class="img-responsive" alt="qatar lawyers association"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/18.jpg')}}" class="img-resposnive" alt="Construction Law  firm in Qatar">
						</div>
						<div class="team-info-content">
                            <h3>Amal Hasan</h3>
                            <h5>Associate</h5>
                            <p>AmalHasan is a graduate of the Faculty of Law, Alexandria University (2009). She has been a member of the Egyptian Bar Association since 2010 and joined our office in 2013. Amal has carried out litigation procedures efficiently before the Public Prosecution and the courts in Egypt as well as in Qatar.</p>
                            <a href="team.php?item=18" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/19_s.jpg')}}" class="img-responsive" alt="Immigration Law firm in Qatar"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/19.jpg')}}" class="img-resposnive" alt="intellectual property law firms in qatar">
						</div>
						<div class="team-info-content">
                            <h3>Sherif Kamal </h3>
                            <h5>Associate & Proofreader</h5>
                            <p>Sherifgraduated from of the faculty of law, Alexandria University, Egypt, in 2009 and joined our law firm in2011. Sherifis fluent in English and can therefore conduct legal researches in both English and Arabic.</p>
                            <a href="team.php?item=19" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/20_s.jpg')}}" class="img-responsive" alt="doha law firms"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/20.jpg')}}" class="img-resposnive" alt="qatari lawyers association">
						</div>
						<div class="team-info-content">
                            <h3>Mohamed Ali </h3>
                            <h5>Associate & Legal Coordinator</h5>
                            <p>Mohamed Ali is a graduate of the Faculty of Law, Alexandria University in 2010 and joined our law firm in 2014 Mohamed assists his colleagues by conducting legal researches.</p>
                            <a href="team.php?item=20" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/21_s.jpg')}}" class="img-responsive" alt="Attorneys in Qatar"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/21.jpg')}}" class="img-resposnive" alt="Best lawyers in Qatar">
						</div>
						<div class="team-info-content">
                            <h3>Ahmed Nagib</h3>
                            <h5>Associate & Chairman's Oce Manager</h5>
                            <p>Ahmed is a graduate of the Faculty of Law, English Department, Alexandria University in 2008 and joined our law firm in 2014 Ahmed is fluent in English and can therefore conduct legal researches in both English and Arabic.</p>
                            <a href="team.php?item=21" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                
                
                
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/23_s.jpg')}}" class="img-responsive" alt="professional Lawyers Qatar"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/23.jpg')}}" class="img-resposnive" alt="Legal Services Qatar">
						</div>
						<div class="team-info-content">
                            <h3>Aravind Sugunan </h3>
                            <h5>Associate</h5>
                            <p>Arvind is a graduate of Jindal Global Law School, Sonipat, India, 2014 Degree: B.A., LL.B (Honours). Founding Member – Human Rights Society, Jindal Global Law School 2009-2014.</p>
                            <a href="team.php?item=23" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/24_s.jpg')}}" class="img-responsive" alt="advocates in Qatar"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/24.jpg')}}" class="img-resposnive" alt="Legal Services in Qatar">
						</div>
						<div class="team-info-content">
                            <h3>Ahmed Askar </h3>
                            <h5>Associate</h5>
                            <p>Ahmed is a graduate of the Faculty of Law, Cairo University in 2000 and joined our law firm in 2012.</p>
                            <a href="team.php?item=24" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/25_s.jpg')}}" class="img-responsive" alt="Legal Solutions Qatar"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/25.jpg')}}" class="img-resposnive" alt="Qatar Law Firm">
						</div>
						<div class="team-info-content">
                            <h3>Nader Abo Al Ela</h3>
                            <h5>Associate</h5>
                            <p>Nader is a graduate of the Faculty of Law, Al Azhar University in 2004 and joined our law firm in 2014</p>
                            <a href="team.php?item=25" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/26_s.jpg')}}" class="img-responsive" alt="Sports Law firms in qatar"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/26.jpg')}}" class="img-resposnive" alt="legal consultant in qatar">
						</div>
						<div class="team-info-content">
                            <h3>Abdullah Mohamed </h3>
                            <h5>Legal Consultant & General Manager</h5>
                            <p>Abdullah has a bachelor of law from Ain Shams University and is currently enrolled in the Egyptian Bar Association as an “appeal advocate.” Abdulla’s ten years of litigation experience has enabled him to handle a broad range of cases in different fields of law. In recognition of Abdullah’s successful representation of numerous local and foreign clients, he has been promoted to be the General Manager of Husam Tantawi Law Firm.</p>
                            <a href="team.php?item=26" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/27_s.jpg')}}" class="img-responsive" alt="commercial law firms qatar"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/27.jpg')}}" class="img-resposnive" alt="Qatar Law Firm">
						</div>
						<div class="team-info-content">
                            <h3>A. Moneim El Sheshtawy</h3>
                            <h5>Legal Administrative Manager</h5>
                            <p>Abdul Moneim has extensive experience in handling the administrative requirements of law firms such as the administrative tasks related to cases, contracts and relevant authorities.</p>
                            <a href="team.php?item=27" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/28_s.jpg')}}" class="img-responsive" alt="Sports Law firms in qatar"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/28.jpg')}}" class="img-resposnive" alt="legal consultant in qatar">
						</div>
						<div class="team-info-content">
                            <h3>Ahmed . Azeem </h3>
                            <h5>Legal Consultant</h5>
                            <p>Ahmed is a graduate of the Faculty of Law, Assiut University in 1997. He has been a member of the Egyptian Bar Association since 1998. He is currently registered in the Egyptian bar association as an appeal lawyer. He has built his experience in the various fields of law since 1998. Such experience has enabled him to reach a high standard of competence in the legal profession.</p>
                            <a href="team.php?item=28" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                <li>
					<div class="tm-static-img">
						<a href="#"><img src="{{url('project/images/team/29_s.jpg')}}" class="img-responsive" alt="lawyer services in qatar"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{url('project/images/team/29.jpg')}}" class="img-resposnive" alt="registered law firms qatar">
						</div>
						<div class="team-info-content">
                            <h3>Attef Abdulfattah</h3>
                            <h5>Senior Legal Consultant</h5>
                            <p>Attef is a graduate of the Faculty of Law, Ais Shams University in 1987. He has been a member of the Egyptian Bar Association since 1988. He has been eligible to appear before the Court of Cassation since 2005. He has built his experience in the various fields of law since 1988. Such experience has enabled him to reach a high standard of competence in the legal profession.</p>
                            <a href="team.php?item=29" class="hvr-icon-wobble-horizontal team-more">Know More </a>
						</div>
					</div>
				</li>
                
			</ul>
		</div>
	</div>
</section>


<div class="client-say">
  <div class="container">
     <div class="col-md-12 no-padding text-center">
       <h2>What Our Client Says</h2>
       <p>Clients Testimonials</p>
     </div>
     <div class="col-md-12 no-padding">
         <div class="flexslider carousel">
          <ul class="slides">
            <li>
              <div class="client-main">
               <div class="client-img"><img src="{{url('project/images/client1.jpg')}}" alt="qatari advocates firm"></div>
  	    		<div class="client-txt">
                   <div class="quote"><i class="fa fa-quote-left "></i>	</div><h2> Qatar foundation</h2>
                   <p>Mr. Mubarak Al Sulaiti  is one of the most eminent lawyers in Qatar with the best team, we pride ourselves in working with Al Sulaiti Law Firm.’</p>
                </div>
               </div>     
  	    	</li>
  	    		
  	    	<li>
              <div class="client-main">
               <div class="client-img"><img src="{{url('project/images/client2.jpg')}}" alt="legal consultant in qatar"></div>
  	    		<div class="client-txt">
                   <div class="quote"><i class="fa fa-quote-left "></i>	</div><h2> Abu Issa Holding</h2>
                   <p>‘Al Sulaiti Law firm is one of the reputable firms in Qatar, the team are very approachable and easy to deal with, extremely professional Lawyers that are the best at what they do in the region.’</p>
                </div>
               </div>     
  	    	</li>
            
            <li>
              <div class="client-main">
               <div class="client-img"><img src="{{url('project/images/client3.jpg')}}" alt="Immigration Law firm in Qatar"></div>
  	    		<div class="client-txt">
                   <div class="quote"><i class="fa fa-quote-left "></i>	</div><h2> Al Naboodah Holding LLC</h2>
                   <p>
We thank the entire team at Al Sulaiti Law firm for your tireless efforts contributed to our case. We received the best legal services from your firm and wish you many more work achievements.</p>
                </div>
               </div>     
  	    	</li>
            
            
            
            	
  	    		
          </ul>
        </div>
     </div>
  </div>

</div>

<div class="office">
  <div class="container">
     <div class="col-md-12">
       <div class="col-md-7 no-padding">
          <div class="office-add clearfix">
             <div class="col-md-6 no-padding">
                <div class="office-txt aniview" av-animation="fadeInUp">
                 <h4>Doha, Qatar</h4>
                 <p>Tel: +974 4466 4066 or +974 4466 4766 <br> Fax: +974 4465 1919 <br> P.O. Box: 14646, Doha, Qatar <br> e-mail: <a href="mailto:info@slf-qa.com">info@slf-qa.com</a></p>
                 </div>
                 <div class="office-txt aniview" av-animation="fadeInUp">
                 <h4>Cairo, Egypt</h4>
                 <p>26 Mostafa Nahas Madinat Nasr <br> Cairo, Egypt <br> Tel: +2tv02 26700370</p>
                 </div>
                 <div class="office-txt aniview" av-animation="fadeInUp">
                 <h4>Milan, Italy</h4>
                 <p>Via S. Cecilia, 5-20122 Milan, Italy <br> Tel: +39 02 76006706 <br> Fax: +39 02 76390633</p>
                 </div>
                 <div class="office-txt aniview" av-animation="fadeInUp">
                 <h4>Como, Italy</h4>
                 <p>Via Garibaldi, 30-22100 Como, Italy <br> Tel: +39 031 261314 <br> Fax: +39 031 3301389</p>
                 </div>
                 
             </div>
             
             <div class="col-md-6 no-padding">
                	<h3 class="asso"> In Association With Offices </h3>
                 <div class="office-txt aniview" av-animation="fadeInUp">
                 <h4>Beirut, Lebanon</h4>
                 <p>Tilal Bldg., Block A7 <br> Asharfieh Street, Beirut, Lebanon <br> Tel: +961 1 207222 <br> Fax: +961 1 203191 <br> e-mail: <a href="mailto:info@mcl-lb.com">info@mcl-lb.com</a></p>
                 </div>
                 <div class="office-txt aniview" av-animation="fadeInUp">
                 <h4>Kuwait</h4>
                 <p>6th Floor, Kuwait Chamber <br> of Commerce and Industry Bldg. <br> Abdul Aziz Hamad Al Sagar Street <br> Tel: +965 2243 1122 <br> Fax: +965 2240 2501 <br> P.O. Box: 26292, Safat 13123, Kuwait <br> e-mail:<a href="mailto:info@mcl-kw.com"> info@mcl-kw.com</a></p>
                 </div>
             </div>
             
          </div>
       </div>
       
       <div class="col-md-5 no-padding">
         <div class="office-map">
           <h3>Our Offices</h3>
             <img src="{{url('project/images/map.png')}}" class="img-responsive" alt="Construction Law  firm in Qatar">
             <div class="office1"></div> 
             <div class="office2"></div> 
             <div class="office3"></div> 
             <div class="office4"></div> 
             <a href="https://www.google.com/maps?ll=25.178941,51.531519&z=12&t=m&hl=en-US&gl=QA&mapclient=embed&q=Doha" target="_blank"><div class="office5"></div> </a>
         </div>
       </div>
       
     </div>
  </div>
</div>


@endsection
@section('scripts')
@parent
<script>
	
	jQuery(document).ready(function( $ ) {
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});
	});
	
	    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: true,
        itemWidth: 566,
        minItems: 1,
        maxItems: 4,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });


  $("a[href='#top']").click(function() {
     $("html, body").animate({ scrollTop: 0 }, "slow");
     return false;
  });

</script>

<script src='{{url('project/js/owl.carousel.min.js')}}'></script>
<script>
$(document).ready(function() {
$('#owl-demo1').owlCarousel({
    stagePadding: 0,
    loop:true,
    margin:0,
    nav:false,
    items:1,
    lazyLoad: true,
    nav:true,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
	smartSpeed:1000,
  responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,
        },
        1000:{
            items:1,
        },
        1200:{
            items:1,
        },
        1400:{
            items:1,
        },
        1600:{
            items:1,
        },
        1800:{
            items:1,
        }
    }
})

})

$(document).ready(function() {

$('#owl-demo').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    items:1,
    nav:true,
	autoplay:true,
	autoplayTimeout:6000,
	autoplayHoverPause:true,
  responsive: {
	  0: {
		items: 1
	  },
	  600: {
		items: 2
	  },
	  1000: {
		items: 5
	  }
	}
  })

$( ".owl-prev").html('<i class="fa fa-arrow-left"></i>');
 $( ".owl-next").html('<i class="fa fa-arrow-right	"></i>');
})

</script>
<script type="text/javascript">
    $(function(){
       $('.team-slider ul').lightSlider({
           autoWidth:true,
           loop:true,
           slideMargin:0,
           auto:true,
           pager:false,
           onSliderLoad: function(){
              var html = $(".team-slider .show-active").find(".tm-show-content").html();
              $(".team-content").addClass("animate").html(html);
           }
       }); 
        
        $(".team-slider li a").click(function(e){
           e.preventDefault(); 
            var html = $(this).parent().parent().find(".tm-show-content").html();
            //$(".team-content").removeClass("animate").delay(1000).addClass("animate").html(html);
            console.log(html);
           
            $(".team-content").removeClass("animate").delay(500).queue(function(next){
              
                $(".team-content").html(html).addClass("animate");
                next();
            });
        });
    });
</script>
<script>
        $(document).ready(function() {	

		var id = '#dialog';
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(500);	
		$('#mask').fadeTo("slow",0.9);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
	
		//transition effect
		$(id).fadeIn(2000); 	
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});		
	
	//if mask is clicked
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});		
	
});
        </script>		

@endsection