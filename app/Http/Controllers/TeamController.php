<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Helpers\Helper;

class TeamController extends Controller
{
    public function index()
    {
    	$teams=Team::orderBy('listing_order','desc')->get();
    	return view('admin.team.manage-team',compact('teams'));
    }

    public function create($id=null)
    {
        $team=null;
        if($id!=null){
            $team = Team::findOrFail($id);
        }
        return view('admin.team.create',compact('team'));
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
		     'description' => 'nullable',
		     'accomplishment' => 'nullable',
		     'experience' => 'nullable',
		     'qualification' => 'nullable',
		     'why_recomended' => 'nullable',

		     'name_ar' => 'max:191',
		     'designation_ar' => 'max:191|nullable',
		     'description_ar' => 'nullable',
		     'accomplishment_ar' => 'nullable',
		     'experience_ar' => 'nullable',
		     'qualification_ar' => 'nullable',
		     'why_recomended_ar' => 'nullable',
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
		     // 'image' => 'required',
		     'description' => 'nullable',
		     'accomplishment' => 'nullable',
		     'experience' => 'nullable',
		     'qualification' => 'nullable',
		     'why_recomended' => 'nullable',

		     'name_ar' => 'max:191',
		     'designation_ar' => 'max:191|nullable',
		     'description_ar' => 'nullable',
		     'accomplishment_ar' => 'nullable',
		     'experience_ar' => 'nullable',
		     'qualification_ar' => 'nullable',
		     'why_recomended_ar' => 'nullable',
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

        if(is_array($request->image)){
        	$team->image = $request->image[0];
        }else{
        	$team->image = $request->image;
        }

    	$team->save();
    	
    	if($team){
    	     session()->flash('status','alert-success');
    	     session()->flash('message','Successfully Updated <b>'.$team->name.'</b>!');
    	 }else{
    	     session()->flash('status','alert-danger');
    	     session()->flash('message', 'Updating Failed!');
    	 }
    	return back();
    }

}
