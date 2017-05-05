<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activate extends Model
{
    protected $table = 'activates';
	protected $fillable = [];
	protected $hidden = [];
	public $incrementing = true;
	public $timestamps = false;
}
