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
            'bgimage_other' => 'mimes:jpg,jpeg,png,bmp,webp',
            'bgimage_news' => 'mimes:jpg,jpeg,png,bmp,webp',
        ]);
        try {
            if($_FILES['bgimage_other']['name']){
                if(file_exists('/uploads/background/'. $backimage->bgimage_other))
                {
                    unlink('/uploads/background/'. $backimage->bgimage_other);
                }
                
                $image = $_FILES['bgimage_other']['name'];
                $arr = explode('.',$image);
                $extension = end($arr);
                $embededImageName = 'background_image_other.'.$extension;
                 
                move_uploaded_file($_FILES['bgimage_other']['tmp_name'], public_path('/uploads/background/'.$embededImageName));
                $backimage->bgimage_other = 'uploads/background/'.$embededImageName;
            }

            if($_FILES['bgimage_news']['name']){
                if(file_exists('/uploads/background/'. $backimage->bgimage_news))
                {
                    unlink('/uploads/background/'. $backimage->bgimage_news);
                }

                $image = $_FILES['bgimage_news']['name'];
                $arr = explode('.',$image);
                $extension = end($arr);
                $embededImage2Name = 'background_image_news.'.$extension;

                move_uploaded_file($_FILES['bgimage_news']['tmp_name'], public_path('/uploads/background/'.$embededImage2Name));
                $backimage->bgimage_news = 'uploads/background/'.$embededImage2Name;
            }
            $backimage->update();
            return redirect()->back()->with('success', 'Update Successfull!');
        } catch (\Throwable $th) {
            throw $th;
            return redirect()->back()->with('error', 'Update Failed!');
        }

    }
}
