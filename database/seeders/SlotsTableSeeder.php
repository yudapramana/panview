<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SlotsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('slots')->delete();
        
        \DB::table('slots')->insert(array (
            0 => 
            array (
                'id_slot' => 1,
                'created_at' => '2023-07-17 15:42:51',
                'updated_at' => '2023-07-17 15:42:51',
                'deleted_at' => NULL,
                'id_reservation' => 1,
                'id_item' => 1,
                'total_room' => 1,
            ),
            1 => 
            array (
                'id_slot' => 2,
                'created_at' => '2023-07-17 15:42:51',
                'updated_at' => '2023-07-17 15:42:51',
                'deleted_at' => NULL,
                'id_reservation' => 1,
                'id_item' => 2,
                'total_room' => 0,
            ),
            2 => 
            array (
                'id_slot' => 3,
                'created_at' => '2023-07-17 15:42:51',
                'updated_at' => '2023-07-17 15:42:51',
                'deleted_at' => NULL,
                'id_reservation' => 1,
                'id_item' => 3,
                'total_room' => 0,
            ),
            3 => 
            array (
                'id_slot' => 4,
                'created_at' => '2023-07-17 15:42:51',
                'updated_at' => '2023-07-17 15:42:51',
                'deleted_at' => NULL,
                'id_reservation' => 1,
                'id_item' => 4,
                'total_room' => 0,
            ),
            4 => 
            array (
                'id_slot' => 5,
                'created_at' => '2023-07-17 15:43:34',
                'updated_at' => '2023-07-17 15:43:34',
                'deleted_at' => NULL,
                'id_reservation' => 2,
                'id_item' => 1,
                'total_room' => 0,
            ),
            5 => 
            array (
                'id_slot' => 6,
                'created_at' => '2023-07-17 15:43:34',
                'updated_at' => '2023-07-17 15:43:34',
                'deleted_at' => NULL,
                'id_reservation' => 2,
                'id_item' => 2,
                'total_room' => 1,
            ),
            6 => 
            array (
                'id_slot' => 7,
                'created_at' => '2023-07-17 15:43:34',
                'updated_at' => '2023-07-17 15:43:34',
                'deleted_at' => NULL,
                'id_reservation' => 2,
                'id_item' => 3,
                'total_room' => 0,
            ),
            7 => 
            array (
                'id_slot' => 8,
                'created_at' => '2023-07-17 15:43:34',
                'updated_at' => '2023-07-17 15:43:34',
                'deleted_at' => NULL,
                'id_reservation' => 2,
                'id_item' => 4,
                'total_room' => 0,
            ),
            8 => 
            array (
                'id_slot' => 9,
                'created_at' => '2023-07-17 15:44:13',
                'updated_at' => '2023-07-17 15:44:13',
                'deleted_at' => NULL,
                'id_reservation' => 3,
                'id_item' => 1,
                'total_room' => 0,
            ),
            9 => 
            array (
                'id_slot' => 10,
                'created_at' => '2023-07-17 15:44:13',
                'updated_at' => '2023-07-17 15:44:13',
                'deleted_at' => NULL,
                'id_reservation' => 3,
                'id_item' => 2,
                'total_room' => 1,
            ),
            10 => 
            array (
                'id_slot' => 11,
                'created_at' => '2023-07-17 15:44:13',
                'updated_at' => '2023-07-17 15:44:13',
                'deleted_at' => NULL,
                'id_reservation' => 3,
                'id_item' => 3,
                'total_room' => 0,
            ),
            11 => 
            array (
                'id_slot' => 12,
                'created_at' => '2023-07-17 15:44:13',
                'updated_at' => '2023-07-17 15:44:13',
                'deleted_at' => NULL,
                'id_reservation' => 3,
                'id_item' => 4,
                'total_room' => 0,
            ),
            12 => 
            array (
                'id_slot' => 13,
                'created_at' => '2023-07-17 15:44:51',
                'updated_at' => '2023-07-17 15:44:51',
                'deleted_at' => NULL,
                'id_reservation' => 4,
                'id_item' => 1,
                'total_room' => 3,
            ),
            13 => 
            array (
                'id_slot' => 14,
                'created_at' => '2023-07-17 15:44:51',
                'updated_at' => '2023-07-17 15:44:51',
                'deleted_at' => NULL,
                'id_reservation' => 4,
                'id_item' => 2,
                'total_room' => 0,
            ),
            14 => 
            array (
                'id_slot' => 15,
                'created_at' => '2023-07-17 15:44:51',
                'updated_at' => '2023-07-17 15:44:51',
                'deleted_at' => NULL,
                'id_reservation' => 4,
                'id_item' => 3,
                'total_room' => 0,
            ),
            15 => 
            array (
                'id_slot' => 16,
                'created_at' => '2023-07-17 15:44:51',
                'updated_at' => '2023-07-17 15:44:51',
                'deleted_at' => NULL,
                'id_reservation' => 4,
                'id_item' => 4,
                'total_room' => 0,
            ),
            16 => 
            array (
                'id_slot' => 17,
                'created_at' => '2023-07-17 15:47:29',
                'updated_at' => '2023-07-17 15:47:29',
                'deleted_at' => NULL,
                'id_reservation' => 5,
                'id_item' => 1,
                'total_room' => 4,
            ),
            17 => 
            array (
                'id_slot' => 18,
                'created_at' => '2023-07-17 15:47:29',
                'updated_at' => '2023-07-17 15:47:29',
                'deleted_at' => NULL,
                'id_reservation' => 5,
                'id_item' => 2,
                'total_room' => 1,
            ),
            18 => 
            array (
                'id_slot' => 19,
                'created_at' => '2023-07-17 15:47:29',
                'updated_at' => '2023-07-17 15:47:29',
                'deleted_at' => NULL,
                'id_reservation' => 5,
                'id_item' => 3,
                'total_room' => 0,
            ),
            19 => 
            array (
                'id_slot' => 20,
                'created_at' => '2023-07-17 15:47:29',
                'updated_at' => '2023-07-17 15:47:29',
                'deleted_at' => NULL,
                'id_reservation' => 5,
                'id_item' => 4,
                'total_room' => 0,
            ),
            20 => 
            array (
                'id_slot' => 21,
                'created_at' => '2023-07-17 20:56:16',
                'updated_at' => '2023-07-17 20:56:16',
                'deleted_at' => NULL,
                'id_reservation' => 6,
                'id_item' => 1,
                'total_room' => 0,
            ),
            21 => 
            array (
                'id_slot' => 22,
                'created_at' => '2023-07-17 20:56:16',
                'updated_at' => '2023-07-17 20:56:16',
                'deleted_at' => NULL,
                'id_reservation' => 6,
                'id_item' => 2,
                'total_room' => 0,
            ),
            22 => 
            array (
                'id_slot' => 23,
                'created_at' => '2023-07-17 20:56:16',
                'updated_at' => '2023-07-17 20:56:16',
                'deleted_at' => NULL,
                'id_reservation' => 6,
                'id_item' => 3,
                'total_room' => 1,
            ),
            23 => 
            array (
                'id_slot' => 24,
                'created_at' => '2023-07-17 20:56:16',
                'updated_at' => '2023-07-17 20:56:16',
                'deleted_at' => NULL,
                'id_reservation' => 6,
                'id_item' => 4,
                'total_room' => 0,
            ),
            24 => 
            array (
                'id_slot' => 25,
                'created_at' => '2023-07-17 20:57:08',
                'updated_at' => '2023-07-17 20:57:08',
                'deleted_at' => NULL,
                'id_reservation' => 7,
                'id_item' => 1,
                'total_room' => 0,
            ),
            25 => 
            array (
                'id_slot' => 26,
                'created_at' => '2023-07-17 20:57:08',
                'updated_at' => '2023-07-17 20:57:08',
                'deleted_at' => NULL,
                'id_reservation' => 7,
                'id_item' => 2,
                'total_room' => 0,
            ),
            26 => 
            array (
                'id_slot' => 27,
                'created_at' => '2023-07-17 20:57:08',
                'updated_at' => '2023-07-17 20:57:08',
                'deleted_at' => NULL,
                'id_reservation' => 7,
                'id_item' => 3,
                'total_room' => 1,
            ),
            27 => 
            array (
                'id_slot' => 28,
                'created_at' => '2023-07-17 20:57:08',
                'updated_at' => '2023-07-17 20:57:08',
                'deleted_at' => NULL,
                'id_reservation' => 7,
                'id_item' => 4,
                'total_room' => 0,
            ),
            28 => 
            array (
                'id_slot' => 29,
                'created_at' => '2023-07-17 20:58:40',
                'updated_at' => '2023-07-17 20:58:40',
                'deleted_at' => NULL,
                'id_reservation' => 8,
                'id_item' => 1,
                'total_room' => 7,
            ),
            29 => 
            array (
                'id_slot' => 30,
                'created_at' => '2023-07-17 20:58:40',
                'updated_at' => '2023-07-17 20:58:40',
                'deleted_at' => NULL,
                'id_reservation' => 8,
                'id_item' => 2,
                'total_room' => 3,
            ),
            30 => 
            array (
                'id_slot' => 31,
                'created_at' => '2023-07-17 20:58:40',
                'updated_at' => '2023-07-17 20:58:40',
                'deleted_at' => NULL,
                'id_reservation' => 8,
                'id_item' => 3,
                'total_room' => 1,
            ),
            31 => 
            array (
                'id_slot' => 32,
                'created_at' => '2023-07-17 20:58:40',
                'updated_at' => '2023-07-17 20:58:40',
                'deleted_at' => NULL,
                'id_reservation' => 8,
                'id_item' => 4,
                'total_room' => 0,
            ),
            32 => 
            array (
                'id_slot' => 33,
                'created_at' => '2023-07-17 20:59:37',
                'updated_at' => '2023-07-17 20:59:37',
                'deleted_at' => NULL,
                'id_reservation' => 9,
                'id_item' => 1,
                'total_room' => 1,
            ),
            33 => 
            array (
                'id_slot' => 34,
                'created_at' => '2023-07-17 20:59:37',
                'updated_at' => '2023-07-17 20:59:37',
                'deleted_at' => NULL,
                'id_reservation' => 9,
                'id_item' => 2,
                'total_room' => 0,
            ),
            34 => 
            array (
                'id_slot' => 35,
                'created_at' => '2023-07-17 20:59:37',
                'updated_at' => '2023-07-17 20:59:37',
                'deleted_at' => NULL,
                'id_reservation' => 9,
                'id_item' => 3,
                'total_room' => 1,
            ),
            35 => 
            array (
                'id_slot' => 36,
                'created_at' => '2023-07-17 20:59:37',
                'updated_at' => '2023-07-17 20:59:37',
                'deleted_at' => NULL,
                'id_reservation' => 9,
                'id_item' => 4,
                'total_room' => 0,
            ),
            36 => 
            array (
                'id_slot' => 37,
                'created_at' => '2023-07-17 21:00:35',
                'updated_at' => '2023-07-17 21:00:35',
                'deleted_at' => NULL,
                'id_reservation' => 10,
                'id_item' => 1,
                'total_room' => 4,
            ),
            37 => 
            array (
                'id_slot' => 38,
                'created_at' => '2023-07-17 21:00:35',
                'updated_at' => '2023-07-17 21:00:35',
                'deleted_at' => NULL,
                'id_reservation' => 10,
                'id_item' => 2,
                'total_room' => 0,
            ),
            38 => 
            array (
                'id_slot' => 39,
                'created_at' => '2023-07-17 21:00:35',
                'updated_at' => '2023-07-17 21:00:35',
                'deleted_at' => NULL,
                'id_reservation' => 10,
                'id_item' => 3,
                'total_room' => 0,
            ),
            39 => 
            array (
                'id_slot' => 40,
                'created_at' => '2023-07-17 21:00:35',
                'updated_at' => '2023-07-17 21:00:35',
                'deleted_at' => NULL,
                'id_reservation' => 10,
                'id_item' => 4,
                'total_room' => 0,
            ),
            40 => 
            array (
                'id_slot' => 41,
                'created_at' => '2023-07-17 21:01:06',
                'updated_at' => '2023-07-17 21:01:06',
                'deleted_at' => NULL,
                'id_reservation' => 11,
                'id_item' => 1,
                'total_room' => 3,
            ),
            41 => 
            array (
                'id_slot' => 42,
                'created_at' => '2023-07-17 21:01:06',
                'updated_at' => '2023-07-17 21:01:06',
                'deleted_at' => NULL,
                'id_reservation' => 11,
                'id_item' => 2,
                'total_room' => 0,
            ),
            42 => 
            array (
                'id_slot' => 43,
                'created_at' => '2023-07-17 21:01:06',
                'updated_at' => '2023-07-17 21:01:06',
                'deleted_at' => NULL,
                'id_reservation' => 11,
                'id_item' => 3,
                'total_room' => 0,
            ),
            43 => 
            array (
                'id_slot' => 44,
                'created_at' => '2023-07-17 21:01:06',
                'updated_at' => '2023-07-17 21:01:06',
                'deleted_at' => NULL,
                'id_reservation' => 11,
                'id_item' => 4,
                'total_room' => 0,
            ),
            44 => 
            array (
                'id_slot' => 45,
                'created_at' => '2023-07-17 21:01:46',
                'updated_at' => '2023-07-17 21:01:46',
                'deleted_at' => NULL,
                'id_reservation' => 12,
                'id_item' => 1,
                'total_room' => 0,
            ),
            45 => 
            array (
                'id_slot' => 46,
                'created_at' => '2023-07-17 21:01:46',
                'updated_at' => '2023-07-17 21:01:46',
                'deleted_at' => NULL,
                'id_reservation' => 12,
                'id_item' => 2,
                'total_room' => 1,
            ),
            46 => 
            array (
                'id_slot' => 47,
                'created_at' => '2023-07-17 21:01:46',
                'updated_at' => '2023-07-17 21:01:46',
                'deleted_at' => NULL,
                'id_reservation' => 12,
                'id_item' => 3,
                'total_room' => 0,
            ),
            47 => 
            array (
                'id_slot' => 48,
                'created_at' => '2023-07-17 21:01:46',
                'updated_at' => '2023-07-17 21:01:46',
                'deleted_at' => NULL,
                'id_reservation' => 12,
                'id_item' => 4,
                'total_room' => 0,
            ),
            48 => 
            array (
                'id_slot' => 49,
                'created_at' => '2023-07-17 23:01:07',
                'updated_at' => '2023-07-17 23:01:07',
                'deleted_at' => NULL,
                'id_reservation' => 13,
                'id_item' => 1,
                'total_room' => 4,
            ),
            49 => 
            array (
                'id_slot' => 50,
                'created_at' => '2023-07-17 23:01:07',
                'updated_at' => '2023-07-17 23:01:07',
                'deleted_at' => NULL,
                'id_reservation' => 13,
                'id_item' => 2,
                'total_room' => 0,
            ),
            50 => 
            array (
                'id_slot' => 51,
                'created_at' => '2023-07-17 23:01:07',
                'updated_at' => '2023-07-17 23:01:07',
                'deleted_at' => NULL,
                'id_reservation' => 13,
                'id_item' => 3,
                'total_room' => 0,
            ),
            51 => 
            array (
                'id_slot' => 52,
                'created_at' => '2023-07-17 23:01:07',
                'updated_at' => '2023-07-17 23:01:07',
                'deleted_at' => NULL,
                'id_reservation' => 13,
                'id_item' => 4,
                'total_room' => 0,
            ),
            52 => 
            array (
                'id_slot' => 53,
                'created_at' => '2023-07-17 23:01:51',
                'updated_at' => '2023-07-17 23:01:51',
                'deleted_at' => NULL,
                'id_reservation' => 14,
                'id_item' => 1,
                'total_room' => 0,
            ),
            53 => 
            array (
                'id_slot' => 54,
                'created_at' => '2023-07-17 23:01:51',
                'updated_at' => '2023-07-17 23:01:51',
                'deleted_at' => NULL,
                'id_reservation' => 14,
                'id_item' => 2,
                'total_room' => 0,
            ),
            54 => 
            array (
                'id_slot' => 55,
                'created_at' => '2023-07-17 23:01:51',
                'updated_at' => '2023-07-17 23:01:51',
                'deleted_at' => NULL,
                'id_reservation' => 14,
                'id_item' => 3,
                'total_room' => 0,
            ),
            55 => 
            array (
                'id_slot' => 56,
                'created_at' => '2023-07-17 23:01:51',
                'updated_at' => '2023-07-17 23:01:51',
                'deleted_at' => NULL,
                'id_reservation' => 14,
                'id_item' => 4,
                'total_room' => 0,
            ),
            56 => 
            array (
                'id_slot' => 57,
                'created_at' => '2023-07-17 23:02:22',
                'updated_at' => '2023-07-17 23:02:22',
                'deleted_at' => NULL,
                'id_reservation' => 15,
                'id_item' => 1,
                'total_room' => 0,
            ),
            57 => 
            array (
                'id_slot' => 58,
                'created_at' => '2023-07-17 23:02:22',
                'updated_at' => '2023-07-17 23:02:22',
                'deleted_at' => NULL,
                'id_reservation' => 15,
                'id_item' => 2,
                'total_room' => 1,
            ),
            58 => 
            array (
                'id_slot' => 59,
                'created_at' => '2023-07-17 23:02:22',
                'updated_at' => '2023-07-17 23:02:22',
                'deleted_at' => NULL,
                'id_reservation' => 15,
                'id_item' => 3,
                'total_room' => 0,
            ),
            59 => 
            array (
                'id_slot' => 60,
                'created_at' => '2023-07-17 23:02:22',
                'updated_at' => '2023-07-17 23:02:22',
                'deleted_at' => NULL,
                'id_reservation' => 15,
                'id_item' => 4,
                'total_room' => 0,
            ),
            60 => 
            array (
                'id_slot' => 61,
                'created_at' => '2023-07-17 23:03:05',
                'updated_at' => '2023-07-17 23:03:05',
                'deleted_at' => NULL,
                'id_reservation' => 16,
                'id_item' => 1,
                'total_room' => 5,
            ),
            61 => 
            array (
                'id_slot' => 62,
                'created_at' => '2023-07-17 23:03:05',
                'updated_at' => '2023-07-17 23:03:05',
                'deleted_at' => NULL,
                'id_reservation' => 16,
                'id_item' => 2,
                'total_room' => 0,
            ),
            62 => 
            array (
                'id_slot' => 63,
                'created_at' => '2023-07-17 23:03:05',
                'updated_at' => '2023-07-17 23:03:05',
                'deleted_at' => NULL,
                'id_reservation' => 16,
                'id_item' => 3,
                'total_room' => 0,
            ),
            63 => 
            array (
                'id_slot' => 64,
                'created_at' => '2023-07-17 23:03:05',
                'updated_at' => '2023-07-17 23:03:05',
                'deleted_at' => NULL,
                'id_reservation' => 16,
                'id_item' => 4,
                'total_room' => 0,
            ),
            64 => 
            array (
                'id_slot' => 65,
                'created_at' => '2023-07-17 23:03:45',
                'updated_at' => '2023-07-17 23:03:45',
                'deleted_at' => NULL,
                'id_reservation' => 17,
                'id_item' => 1,
                'total_room' => 1,
            ),
            65 => 
            array (
                'id_slot' => 66,
                'created_at' => '2023-07-17 23:03:45',
                'updated_at' => '2023-07-17 23:03:45',
                'deleted_at' => NULL,
                'id_reservation' => 17,
                'id_item' => 2,
                'total_room' => 0,
            ),
            66 => 
            array (
                'id_slot' => 67,
                'created_at' => '2023-07-17 23:03:45',
                'updated_at' => '2023-07-17 23:03:45',
                'deleted_at' => NULL,
                'id_reservation' => 17,
                'id_item' => 3,
                'total_room' => 0,
            ),
            67 => 
            array (
                'id_slot' => 68,
                'created_at' => '2023-07-17 23:03:45',
                'updated_at' => '2023-07-17 23:03:45',
                'deleted_at' => NULL,
                'id_reservation' => 17,
                'id_item' => 4,
                'total_room' => 0,
            ),
            68 => 
            array (
                'id_slot' => 69,
                'created_at' => '2023-07-17 23:04:03',
                'updated_at' => '2023-07-17 23:04:51',
                'deleted_at' => NULL,
                'id_reservation' => 18,
                'id_item' => 1,
                'total_room' => 0,
            ),
            69 => 
            array (
                'id_slot' => 70,
                'created_at' => '2023-07-17 23:04:03',
                'updated_at' => '2023-07-17 23:04:03',
                'deleted_at' => NULL,
                'id_reservation' => 18,
                'id_item' => 2,
                'total_room' => 0,
            ),
            70 => 
            array (
                'id_slot' => 71,
                'created_at' => '2023-07-17 23:04:03',
                'updated_at' => '2023-07-17 23:05:36',
                'deleted_at' => NULL,
                'id_reservation' => 18,
                'id_item' => 3,
                'total_room' => 0,
            ),
            71 => 
            array (
                'id_slot' => 72,
                'created_at' => '2023-07-17 23:04:03',
                'updated_at' => '2023-07-17 23:05:58',
                'deleted_at' => NULL,
                'id_reservation' => 18,
                'id_item' => 4,
                'total_room' => 0,
            ),
            72 => 
            array (
                'id_slot' => 73,
                'created_at' => '2023-07-17 23:07:40',
                'updated_at' => '2023-07-17 23:07:40',
                'deleted_at' => NULL,
                'id_reservation' => 19,
                'id_item' => 1,
                'total_room' => 0,
            ),
            73 => 
            array (
                'id_slot' => 74,
                'created_at' => '2023-07-17 23:07:40',
                'updated_at' => '2023-07-17 23:07:40',
                'deleted_at' => NULL,
                'id_reservation' => 19,
                'id_item' => 2,
                'total_room' => 0,
            ),
            74 => 
            array (
                'id_slot' => 75,
                'created_at' => '2023-07-17 23:07:40',
                'updated_at' => '2023-07-17 23:07:40',
                'deleted_at' => NULL,
                'id_reservation' => 19,
                'id_item' => 3,
                'total_room' => 0,
            ),
            75 => 
            array (
                'id_slot' => 76,
                'created_at' => '2023-07-17 23:07:40',
                'updated_at' => '2023-07-17 23:07:40',
                'deleted_at' => NULL,
                'id_reservation' => 19,
                'id_item' => 4,
                'total_room' => 1,
            ),
            76 => 
            array (
                'id_slot' => 77,
                'created_at' => '2023-07-17 23:11:11',
                'updated_at' => '2023-07-17 23:11:11',
                'deleted_at' => NULL,
                'id_reservation' => 20,
                'id_item' => 1,
                'total_room' => 3,
            ),
            77 => 
            array (
                'id_slot' => 78,
                'created_at' => '2023-07-17 23:11:11',
                'updated_at' => '2023-07-17 23:11:11',
                'deleted_at' => NULL,
                'id_reservation' => 20,
                'id_item' => 2,
                'total_room' => 0,
            ),
            78 => 
            array (
                'id_slot' => 79,
                'created_at' => '2023-07-17 23:11:11',
                'updated_at' => '2023-07-17 23:11:11',
                'deleted_at' => NULL,
                'id_reservation' => 20,
                'id_item' => 3,
                'total_room' => 0,
            ),
            79 => 
            array (
                'id_slot' => 80,
                'created_at' => '2023-07-17 23:11:11',
                'updated_at' => '2023-07-17 23:11:11',
                'deleted_at' => NULL,
                'id_reservation' => 20,
                'id_item' => 4,
                'total_room' => 1,
            ),
            80 => 
            array (
                'id_slot' => 81,
                'created_at' => '2023-07-17 23:11:35',
                'updated_at' => '2023-07-17 23:11:35',
                'deleted_at' => NULL,
                'id_reservation' => 21,
                'id_item' => 1,
                'total_room' => 1,
            ),
            81 => 
            array (
                'id_slot' => 82,
                'created_at' => '2023-07-17 23:11:35',
                'updated_at' => '2023-07-17 23:11:35',
                'deleted_at' => NULL,
                'id_reservation' => 21,
                'id_item' => 2,
                'total_room' => 0,
            ),
            82 => 
            array (
                'id_slot' => 83,
                'created_at' => '2023-07-17 23:11:35',
                'updated_at' => '2023-07-17 23:11:35',
                'deleted_at' => NULL,
                'id_reservation' => 21,
                'id_item' => 3,
                'total_room' => 0,
            ),
            83 => 
            array (
                'id_slot' => 84,
                'created_at' => '2023-07-17 23:11:35',
                'updated_at' => '2023-07-17 23:11:35',
                'deleted_at' => NULL,
                'id_reservation' => 21,
                'id_item' => 4,
                'total_room' => 0,
            ),
            84 => 
            array (
                'id_slot' => 85,
                'created_at' => '2023-07-17 23:12:16',
                'updated_at' => '2023-07-17 23:12:16',
                'deleted_at' => NULL,
                'id_reservation' => 22,
                'id_item' => 1,
                'total_room' => 4,
            ),
            85 => 
            array (
                'id_slot' => 86,
                'created_at' => '2023-07-17 23:12:16',
                'updated_at' => '2023-07-17 23:12:16',
                'deleted_at' => NULL,
                'id_reservation' => 22,
                'id_item' => 2,
                'total_room' => 0,
            ),
            86 => 
            array (
                'id_slot' => 87,
                'created_at' => '2023-07-17 23:12:16',
                'updated_at' => '2023-07-17 23:12:16',
                'deleted_at' => NULL,
                'id_reservation' => 22,
                'id_item' => 3,
                'total_room' => 0,
            ),
            87 => 
            array (
                'id_slot' => 88,
                'created_at' => '2023-07-17 23:12:16',
                'updated_at' => '2023-07-17 23:12:16',
                'deleted_at' => NULL,
                'id_reservation' => 22,
                'id_item' => 4,
                'total_room' => 0,
            ),
            88 => 
            array (
                'id_slot' => 89,
                'created_at' => '2023-07-17 23:53:31',
                'updated_at' => '2023-07-17 23:53:31',
                'deleted_at' => NULL,
                'id_reservation' => 23,
                'id_item' => 1,
                'total_room' => 1,
            ),
            89 => 
            array (
                'id_slot' => 90,
                'created_at' => '2023-07-17 23:53:31',
                'updated_at' => '2023-07-17 23:53:31',
                'deleted_at' => NULL,
                'id_reservation' => 23,
                'id_item' => 2,
                'total_room' => 0,
            ),
            90 => 
            array (
                'id_slot' => 91,
                'created_at' => '2023-07-17 23:53:31',
                'updated_at' => '2023-07-17 23:53:31',
                'deleted_at' => NULL,
                'id_reservation' => 23,
                'id_item' => 3,
                'total_room' => 0,
            ),
            91 => 
            array (
                'id_slot' => 92,
                'created_at' => '2023-07-17 23:53:31',
                'updated_at' => '2023-07-17 23:53:31',
                'deleted_at' => NULL,
                'id_reservation' => 23,
                'id_item' => 4,
                'total_room' => 0,
            ),
            92 => 
            array (
                'id_slot' => 93,
                'created_at' => '2023-07-18 02:31:23',
                'updated_at' => '2023-07-18 02:31:23',
                'deleted_at' => NULL,
                'id_reservation' => 24,
                'id_item' => 1,
                'total_room' => 8,
            ),
            93 => 
            array (
                'id_slot' => 94,
                'created_at' => '2023-07-18 02:31:23',
                'updated_at' => '2023-07-18 02:31:23',
                'deleted_at' => NULL,
                'id_reservation' => 24,
                'id_item' => 2,
                'total_room' => 0,
            ),
            94 => 
            array (
                'id_slot' => 95,
                'created_at' => '2023-07-18 02:31:23',
                'updated_at' => '2023-07-18 02:31:23',
                'deleted_at' => NULL,
                'id_reservation' => 24,
                'id_item' => 3,
                'total_room' => 0,
            ),
            95 => 
            array (
                'id_slot' => 96,
                'created_at' => '2023-07-18 02:31:23',
                'updated_at' => '2023-07-18 02:31:23',
                'deleted_at' => NULL,
                'id_reservation' => 24,
                'id_item' => 4,
                'total_room' => 0,
            ),
            96 => 
            array (
                'id_slot' => 97,
                'created_at' => '2023-07-18 02:31:47',
                'updated_at' => '2023-07-18 02:31:47',
                'deleted_at' => NULL,
                'id_reservation' => 25,
                'id_item' => 1,
                'total_room' => 1,
            ),
            97 => 
            array (
                'id_slot' => 98,
                'created_at' => '2023-07-18 02:31:47',
                'updated_at' => '2023-07-18 02:31:47',
                'deleted_at' => NULL,
                'id_reservation' => 25,
                'id_item' => 2,
                'total_room' => 0,
            ),
            98 => 
            array (
                'id_slot' => 99,
                'created_at' => '2023-07-18 02:31:47',
                'updated_at' => '2023-07-18 02:31:47',
                'deleted_at' => NULL,
                'id_reservation' => 25,
                'id_item' => 3,
                'total_room' => 0,
            ),
            99 => 
            array (
                'id_slot' => 100,
                'created_at' => '2023-07-18 02:31:47',
                'updated_at' => '2023-07-18 02:31:47',
                'deleted_at' => NULL,
                'id_reservation' => 25,
                'id_item' => 4,
                'total_room' => 0,
            ),
            100 => 
            array (
                'id_slot' => 101,
                'created_at' => '2023-07-18 02:32:23',
                'updated_at' => '2023-07-18 02:32:23',
                'deleted_at' => NULL,
                'id_reservation' => 26,
                'id_item' => 1,
                'total_room' => 7,
            ),
            101 => 
            array (
                'id_slot' => 102,
                'created_at' => '2023-07-18 02:32:23',
                'updated_at' => '2023-07-18 02:32:23',
                'deleted_at' => NULL,
                'id_reservation' => 26,
                'id_item' => 2,
                'total_room' => 0,
            ),
            102 => 
            array (
                'id_slot' => 103,
                'created_at' => '2023-07-18 02:32:23',
                'updated_at' => '2023-07-18 02:32:23',
                'deleted_at' => NULL,
                'id_reservation' => 26,
                'id_item' => 3,
                'total_room' => 0,
            ),
            103 => 
            array (
                'id_slot' => 104,
                'created_at' => '2023-07-18 02:32:23',
                'updated_at' => '2023-07-18 02:32:23',
                'deleted_at' => NULL,
                'id_reservation' => 26,
                'id_item' => 4,
                'total_room' => 1,
            ),
            104 => 
            array (
                'id_slot' => 105,
                'created_at' => '2023-07-18 02:33:08',
                'updated_at' => '2023-07-18 02:33:08',
                'deleted_at' => NULL,
                'id_reservation' => 27,
                'id_item' => 1,
                'total_room' => 0,
            ),
            105 => 
            array (
                'id_slot' => 106,
                'created_at' => '2023-07-18 02:33:08',
                'updated_at' => '2023-07-18 02:33:08',
                'deleted_at' => NULL,
                'id_reservation' => 27,
                'id_item' => 2,
                'total_room' => 1,
            ),
            106 => 
            array (
                'id_slot' => 107,
                'created_at' => '2023-07-18 02:33:08',
                'updated_at' => '2023-07-18 02:33:08',
                'deleted_at' => NULL,
                'id_reservation' => 27,
                'id_item' => 3,
                'total_room' => 0,
            ),
            107 => 
            array (
                'id_slot' => 108,
                'created_at' => '2023-07-18 02:33:08',
                'updated_at' => '2023-07-18 02:33:08',
                'deleted_at' => NULL,
                'id_reservation' => 27,
                'id_item' => 4,
                'total_room' => 0,
            ),
            108 => 
            array (
                'id_slot' => 109,
                'created_at' => '2023-07-18 02:33:57',
                'updated_at' => '2023-07-18 02:33:57',
                'deleted_at' => NULL,
                'id_reservation' => 28,
                'id_item' => 1,
                'total_room' => 7,
            ),
            109 => 
            array (
                'id_slot' => 110,
                'created_at' => '2023-07-18 02:33:57',
                'updated_at' => '2023-07-18 02:33:57',
                'deleted_at' => NULL,
                'id_reservation' => 28,
                'id_item' => 2,
                'total_room' => 3,
            ),
            110 => 
            array (
                'id_slot' => 111,
                'created_at' => '2023-07-18 02:33:57',
                'updated_at' => '2023-07-18 02:33:57',
                'deleted_at' => NULL,
                'id_reservation' => 28,
                'id_item' => 3,
                'total_room' => 2,
            ),
            111 => 
            array (
                'id_slot' => 112,
                'created_at' => '2023-07-18 02:33:57',
                'updated_at' => '2023-07-18 02:33:57',
                'deleted_at' => NULL,
                'id_reservation' => 28,
                'id_item' => 4,
                'total_room' => 0,
            ),
            112 => 
            array (
                'id_slot' => 113,
                'created_at' => '2023-07-18 02:35:09',
                'updated_at' => '2023-07-18 02:35:09',
                'deleted_at' => NULL,
                'id_reservation' => 29,
                'id_item' => 1,
                'total_room' => 6,
            ),
            113 => 
            array (
                'id_slot' => 114,
                'created_at' => '2023-07-18 02:35:09',
                'updated_at' => '2023-07-18 02:35:09',
                'deleted_at' => NULL,
                'id_reservation' => 29,
                'id_item' => 2,
                'total_room' => 3,
            ),
            114 => 
            array (
                'id_slot' => 115,
                'created_at' => '2023-07-18 02:35:09',
                'updated_at' => '2023-07-18 02:35:09',
                'deleted_at' => NULL,
                'id_reservation' => 29,
                'id_item' => 3,
                'total_room' => 0,
            ),
            115 => 
            array (
                'id_slot' => 116,
                'created_at' => '2023-07-18 02:35:09',
                'updated_at' => '2023-07-18 02:35:09',
                'deleted_at' => NULL,
                'id_reservation' => 29,
                'id_item' => 4,
                'total_room' => 0,
            ),
        ));
        
        
    }
}