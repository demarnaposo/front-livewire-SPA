<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menus')->insert([
            ['name' => 'Home', 'url' => '/home', 'parent_id' => null, 'order' => 1, 'status' => 1],
            ['name' => 'About', 'url' => '/about', 'parent_id' => null, 'order' => 2, 'status' => 1],
            ['name' => 'Services', 'url' => null, 'parent_id' => null, 'order' => 3, 'status' => 1],
            ['name' => 'Web Design', 'url' => '/services/web', 'parent_id' => 3, 'order' => 1, 'status' => 1],
            ['name' => 'SEO', 'url' => '/services/seo', 'parent_id' => 3, 'order' => 2, 'status' => 1],
            ['name' => 'Marketing', 'url' => '/services/marketing', 'parent_id' => 3, 'order' => 3, 'status' => 1],
            ['name' => 'Portfolio', 'url' => null, 'parent_id' => null, 'order' => 4, 'status' => 1],
            ['name' => 'Projects', 'url' => '/portfolio/projects', 'parent_id' => 7, 'order' => 1, 'status' => 1],
            ['name' => 'Clients', 'url' => '/portfolio/clients', 'parent_id' => 7, 'order' => 2, 'status' => 1],
            ['name' => 'Contact', 'url' => '/contact', 'parent_id' => null, 'order' => 5, 'status' => 1],
        ]);
    }
}
