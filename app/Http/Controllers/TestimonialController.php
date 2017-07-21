<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Testimonial;
use App\Helpers\Helper;


class TestimonialController extends Controller
{
  	/**
       * Display a listing of the testimonial.
       *
       * @return \Illuminate\Http\Response
       */
  	public function index()
  	{
  		$testimonials=Testimonial::orderBy('listing_order','desc')
              ->orderBy('updated_at','desc')->get();
  		return view('admin.testimonial.manage',compact('testimonials'));
  	}

    public function showSort()
    {
      $testimonials=Testimonial::orderBy('listing_order','desc')
      ->orderBy('updated_at','desc')->get();
      return view('admin.testimonial.sort',compact('testimonials'));
    }

    public function create($id=null)
    {
        $testimonial=null;
        if($id!=null){
            $testimonial = Testimonial::findOrFail($id);
        }
        return view('admin.testimonial.create',compact('testimonial'));
    }

    public function saveImage(Request $request){
      $this->validate($request, [
                      'image' => 'required',
                      ]);

      $uploadImage=$request->image;
      $location=Testimonial::IMAGE_LOCATION;

      return Helper::uploadImage($uploadImage, $location);
    }


    public function store(Request $request)
    {

    	$this->validate($request, [
                     'client_name' => 'required|max:191',
                     'image' => 'required',
                     'content' => 'nullable|max:35000',
                     'client_name_ar' => 'nullable|max:191',
                     'content_ar' => 'nullable|max:35000',
           ]);

      
      $request['slug'] = str_slug($request->client_name);
      if(is_array($request->image)){
        $img = $request->image[0];
        $request['image'] = $img;
      }else{
        $img = $request->image;
        $request['image'] = $img;
      }
      $testimonial = Testimonial::create($request->all());

      if($testimonial){
       session()->flash('status','alert-success');
       session()->flash('message','Successfully Added <b>'.$testimonial->client_name.'</b>!');
     }else{
       session()->flash('status','alert-danger');
       session()->flash('message', 'Adding Failed!');
     }
     return back();
    }





    public function update($id,Request $request)
    {
      $testimonial = Testimonial::findOrFail($id);
      $this->validate($request, [
                         'client_name' => 'required|max:191',
                     'image' => 'required',
                     'content' => 'nullable|max:35000',
                     'client_name_ar' => 'nullable|max:191',
                     'content_ar' => 'nullable|max:35000',
                      ]);

   
      if(is_array($request->image)){
        $testimonial->image= $request->image[0];
      }else{
        $testimonial->image= $request->image;
      }

      $testimonial->client_name=$request->client_name;
      $testimonial->slug=str_slug($request->client_name);
      $testimonial->content=$request->content;
//Arabic
      $testimonial->client_name_ar=$request->client_name_ar;
      $testimonial->content_ar=$request->content_ar;
      $testimonial->is_published        = $request->is_published?true:false;

      $testimonial->save();

      if($testimonial){
       session()->flash('status','alert-success');
       session()->flash('message','Successfully Updated <b>'.$testimonial->name.'</b>!');
     }else{
       session()->flash('status','alert-danger');
       session()->flash('message', 'Updating Failed!');
     }
     return $this->index();
    }


    public function destroy($id=null){
      if($id!=null){

        $testimonial = Testimonial::findOrFail($id);
        $location = str_finish(Testimonial::IMAGE_LOCATION, '/');
        $filename = $testimonial->image;
        if($filename!=null){
          if(file_exists($location.$filename)){
            unlink($location.$filename);
          }
        }
        $isDeleted = $testimonial->delete();

        if($isDeleted){
             session()->flash('status','alert-success');
             session()->flash('message','Successfully Removed!');
         }else{
             session()->flash('status','alert-danger');
             session()->flash('message', 'Deleting Failed!');
         }
      }
      return back();
    }

    // public function deleteImage(Request $request)
    // {
    //   $this->validate($request, [
    //                   'filename' => 'required'
    //                   ]);

    //   $location = str_finish(Testimonial::IMAGE_LOCATION, '/');
    //   $filename = $request->filename;
      
    //   $testimonial= Testimonial::where('image',$filename)->first();
    //   if($testimonial){
    //       $testimonial->image= null;
    //       $testimonial->save();
    //   }

    //   if(file_exists($location.$filename)){
    //     unlink($location.$filename);
    //   }
    //   return response()->json(['status'=>'success']);

    // }




    /**
     * @param  Request
     * @return Testimonial
     */
    public function sort(Request $request)
    {
            //Validatie
        $this->validate($request, [
            'sort' => 'required|array',
            ]);
        $counter = Testimonial::count();
        foreach ($request->sort as $id) {
          Testimonial::where('id', $id)
            ->update(['listing_order' => $counter--]);
        }
    }
    
}
