<?php namespace App\Http\Controllers;

use App\Category;
use App\Product;

class WebController extends Controller {
	public function __construct()
	{
		$this->middleware('guest');
	}

	public function index()
	{
		$proLap = new Product();
		$dataLap = $proLap->getProductLapTopForIndex();
		$proPhone = new Product();
		$dataPhone = $proPhone->getProductPhoneForIndex();
		return view('frontend.index', ['products' => $dataLap, 'proPhones' => $dataPhone]);
	}

	public function category($id)
	{
		$products = Product::where('CategoryId', (int) $id)->get();

		return view('frontend.category', ['products' => $products]);
	}

	public function product($id)
	{
		$pro = new Product();
		$product = $pro->getProductByID($id);
		if ($product != null)
		{
			return view("frontend.product", ['product' => $product]);
		}
		else return "Page not found";

	}

	public function page($page)
	{
		return view("frontend.$page");
	}

	
}
