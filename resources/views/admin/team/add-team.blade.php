@extends('admin.layout.app')

@section('title','Team')

@section('active_menu','mnu-team')
@section('active_submenu','add')

@section('styles')
@parent
<link href="{{url('md/plugins/cropper/cropper.min.css')}}" rel="stylesheet">

@endsection

@section('content')
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="card">
		<div class="body">

			<form id="form_validation" method="POST" action="{{url('admin/team')}}" enctype="multipart/form-data">
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

				<div class="row clearfix">
					<div class="col-sm-6">
					<label>Name</label>
						<div class="form-group ">
							<div class="form-line">
								<input type="text" value="{{old('name')}}" name="name" maxlength="255" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
					<label>Name Arabic</label>
						<div class="form-group ">
							<div class="form-line">
								<input type="text" value="{{old('name_ar')}}" name="name_ar" maxlength="255" class="arabic form-control" required>
							</div>
						</div>
					</div>
				</div>

				<div class="row clearfix">
					<div class="col-sm-6">
					<label>Designation</label>
						<div class="form-group">
							<div class="form-line">
								<input type="text" value="{{old('designation')}}" name="designation" maxlength="255" class="form-control" required>
							</div>
						</div>
					</div>

					<div class="col-sm-6">
					<label>Designation Arabic</label>
						<div class="form-group">
							<div class="form-line">
								<input type="text" value="{{old('designation_ar')}}" name="designation_ar" maxlength="255" class="arabic form-control" required>
							</div>
						</div>
					</div>
				</div>

				<label>Email</label>
				<div class="row clearfix">
					<div class="col-sm-12">
						<div class="form-group">
							<div class="form-line">
								<input type="email" value="{{old('email')}}" name="email" maxlength="255" class="form-control" required>
							</div>
						</div>
					</div>
				</div>

				<label>Phone</label>
				<div class="row clearfix">
					<div class="col-sm-12">
						<div class="form-group">
							<div class="form-line">
								<input type="number" value="{{old('phone')}}" name="phone" maxlength="255" class="form-control" required>
							</div>
						</div>
					</div>
				</div>

				<div class="row clearfix">
					<div class="col-sm-6">
					<label>Brief Description</label>
						<div class="form-group">
							<div class="form-line">
								<textarea name="description" rows="3" maxlength="255" class="form-control htmlEditor" required>{{old('description')}}</textarea>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
					<label>Brief Description Arabic</label>
						<div class="form-group">
							<div class="form-line">
								<textarea name="description_ar" rows="3" maxlength="255" class="form-control arabic htmlEditor" required>{{old('description_ar')}}</textarea>
							</div>
						</div>
					</div>
				</div>


				<div class="row clearfix">
					<div class="col-sm-6">
						<label>Accomplishments</label>
						<div class="form-group">
							<div class="form-line">
								<textarea name="accomplishment" rows="3" maxlength="255" class="form-control htmlEditor" required>{{old('accomplishment')}}</textarea>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<label>Accomplishments Arabic</label>
						<div class="form-group">
							<div class="form-line">
								<textarea name="accomplishment_ar" rows="3" maxlength="255" class="form-control arabic htmlEditor" required>{{old('accomplishment_ar')}}</textarea>
							</div>
						</div>
					</div>
				</div>



				<div class="row clearfix">
					<div class="col-sm-6">
					<label>Relevent Experience</label>
						<div class="form-group">
							<div class="form-line">
								<textarea name="experience" rows="3" maxlength="255" class="form-control htmlEditor" required>{{old('experience')}}</textarea>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<label>Relevent Experience Arabic</label>
						<div class="form-group">
							<div class="form-line">
								<textarea name="experience_ar" rows="3" maxlength="255" class="form-control arabic htmlEditor" required>{{old('experience_ar')}}</textarea>
							</div>
						</div>
					</div>
				</div>



				<div class="row clearfix">
					<div class="col-sm-6">
					<label>Qualifications</label>
						<div class="form-group">
							<div class="form-line">
								<textarea name="qualification" rows="3" maxlength="255" class="form-control htmlEditor" required>{{old('qualification')}}</textarea>
							</div>
						</div>
					</div>
				<div class="col-sm-6">
					<label>Qualifications Arabic</label>
						<div class="form-group">
							<div class="form-line">
								<textarea name="qualification_ar" rows="3" maxlength="255" class="form-control arabic htmlEditor" required>{{old('qualification_ar')}}</textarea>
							</div>
						</div>
					</div>
				</div>



				<div class="row clearfix">
					<div class="col-sm-6">
					<label>Why Recomended</label>
						<div class="form-group">
							<div class="form-line">
								<textarea name="why_recomended" rows="3" maxlength="255" class="form-control htmlEditor" required>{{old('why_recomended')}}</textarea>
							</div>
						</div>
					</div>
				<div class="col-sm-6">
					<label>Why Recomended Arabic</label>
						<div class="form-group">
							<div class="form-line">
								<textarea name="why_recomended_ar" rows="3" maxlength="255" class="form-control arabic htmlEditor" required>{{old('why_recomended_ar')}}</textarea>
							</div>
						</div>
					</div>
				</div>



				<div class="row clearfix">
				<div class="col-sm-12">
					<div class="form-group">
						<label>Upload Image :</label>
						<p class="help-block">Use images of width:340px and height:560px for best quality</p>
						<input id="ImageInput" type="file" style="max-width:75px; max-height:70px; overflow:hidden;cursor:pointer;font-size: 5em;" accept="image/*" name="image" class="col-indigo glyphicon glyphicon-picture fa-5x">
						<div id="result" class="img-preview preview-lg row">
						@if(null != old('image'))
							@foreach(old('image') as $imageName)
							<input type="hidden" id="image-input-{{substr($imageName,0,-4)}}" name = "image[]" value="{{$imageName}}">
							<div id="image-preview-{{substr($imageName,0,-4)}}" class="col-md-3 m-t-30" style="min-height:100px"><span><img class="img-responsive" src="{{url(App\Models\Team::IMAGE_LOCATION)."/".$imageName}}"></span></div>
							@endforeach
						@endif
						</div>
					</div>
				</div>
				</div>


				<div class="row clearfix">
					<div class="col-sm-12">
						<div class="form-group">
							<div class="">
								<input type="submit" id="saveButton" name="save" value="Save Data" class="btn btn-lg btn-success waves-effect" >
							</div>
						</div>
					</div>
				</div>

			</form>			
		</div>
	</div>

