<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductVarient;
use Redirect;
use Validator;

class ProductController extends Controller
{
    /**
     * index
     *
     * @param  mixed $request
     * @return void
     */

    public function index(Request $request)
    {
        $products = Product::get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * add
     *
     * @param  mixed $request
     * @return void
     */
    public function add(Request $request)
    {
        return view('admin.products.add');
    }


    /**
     * edit
     *
     * @param  mixed $request
     * @return void
     */
    public function edit(Request $request)
    {
        return view('admin.products.add');
    }


    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {

        $formData                        =    $request->all();
        if (!empty($formData)) {
            $validator                   =    Validator::make(
                $request->all(),
                array(
                    'name'                      =>  'required',
                    'price'                     =>  'required',
                    'image'                     =>  'required:mimes:jpeg,jpg,png,gif',
                ),
                array(
                    "name.required"             =>    trans("The name field is required."),
                    "price.required"            =>    trans("The price field is required."),
                    "image.required"            =>    trans("The image field is required."),
                    "image.mimes"               =>    trans("The image must be jpeg,jpg,png,gif type."),
                )
            );
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors());
            } else {

                //--- Logic Section
                $input = $request->all();
                $obj                                     =  new Product;
                if ($file = $request->file('image')) {
                    $name = time() . $file->getClientOriginalName();
                    $file->move('assets/images/product', $name);
                    $obj->image = $name;
                }

                $obj->name                          =  $request->input('name');
                $obj->price                         =  $request->input('price');
                $obj->save();
                $product_id = $obj->id;

                // varients 
                foreach ($request->addMoreInputFields as $key => $value) {
                    $data = new ProductVarient();
                    $data->product_id = $product_id;
                    $data->color = $value['color'];
                    $data->size = $value['size'];
                    $data->save();
                }
                return redirect()->back();
                //--- Logic Section Ends



            }
        }
    }
}