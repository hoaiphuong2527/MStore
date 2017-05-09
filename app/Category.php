<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
	protected $table = 'Categories';
	protected $primaryKey = 'Id';
	protected $fillable = ['ParentId', 'Name'];
	public $incrementing = true;
	public $timestamps = false;

	public function childs()
	{
		return $this->hasMany('App\Category', 'ParentId', 'Id');
	}

	public function getCategory()
	{
		$categories = Category::where('ParentId', 0)->get();
		return $categories;
	}

	public function getCategoties()
	{
		$categories = self::all();
		return $categories;
	}

	public function destroyCategory($id)
	{
		$category = Category::find((int) $id);
        $category->delete();
	}
	
	public function addNewCategory($name, $category)
	{
		self::create(['Name' => $name,"ParentId" => $category]);
	}
}
