<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Redirect;
use Image;

class ProductController extends Controller
{
    public function index()
    {
        $subcategory = Subcategory::latest()->get();
        $category = Category::latest()->get();
        $product = Product::latest()->get();
        return view('pages.admin.product', compact('subcategory', 'category', 'product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'name' => 'required|max:100',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,webp',
        ]);
        
        try {
            $image = $request->file('image');
            $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(768,768)->save('uploads/product/'.$name_gen);
            $save_url = 'uploads/product/'.$name_gen;

            $product = new Product();
            $product->category_id = $request->category_id;
            $product->subcategory_id = $request->subcategory_id;
            $product->name = $request->name;
            // $product->description = $request->description;
            $product->image = $save_url;
            $product->save();
            return Redirect()->route('admin.products')->with('success', 'Product Insertion Succeful!');

        } catch (\Exception $e) {   
            return Redirect()->back()->with('error', 'Insertion Failed!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getSubCate($subcat_id)
    {
        $subcate = Subcategory::where('category_id', $subcat_id)->orderBy('name' , 'ASC')->get();
        return json_encode($subcate);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productData = Product::find($id);
        $productSubData = Subcategory::where('category_id', $productData->category_id)->get();
        $subcategory = Subcategory::latest()->get();
        $category = Category::latest()->get();
        $product = Product::latest()->get();
        return view('pages.admin.product', compact('productData', 'subcategory', 'category', 'product', 'productSubData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'name' => 'required|max:100',
            'image' => 'image|mimes:jpeg,jpg,png,gif,webp',
        ]);
        try {
            $old_img = $request->old_image;
            if ($request->file('image')) {
                unlink($old_img);
                $image = $request->file('image');
                $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(768,768)->save('uploads/product/'.$name_gen);
                $save_url = 'uploads/product/'.$name_gen;
    
                $product = Product::find($id);
                $product->category_id = $request->category_id;
                $product->subcategory_id = $request->subcategory_id;
                $product->name = $request->name;
                // $product->description = $request->description;
                $product->image = $save_url;
                $product->save();
            } else {
                $product = Product::find($id);
                $product->category_id = $request->category_id;
                $product->subcategory_id = $request->subcategory_id;
                $product->name = $request->name;
                // $product->description = $request->description;
                $product->save();
            }
            return Redirect()->route('admin.products')->with('success', 'Update Successful!');
            
        } catch (\Throwable $th) {
            return Redirect()->back()->with('failed', 'Product Update Failed!');
        }   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if($product){
            unlink($product->image);
            $product->delete();
        }
        return Redirect()->back()->with('success', 'Deleted Successfully!');
    }
}
