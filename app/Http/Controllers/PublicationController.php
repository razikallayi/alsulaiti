<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Publication;
use App\Helpers\Helper;


class PublicationController extends Controller
{
  	/**
       * Display a listing of the publication.
       *
       * @return \Illuminate\Http\Response
       */
  	public function index()
  	{
  		$publications=Publication::orderBy('listing_order','desc')
              ->orderBy('updated_at','desc')->get();
  		return view('admin.publication.manage',compact('publications'));
  	}

    public function showSort()
    {
      $publications=Publication::orderBy('listing_order','desc')
      ->orderBy('updated_at','desc')->get();
      return view('admin.publication.sort',compact('publications'));
    }

    public function create($id=null)
    {
        $publication=null;
        if($id!=null){
            $publication = Publication::findOrFail($id);
        }
        return view('admin.publication.create',compact('publication'));
    }

    public function saveImage(Request $request){
      $this->validate($request, [
                      'image' => 'required',
                      ]);

      $uploadImage=$request->image;
      $location=Publication::IMAGE_LOCATION;

      return Helper::uploadImage($uploadImage, $location);
    }


    public function store(Request $request)
    {

    	$this->validate($request, [
                     'title' => 'required|max:2500',
                     'image' => 'required',
                     'description' => 'nullable|max:35000',
                     'title_ar' => 'nullable|max:2500',
                     'description_ar' => 'nullable|max:35000',
                     'pdf_file' => 'required|mimes:pdf',
           ]);

      
      $request['slug'] = str_slug($request->title);
      if(is_array($request->image)){
        $img = $request->image[0];
        $request['image'] = $img;
      }else{
        $img = $request->image;
        $request['image'] = $img;
      }

      if ($request->hasFile('pdf_file'))
      {
        $file= $request->file('pdf_file');
        $filename = str_random(15).time().".pdf";
        $file->move(Publication::PDF_LOCATION, $filename);
        $request['pdf'] = $filename;
      }

      $publication = Publication::create($request->all());

      if($publication){
       session()->flash('status','alert-success');
       session()->flash('message','Successfully Added <b>'.$publication->title.'</b>!');
     }else{
       session()->flash('status','alert-danger');
       session()->flash('message', 'Adding Failed!');
     }
     return back();
    }





    public function update($id,Request $request)
    {
      $publication = Publication::findOrFail($id);
      $this->validate($request, [
                            'title' => 'required|max:2500',
                     'image' => 'required',
                     'description' => 'nullable|max:35000',
                     'title_ar' => 'nullable|max:2500',
                     'description_ar' => 'nullable|max:35000',
                     'pdf_file' => 'mimes:pdf',
                      ]);

   
      if(is_array($request->image)){
        $publication->image= $request->image[0];
      }else{
        $publication->image= $request->image;
      }

      $publication->title=$request->title;
      $publication->slug=str_slug($request->title);
      $publication->description=$request->description;
//Arabic
      $publication->title_ar=$request->title_ar;
      $publication->description_ar=$request->description_ar;
      $publication->is_published = $request->is_published?true:false;

      if ($request->hasFile('pdf_file'))
      {
        $file= $request->file('pdf_file');
        $filename = str_random(15).time().".pdf";
        $file->move(Publication::PDF_LOCATION, $filename);
        $publication->pdf = $filename;
      }

      $publication->save();

      if($publication){
       session()->flash('status','alert-success');
       session()->flash('message','Successfully Updated <b>'.$publication->name.'</b>!');
     }else{
       session()->flash('status','alert-danger');
       session()->flash('message', 'Updating Failed!');
     }
     return $this->index();
    }


    public function destroy($id=null){
      if($id!=null){

        $publication = Publication::findOrFail($id);
        $location = str_finish(Publication::IMAGE_LOCATION, '/');
        $filename = $publication->image;
        if($filename!=null){
          if(file_exists($location.$filename)){
            unlink($location.$filename);
          }
        }
        $isDeleted = $publication->delete();

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

    //   $location = str_finish(Publication::IMAGE_LOCATION, '/');
    //   $filename = $request->filename;
      
    //   $publication= Publication::where('image',$filename)->first();
    //   if($publication){
    //       $publication->image= null;
    //       $publication->save();
    //   }

    //   if(file_exists($location.$filename)){
    //     unlink($location.$filename);
    //   }
    //   return response()->json(['status'=>'success']);

    // }




    /**
     * @param  Request
     * @return Publication
     */
    public function sort(Request $request)
    {
            //Validatie
        $this->validate($request, [
            'sort' => 'required|array',
            ]);
        $counter = Publication::count();
        foreach ($request->sort as $id) {
          Publication::where('id', $id)
            ->update(['listing_order' => $counter--]);
        }
    }
    
}
