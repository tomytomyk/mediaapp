<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
        	'title' => 'contentA',
        	'body' => '面白い'
        ];
        DB::table('contents')->insert($param);

        $param = [
        	'title' => 'contentB',
        	'body' => '残念'
        ];
        DB::table('contents')->insert($param);

        $param = [
        	'title' => 'contentC',
        	'body' => '微妙'
        ];
        DB::table('contents')->insert($param);
    }
}
