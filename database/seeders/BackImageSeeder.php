<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BackImage;
class BackImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BackImage::create([
            'bgimage_other' => 'website/assets/image/section-background/EmbeddedImage.jpg',
            'bgimage_news' => 'website/assets/image/31.jpg',
        ]);
    }
}
