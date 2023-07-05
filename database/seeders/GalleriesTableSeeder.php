<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('galleries')->delete();
        
        \DB::table('galleries')->insert(array (
            0 => 
            array (
                'id_gallery' => 25,
                'created_at' => '2023-07-05 11:02:29',
                'updated_at' => '2023-07-05 11:02:29',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688529746/PandanViewMandeh/image_750x_647fbe12a057f_ifzscn.jpg',
                'filter_tag' => 'Peresmian',
                'alt' => 'peresmian_v1',
                'title' => 'Peresmian Layanan Inklusi',
                'description' => 'Kantor Kementerian Agama Kabupaten Pesisir Selatan sebagai satker pelopor unit penyelenggara pelayanan publik yang ramah kelompok rentan',
            ),
            1 => 
            array (
                'id_gallery' => 26,
                'created_at' => '2023-07-05 11:08:45',
                'updated_at' => '2023-07-05 11:09:31',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688530089/PandanViewMandeh/image_750x_649d2ead1ed46_dgtjis.jpg',
                'filter_tag' => 'Tahunan',
                'alt' => 'qurban_2023',
                'title' => 'Qurban Idul Adha 2023',
                'description' => 'Kegiatan Tahunan Qurban Idul Adha 2023',
            ),
            2 => 
            array (
                'id_gallery' => 27,
                'created_at' => '2023-07-05 11:10:41',
                'updated_at' => '2023-07-05 11:11:10',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688530221/PandanViewMandeh/image_750x_6490f69fa77b3_e6sosk.jpg',
                'filter_tag' => 'Haji',
                'alt' => 'haji_2023',
                'title' => 'Pemberangkatan Haji',
                'description' => 'Haji 2023',
            ),
            3 => 
            array (
                'id_gallery' => 28,
                'created_at' => '2023-07-05 11:11:54',
                'updated_at' => '2023-07-05 11:11:54',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688530308/PandanViewMandeh/image_750x_649015db55f44_x2hby8.jpg',
                'filter_tag' => 'Haji',
                'alt' => 'haji_2023_v2',
                'title' => 'Pemberangkatan Haji',
                'description' => 'Haji 2023',
            ),
            4 => 
            array (
                'id_gallery' => 29,
                'created_at' => '2023-07-05 11:12:10',
                'updated_at' => '2023-07-05 11:12:10',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688530329/PandanViewMandeh/image_750x_6490039c0ddd9_ulnnt5.jpg',
                'filter_tag' => 'Haji',
                'alt' => 'haji_2023_v3',
                'title' => 'Pemberangkatan Haji',
                'description' => 'Haji 2023',
            ),
            5 => 
            array (
                'id_gallery' => 30,
                'created_at' => '2023-07-05 11:13:50',
                'updated_at' => '2023-07-05 11:13:50',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688530423/PandanViewMandeh/image_750x_648fb061e6571_lxhw6o.jpg',
                'filter_tag' => 'Haji',
                'alt' => 'haji_2023_v4',
                'title' => 'Pemberangkatan Haji',
                'description' => 'Haji 2023',
            ),
            6 => 
            array (
                'id_gallery' => 31,
                'created_at' => '2023-07-05 11:14:08',
                'updated_at' => '2023-07-05 11:14:08',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688530447/PandanViewMandeh/image_750x_648d55e2a2387_ghfj0b.jpg',
                'filter_tag' => 'Haji',
                'alt' => 'haji_2023_v4',
                'title' => 'Pemberangkatan Haji',
                'description' => 'Haji 2023',
            ),
            7 => 
            array (
                'id_gallery' => 32,
                'created_at' => '2023-07-05 11:15:40',
                'updated_at' => '2023-07-05 11:15:40',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688530538/PandanViewMandeh/image_750x_64687ca1073fb_bsejaq.jpg',
                'filter_tag' => 'Tahunan',
                'alt' => 'qurban_2023',
                'title' => 'Rapat Kerja 2023',
                'description' => 'Rapat Kerja',
            ),
        ));
        
        
    }
}