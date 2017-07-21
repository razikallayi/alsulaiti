@extends('project.arabic.layout.project')
@section('content')

   
<div class="about-ttl">
  <div class="container">
     <div class="col-md-12 no-padding">
        <div class="about-ttl-in">

{{-- @include('project.layout.partials.mail_alert') --}}

           <h2>التدريب</h2>
           <div class="breadcrumbs">
              <ul>
                   <li><a href="{{url('ar/')}}">الصفحة الرئيسية</a></li>
                 <li class="breadcrumbs-active">التدريب</li>
              </ul>
           </div>
        </div>
     </div>
  </div>
</div>


<div class="train">
  <div id="horizontalTab">
  
        <ul class="clearfix">
            <li><a href="#students-training" dir="rtl">تدريب الطلاب</a></li>
            <li><a href="#graduates-training" dir="rtl">تدريب الخرجين</a></li>
        </ul>

        <div id="tab-1">
        <form action="{{URL('training')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
              <div class="pd-txt animated slideInUp">
  <div class="container">
     <div class="col-md-12 no-padding clearfix">
     <div class="col-md-12 no-padding"> <h4 dir="rtl">البيانات الشخصية <img src="{{url('project/images/icons/pd.png')}}"></h4></div>
          <div class="row">
               <div class="col-md-4">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p dir="rtl">الاسم الأول</p>
                    <input dir="rtl" name="first_name" type="text" class="form-control" id="email" required>
                    <label for="email" class="user" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-4">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p dir="rtl">اللقب</p>
                    <input dir="rtl" name="last_name" type="text" class="form-control" id="email" required>
                    <label for="email" class="user" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-4">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p dir="rtl">رقم البطاقة الشخصية القطرية</p>
                    <input dir="rtl" name="qatar_id" type="text" class="form-control" id="email" required>
                    <label for="email" class="user" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-4">
                    <div class="form-group">
                      <p dir="rtl">تاريخ الولادة</p>
                <div class="input-group">
            <span class="input-group-btn"><button type="button" class="btn" data-toggle="datepicker"><i class="fa fa-calendar"></i></button></span>
            <input dir="rtl" name="dob" type="text" class="form-control" name="date" id="date" data-select="datepicker" data-locked="25/12/2014;1/1/2015" data-toggle="datepicker" required>
          </div>
            </div>
            </div>
            
            <div class="col-md-4">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p dir="rtl">رقم الهاتف</p>
                    <input dir="rtl" name="phone" type="number" class="form-control" id="email">
                    <label for="email" class="fphone" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-4">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p dir="rtl">عنوان البريد الإلكتروني</p>
                    <input dir="rtl" name="email" type="email" class="form-control" id="email" required>
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
        <div class="col-md-12 no-padding"><h4 dir="rtl">المؤهلات الأكاديمية <img src="{{url('project/images/icons/pd.png')}}"></h4></div>
      <div class="row">
               <div class="col-md-6">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p dir="rtl">المدرسة الثانوية:</p>
                    <input dir="rtl" name="high_school_attended" type="text" class="form-control" id="email" required>
                    <label for="email" class="hsa" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-6">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p dir="rtl">نتيجة الدراسة بالمدرسة الثانوية:</p>
                    <input dir="rtl" name="high_school_results" type="text" class="form-control" id="email" required>
                    <label for="email" class="hsr" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-6">
            <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p dir="rtl">اسم الجامعة:</p>
                    <input dir="rtl" name="university_name" type="text" class="form-control" id="email" required>
                    <label for="email" class="un" rel="tooltip" title="email"></label>
                </div>
               </div>
                    
            </div>
            
            <div class="col-md-3">
                    <div class="form-group">
                     <p dir="rtl">عدد سنوات الدراسة بالجامعة:</p>
                    <div class="input-group">
            <span class="input-group-btn"><button type="button" class="btn" data-toggle="datepicker"><i class="fa fa-calendar"></i></button></span>
            <input dir="rtl" name="year_of_study" type="text" class="form-control" id="date" data-select="datepicker" data-locked="25/12/2014;1/1/2015"  data-toggle="datepicker" required>
          </div>
               </div>
            </div>
            
            <div class="col-md-3">
                    <div class="form-group">
                     <p dir="rtl">سنة التخرج:</p>
                    <div class="input-group">
            <span class="input-group-btn"><button type="button" class="btn" data-toggle="datepicker"><i class="fa fa-calendar"></i></button></span>
            <input dir="rtl" name="year_of_graduation" type="text" class="form-control" name="date" id="date" data-select="datepicker" data-locked="25/12/2014;1/1/2015"  data-toggle="datepicker" required>
          </div>
               </div>
            </div>


            <div class="col-md-3">
                    
                    
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p dir="rtl">نتيجة السنة الثالثة:</p>
                    <input dir="rtl" name="results_achieved" type="text" class="form-control" id="email" required>
                    <label for="email" class="ray" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-3">
            <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p dir="rtl">نتيجة التخرج المتوقعة:</p>
                    <input dir="rtl" name="predicted_graduation_results" type="text" class="form-control" id="email" required>
                    <label for="email" class="hsr" rel="tooltip" title="email"></label>
                </div>
               </div>
                    
            </div>
            
            <div class="col-md-3">
                    <div class="form-group">
                     <p dir="rtl">المرجع بالجامعة</p>

                       <span id="filename" class="filename" dir="rtl">حدد الملف</span>
    <label for="file-upload">تصفح<input name="file" type="file" id="file-upload" class="file-upload" required></label>
    <!-- <p class="help-block">upload pdf, doc, jpg, png')}}</p> -->

               </div>
            </div>
            
            <div class="col-md-3">
                    <div class="form-group">
                     <p>&nbsp;</p>
                    <div class="form-group">
                <input dir="rtl" type="hidden" name="subject" value="Students Training Enquiry">
                <input dir="rtl" type="hidden" name="location" value="<?php echo '#students-training'; ?>">
                <button type="submit" name="submit" class="button button--shikoba button--round-s button--border-thin"><i class="button__icon"></i><span>قدم طلبك الأن</span></button>
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
      <div class="col-md-12 no-padding"><h4 dir="rtl">البيانات الشخصية  <img src="{{url('project/images/icons/pd.png')}}"></h4></div>
          <div class="row">
               <div class="col-md-4">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p dir="rtl">الاسم الأول</p>
                    <input dir="rtl" name="first_name" type="text" class="form-control" id="email" required>
                    <label for="email" class="user" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-4">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p dir="rtl">اللقب</p>
                    <input dir="rtl" name="last_name" type="text" class="form-control" id="email" required>
                    <label for="email" class="user" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-4">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p dir="rtl">رقم البطاقة الشخصية القطرية</p>
                    <input dir="rtl" name="qatar_id" type="text" class="form-control" id="email" required>
                    <label for="email" class="user" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-4">
                    <div class="form-group">
                      <p dir="rtl">تاريخ الميلاد</p>
                <div class="input-group">
            <span class="input-group-btn"><button type="button" class="btn" data-toggle="datepicker"><i class="fa fa-calendar"></i></button></span>
            <input dir="rtl" name="dob" type="text" class="form-control" name="date" id="date" data-select="datepicker" data-locked="25/12/2014;1/1/2015" data-toggle="datepicker" required>
          </div>
            </div>
            </div>
            
            <div class="col-md-4">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p dir="rtl">رقم الهاتف</p>
                    <input dir="rtl" name="phone" type="number" class="form-control" id="email" >
                    <label for="email" class="fphone" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-4">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p dir="rtl">عنوان البريد الإلكتروني</p>
                    <input dir="rtl" name="email" type="email" class="form-control" id="email" required>
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
        <div class="col-md-12 no-padding"><h4 dir="rtl">المؤهلات الأكاديمية   <img src="{{url('project/images/icons/pd.png')}}"></h4></div>
      <div class="row">
               <div class="col-md-6">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p dir="rtl">المدرسة الثانوية</p>
                    <input dir="rtl" name="high_school_attended" type="text" class="form-control" id="email" required>
                    <label for="email" class="hsa" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-6">
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p dir="rtl">نتيجة الدراسة بالمدرسة الثانوية</p>
                    <input dir="rtl" name="high_school_results" type="text" class="form-control" id="email" required>
                    <label for="email" class="hsr" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-6">
            <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p dir="rtl">اسم الجامعة</p>
                    <input dir="rtl" name="university_name" type="text" class="form-control" id="email" required>
                    <label for="email" class="un" rel="tooltip" title="email"></label>
                </div>
               </div>
                    
            </div>
            
            <div class="col-md-3">
                    <div class="form-group">
                     <p dir="rtl">عدد سنوات الدراسة</p>
                    <div class="input-group">
            <span class="input-group-btn"><button type="button" class="btn" data-toggle="datepicker"><i class="fa fa-calendar"></i></button></span>
            <input dir="rtl" name="year_of_study" type="text" class="form-control" id="date" data-select="datepicker" data-locked="25/12/2014;1/1/2015"  data-toggle="datepicker" required>
          </div>
               </div>
            </div>
            
            <div class="col-md-3">
                    <div class="form-group">
                     <p dir="rtl">سنة التخرج</p>
                    <div class="input-group">
            <span class="input-group-btn"><button type="button" class="btn" data-toggle="datepicker"><i class="fa fa-calendar"></i></button></span>
            <input dir="rtl" name="year_of_graduation" type="text" class="form-control" name="date" id="date" data-select="datepicker" data-locked="25/12/2014;1/1/2015"  data-toggle="datepicker" required>
          </div>
               </div>
            </div>


            <div class="col-md-3">
                    
                    
                    <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p dir="rtl">نتيجة السنة الثالثة</p>
                    <input dir="rtl" name="results_achieved" type="text" class="form-control" id="email" required>
                    <label for="email" class="ray" rel="tooltip" title="email"></label>
                </div>
               </div>
            </div>
            
            <div class="col-md-3">
            <div class="form-group">
                <div class="icon-addon addon-lg">
                    <p dir="rtl">نتيجة التخرج المتوقعة</p>
                    <input dir="rtl" name="predicted_graduation_results" type="text" class="form-control" id="email" required>
                    <label for="email" class="hsr" rel="tooltip" title="email"></label>
                </div>
               </div>
                    
            </div>
            
            <div class="col-md-3">
                    <div class="form-group">
                     <p dir="rtl">المرجع بالجامعة</p>

                       <span id="filename1" class="filename">حدد الملف</span>
    <label for="file-upload1">تصفح<input name="file" type="file" dir="rtl" id="file-upload1" class="file-upload" required></label>


               </div>
            </div>
            
            <div class="col-md-3">
                    <div class="form-group">
                     <p>&nbsp;</p>
                    <div class="form-group">
            <input dir="rtl" type="hidden" name="subject" value="Graduates Training Enquiry">
            <input dir="rtl" type="hidden" name="location" value="<?php echo '#graduates-training'; ?>">
                <button type="submit" name="submit" class="button button--shikoba button--round-s button--border-thin"><i class="button__icon"></i><span>قدم طلبك الأن</span></button>
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




  

@endsection
@section('scripts')

<script src="{{url('project/js/owl.carousel.js') }}"></script>
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



<script type="text/javascript" src="{{url('project/js/jquery.datepicker.js') }}"></script>
    <script src="{{url('project/js/jquery.responsiveTabs.js') }}" type="text/javascript"></script>

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

@endsection