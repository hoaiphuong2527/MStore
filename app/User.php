<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
	const TYPE_ADMIN = 0;
	const TYPE_USER = 1;
	const TYPE_PENDING = 2;
	const TYPE_SUSPENDED = 3;

	protected $table = 'Users';
	protected $fillable = ['Firstname', 'Lastname', 'Username', 'Email', 'Password', 'Phone', 'Type' ];
	protected $hidden = ['Password', 'Token'];
	public $incrementing = true;
	public $timestamps = false;

	public function activate()
	{
		return $this->hasONe('App\Activate', 'UserId', 'Id');
	}
}
