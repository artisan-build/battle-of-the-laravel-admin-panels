<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (json_decode(\File::get(__DIR__.'/../data/youtube.json'), true) as $url) {
            Video::factory(['url' => $url])->create();
        }
    }
}
