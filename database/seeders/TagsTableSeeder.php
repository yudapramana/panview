<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Wisata',
                'slug' => 'wisata',
                'keywords' => 'pariwisata, pandan view mandeh, wisata mandeh',
                'meta_desc' => 'pariwisata, pandan view mandeh, wisata mandeh',
                'created_at' => '2023-07-10 12:16:25',
                'updated_at' => '2023-07-10 14:14:48',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Gugusan Mandeh',
                'slug' => 'gugusan-mandeh',
                'keywords' => 'pulau setan, mandeh, gugusan mandeh',
                'meta_desc' => 'pulau setan, mandeh, gugusan mandeh',
                'created_at' => '2023-07-10 12:17:09',
                'updated_at' => '2023-07-10 12:17:09',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Rapat Kerja',
                'slug' => 'rapat-kerja',
                'keywords' => 'Rapat Kerja, Raker, Radin',
                'meta_desc' => 'Rapat Kerja, Raker, Radin',
                'created_at' => '2023-07-10 15:23:33',
                'updated_at' => '2023-07-10 15:23:33',
            ),
        ));
        
        
    }
}