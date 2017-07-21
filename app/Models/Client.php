<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\Helper;

class Client extends Model
{
    const IMAGE_LOCATION = 'uploads/client';

    protected $fillable = [
    'name',
    'name_ar',
    'image',
    'link',
    'listing_order',
    ];


    
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
