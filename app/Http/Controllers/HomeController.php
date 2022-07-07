<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use App\Models\Whatwe;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Video;
use App\Models\News;
use App\Models\Management;

class HomeController extends Controller
{
    public function index()
    {   
        $category = Category::latest()->get();
        $slider = Slider::latest()->get();
        $whatwe = Whatwe::first();
        $video = Video::latest()->get();
        $gallery = Gallery::latest()->get();
        $management = Management::latest()->get();
        $news = News::latest()->get();
        return view('pages.website.index', compact('category', 'slider', 'gallery', 'video', 'management', 'news', 'whatwe'));
    }
    public function submenu($id) {
        $subcategory = Subcategory::where('category_id', $id)->get();
        $category = Category::find($id);
        return view('pages.website.submenu', compact('category', 'subcategory'));
    }
    // subcategory id pass bellow
    public function product($id) {
        $subcategory = Subcategory::find($id); // subcategory id retrieve which the product contain
        $category = Category::where('id', $subcategory->category_id)->first();
        $product = Product::where('subcategory_id', $id)->get();
        return view('pages.website.product', compact('subcategory','product', 'category'));
    }

    public function productDetail($id) {
        $product = Product::find( $id);
        $subcategory = Subcategory::where('id', $product->subcategory_id)->first();
        $category = Category::where('id', $product->category_id)->first();
        return view('pages.website.product-detail', compact('product', 'subcategory', 'category'));
    }


}
