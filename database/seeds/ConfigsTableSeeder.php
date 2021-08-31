<?php

use Illuminate\Database\Seeder;

class ConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Config::insert([
            ['name' => 'site_name', 'value' => 'Randika Wimalawardhana (-'],
            ['name' => 'site_title', 'value' => 'Randika Wimalawardhana (-'],
            ['name' => 'copyright_owner', 'value' => 'Randika Wimalawardhana (-'],
            ['name' => 'admin_email', 'value' => 'admin@gmail.com'],
        ]);
    }
}
