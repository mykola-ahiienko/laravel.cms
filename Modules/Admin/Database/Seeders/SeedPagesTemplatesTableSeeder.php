<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SeedPagesTemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('pages_templates')->insert([
            'id' => 1,
            'name' => 'Home page',
            'file_name' => 'index'
        ]);
        DB::table('pages_templates')->insert([
            'id' => 2,
            'name' => 'Text page',
            'file_name' => 'text'
        ]);
    }
}
