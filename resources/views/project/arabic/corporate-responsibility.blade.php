@extends('project.arabic.layout.project')
@section('content')

   
<div class="about-ttl">
  <div class="container">
     <div class="col-md-12 no-padding">
        <div class="about-ttl-in">

{{-- @include('project.layout.partials.mail_alert') --}}
           <h2 dir="rtl">المسئولية </h2>
           <div class="breadcrumbs">
              <ul>
                   <li><a href="{{url('ar/')}}">الصفحة الرئيسية</a></li>
                 <li class="breadcrumbs-active">المسئولية </li>
              </ul>
           </div>
        </div>
     </div>
  </div>
</div>



<div class="res-top">
	<div class="container">
       <div class="col-md-12 no-padding">
          <div class="col-md-6 no-padding"><img src="{{url('project/images/ungc.png')}}" class="img-responsive ungc"></div>
          <div class="col-md-6">
             <h4 dir="rtl">مسئولية الشركة <img src="{{url('project/images/icons/res-tp.png')}}"> </h4>
             <p dir="rtl">أن مكتبنا يقدم خدماته القانونية إلى كيانات ومؤسسات من القطاعين العام والخاص على  الصعيدين المحلي والعالمي. كما أننا نفخر بتقديم خدمات قانونية متخصصة للعديد من الهيئات الحكومية والمؤسسات الدولية المرموقة بلغات عدة مثل اللغة العربية والإنجليزية والفرنسية والإيطالية. إننا ملتزمون بخدمة وتحسين مجتمعنا وبيئتنا.

لدينا مسئولية حيال تفعيل روح القانون وتجاه مهنة المحاماة غايتها تحسين وإثراء مسئوليتنا المجتمعية. لدينا دائما رغبة قوية ونسعى بشغف لتحسين وقبول وتشجيع التغيرات الإيجابية التي تطرأ داخل مكتبنا. إن مكتب السليطي للمحاماة والاستشارات القانونية يعمل جاهداً على تطوير المجتمع والتعليم والبيئة . <br>

الحفاظ على علاقتنا القائمة مع موكلينا هي عماد نجاحنا في تحقيق ما نصبوا إليه من غايات فإننا نهتم بموكلينا وسمة ذلك إبداء الفهم التام لكل ما يقومون به من نشاطات وهو الأمر الذي حدا بنا إلى تحقيق أفضل النتائج ومكننا من نيل الرضا التام من موكلينا الكرام. إننا نعمل دائماً على دعم بعض من الأهداف والغايات المجتمعية التي يضطلع بها موكلينا كجزء من مسئوليتنا تجاه المجتمع. رد الجميل لهذه الدولة المباركة ولمجتمعنا هو غاية ما نقوم به ونصبوا إلى تحقيقه. المجتمع الذي نحن جزء منه ونعيش فيه وأيضاً جزء لا يتجزأ من مسئوليتنا. نستعرض في هذا القسم ما نقوم به من جهود غايتها رد الجميل لمجتمعنا وصون ورعاية والبيئة ودعم أهمية التعليم.

</p>

	<a href="{{ url('book/corporate-responsibility')}}" download="corporate Responsibility" class="dcrp"  dir="rtl">للاطلاع على سياستناتجاه المسئوليات المجتمعية، أضغط هنا</a>
    <a href="http://www.mdps.gov.qa/en/qnv/Documents/QNV2030_English_v2.pdf" class="dcrp" target="_blank" dir="rtl">لمزيد من التفاصيل على الرؤية الوطنية لعام 2030 اضغط هنا</a>
          </div>
       </div>
    </div>
 
</div>



<div class="res-btm">

