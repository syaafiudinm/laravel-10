<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFormRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    public function create(){
        return view('frontend.product-create');
    }


    public function store(ProductFormRequest $request){
        $request->validated();


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

        $product = Product::updateOrCreate
            ([
                'name' => $request->name,
            ],
            [
                'description' => $request->description,
                'price' => $request->price,
                'stock' => $request->stock, 
                'is_active' => $request->is_active == true ? 1 : 0,
            ]);
        

        return redirect('products/create')->with('status', 'product added');

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
