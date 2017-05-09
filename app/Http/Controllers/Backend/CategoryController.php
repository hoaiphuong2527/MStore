<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    
    public function index()
    {
        $category = new Category();
		$categories = $category->getCategoties();

		return view('backend.category.categories', ['categories' => $categories]);
    }

    public function addIndex()
    {
        return view('backend.category.add');
    }

    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'name'               => 'required|max:255',
                'category'           => 'required|',
                
            ],
            []);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            
            $name = $request->input('name');
            $category = $request->input('category');
            $category = new Category();
            $category->addNewCategory($name, $category);

            return redirect('/admin/category');
        }
    }

    
    public function edit($id)
    {
       $category = Category::find((int) $id);
        return view('backend.category.edit', ['category' => $category]);
    }

    
    public function update(Request $request, $id)
    {
          $validator = Validator::make($request->all(), [
                'name'               => 'required|max:255',
                'category'           => 'required|exists:Categories,ParentId',
            ],
            []);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            $category = Category::find((int) $id);
            $category->Name = $request->get('name');
            $category->ParentId = $request->get('category');
 
            $category->save();

            return redirect('admin/category');
        }
    }

    
    public function destroy($id)
    {
        $category = new Category();
        $category->destroyCategory($id);
        return redirect('admin/category');
    }
}
