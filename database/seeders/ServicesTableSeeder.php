<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id_service' => 1,
                'created_at' => '2023-06-20 10:26:54',
                'updated_at' => '2023-06-20 14:04:18',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687262524/PandanViewMandeh/_PV1_y2h6yl.jpg',
                'content_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687256783/PandanViewMandeh/woman_glmmih.jpg',
                'title' => 'Welcome to Pandan View',
                'name' => 'Welcome to Pandan View',
                'featured' => 'yes',
                'description' => 'Selamat datang di Pandan View Mandeh, destinasi yang memukau dengan pemandangan yang indah. Disini Anda akan diberikan hadiah alam yang luar biasa dengan pemandangan yang menakjubkan. Saat mata Anda memandang, Anda akan disambut oleh panorama yang memukau dengan sentuhan keindahan yang tak tergambarkan.

Pandangan panorama di Pandan View Mandeh sungguh luar biasa. Terdapat perpaduan sempurna antara langit biru yang cerah dan laut biru yang memukau, yang seolah-olah bersatu tanpa batas. Airnya yang jernih dan tenang mencerminkan cahaya matahari, menciptakan panorama yang memesona dan memanjakan mata Anda.

Melihat ke arah pantai, Anda akan terpesona oleh garis pantai yang indah. Tak hanya itu, jika Anda melirik ke arah perbukitan yang mengelilingi Pandan View Mandeh, Anda akan menemukan keindahan yang memukau.',
            ),
            1 => 
            array (
                'id_service' => 2,
                'created_at' => '2023-06-20 11:50:14',
                'updated_at' => '2023-06-20 11:50:14',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687261764/PandanViewMandeh/t4knnfc6v9rqq9nryp1f_jo7squ.jpg',
                'content_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687261808/PandanViewMandeh/woman_gofk5a.jpg',
                'title' => 'Fasilitas Kami',
                'name' => 'Fasilitas Kami',
                'featured' => 'yes',
                'description' => 'Untuk memenuhi kebetuhan acara Anda, Cijalu Resort dilengkapi dengan fasilitas:  

1. Auditorium kapasitas 200 orang (theater) 

2. Resto kapasitas 200 orang

3. Mushola kapasitas 80 orang (sholat)

4. Lobby Kolam renang Play ground 

5. Area parkir kapasitas 70 mobil Lokasi 1 km dari Air Terjun Curug Cijalu Dikelilingi persawahan dan kebun teh',
            ),
            2 => 
            array (
                'id_service' => 3,
                'created_at' => '2023-06-20 11:53:14',
                'updated_at' => '2023-06-20 11:53:14',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687261967/PandanViewMandeh/_ROOM_lm3lay.jpg',
                'content_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687261985/PandanViewMandeh/asuuu_w77wdc.jpg',
                'title' => 'Penginapan',
                'name' => 'Penginapan',
                'featured' => 'yes',
                'description' => 'Cijalu Resort menyediakan beberapa tipe kamar diantaranya adalah tipe kamar Superior 4 Guests, Superior 3 Guests, dan superior 2 Guests.
Sebagian besar kamar dilengkapi balkon dengan view yang sangat indah dan lepas.

Tiap jenis kamar berada dalam bangunan bungalow. Cijalu Resort memiliki tujuh Bungalow ;
Bungalow Cendrawasih memiliki 20 rooms masing-masing berisi 3 beds
Bungalow Maleo memiliki 10 rooms masing-masing berisi 3 beds
Bungalow Kaswari memiliki 6 rooms masing-masing berisi 4 beds
Bungalow Rajawali memiliki 4 rooms masing-masing berisi 6 bed
Bungalow Elang memiliki 8 rooms masing-masing berisi 6 beds
Bungalow Kutilang memiliki 6 rooms masing-masing berisi 4 beds
Bungalow Parkit memiliki 4 rooms masing-masing berisi 3 beds',
            ),
        ));
        
        
    }
}