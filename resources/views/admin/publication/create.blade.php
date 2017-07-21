@extends('admin.layout.master')

@section('title','Publication')

@section('active_menu','mnu-publication')
@if(!isset($publication))
@section('active_submenu', 'add')
@endif

@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header bg-project">
			<h2 class="">@if(isset($publication)) Edit @else Add @endif Publication</h2>
			</div>
			<div class="body">

			@if(isset($publication))
			<form id="form_validation" method="POST" action="{{url('admin/publication/update/'.$publication->id)}}" enctype="multipart/form-data">
				{{csrf_field()}}
				{{ method_field('PUT') }}
			@else
			<form id="form_validation" method="POST" action="{{url('admin/publication')}}" enctype="multipart/form-data">
			@endif
			{{csrf_field()}}


					@if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif

					@if (session()->has('message'))
					<div class="alert {{session()->get('status')}}">
						<ul>
							<li>{!!session()->get('message')!!}</li>
						</ul>
					</div>
					@endif


          <div class="col-sm-6">
          <label>Title</label>
            <div class="form-group ">
              <div class="form-line">
                <input type="text" value="{{$publication->title or old('title')}}" name="title" maxlength="191" " class="form-control" required="">
              </div>
            </div>
          </div>
          <div class="col-sm-6">
          <label>Title Arabic</label>
            <div class="form-group ">
              <div class="form-line">
                <input type="text" value="{{$publication->title_ar or old('title_ar')}}" name="title_ar" maxlength="191" " class="arabic_input form-control">
              </div>
            </div>
          </div>
          
          <div class="col-sm-6">
          <label>Description</label>
            <div class="form-group">
              <div class="form-line">
                <textarea name="description" rows="4" class="form-control htmlEditor">{{$publication->description or old('description')}}</textarea>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
          <label>Description Arabic</label>
            <div class="form-group">
              <div class="form-line">
                <textarea name="description_ar" rows="4" class="form-control arabic_input htmlEditor">{{$publication->description_ar or old('description_ar')}}</textarea>
              </div>
            </div>
          </div>

            <div class="col-sm-12">
              <label>Upload PDF File<code>*</code></label>
              <div class="form-group">
                <div class="">
                  <input type="file" accept="application/pdf" name="pdf_file" {{!isset($publication)? "required" :""}}
                  class="fileInput col-teal glyphicon glyphicon-book fa-5x" >
                  <div class="fileResult">
                    @if(isset($publication) && $publication->pdfUrl() !=null)
                    <div class="m-t-10">
                    <b>Book Preview</b><br/>
                    <embed src="{{$publication->pdfUrl()}}" />
                    </div>  
                    @endif
                  </div>
                </div>
              </div>
            </div>
 
          

				<div class="col-sm-12">
          <div class="form-group">
            <label>Upload Image<code>*</code> </label>
            <span id ="ProgressInfo"></span>
            <p id="CropSizeInfo" class="help-block"></p>
            <input id="ImageInput" accept="image/*" class="col-indigo glyphicon glyphicon-picture fa-5x" name="image[]" type="file" />
            <br/>
            <b>Preview</b><br/>
          </div>
          

          <div id="result" class="connectedSortable">
            @if(isset($publication) && null != $publication->imageUrl())
            <input type="hidden" id="image-input-{{substr($publication->image,0,-4)}}" name = "image[]" value="{{$publication->image}}">
            <div id="image-preview-{{substr($publication->image,0,-4)}}" class="col-lg-3 col-md-4 col-sm-6 m-t-30 sort_handle" style="min-height:100px">
              <span>
            {{--     <button type="button" style="float:right;" onclick="whyte.deleteImage('{{$publication->image}}')" class="btn btn-xs  waves-effect btn-danger pull-right"><i class="material-icons">close</i></button> --}}
                
                <img class="img-responsive sortable_image" style="width:100%" src="{{$publication->imageUrl()}}">
              </span>
            </div>
            @elseif(null != old('image')[0])
              <input type="hidden" id="image-input-{{substr(old('image')[0],0,-4)}}" name = "image[]" value="{{old('image')[0]}}">
              <div id="image-preview-{{substr(old('image')[0],0,-4)}}" class="col-md-3 m-t-30" style="min-height:100px"><span><img class="img-responsive" src="{{url(App\Models\Publication::IMAGE_LOCATION."/".old('image')[0])}}"></span></div>
            @endif
          </div>

        </div>

