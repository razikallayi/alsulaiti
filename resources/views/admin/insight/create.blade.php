@extends('admin.layout.master')

@section('title','Insight')

@section('active_menu','mnu-insight')
@if(!isset($insight))
@section('active_submenu', 'add')
@endif

@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
		<div class="header bg-project">
			<h2 class="">@if(isset($insight)) Edit @else Add @endif Insight</h2>
		</div>
			<div class="body">

			@if(isset($insight))
				<form id="form_validation" method="POST" action="{{url('admin/insight/update/'.$insight->id)}}" enctype="multipart/form-data">
					{{ method_field('PUT') }}
			@else
			<form id="form_validation" method="POST" action="{{url('admin/insight')}}" enctype="multipart/form-data">
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

				<div class="col-md-12 col-sm-12">
					<label>Author<code>*</code></label>
					<div class="form-group">
						<select name="author_id" required class="form-control show-tick form-line" tabindex="-98">
							<option value="">-- Please select --</option>
							@php
							if(isset($insight)){
								$selectedId = $insight->author_id;
							}
							else{
								$selectedId = old('author_id');
							}
							@endphp
							@foreach($teams as $team)
							<option value="{{$team->id}}" @if(isset($selectedId)&& $selectedId== $team->id) selected @endif>{{$team->name}}</option>
							@endforeach
						</select>
					</div>
				</div>

		
					<div class="col-sm-6">
					<label>Title</label>
						<div class="form-group ">
							<div class="form-line">
								<input type="text" value="{{$insight->title or old('title')}}" name="title" maxlength="191" " class="form-control" required="">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
					<label>Title Arabic</label>
						<div class="form-group ">
							<div class="form-line">
								<input type="text" value="{{$insight->title_ar or old('title_ar')}}" name="title_ar" maxlength="191" " class="arabic_input form-control">
							</div>
						</div>
					</div>
		

				


					<div class="col-sm-6">
					<label>Content</label>
						<div class="form-group">
							<div class="form-line">
								<textarea name="content" rows="20" class="form-control htmlEditor">{{$insight->content or old('content')}}</textarea>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
					<label>Content Arabic</label>
						<div class="form-group">
							<div class="form-line">
								<textarea name="content_ar" rows="20" class="form-control arabic_input htmlEditor">{{$insight->content_ar or old('content_ar')}}</textarea>
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
						@if(isset($insight) && null != $insight->imageUrl())
						<input type="hidden" id="image-input-{{substr($insight->image,0,-4)}}" name = "image[]" value="{{$insight->image}}">
						<div id="image-preview-{{substr($insight->image,0,-4)}}" class="col-lg-3 col-md-4 col-sm-6 m-t-30 sort_handle" style="min-height:100px">
							<span>
								{{-- <button type="button" style="float:right;" onclick="whyte.deleteImage('{{$insight->image}}')" class="btn btn-xs  waves-effect btn-danger pull-right"><i class="material-icons">close</i></button> --}}
								
								<img class="img-responsive sortable_image" style="width:100%" src="{{$insight->imageUrl()}}">
							</span>
						</div>
						@elseif(null != old('image')[0])
							<input type="hidden" id="image-input-{{substr(old('image')[0],0,-4)}}" name = "image[]" value="{{old('image')[0]}}">
							<div id="image-preview-{{substr(old('image')[0],0,-4)}}" class="col-md-3 m-t-30" style="min-height:100px"><span><img class="img-responsive" src="{{url(App\Models\Insight::IMAGE_LOCATION."/".old('image')[0])}}"></span></div>
						@endif
					</div>

				</div>


				<div class="col-md-4 col-sm-12">
					<label>Publish</label>
					<div class="form-group">
						@php
						$checked=" checked ";
						if(isset($insight) && $insight->is_published){
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
	
	
  
   <link href="{{url('md/plugins/cropper/cropper.min.css')}}" rel="stylesheet">
  <script src="{{url('md/plugins/cropper/cropper.min.js')}}"></script>
  <script>
    $(function() {
      whyte={};
      whyte.imageWidth = 770;
      whyte.imageHeight = 392;
      whyte.storageLocation= "{{App\Models\Insight::IMAGE_LOCATION}}";
      whyte.postUrl = "{{url('admin/insight/image')}}";

      whyte.deleteUrl = whyte.postUrl;
      whyte.hasThumbChooser = false;
      whyte.hasDeleteButton = false;
      whyte.result = $('#result');
      whyte.image = $(".featured_image > img");
      whyte.saveButton = $("#saveButton");
      whyte.imageInput =$("#ImageInput");
      whyte.cropperModal = $('#CropperModal');
      whyte.imageSizeInfo = $('#CropSizeInfo');

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


    <script src="{{url('md/plugins/tinymce/tinymce.js')}}"></script>
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



    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
      function split( val ) {
          return val.split( /,\s*/ );
        }
        function extractLast( term ) {
          return split( term ).pop();
        }
      $("#country")
           // don't navigate away from the field on tab when selecting an item
           .on( "keydown", function( event ) {
             if ( event.keyCode === $.ui.keyCode.TAB &&
                 $( this ).autocomplete( "instance" ).menu.active ) {
               event.preventDefault();
             }
           })
           .autocomplete({
             minLength: 0,
             source: function( request, response ) {
             	$.getJSON("{{url('md/js/country.js')}}", function (data) {
             		response($.ui.autocomplete.filter($.map(data, function (value, key) {
             			return {
             				label: value.name,
             				value: value.code
             			};
             		}), extractLast( request.term ) 
                 ) 
                );
             	});
             },
             focus: function() {
               // prevent value inserted on focus
               return false;
             },
             select: function( event, ui ) {
               var terms = split( this.value );
               // remove the current input
               terms.pop();
               // add the selected item
               terms.push( ui.item.value );
               // add placeholder to get the comma-and-space at the end
               terms.push( "" );
               this.value = terms.join( ", " );
               return false;
             }
           });
       });
    </script>

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

