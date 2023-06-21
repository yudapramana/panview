<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id_product' => 1,
                'created_at' => '2023-06-21 11:29:50',
                'updated_at' => '2023-06-21 11:30:32',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687321817/PandanViewMandeh/_AULA4_vrajw6.jpg',
                'id_service' => 2,
                'title_id' => 'Aula',
                'title_en' => 'Hall',
                'name' => 'Aula',
                'description' => 'Aula Garuda dapat ditata dengan :
Seating Boardroom capasitas s/d   30 peserta
Seating U -Shape    capasitas s/d   50 peserta 
Seating Theatre capasitas s/d 200 peserta 
Standing party  atau &quot;Lesehan&quot; capasitas s/d 300 peserta',
                'next_url' => 'hall',
                'slug' => 'hall',
            ),
            1 => 
            array (
                'id_product' => 2,
                'created_at' => '2023-06-21 11:37:40',
                'updated_at' => '2023-06-21 11:37:40',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687322258/PandanViewMandeh/_MOSQUE_nceuyz.jpg',
                'id_service' => 2,
                'title_id' => 'Mushalla',
                'title_en' => 'Mosque',
                'name' => 'Mushalla',
                'description' => 'Untuk memenuhi kebutuhan Umat Muslim yang ingin melaksanakan ibadah Sholat berjamaah, dengan kapasitas 80 orang Jamaah.

Dapat juga digunakan sebagai Sholat Jumat, Majelis Taklim dan pertemuan Jamaah lainnya',
                'next_url' => 'mosque',
                'slug' => 'mosque',
            ),
            2 => 
            array (
                'id_product' => 3,
                'created_at' => '2023-06-21 11:38:41',
                'updated_at' => '2023-06-21 11:38:41',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687322318/PandanViewMandeh/_Pool_icsivj.jpg',
                'id_service' => 2,
                'title_id' => 'Kolam Berenang',
                'title_en' => 'Swimming Pool',
                'name' => 'Swimming Pool',
                'description' => 'Dengan View lembah dan pegunungan yang asri, Kolam renang Cijalu Resort tersedia dalam tiga kedalaman :

Kedalamam 140 cm untuk dewasa

Kedalaman 80 cm dan Kedalaman 50 cm untuk anak-anak',
                'next_url' => 'swimming-pool',
                'slug' => 'swimming-pool',
            ),
            3 => 
            array (
                'id_product' => 4,
                'created_at' => '2023-06-21 11:39:35',
                'updated_at' => '2023-06-21 11:39:35',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687322372/PandanViewMandeh/_RC1_t1ccvw.jpg',
                'id_service' => 2,
                'title_id' => 'Restoran',
                'title_en' => 'Restaurant',
                'name' => 'Restoran',
                'description' => 'Resto Cucak Rowo dapat menampung 200 Tamu

Breakfast buka dari Jam 7.00 sd 9.30

Lunch      buka dari Jam 12.00 sd 14.00

Dinner      buka dari Jam 18.30 sd 20.30',
                'next_url' => 'restaurant',
                'slug' => 'restaurant',
            ),
            4 => 
            array (
                'id_product' => 5,
                'created_at' => '2023-06-21 11:40:16',
                'updated_at' => '2023-06-21 11:40:16',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687322413/PandanViewMandeh/_ENTRANCE_dkdtjb.jpg',
                'id_service' => 2,
                'title_id' => 'Area Parkir',
                'title_en' => 'Parking Area',
                'name' => 'Area Parkir',
                'description' => 'Cijalu Resort memiliki dua area parkir berkapasitas sekitar 100 mobil dalam dua lokasi, Halaman Utama dan Area parkir barat',
                'next_url' => 'parking-area',
                'slug' => 'parking-area',
            ),
            5 => 
            array (
                'id_product' => 6,
                'created_at' => '2023-06-21 11:42:31',
                'updated_at' => '2023-06-21 11:42:31',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687322548/PandanViewMandeh/20230518_104044_ac4xro.jpg',
                'id_service' => 2,
                'title_id' => 'Dermaga',
                'title_en' => 'Dock Side',
                'name' => 'Dermaga',
                'description' => 'Dermaga Pandan View dibangun dengan konsep Pariwisata. Dermaga ini banyak dikunjungi wisatawan dikarenakan daya tarik dan fasilitas yang tersedia sangat baik.',
                'next_url' => 'dock-side',
                'slug' => 'dock-side',
            ),
        ));
        
        
    }
}