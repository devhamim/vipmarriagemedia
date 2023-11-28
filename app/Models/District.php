<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function posts(){
		return $this->belongsToMany('App\Models\Blog', 'post_districts', 'district_id', 'post_id');
	}

  public function thanas()
	{
		return $this->hasMany('App\Models\Upazila','district_id');
	}

	public function division(){
		return $this->belongsTo('App\Models\Division', 'division_id');
	}

	public function hasPost($post){
		$row = $this->posts()->where('posts.id',$post->id)->first();
		if($row){
			return true;
		}
		return false;
	}
}
