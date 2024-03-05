<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\backend\Setting;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        //$setting = \App\Models\backend\Setting::create([

            $setting = [
                'site_name' => 'Dream Diver',
                'email' => 'info@dreamdiver.nl',
                'mobile' => '+31644215009',
                'phone' => '69843651',
                'address' => 'Weena zuid 130, ext 405, 3012 NC Rotterdam, Netherlands.',    
            ];
            
            Setting::insert($setting);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
