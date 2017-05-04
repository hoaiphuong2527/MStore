<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;


class BackendProductController extends Controller
{
    public function index()
    {
        $productObj = new Product();
		$products = $productObj->getProducts();

		return view('backend.product.product', ['products' => $products]);
    }

    public function create()
    {
        return view('backend.form');
    }

    public function store(Request $request)
    {
        $file = $request->file('fileToUpload');
       // $img = $file->getClientOriginalName();
        $name = $request->input('name');
        $category = $request->input('category');
        $price = $request->input('price');
        $kind = $request->input('kind');
        $description = $request->input('description');
        $specification = $request->input('specification');

        $destinationPath = 'uploads';

       // $file->move($destinationPath,$file->getClientOriginalName());
        $admin = new Product();

        $data = $admin->addNewProduct($name,$category,$price,$kind,$description,$specification);
        return $this->index();
        }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::find((int) $id);
        return view('backend.product.edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find((int) $id);
        $product->Name = $request->get('name');
        $product->CategoryId = $request->get('category');
        $product->Price = $request->get('price');
        $product->KindId = $request->get('kind');
        $product->Description = $request->get('description');
        $product->Specification = $request->get('specification');
        $product->save();

        return redirect('admin/product');
    }

    public function destroy($id)
    {
        $product = new Product();
        $product->destroyProduct($id);
        return redirect('admin/product');
    }
}