</div>
</div>



<!-- Modal -->
<div id="CropperModal" class="modal fade" aria-labelledby="modalLabel" role="dialog" tabindex="-1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="modalLabel">Crop the image</h4>
			</div>
			<div class="modal-body">

				<div class="featured_image">
					<img id="CropperImage" alt="Crop Image" />
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-lg btn-success" data-dismiss="modal">Crop</button>
			</div>
		</div>
	</div>
</div>

@endsection




@section('scripts')
@parent

	{{-- cropper --}}
	<script src="{{url('md/plugins/cropper/cropper.min.js')}}"></script>
	<script>
		$(function() {
			var imageWidth = 340;
			var imageHeight = 554;
			var storageLocation= "{{App\Models\Team::IMAGE_LOCATION}}";
			var postUrl = "{{url('admin/team/upload-image')}}";

			var result = $('#result');
			var image = $(".featured_image > img");
			var saveButton = $("#saveButton");
			var imageInput =$("#ImageInput");
			var cropperModal = $('#CropperModal');

			imageInput.change(function() {
				if (this.files && this.files[0]) {
					displayCropper(this);
				}
			});

			function displayCropper(input) {
	      		//Set src of Modal as input Image
	      		var reader = new FileReader();
	      		reader.onload = function(e) {
	      			$('#CropperImage').attr("src", e.target.result);
	      			$('#CropperModal').modal({
	      				backdrop: 'static',
	      				keyboard: false
	      			});
	      		}
	      		if (input instanceof File) {
	      			reader.readAsDataURL(input);
	      		} else {
	      			reader.readAsDataURL(input.files[0]);
	      		}
	      	}

	      	cropperModal.on('shown.bs.modal', function() {
	      		var croperOptions = {
	      			aspectRatio: imageWidth/imageHeight,
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
	      			zoomable: false
	      		};
	      		image.cropper(croperOptions);
	      	}).on('hidden.bs.modal', function() {
	      		var loadingHtml = '<div id="ImageLoading" class="loader col-md-12 m-t-30"><div class="md-preloader pl-size-md"><svg viewBox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" class="pl-blue" stroke-width="4"></circle></svg></div></div>';
	      		result.html(loadingHtml);
	      		saveButton.attr('disabled',true);




	      		var croppedImage = image.cropper("getCroppedCanvas", {
	      			width: Math.min(imageWidth,image.cropper('getImageData').naturalWidth),
	      			height: Math.min(imageHeight,image.cropper('getImageData').naturalHeight)
	      		}).toDataURL();
	      		$.ajax({
	      			url : postUrl,
	      			type: "POST",
	      			data:  {
	      				image: croppedImage,
	      				location:storageLocation,
	      			},
	      			success:function(data) {
	      				imageInput.val("");

	  				// Show
	  				result.html('<div id="image-preview-'+data.filename.slice(0,-4)+'" class="col-md-3 m-t-30" style="min-height:100px"><span><img class="img-responsive" src="' + data.src + '"></span></div>');

	  				$('<input>').attr('type','hidden')
	  				.attr('id','image-input-'+data.filename.slice(0,-4))
	  				.attr('name','image[]')
	  				.attr('value',data.filename)
	  				.appendTo('#result');
	  			},
	  			error: function(){
	  				console.log('failed to upload image');
	  			},
	  			complete: function(){
	  				saveButton.attr('disabled',false);
	  				$('#ImageLoading').remove();
	  			}
	  		});
	      		image.cropper('destroy');
	      	});
	      });
	  </script>

	  <!-- TinyMCE -->
	  <script src="{{url('md/plugins/tinymce/tinymce.js')}}"></script>
	  {{-- <script src="{{url('md/plugins/ckeditor/ckeditor.js')}}"></script> --}}
	  <script type="text/javascript">
	  $(function () {
	        //TinyMCE
	         tinymce.init({
	             selector: "textarea.htmlEditor",
	             menubar : false,
				 toolbar: 'bold italic link | bullist numlist | undo redo | code ',
				 // oninit : "setPlainText",
				 plugins:'- paste  - code  - link',
				 forced_root_block : false,
	             invalid_styles: 'color font-family font-size',
	             setup : function(ed)
	             {
	             	ed.on('init', function() 
	             	{
	             		// this.execCommand("fontName", false, "tahoma");
	             		this.execCommand("fontSize", false, "14px");
	             		if($(ed.targetElm).hasClass('arabic')){
	             			ed.getBody().dir = "rtl";
	             		}
	             	});
	             }  
	         });
	         tinymce.suffix = ".min";
	         tinyMCE.baseURL = '{{url('md/plugins/tinymce')}}'; 
	      
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

