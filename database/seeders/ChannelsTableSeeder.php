<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Channel;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Channel::create([

            'name' => 'Basic',
            'slug' => str::slug('Basic'),
            'description' => 'Basic Channel'
            
        ]);

        Channel::create([

            'name' => 'Intermediate',
            'slug' => str::slug('Intermediate'),
            'description' => 'Intermediate Channel'
        ]);

        Channel::create([

            'name' => 'Advanced',
            'slug' => str::slug('Advanced'),
            'description' => 'Advanced Channel'
        ]);


        //
    }
}
