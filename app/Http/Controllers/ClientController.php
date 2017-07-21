<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Client;
use App\Helpers\Helper;


class ClientController extends Controller
{
  	/**
       * Display a listing of the client.
       *
       * @return \Illuminate\Http\Response
       */
  	public function index()
  	{
  		$clients=Client::orderBy('listing_order','desc')
              ->orderBy('updated_at','desc')->get();
  		return view('admin.client.manage',compact('clients'));
  	}

    public function create($id=null)
    {
        $client=null;
        if($id!=null){
            $client = Client::findOrFail($id);
        }
        return view('admin.client.create',compact('client'));
    }

    public function saveImage(Request $request){
      $this->validate($request, [
                      'image' => 'required',
                      ]);

      $uploadImage=$request->image;
      $location=Client::IMAGE_LOCATION;

      return Helper::uploadImage($uploadImage, $location);
    }


    public function store(Request $request)
    {

    	$this->validate($request, [
           'link' => 'url|required',
           'image' => 'required',
           ]);

      
      $request['is_published'] = $request->is_published?true:false;
      if(is_array($request->image)){
        $img = $request->image[0];
        $request['image'] = $img;
      }else{
        $img = $request->image;
        $request['image'] = $img;
      }
      $client = Client::create($request->all());

      if($client){
       session()->flash('status','alert-success');
       session()->flash('message','Successfully Added <b>'.$client->name.'</b>!');
     }else{
       session()->flash('status','alert-danger');
       session()->flash('message', 'Adding Failed!');
     }
     return back();
    }





    public function update($id,Request $request)
    {
      $client = Client::findOrFail($id);
      $this->validate($request, [
                      'link' => 'url',
                      'image' => 'required',
                      ]);

      
      if(is_array($request->image)){
        $client->image= $request->image[0];
      }else{
        $client->image= $request->image;
      }

      $client->name=$request->name;
      $client->name_ar=$request->name_ar;
      $client->link=$request->link;
      $client->is_published        = $request->is_published?true:false;

      $client->save();

      if($client){
       session()->flash('status','alert-success');
       session()->flash('message','Successfully Updated <b>'.$client->name.'</b>!');
     }else{
       session()->flash('status','alert-danger');
       session()->flash('message', 'Updating Failed!');
     }
     return back();
    }


    public function destroy($id=null){
      if($id!=null){

        $client = Client::findOrFail($id);
        $location = str_finish(Client::IMAGE_LOCATION, '/');
        $filename = $client->image;
        if($filename!=null){
          if(file_exists($location.$filename)){
            unlink($location.$filename);
          }
        }
        $isDeleted = $client->delete();

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

    //   $location = str_finish(Client::IMAGE_LOCATION, '/');
    //   $filename = $request->filename;
      
    //   $client= Client::where('image',$filename)->first();
    //   if($client){
    //       $client->image= null;
    //       $client->save();
    //   }

    //   if(file_exists($location.$filename)){
    //     unlink($location.$filename);
    //   }
    //   return response()->json(['status'=>'success']);

    // }



    public function showSort()
    {
      $clients=Client::orderBy('listing_order','desc')
              ->orderBy('updated_at','desc')->get();
      return view('admin.client.sort',compact('clients'));
    }

    /**
     * @param  Request
     * @return Client
     */
    public function sort(Request $request)
    {
            //Validatie
        $this->validate($request, [
            'sort' => 'required|array',
            ]);
        $counter = Client::count();
        foreach ($request->sort as $id) {
          Client::where('id', $id)
            ->update(['listing_order' => $counter--]);
        }
    }
    
}
