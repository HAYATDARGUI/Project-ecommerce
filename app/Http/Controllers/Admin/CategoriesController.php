<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class CategoriesController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('Admin.category.index', compact('category'));
    }
    public function add()
    {
        return view('Admin.category.add');
    }
    public function insert(Request $request )
    {
        $category = new Category();
        if($request->hasFile('image'))
        {
            $file =  $request->File('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('upload/category',$fileName);
            $category->image = $fileName;
        }

        $category->name = $request->input('name');
     

        $category->save();
        return redirect('/categories')->with('status',"Category Added Successfully");
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('Admin.category.edit',compact('category'));
    }
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
    
        $category->name = $request->input('name');
    
        $category->save();
    
        return redirect('/categories')->with('status', "Category Updated Successfully");
    }
public function delete($id)
{
    $category = Category::find($id);

    if ($category->image) {
        $path = 'upload/category/' . $category->image;

        if (File::exists($path)) {
            File::delete($path);
        }
    }

    $category->delete();

    return redirect('/categories')->with('status', "Category deleted Successfully");
}

}
