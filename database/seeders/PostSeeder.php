<?php

namespace Database\Seeders;

use App\Modules\Post\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Post::factory(10)->create();
    }
}
