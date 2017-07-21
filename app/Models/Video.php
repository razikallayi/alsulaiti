<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
	protected $fillable = [
		'title',
		'title_ar',
		'slug',
		'link',
		'listing_order',
		'is_published',
	];


public  function youtubeId() {
	$link =  $this->link;
    $parts = parse_url($link );
    if(isset($parts['query'])){
        parse_str($parts['query'], $qs);
        if(isset($qs['v'])){
            return $qs['v'];
        }else if(isset($qs['vi'])){
            return $qs['vi'];
        }
    }
    if(isset($parts['path'])){
        $path = explode('/', trim($parts['path'], '/'));
        return $path[count($path)-1];
    }
    return false;
}

}
