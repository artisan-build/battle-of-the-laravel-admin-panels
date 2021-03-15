<?php

namespace Database\Seeders;

use App\Models\Highlight;
use App\Models\Video;
use Illuminate\Database\Seeder;

class HighlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Video::all() as $video) {
            for ($i = 0; $i < rand(0,5); $i++) {
                Highlight::factory([
                    'video_id' => $video->id,
                ])->create();
            }
        }
    }
}
