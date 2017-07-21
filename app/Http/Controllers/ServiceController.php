<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Service;
use App\Helpers\Helper;


class ServiceController extends Controller
{
  	/**
       * Display a listing of the service.
       *
       * @return \Illuminate\Http\Response
       */
  	public function index()
  	{
  		$services=Service::orderBy('listing_order','desc')
              ->orderBy('updated_at','desc')->get();
  		return view('admin.service.manage',compact('services'));
  	}



    public function create($id=null)
    {
        $service=null;
        if($id!=null){
            $service = Service::findOrFail($id);
        }
        return view('admin.service.create',compact('service'));
    }

    public function saveImage(Request $request){
      $this->validate($request, [
                      'image' => 'required',
                      ]);

      $uploadImage=$request->image;
      $location=Service::IMAGE_LOCATION;

      return Helper::uploadImage($uploadImage, $location);
    }


    public function store(Request $request)
    {

    	$this->validate($request, [
                      'title' => 'required|max:191',
                     'image' => 'required',
                     'content' => 'nullable|max:35000',
                     'title_ar' => 'nullable|max:191',
                     'content_ar' => 'nullable|max:35000',
           ]);

      
      $request['slug'] = str_slug($request->title);
      if(is_array($request->image)){
        $img = $request->image[0];
        $request['image'] = $img;
      }else{
        $img = $request->image;
        $request['image'] = $img;
      }
      $service = Service::create($request->all());

      if($service){
       session()->flash('status','alert-success');
       session()->flash('message','Successfully Added <b>'.$service->title.'</b>!');
     }else{
       session()->flash('status','alert-danger');
       session()->flash('message', 'Adding Failed!');
     }
     return back();
    }





    public function update($id,Request $request)
    {
      $service = Service::findOrFail($id);
      $this->validate($request, [
                         'title' => 'required|max:191',
                     'image' => 'required',
                     'content' => 'nullable|max:35000',
                     'title_ar' => 'nullable|max:191',
                     'content_ar' => 'nullable|max:35000',
                      ]);

   
      if(is_array($request->image)){
        $service->image= $request->image[0];
      }else{
        $service->image= $request->image;
      }

      $service->title=$request->title;
      $service->slug=str_slug($request->title);
      $service->content=$request->content;
//Arabic
      $service->title_ar=$request->title_ar;
      $service->content_ar=$request->content_ar;
      $service->is_published        = $request->is_published?true:false;

      $service->save();

      if($service){
       session()->flash('status','alert-success');
       session()->flash('message','Successfully Updated <b>'.$service->name.'</b>!');
     }else{
       session()->flash('status','alert-danger');
       session()->flash('message', 'Updating Failed!');
     }
     return $this->index();
    }


    public function destroy($id=null){
      if($id!=null){

        $service = Service::findOrFail($id);
        $location = str_finish(Service::IMAGE_LOCATION, '/');
        $filename = $service->image;
        if($filename!=null){
          if(file_exists($location.$filename)){
            unlink($location.$filename);
          }
        }
        $isDeleted = $service->delete();

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

    //   $location = str_finish(Service::IMAGE_LOCATION, '/');
    //   $filename = $request->filename;
      
    //   $service= Service::where('image',$filename)->first();
    //   if($service){
    //       $service->image= null;
    //       $service->save();
    //   }

    //   if(file_exists($location.$filename)){
    //     unlink($location.$filename);
    //   }
    //   return response()->json(['status'=>'success']);

    // }


    public function showSort()
    {
      $services=Service::orderBy('listing_order','desc')
      ->orderBy('updated_at','desc')->get();
      return view('admin.service.sort',compact('services'));
    }

    /**
     * @param  Request
     * @return Service
     */
    public function sort(Request $request)
    {
            //Validatie
        $this->validate($request, [
            'sort' => 'required|array',
            ]);
        $counter = Service::count();
        foreach ($request->sort as $id) {
          Service::where('id', $id)
            ->update(['listing_order' => $counter--]);
        }
    }
    
}