<div class="col-md-4 col-sm-12">
          <label>Publish</label>
          <div class="form-group">
            @php
            $checked=" checked ";
            if(isset($publication) && $publication->is_published){
              $checked = " checked ";
            }
            else{
              $checked = old('is_published')==1?"checked":$checked;
            }
            @endphp
            <input type="checkbox" name="is_published" value="1" id="is_published" class="filled-in chk-col-blue" {{$checked or ""}}>
            <label for="is_published">Publish</label>
          </div>
        </div>

				<div class="row clearfix">
					<div class="col-sm-12">
						<div class="form-group">
							<div class="">
								<input type="submit" id="saveButton" name="save" value="Save Data" class="btn btn-success waves-effect" >
							</div>
						</div>
					</div>
				</div>

				</form>			
			</div>
		</div>

	</div>



	@include('admin.layout.partials.CropperModal')

	@endsection

	

@section('scripts')
@parent
	
  <script>
      $('.fileInput').change(function() {
        var filepath = $('.fileInput').val()
        var filename = filepath.replace(/.*[\/\\]/, '');
        $('.fileResult').html("<p class='help-block'>"+filename+"</p>");
  });
  </script>
	
   <link href="{{url('md/plugins/cropper/cropper.min.css')}}" rel="stylesheet">
  <script src="{{url('md/plugins/cropper/cropper.min.js')}}"></script>
  <script>
    $(function() {
      whyte={};
      whyte.imageWidth = 350;
      whyte.imageHeight = 183;
      whyte.storageLocation= "{{App\Models\Publication::IMAGE_LOCATION}}";
      whyte.postUrl = "{{url('admin/publication/image')}}";

      whyte.deleteUrl = whyte.postUrl;
      whyte.hasThumbChooser = false;
      whyte.hasDeleteButton = false;
      whyte.result = $('#result');
      whyte.image = $(".featured_image > img");
      whyte.saveButton = $("#saveButton");
      whyte.imageInput =$("#ImageInput");
      whyte.cropperModal = $('#CropperModal');
      whyte.imageSizeInfo = $('#CropSizeInfo');

      whyte.croperOptions = {
        aspectRatio: whyte.imageWidth/whyte.imageHeight,
        autoCrop: true,
        autoCropArea: 1.0,
        background: false,
        checkImageOrigin: true,
        dragCrop: false,
        guides: false,
        highlight: false,
        modal: true,
        movable: false,
        mouseWheelZoom: false,
        resizable: false,
        responsive: false,
        strict: true,
        touchDragZoom: false,
        zoomable: true
    };


      var helpinfo = 'Use images of width:<b>'+whyte.imageWidth+'px</b> and height:<b>'+whyte.imageHeight+'px</b> or images with same ratio.';
      whyte.imageSizeInfo.html(helpinfo);

      whyte.showImage = function(data){
      	var setThumb='';
      	var deleteButton = '';
      	if(whyte.hasThumbChooser){
      		setThumb = '<input name="is_thumbnail" type="radio" id="radio-'+data.filename+'" value="'+data.filename+'" class="radio-col-blue" checked><label for="radio-'+data.filename+'">Set as Thumbnail</label>';
      	}
      	if(whyte.hasDeleteButton){
      		deleteButton = '<button style="position: absolute;right:15px" type="button" onclick="whyte.deleteImage(\''+data.filename+'\')" class="btn btn-xs  waves-effect btn-danger"><i class="material-icons">close</i></button>';
      	}
      	whyte.output = '<div id="image-preview-'+data.no_extension_filename+'" class="col-lg-3 col-md-4 col-sm-6 m-t-30" style="min-height:100px"><span>'
      		+setThumb
  			+deleteButton
  			+'<img class="img-responsive" style="width:100%" src="' + data.src + '"></span></div>'
      // Show
      whyte.result.html(whyte.output);

      var imageNameElement = $('<input>').attr('type','hidden')
      .attr('id','image-input-'+data.no_extension_filename)
      .attr('name','image[]')
      .attr('value',data.filename);
      whyte.result.append(imageNameElement);
  }
  });
  </script>
  <script src="{{url('md/js/whyte-cropper.js')}}"></script>

    
  {{--  <script src="{{url('md/plugins/tinymce/tinymce.js')}}"></script>
   <script type="text/javascript">
    $(function () {
      tinymce.init({
        selector: "textarea.htmlEditor",
        menubar : false,
        toolbar: 'bold italic link | bullist numlist | undo redo | code ',
        plugins:'- paste  - code  - link',
        forced_root_block : false,
        content_css : "{{url('md/plugins/bootstrap/css/bootstrap.css')}}", 
        invalid_styles: 'color font-family font-size',
        setup : function(ed)
        {
          ed.on('init', function() 
          {
            if($(ed.targetElm).hasClass('arabic_input')){
              ed.getBody().dir = "rtl";
            }
          });
        }  
      });
      tinymce.suffix = ".min";
      tinyMCE.baseURL = '{{url('md/plugins/tinymce')}}'; 
    });
   </script>
 --}}
<script type="text/javascript">
//Used for all Ajax posts
// CSRF protection
$.ajaxSetup({
	headers: {
		'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
	}
});
</script>

@endsection

