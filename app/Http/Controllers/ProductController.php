<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFormRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(){
        $products = Product::get();
        return view('product.index', compact('products'));
    }
    public function create(){
        return view('product.create');
    }


    public function store(Request $request){
        $request->validate([
            'name' => ['required','min:3','max:255','string'],
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'is_active' => 'sometimes',
        ]);

        Product::create([
            'name' =>  $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'is_active' => $request->is_active == true ? 1:0,
        ]);

        return redirect('products/create')->with('status', 'product added');


        // $product = new Product();
        // $product->name = $request->name;
        // $product->description = $request->description;
        // $product->price = $request->price;
        // $product->stock = $request->stock; 
        // $product->is_active = $request->is_active == true ? 1 : 0; 
        // $product->save();
        
        // Product::create([

        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'price' => $request->price,
        //     'stock' => $request->stock, 
        //     'is_active' => $request->is_active == true ? 1 : 0,

        // ]);

        // Product::create($request->all());

        // $product = new Product([

        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'price' => $request->price,
        //     'stock' => $request->stock, 
        //     'is_active' => $request->is_active == true ? 1 : 0,

        // ]);

        // $product->save();

        // $product = new Product();

        // $product->fill([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'price' => $request->price,
        //     'stock' => $request->stock, 
        //     'is_active' => $request->is_active == true ? 1 : 0,
        // ]);

        // $product->save();

        // DB::table('products')->insert([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'price' => $request->price,
        //     'stock' => $request->stock, 
        //     'is_active' => $request->is_active == true ? 1 : 0,
        // ]);

        // Product::insert([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'price' => $request->price,
        //     'stock' => $request->stock, 
        //     'is_active' => $request->is_active == true ? 1 : 0,
        // ]);

        // $product = Product::firstOrCreate
        // ([
        //     'name' => $request->name,
        // ],
        // [
        //     'description' => $request->description,
        //     'price' => $request->price,
        //     'stock' => $request->stock, 
        //     'is_active' => $request->is_active == true ? 1 : 0,
        // ]);


    }

    public function edit(int $id){
        $products = Product::findOrFail($id);
        return view('product/edit', compact('products'));
    }

    public function update(Request $request, int $id){
        $request->validate([
            'name' => ['required','min:3','max:255','string'],
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'is_active' => 'sometimes',
        ]);

        Product::findOrFail($id)->update([
            'name' =>  $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'is_active' => $request->is_active == true ? 1:0,
        ]);

        return redirect()->back()->with('status', 'Product updated');
    }

    public function destroy(int $id){
        $products = Product::findOrFail($id);
        $products->delete();

        return redirect()->back()->with('status', 'products deleted');
    }



    // public function store(Request $request){
    //     $validator = Validator::make($request->all(), [

    //                 'name' => ['required','min:3','max:255','string'],
    //                 'description' => 'required|string',
    //                 'price' => 'required|numeric',
    //                 'stock' => 'required|numeric',
    //                 'is_active' => 'required|boolean',

    //             ],[
    //                 'name.required' => 'product name cannot be empty',
    //                 'name.min' => 'give atleast 3 character for product name'
    //             ]);

    //     if($validator->fails()){
    //         return redirect()->back()->withErrors($validator->errors())->withInput();
    //     }
    // }


    // public function store(Request $request){
    //     $request->validate([
    //         'name' => ['required','min:3','max:255','string'],
    //         'description' => 'required|string',
    //         'price' => 'required|numeric',
    //         'stock' => 'required|numeric',
    //         'is_active' => 'sometimes',
    //     ],[
    //         'name.required' => 'product name cannot be empty',
    //         'name.min' => 'give atleast 3 character for product name'
    //     ]);
    // }

    // public function store(Request $request){
    //     $request->validate([
    //         'name' => [
    //             'required',
    //             'min:3',
    //             'max:255',  
    //             'string'
    //     ],
    //         'description' => 'required|string',
    //         'price' => 'required|numeric',
    //         'stock' => 'required|numeric',
    //         'is_active' => 'sometimes',
    //     ]);
    // }

    // public function store(Request $request){
    //     $request->validate([
    //         'name' => 'required|min:3|max:255|string',
    //         'description' => 'required|string',
    //         'price' => 'required|numeric',
    //         'stock' => 'required|numeric',
    //         'is_active' => 'required|boolean',
    //     ]);
    // }
}