<dl class="responsive-tabs">
  <dt dir="rtl">خدمة الصالح العام والمجتمع</dt>
  <dd >
  <div class="container">
    <div class="col-md-12 no-padding clearfix">
       <div class="col-md-3 animated fadeInDown">
     <img src="{{url('project/images/icons/res1.png')}}">
  </div>
    <div class="col-md-9 animated fadeInDown">
      <h4 dir="rtl">"إن مكتب السليطي للمحاماة والاستشارات القانونية يفخر بتقديم خدمات غايتها خدمة الصالح العام في العديد من مجالات القانون القطري."</h4>
      <p dir="rtl">بوصفنا محامون فإننا نهتم غاية الاهتمام بتحسين مستوى مجتمعنا ودائماً نسعى جاهدين كي نرد له الجميل كما نمثل العديد من موكليناخدمةللصالح العام وتجاه المجتمع بيد أننا لا نفرق أبداً بين هؤلاء وموكلينا الأخرين من حيث ساعات العمل. إننا نعلي دائماً شعار الشفافية والمساواة في تعاملاتنا وفي الوقت ذاته، نسعى جاهدين لتقديم أفضل الخدمات القانونية.</p>
      <a href="{{ url('book/hr-policy-arabic')}}" target="_blank" class="dcrp pub" dir="rtl">لائحة حقوق الإنسان</a>
    </div>
    </div>
  </div>
  
  </dd>

  <dt dir="rtl">البيئة</dt>
  <dd >
  <div class="container">
    <div class="col-md-12 no-padding clearfix">
       <div class="col-md-3 animated fadeInDown">
     <img src="{{url('project/images/icons/res2.png')}}">
  </div>
    <div class="col-md-9 animated fadeInDown">
      <p dir="rtl">حماية البيئة من العناصر الهامة التي تقع ضمن نطاق مسئوليتنا وهي تتطلب منا تكريس الجهود والاتساق في العمل ولضمان الاستدامة في تحسين وتطوير مجتمعنا وبيئتنا، فإننا قد شرعنا في اتخاذ إجراءات داخل مكاتبنا غايتها حماية البيئة. الاهتمام بالبيئة المحيطة بنا هو أمر جوهري لذلك قررنا إعادة تدوير ما يخرج من مكاتبنا من أوراق ونفايات ولا يقتصر الأمر على جهود إعادة تدوير النفايات بل يمتد ليشمل مراقبة معدلات استهلاك الكهرباء والطاقة وفصل مصادر التيار الكهربائي عن مكاتبنا بعد انتهاء ساعات الدوام. </p>
 <p dir="rtl">
عمدنا إلى استخدام الأكواب الفخارية بدلاً من تلك المصنوعة من الورق والبلاستيك لضمان الحفاظ على البيئة. 
</p>
<a href="{{ url('book/envirn-poliy-arabic')}}" target="_blank" class="dcrp pub" dir="rtl">السياسة البيئية </a>

    </div>
    </div>
  </div>
  
  </dd>


  <dt dir="rtl">التعليم</dt>
  <dd >
  <div class="container">
    <div class="col-md-12 no-padding clearfix">
       <div class="col-md-3 animated fadeInDown">
     <img src="{{url('project/images/icons/res3.png')}}">
  </div>
    <div class="col-md-9 animated fadeInDown">
      <p dir="rtl">يمثل التعليم جل غاياتنا ونسعى لذلك إلى دعم تعزيز عملية تدريس القانون وضمان النجاح في هذا المجال. وكجزء من مسئوليتنا المجتمعية، يقوم مكتب السليطي للمحاماة بتقديم العديد من الخدمات القانونية إلى العيادة القانونية التي جرى تأسيسها مؤخراً بكلية القانون بجامعة قطر تحت إشراف العميد / محمد الخليفي. تستقبل العيادة القانونية العديد من الحالات الفردية لأشخاص لديهم مشكلات أو مخاطر جدية ومن ثم يقوم الطلاب بدراستها ومناقشتها قبل اتخاذ القرار القانوني حيالها بشأن تمثيل أصحابها أمام القضاء. وقد أشاد الدكتور/ محمد مطر، أستاذ القانون ومدير العيادة القانونية بالدعم الذي يقدمه مكتب السليطي للمحاماة في تمثيل أصحاب تلك الحالات أمام القضاء لغايات الصالح العام وتحقيق العدالة لأصحاب تلك الحالات.</p>
<p dir="rtl">
ولقد قام مكتب السليطي للمحاماة بوضع برنامج المحامي الصغير، وذلك بغرض منح طلاب المدارس المرحلة المتوسطة والثانوية فرصة التعرف على مهنة المحاماة وبوضعنا لهذا البرنامج، فإننا نقدم يد العون والمساعدة لهؤلاء الطلاب للتعرف على مهنة المحاماة ودورها في المجتمع بالإضافة إلى تزويد الطلاب بمعلومات موجزة حول "السبيل لكي تصبح محام متميز".  
</p>
    </div>
    </div>
  </div>
  
  </dd>


</dl>

</div>




 



@endsection
@section('scripts')

<script>
  
  $.fn.responsiveTabs = function () {
    return this.each(function () {
        var el = $(this), tabs = el.find('dt'), content = el.find('dd'), placeholder = $('<div class="responsive-tabs-placeholder"></div>').insertAfter(el);
        tabs.on('click', function () {
            var tab = $(this);
            tabs.not(tab).removeClass('active');
            tab.addClass('active');
            placeholder.html(tab.next().html());
        });
        tabs.filter(':first').trigger('click');
    });
};
$('.responsive-tabs').responsiveTabs();

</script>

@endsection