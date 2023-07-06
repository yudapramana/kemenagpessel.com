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
            8 => 
            array (
                'id_gallery' => 33,
                'created_at' => '2023-07-06 09:08:46',
                'updated_at' => '2023-07-06 09:08:46',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688609305/PandanViewMandeh/image_750x_644369515a943_qynonv.jpg',
                'filter_tag' => 'Tahunan',
                'alt' => 'Idul Adha 2023',
                'title' => 'Idul Adha 2023',
                'description' => 'Jadi Khatib Salat Idul Fitri, Abrar Munanda Ajak Kaum Muslimin Menjaga Kebiasaan Istimewa Selama Ramadan',
            ),
            9 => 
            array (
                'id_gallery' => 34,
                'created_at' => '2023-07-06 09:11:13',
                'updated_at' => '2023-07-06 09:11:13',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688609451/PandanViewMandeh/image_750x_648480a02f75d_jrfldo.jpg',
                'filter_tag' => 'Madrasah',
                'alt' => 'Monev Madrasah 2023',
                'title' => 'Monev Madrasah 2023',
                'description' => 'Pantau dan Evaluasi Penggunaan Anggaran RA dan Madrasah, Tim Monev Kemenag Pessel Lakukan Pembinaan',
            ),
            10 => 
            array (
                'id_gallery' => 35,
                'created_at' => '2023-07-06 09:12:27',
                'updated_at' => '2023-07-06 09:12:27',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688609528/PandanViewMandeh/image_750x_647fc6c429f4b_dszlgk.jpg',
                'filter_tag' => 'Madrasah',
                'alt' => 'KMD',
                'title' => 'KMD',
                'description' => 'Home  Berita  Utama Sebanyak 80 Pembina Pramuka Madrasah Ikuti KMD Perdana Sebanyak 80 Pembina Pramuka Madrasah Ikuti KMD Perdana',
            ),
            11 => 
            array (
                'id_gallery' => 36,
                'created_at' => '2023-07-06 09:14:03',
                'updated_at' => '2023-07-06 09:16:08',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688609623/PandanViewMandeh/image_750x_6425fa1bba8f2_pyl66f.jpg',
                'filter_tag' => 'Bimas',
                'alt' => 'Safari Ramadhan 2023',
                'title' => 'Safari Ramadhan 2023',
                'description' => 'Hari Terakhir Safari, Kakan Kemenag Sampaikan 3 Hal Pokok Dalam Memakmurkan Masjid',
            ),
            12 => 
            array (
                'id_gallery' => 37,
                'created_at' => '2023-07-06 09:14:49',
                'updated_at' => '2023-07-06 09:14:49',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688609669/PandanViewMandeh/image_750x_641af3c9cf118_jeeadq.jpg',
                'filter_tag' => 'Tahunan',
                'alt' => 'Hisab Hilal',
                'title' => 'Hisab Hilal',
                'description' => 'Pantau Hilal, Kakan Kemenag Pessel Ajak Masyarakat Jadikan Ramadan Sebagai Momentum untuk Refleksi Jiwa dan Sikap',
            ),
            13 => 
            array (
                'id_gallery' => 38,
                'created_at' => '2023-07-06 09:15:31',
                'updated_at' => '2023-07-06 09:15:31',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688609703/PandanViewMandeh/image_750x_6416c0ba7f24c_dvfh5l.jpg',
                'filter_tag' => 'Tahunan',
                'alt' => 'Thaharah Masjid 2023',
                'title' => 'Thaharah Masjid 2023',
                'description' => 'Thaharah Masjid Sebagai Pembuka 10 Program Syiar Ramadan Kemenag Pessel',
            ),
        ));
        
        
    }
}