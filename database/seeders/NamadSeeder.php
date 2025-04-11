<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NamadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::connection('mysql_settings')->table('footers-namad')->insert([
            "created_at" => new \DateTime,
            "updated_at" => new \DateTime,
            "image_app1" => "home/images/footer-img/1090a120.png",
            "image_app2" => "home/images/footer-img/71abe5c9.png",
            "link_app1" => "#",
            "link_app2" => "#",
            "enamad"    => "#",
        ]);
    }
}
