<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    const IMAGE_LOCATION = 'uploads/team';

    protected $fillable = [
	    'name',
	    'designation',
	    'image',
	    'email',
	    'phone',
	    'description',
	    'accomplishment',
	    'experience',
	    'qualification',
	    'why_recomended',
	    'countries',
	    'name_ar',
	    'designation_ar',
	    'description_ar',
	    'accomplishment_ar',
	    'experience_ar',
	    'qualification_ar',
	    'why_recomended_ar',
	    'slug',
	    'listing_order',
	    'is_published',
    ];

    public function imageUrl($imageName=null,$width=null,$height=null){
     if($imageName == null){
       if($this->medias) {
         $imageName = $this->medias->first()->image;
       }
       elseif($this->image){
         $imageName = $this->image;   
       }
       else{
         return;
       }
     }
     if($width!=null && $height !=null){
       $thumbName= $width."_".$height."_".$imageName;
       if(!file_exists($thumbName)) {
         $url=url(self::IMAGE_LOCATION."/".$imageName);
         $imageDetails = Helper::uploadImage($url,self::IMAGE_LOCATION,$thumbName,$width,$height);
         $imageName =  $imageDetails->getData()->filename;
       }else{
         $imageName= $thumbName;
       }
     }
     return url(self::IMAGE_LOCATION."/".$imageName);
    }

}
