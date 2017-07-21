<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\Helper;

class Team extends Model
{
    const IMAGE_LOCATION = 'uploads/team';

    const DETAIL_TITLES = [
    'description'=>'Profile',
    'accomplishment'=>'Accomplishments ',
    'experience'=>'Relevant Experience',
    'qualification'=>'Qualification',
    'why_recomended'=>'Why Recomended',
    ];

    const DETAIL_TITLES_AR = [
    'description'=>'السيرة الذاتية',
    'accomplishment'=>'الانجازات‎',
    'experience'=>'الخبرة',
    'qualification'=>'الانجازات‎',
    'why_recomended'=>'Why Recomended',
    ];

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

    public function insights(){
      return $this->hasMany(Insight::class,'author_id','id')
                  ->where('is_published',true)
                  ->orderBy('updated_at','desc');
    }

    public function regions(){
      return trim($this->countries,',');
    }    

    public function detailPageUrl($data=null,$lang=''){
      if($data == null)
        return url($lang.'/team'.'/'.$this->slug);
      else
        return url($lang.'/team'.'/'.$this->slug.$data);
    }

    public function translate($key='', $locale = 'ar')
    {
        $key_locale = $key."_".$locale;
        if (!array_key_exists($key_locale, $this->attributes)) {
            return $this->attributes[$key];
        }
        if($this->attributes[$key_locale] == "" || is_null($this->attributes[$key_locale])){
            return $this->attributes[$key];
        };
        return $this->attributes[$key_locale];
    }

    public function services(){ //belongsToMany
        return $this->belongsToMany('App\Models\Service', 'services_teams')->distinct() ;
    }

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
       $thumbName= $width."_".$height."_".substr($imageName,0,-4);
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
