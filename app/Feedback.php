<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'Feedbacks';
	protected $primaryKey = 'Id';
	protected $fillable = [];
	public $incrementing = true;
	public $timestamps = false;

    public function getFeedbacks()
	{
		$feedbacks = self::all();
		return $feedbacks;
	}
}
