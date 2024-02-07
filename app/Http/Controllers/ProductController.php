<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    public function create(){
        return view('frontend.product-create');
    }


    public function store(ProductFormRequest $request){
        $request->validated();
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