<?php

use Illuminate\Database\Seeder;
use App\Models\Topic;
use App\Models\User;
use App\Models\Category;

class TopicsTableSeeder extends Seeder
{
    public function run()
    {
        //$topics = factory(Topic::class)->times(50)->make()->each(function ($topic, $index);
        factory(Topic::class)->times(10)->create();
    }
}
