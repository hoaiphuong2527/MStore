<?php namespace App;
use Carbon\Carbon;

class Utils {
	const TYPE_ADMIN = 0;
	const TYPE_USER = 1;
	const TYPE_PENDING = 2;
	const TYPE_SUSPENDED = 3;

	public static function generateToken()
	{
		return md5(Carbon::now() . rand(100000, 999999));
	}
}