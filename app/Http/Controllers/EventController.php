<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Event;
use App\Helpers\Helper;
use Carbon\Carbon;


class EventController extends Controller
{
  	/**
       * Display a listing of the event.
       *
       * @return \Illuminate\Http\Response
       */
  	public function index()
  	{
  		$events=Event::orderBy('listing_order','desc')
              ->orderBy('published_date','desc')
              ->orderBy('updated_at','desc')->get();
  		return view('admin.event.manage',compact('events'));
  	}


    public function create($id=null)
    {
        $event=null;
        if($id!=null){
            $event = Event::findOrFail($id);
        }
        return view('admin.event.create',compact('event'));
    }

    public function saveImage(Request $request){
      $this->validate($request, [
                      'image' => 'required',
                      ]);

      $uploadImage=$request->image;
      $location=Event::IMAGE_LOCATION;

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

      if($request['published_date'] == null){
        $request['published_date'] = Carbon::now();
      }

      $event = Event::create($request->all());

      if($event){
       session()->flash('status','alert-success');
       session()->flash('message','Successfully Added <b>'.$event->title.'</b>!');
     }else{
       session()->flash('status','alert-danger');
       session()->flash('message', 'Adding Failed!');
     }
     return back();
    }





    public function update($id,Request $request)
    {
      $event = Event::findOrFail($id);
      $this->validate($request, [
                         'title' => 'required|max:191',
                     'image' => 'required',
                     'content' => 'nullable|max:35000',
                     'title_ar' => 'nullable|max:191',
                     'content_ar' => 'nullable|max:35000',
                      ]);

   
      if(is_array($request->image)){
        $event->image= $request->image[0];
      }else{
        $event->image= $request->image;
      }


      if($request->published_date == null){
        $event->published_date = Carbon::now();
      }

      $event->published_date=$request->published_date;

      $event->title=$request->title;
      $event->slug=str_slug($request->title);
      $event->content=$request->content;
//Arabic
      $event->title_ar=$request->title_ar;
      $event->content_ar=$request->content_ar;
      $event->is_published        = $request->is_published?true:false;

      $event->save();

      if($event){
       session()->flash('status','alert-success');
       session()->flash('message','Successfully Updated <b>'.$event->name.'</b>!');
     }else{
       session()->flash('status','alert-danger');
       session()->flash('message', 'Updating Failed!');
     }
     return $this->index();
    }


    public function destroy($id=null){
      if($id!=null){

        $event = Event::findOrFail($id);
        $location = str_finish(Event::IMAGE_LOCATION, '/');
        $filename = $event->image;
        if($filename!=null){
          if(file_exists($location.$filename)){
            unlink($location.$filename);
          }
        }
        $isDeleted = $event->delete();

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

   

    public function showSort()
    {
      $events=Event::orderBy('listing_order','desc')
              ->orderBy('published_date','desc')
              ->orderBy('updated_at','desc')->get();
      return view('admin.event.sort',compact('events'));
    }

    /**
     * @param  Request
     * @return Event
     */
    public function sort(Request $request)
    {
            //Validatie
        $this->validate($request, [
            'sort' => 'required|array',
            ]);
        $counter = Event::count();
        foreach ($request->sort as $id) {
          Event::where('id', $id)
            ->update(['listing_order' => $counter--]);
        }
    }
    
}
