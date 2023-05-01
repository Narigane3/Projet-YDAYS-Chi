<?php

namespace Database\Seeders;

use App\Models\Newsletter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsletterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // increment the table to 20 rows
        for ($i = 0; $i < 20; $i++) {
            DB::table('newsletter_list')->insert([
                'email' => Str::random(10) . '@gmail.com',
                'name'=> Str::random(10),
                'created_at' => now()
            ]);
        }
    }
}
