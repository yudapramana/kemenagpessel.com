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
                'updated_at' => '2023-06-20 16:43:32',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687262524/PandanViewMandeh/_PV1_y2h6yl.jpg',
                'content_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687278150/PandanViewMandeh/_LAYOUT_u0nlql.jpg',
                'next_url' => 'aboutus',
                'title_id' => 'Selamat Datang di Kementerian Agama Kab. Pesisir Selatan',
                'title_en' => 'Welcome to Kementerian Agama Kab. Pesisir Selatan',
                'name' => 'Welcome to Kementerian Agama Kab. Pesisir Selatan',
                'slug' => NULL,
                'featured' => 'yes',
                'listed' => 'no',
                'description' => 'Selamat datang di Kementerian Agama Kab. Pesisir Selatan, destinasi yang memukau dengan pemandangan yang indah. Disini Anda akan diberikan hadiah alam yang luar biasa dengan pemandangan yang menakjubkan. Saat mata Anda memandang, Anda akan disambut oleh panorama yang memukau dengan sentuhan keindahan yang tak tergambarkan.

Pandangan panorama di Kementerian Agama Kab. Pesisir Selatan sungguh luar biasa. Terdapat perpaduan sempurna antara langit biru yang cerah dan laut biru yang memukau, yang seolah-olah bersatu tanpa batas. Airnya yang jernih dan tenang mencerminkan cahaya matahari, menciptakan panorama yang memesona dan memanjakan mata Anda.

Melihat ke arah pantai, Anda akan terpesona oleh garis pantai yang indah. Tak hanya itu, jika Anda melirik ke arah perbukitan yang mengelilingi Kementerian Agama Kab. Pesisir Selatan, Anda akan menemukan keindahan yang memukau.',
            ),
            1 => 
            array (
                'id_service' => 2,
                'created_at' => '2023-06-20 11:50:14',
                'updated_at' => '2023-06-22 10:09:35',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687261764/PandanViewMandeh/t4knnfc6v9rqq9nryp1f_jo7squ.jpg',
                'content_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687282977/PandanViewMandeh/_Pool_ftr4wi.jpg',
                'next_url' => '/service/facilities',
                'title_id' => 'Fasilitas Kami',
                'title_en' => 'Our Facilities',
                'name' => 'Fasilitas Kami',
                'slug' => 'facilities',
                'featured' => 'yes',
                'listed' => 'yes',
                'description' => 'Untuk memenuhi kebetuhan acara Anda, Kementerian Agama Kab. Pesisir Selatan dilengkapi dengan fasilitas:  

1. Auditorium kapasitas 200 orang (theater) 

2. Resto kapasitas 200 orang

3. Mushola kapasitas 80 orang (sholat)

4. Lobby Kolam renang Play ground 

5. Area parkir kapasitas 70 mobil Lokasi 1 km dari Pinggir Pantai dan Dermaga',
            ),
            2 => 
            array (
                'id_service' => 3,
                'created_at' => '2023-06-20 11:53:14',
                'updated_at' => '2023-06-22 10:09:45',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687261967/PandanViewMandeh/_ROOM_lm3lay.jpg',
                'content_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687283044/PandanViewMandeh/jpg_20230528_120632_0000_u5ruus.jpg',
                'next_url' => '/service/accommodations',
                'title_id' => 'Akomodasi',
                'title_en' => 'Accommodations',
                'name' => 'Akomodasi',
                'slug' => 'accommodations',
                'featured' => 'yes',
                'listed' => 'yes',
                'description' => 'Kementerian Agama Kab. Pesisir Selatan menyediakan beberapa tipe kamar diantaranya adalah tipe kamar Superior 4 Guests, Superior 3 Guests, dan superior 2 Guests.
Sebagian besar kamar dilengkapi balkon dengan view yang sangat indah dan lepas.

Tiap jenis kamar berada dalam bangunan bungalow. Kementerian Agama Kab. Pesisir Selatan memiliki tujuh Bungalow ;
Bungalow Cendrawasih memiliki 20 rooms masing-masing berisi 3 beds
Bungalow Maleo memiliki 10 rooms masing-masing berisi 3 beds
Bungalow Kaswari memiliki 6 rooms masing-masing berisi 4 beds
Bungalow Rajawali memiliki 4 rooms masing-masing berisi 6 bed
Bungalow Elang memiliki 8 rooms masing-masing berisi 6 beds
Bungalow Kutilang memiliki 6 rooms masing-masing berisi 4 beds
Bungalow Parkit memiliki 4 rooms masing-masing berisi 3 beds',
            ),
            3 => 
            array (
                'id_service' => 4,
                'created_at' => '2023-06-21 00:52:56',
                'updated_at' => '2023-06-22 10:10:39',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687283508/PandanViewMandeh/_RC4_rhddub.jpg',
                'content_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687283570/PandanViewMandeh/20230517_121049_jrhxjp.jpg',
                'next_url' => '/service/food-beverage',
                'title_id' => 'Makanan dan Minuman',
                'title_en' => 'Food and Beverage',
                'name' => 'Food and Beverage',
                'slug' => 'food-beverage',
                'featured' => 'no',
                'listed' => 'yes',
            'description' => 'Di Kementerian Agama Kab. Pesisir Selatan, makanan dan minuman (Food and Beverage) juga menjadi bagian penting dari pengalaman menginap dan menjelajahi keindahan alam pulau ini. Sumatera memiliki kekayaan budaya dan kuliner yang khas, yang tercermin dalam variasi hidangan yang ditawarkan di resort-resort di sana.',
            ),
            4 => 
            array (
                'id_service' => 5,
                'created_at' => '2023-06-21 00:59:18',
                'updated_at' => '2023-06-22 10:09:54',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687327051/PandanViewMandeh/amenities_wjonre.jpg',
                'content_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687327058/PandanViewMandeh/ameni2_bwibzt.jpg',
                'next_url' => '/service/amenities',
                'title_id' => 'Perlengkapan',
                'title_en' => 'Amenities',
                'name' => 'Amenities',
                'slug' => 'amenities',
                'featured' => 'no',
                'listed' => 'yes',
                'description' => 'Apabila Anda menginap di Kementerian Agama Kab. Pesisir Selatan Resort, Anda akan mendapatkan beberapa fasilitas dan kenyamanan ketika menginap, diantaranya handuk, peralatan mandi, hingga perlengkapan untuk mengobrol bersama keluarga tercinta yakni kopi dan teh.',
            ),
        ));
        
        
    }
}