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
                'updated_at' => '2023-07-05 10:07:06',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688526342/PandanViewMandeh/fkemenag_rexywq.jpg',
                'content_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687278150/PandanViewMandeh/_LAYOUT_u0nlql.jpg',
                'next_url' => 'aboutus',
                'title_id' => 'Kantor Kementerian Agama Kabupaten Pesisir Selatan',
                'title_en' => 'Office of the Ministry of Religion of Pesisir Selatan Regency',
                'name' => 'Kantor Kementerian Agama Kabupaten Pesisir Selatan',
                'slug' => NULL,
                'featured' => 'yes',
                'listed' => 'no',
                'description' => 'Kantor Kementerian Agama Kabupaten Pesisir Selatan sebagai instansi vertikal Kementerian Agama yang berada di Kabupaten Pesisir Selatan dalam wilayah Provinsi Sumatera Barat.

Kementerian Agama Kab. Pesisir Selatan menyelenggarakan tugas dan fungsi Kementerian Agama dalam wilayah Kabupaten Pesisir Selatan berdasarkan kebijakan Kepala Kantor Wilayah Kementerian Agama Provinsi Sumatera Barat dan ketentuan peraturan perundang-undangan.',
            ),
            1 => 
            array (
                'id_service' => 2,
                'created_at' => '2023-06-20 11:50:14',
                'updated_at' => '2023-07-05 10:26:12',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688526591/PandanViewMandeh/layar4_rnnzhj.jpg',
                'content_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687282977/PandanViewMandeh/_Pool_ftr4wi.jpg',
                'next_url' => '/service/facilities',
                'title_id' => 'Survey Kepuasan Masyarakat',
                'title_en' => 'Satisfaction Survey',
                'name' => 'Survey Kepuasan Masyarakat',
                'slug' => 'facilities',
                'featured' => 'yes',
                'listed' => 'no',
                'description' => 'Survei Kepuasan Masyarakat merupakan kegiatan pengukuran secara komprehensif tentang tingkat kepuasan masyarakat terhadap kualitas layanan yang diberikan oleh penyelenggara pelayanan publik.',
            ),
            2 => 
            array (
                'id_service' => 3,
                'created_at' => '2023-06-20 11:53:14',
                'updated_at' => '2023-07-05 10:41:44',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688526807/PandanViewMandeh/IMG-20230704-WA0109_opiwze.jpg',
                'content_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687283044/PandanViewMandeh/jpg_20230528_120632_0000_u5ruus.jpg',
                'next_url' => '/service/accommodations',
                'title_id' => 'Pencapaian Kemenag Pesisir Selatan',
                'title_en' => 'Achievements',
                'name' => 'Pencapaian Kemenag Pesisir Selatan',
                'slug' => 'accommodations',
                'featured' => 'yes',
                'listed' => 'no',
                'description' => 'Kementerian Agama Kabupaten Pesisir Selatan telah mencapai beberapa pencapaian yang signifikan dalam mempromosikan dan mengatur urusan agama di wilayah tersebut. Beberapa pencapaian tersebut antara lain:

1. Peningkatan Pembinaan Keagamaan
2. Penyelenggaraan Ibadah
3. Pembangunan Sarana Ibadah
4. Peningkatan Pendidikan Agama',
            ),
            3 => 
            array (
                'id_service' => 4,
                'created_at' => '2023-06-21 00:52:56',
                'updated_at' => '2023-07-05 10:41:52',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687283508/PandanViewMandeh/_RC4_rhddub.jpg',
                'content_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687283570/PandanViewMandeh/20230517_121049_jrhxjp.jpg',
                'next_url' => '/service/food-beverage',
                'title_id' => 'Makanan dan Minuman',
                'title_en' => 'Food and Beverage',
                'name' => 'Food and Beverage',
                'slug' => 'food-beverage',
                'featured' => 'no',
                'listed' => 'no',
            'description' => 'Di Pandan View Mandeh, makanan dan minuman (Food and Beverage) juga menjadi bagian penting dari pengalaman menginap dan menjelajahi keindahan alam pulau ini. Sumatera memiliki kekayaan budaya dan kuliner yang khas, yang tercermin dalam variasi hidangan yang ditawarkan di resort-resort di sana.',
            ),
            4 => 
            array (
                'id_service' => 5,
                'created_at' => '2023-06-21 00:59:18',
                'updated_at' => '2023-07-05 10:42:01',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687327051/PandanViewMandeh/amenities_wjonre.jpg',
                'content_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687327058/PandanViewMandeh/ameni2_bwibzt.jpg',
                'next_url' => '/service/amenities',
                'title_id' => 'Perlengkapan',
                'title_en' => 'Amenities',
                'name' => 'Amenities',
                'slug' => 'amenities',
                'featured' => 'no',
                'listed' => 'no',
                'description' => 'Apabila Anda menginap di Pandan View Mandeh Resort, Anda akan mendapatkan beberapa fasilitas dan kenyamanan ketika menginap, diantaranya handuk, peralatan mandi, hingga perlengkapan untuk mengobrol bersama keluarga tercinta yakni kopi dan teh.',
            ),
        ));
        
        
    }
}