<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insight;
use App\Models\Team;
use App\Helpers\Helper;
use Carbon\Carbon;

class InsightController extends Controller
{
    public function index()
    {
        $insights=Insight::orderBy('listing_order','desc')->orderBy('updated_at','desc')->get();
        return view('admin.insight.manage',compact('insights'));
    }

    public function create($id=null)
    {
        $insight=null;
        if($id!=null){
            $insight = Insight::findOrFail($id);
        }
        $teams = Team::orderBy('listing_order')->orderBy('name')->get();
        return view('admin.insight.create',compact('insight','teams'));
    }

    public function saveImage(Request $request){
        $this->validate($request, [
                        'image' => 'required',
                        ]);

        $uploadImage=$request->image;
        $location=Insight::IMAGE_LOCATION;

        return Helper::uploadImage($uploadImage, $location);
    }

    public function store(Request $request)
    {

        $validator = $this->validate($request, [
                                     'author_id' => 'required',
                                     'title' => 'required|max:191|unique:insights',
                                     'image' => 'required',
                                     'content' => 'nullable|max:35000',
                                     'title_ar' => 'nullable|max:191',
                                     'content_ar' => 'nullable|max:35000',
                                     ]);


        $request['published_date'] = Carbon::now();
        $request['slug'] = str_slug($request->title);
        if(is_array($request->image)){
            $request['image'] = $request->image[0];
        }else{
            $request['image'] = $request->image;
        }
        $insight = Insight::create($request->all());

        if($insight){
            session()->flash('status','alert-success');
            session()->flash('message','Successfully Added <b>'.$insight->title.'</b>!');
        }else{
            session()->flash('status','alert-danger');
            session()->flash('message', 'Adding Failed!');
        }
        return back();
    }



    public function update($id,Request $request)
    {

        $insight = Insight::findOrFail($id);

        $validator = $this->validate($request, [
                                     'author_id' => 'required',
                                     'title' => 'required|max:191|unique:insights,title,'.$insight->id,
                                'image' => 'required',
                                     'content' => 'nullable|max:35000',
                                     'title_ar' => 'nullable|max:191',
                                     'content_ar' => 'nullable|max:35000',
                                     ]);

        $insight->slug = str_slug($request->title);
        if(is_array($request->image)){
            $insight->image= $request->image[0];
        }else{
            $insight->image= $request->image;
        }

        $insight->title = $request->title;
        $insight->author_id = $request->author_id;
        $insight->content = $request->content;

        $insight->title_ar = $request->title_ar;
        $insight->content_ar = $request->content_ar;

      $insight->is_published        = $request->is_published?true:false;
        $insight->published_date = Carbon::now();
        $insight->save();

        if($insight){
            session()->flash('status','alert-success');
            session()->flash('message','Successfully Updated <b>'.$insight->title.'</b>!');
        }else{
            session()->flash('status','alert-danger');
            session()->flash('message', 'Updating Failed!');
        }
        return $this->index();
    }


    public function destroy($id=null){
        if($id!=null){

            $insight = Insight::findOrFail($id);
            $location = str_finish(Insight::IMAGE_LOCATION, '/');
            $filename = $insight->image;
            if($filename!=null){
                if(file_exists($location.$filename)){
                    unlink($location.$filename);
                }
            }
            $isDeleted = $insight->delete();

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
    //     $this->validate($request, [
    //                     'filename' => 'required'
    //                     ]);

    //     $location = str_finish(Insight::IMAGE_LOCATION, '/');
    //     $filename = $request->filename;

    //     $insight= Insight::where('image',$filename)->first();
    //     if($insight){
    //         $insight->image= null;
    //         $insight->save();
    //     }

    //     if(file_exists($location.$filename)){
    //         unlink($location.$filename);
    //     }
    //     return response()->json(['status'=>'success']);

    // }

    public function showSort()
    {
        $insights=Insight::orderBy('listing_order','desc')
        ->orderBy('updated_at','desc')->get();
        return view('admin.insight.sort',compact('insights'));
    }

    public function sort(Request $request)
    {
//Validatie
        $this->validate($request, [
                        'sort' => 'required|array',
                        ]);
        $counter = Insight::count();
        foreach ($request->sort as $id) {
            Insight::where('id', $id)
            ->update(['listing_order' => $counter--]);
        }
    }
}
