<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bannerRecords = [
            ['id'=>1, 'title'=>'Nombre y apellido del autor', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aut eius illum ipsa molestias natus nobis officia perferendis possimus provident quae quam quidem repudiandae sapiente tenetur! Aliquam architecto consectetur dicta expedita illo, iure, iusto laudantium quae repellendus reprehenderit tenetur totam! Amet aut nostrum nulla perferendis rem rerum? Iure, nesciunt, non?', 'image'=>'', 'link'=>'', 'status'=>1],
        ];
        Banner::insert($bannerRecords);
    }
}
