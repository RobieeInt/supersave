<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contact')->insert([
            'name' => 'admin',
            'email' => 'admin@localhost',
            'message' => 'Hello, this is a message from the admin',
            'address' => '123 Admin Street',
            'telp' => '123123',
            'phone' => '123123',
            'facebook' => 'admin',
            'twitter' => 'admin',
            'linkedin' => 'admin',
            'instagram' => 'admin',
            'youtube' => 'admin',
            'whatsapp' => 'admin',
            'image' => 'admin',
            'linkvideo' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
