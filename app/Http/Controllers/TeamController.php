<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Team;
use App\Helpers\Helper;

class TeamController extends Controller
{
    public function index()
    {
        $teams=Team::orderBy('listing_order','desc')->get();
        return view('admin.team.manage',compact('teams'));
    }

    public function create($id=null)
    {
        $team=null;
        if($id!=null){
            $team = Team::findOrFail($id);
        }
        $services = Service::where('is_published',true)
        ->orderBy('title')
        ->get();

        return view('admin.team.create',compact('team','services'));
    }

    public function saveImage(Request $request){
        $this->validate($request, [
                        'image' => 'required',
                        ]);

        $uploadImage=$request->image;
        $location=Team::IMAGE_LOCATION;

        return Helper::uploadImage($uploadImage, $location);
    }

    public function store(Request $request)
    {

        $validator = $this->validate($request, [
            'name' => 'required|max:191|unique:teams',
                                     'designation' => 'max:191|nullable',
                                     'email' => 'max:191|nullable',
                                     'phone' => 'alpha_num|nullable|max:191',
                                     'image' => 'required',
                                     'description' => 'nullable|max:35000',
                                     'accomplishment' => 'nullable|max:35000',
                                     'experience' => 'nullable|max:35000',
                                     'qualification' => 'nullable|max:35000',
                                     'why_recomended' => 'nullable|max:35000',

                                     'name_ar' => 'max:191',
                                     'designation_ar' => 'max:191|nullable',
                                     'description_ar' => 'nullable|max:35000',
                                     'accomplishment_ar' => 'nullable|max:35000',
                                     'experience_ar' => 'nullable|max:35000',
                                     'qualification_ar' => 'nullable|max:35000',
                                     'why_recomended_ar' => 'nullable|max:35000',
                                     ]);


        $request['slug'] = str_slug($request->name);
        if(is_array($request->image)){
            $teamImage = $request->image[0];
            $request['image'] = $teamImage;
        }else{
            $teamImage = $request->image;
            $request['image'] = $teamImage;
        }
        $team = Team::create($request->all());
        if(is_array($request->service)){
          $services = Service::find(array_keys($request->service));
          $team->services()->saveMany($services);
        }

        if($team){
            session()->flash('status','alert-success');
            session()->flash('message','Successfully Added <b>'.$team->name.'</b>!');
        }else{
            session()->flash('status','alert-danger');
            session()->flash('message', 'Adding Failed!');
        }
        return back();
    }



    public function update($id,Request $request)
    {

        $team = Team::findOrFail($id);

        $validator = $this->validate($request, [
                                     'name' => 'required|max:191|unique:teams,name,'.$team->id,
                                     'designation' => 'max:191|nullable',
                                     'email' => 'max:191|nullable',
                                     'phone' => 'alpha_num|nullable|max:191',
                                     'image' => 'required',
                                     'description' => 'nullable|max:35000',
                                     'accomplishment' => 'nullable|max:35000',
                                     'experience' => 'nullable|max:35000',
                                     'qualification' => 'nullable|max:35000',
                                     'why_recomended' => 'nullable|max:35000',

                                     'name_ar' => 'max:191',
                                     'designation_ar' => 'max:191|nullable',
                                     'description_ar' => 'nullable|max:35000',
                                     'accomplishment_ar' => 'nullable|max:35000',
                                     'experience_ar' => 'nullable|max:35000',
                                     'qualification_ar' => 'nullable|max:35000',
                                     'why_recomended_ar' => 'nullable|max:35000',
                                     ]);

        $team->name=$request->name;
        $team->designation=$request->designation;
        $team->email=$request->email;
        $team->phone=$request->phone;
        $team->countries=$request->countries;
        $team->description=$request->description;
        $team->accomplishment=$request->accomplishment;
        $team->experience=$request->experience;
        $team->qualification=$request->qualification;
        $team->why_recomended=$request->why_recomended;

//Arabic
        $team->name_ar=$request->name_ar;
        $team->designation_ar=$request->designation_ar;
        $team->description_ar=$request->description_ar;
        $team->accomplishment_ar=$request->accomplishment_ar;
        $team->experience_ar=$request->experience_ar;
        $team->qualification_ar=$request->qualification_ar;
        $team->why_recomended_ar=$request->why_recomended_ar;

        $team->slug = str_slug($request->name);
        if(is_array($request->image)){
            $team->image= $request->image[0];
        }else{
            $team->image= $request->image;
        }

        $team->save();

        $team->services()->detach();
        if(is_array($request->service)){
          $services = Service::find(array_keys($request->service));
          $team->services()->saveMany($services);
        }

        if($team){
            session()->flash('status','alert-success');
            session()->flash('message','Successfully Updated <b>'.$team->name.'</b>!');
        }else{
            session()->flash('status','alert-danger');
            session()->flash('message', 'Updating Failed!');
        }
        return $this->index($request);
    }


    public function destroy($id=null){
        if($id!=null){

            $team = Team::findOrFail($id);
            $location = str_finish(Team::IMAGE_LOCATION, '/');
            $filename = $team->image;
            if($filename!=null){
                if(file_exists($location.$filename)){
                    unlink($location.$filename);
                }
            }
            $isDeleted = $team->delete();

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

    //     $location = str_finish(Team::IMAGE_LOCATION, '/');
    //     $filename = $request->filename;

    //     $team= Team::where('image',$filename)->first();
    //     if($team){
    //         $team->image= null;
    //         $team->save();
    //     }

    //     if(file_exists($location.$filename)){
    //         unlink($location.$filename);
    //     }
    //     return response()->json(['status'=>'success']);

    // }


    public function showSort()
    {
      $teams=Team::orderBy('listing_order','desc')->get();
      return view('admin.team.sort',compact('teams'));
    }
     public function sort(Request $request)
    {
            //Validatie
        $this->validate($request, [
            'sort' => 'required|array',
            ]);
        $counter = Team::count();
        foreach ($request->sort as $id) {
          Team::where('id', $id)
            ->update(['listing_order' => $counter--]);
        }
    }
}
