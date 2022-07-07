<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BackImage;

class BackImageController extends Controller
{
    public function edit()
    {
        $backimage = BackImage::first();
        return view('pages.admin.backimage.content', compact('backimage'));
    }

    // Company profile Update 
    public function update(Request $request, BackImage $backimage)
    {
        $request->validate([
            'bgimage_other' => 'mimes:jpg,jpeg,png,bmp',
            'bgimage_news' => 'mimes:jpg,jpeg,png,bmp',
        ]);

        $bgimage_other = $backimage->bgimage_other;

        if($request->hasFile('bgimage_other')) {
            if(!empty($backimage->bgimage_other) && file_exists($backimage->bgimage_other))
            {
                unlink($backimage->bgimage_other);
            }
            $bgimage_other = $this->imageUpload($request, 'bgimage_other', 'uploads/section-image');
        }

        $bgimage_news = $backimage->bgimage_news;

        if($request->hasFile('bgimage_news')) {
            if(!empty($backimage->bgimage_news) && file_exists($backimage->bgimage_news))
            {
                unlink($backimage->bgimage_news);
            }
            $bgimage_news = $this->imageUpload($request, 'bgimage_news', 'uploads/section-image');
        }

        $backimage->bgimage_other = $bgimage_other;
        $backimage->bgimage_news = $bgimage_news;
        $backimage->save();
        if($backimage){
            return redirect()->back()->with('success', 'Update Successfull!');
        }
        return redirect()->back()->withInput();
    }
}
