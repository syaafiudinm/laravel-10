<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::get();
        return view('categories.index', compact('categories'));
    }

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'image' => 'required|mimes:png,jpg,jpeg',
            'is_active' => 'sometimes'
        ]);

        if($request->has('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/category/';
            $file->move($path, $filename);

        }

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $path.$filename,
            'is_active' => $request->is_active == true ? 1:0,
        ]);

        return redirect('categories/create')->with('status', 'Category Created');
    }

    public function edit(int $id){
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, int $id){
        $request->validate([
            'name' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'is_active' => 'sometimes'
        ]);

        $category = Category::findOrFail($id);

        if($request->has('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/category/';
            $file->move($path, $filename);

           if(File::exists($category->image)){
            File::delete($category->image);
           }

        }

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $path.$filename,
            'is_active' => $request->is_active == true ? 1:0,
        ]);

        return redirect()->back()->with('status', 'Category Updated');
    }

    public function destroy(int $id){
        $category = Category::findOrFail($id);
        if(File::exists($category->image)){
            File::delete($category->image);
        }

        $category->delete();

        return redirect()->back()->with('status', 'Category deleted');
    }
}
