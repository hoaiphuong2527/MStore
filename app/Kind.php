<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kind extends Model {
	protected $table = 'Kinds';
	protected $primaryKey = 'Id';
	protected $fillable = ['Name'];
	public $incrementing = true;
	public $timestamps = false;

	public function products()
	{
		return $this->hasMany('App\Product', 'KindId', 'Id');
	}

	

	
}
