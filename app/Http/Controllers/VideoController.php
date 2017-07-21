<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Video;
use App\Helpers\Helper;


class VideoController extends Controller
{
  	/**
       * Display a listing of the video.
       *
       * @return \Illuminate\Http\Response
       */
  	public function index()
  	{
  		$videos=Video::orderBy('listing_order','desc')
              ->orderBy('updated_at','desc')->get();

  		return view('admin.video.manage',compact('videos'));
  	}

    public function showSort()
    {
      $videos=Video::orderBy('listing_order','desc')
      ->orderBy('updated_at','desc')->get();
      return view('admin.video.sort',compact('videos'));
    }

    public function create($id=null)
    {
        $video=null;
        if($id!=null){
            $video = Video::findOrFail($id);
        }
        return view('admin.video.create',compact('video'));
    }

    public function saveImage(Request $request){
      $this->validate($request, [
                      'image' => 'required',
                      ]);

      $uploadImage=$request->image;
      $location=Video::IMAGE_LOCATION;

      return Helper::uploadImage($uploadImage, $location);
    }


    public function store(Request $request)
    {
    	$this->validate($request, [
            'link' => 'required|url|max:2500',
      ]);

      $video = Video::create($request->all());

      if($video){
       session()->flash('status','alert-success');
       session()->flash('message','Successfully Added <b>'.$video->title.'</b>!');
       }else{
         session()->flash('status','alert-danger');
         session()->flash('message', 'Adding Failed!');
       }
     return back();
    }


    public function update($id,Request $request)
    {
      $video = Video::findOrFail($id);
      $this->validate($request, [
                         'link' => 'required|url|max:2500',
                      ]);

  

      $video->link=$request->link;

      $video->is_published        = $request->is_published?true:false;

      $video->save();

      if($video){
       session()->flash('status','alert-success');
       session()->flash('message','Successfully Updated <b>'.$video->name.'</b>!');
     }else{
       session()->flash('status','alert-danger');
       session()->flash('message', 'Updating Failed!');
     }
     return $this->index();
    }


    public function destroy($id=null){
      if($id!=null){

        $video = Video::findOrFail($id);
        $isDeleted = $video->delete();

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

    
    /**
     * @param  Request
     * @return Video
     */
    public function sort(Request $request)
    {
            //Validatie
        $this->validate($request, [
            'sort' => 'required|array',
            ]);
        $counter = Video::count();
        foreach ($request->sort as $id) {
          Video::where('id', $id)
            ->update(['listing_order' => $counter--]);
        }
    }
    
}
