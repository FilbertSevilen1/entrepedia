<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('articles')->insert([
            'title' => 'Gojek',
            'details'=>'Gojek (ditulis bergaya sebagai goȷek, sebelumnya ditulis GO-JEK) merupakan sebuah perusahaan teknologi asal Indonesia yang melayani angkutan melalui jasa ojek. Perusahaan ini didirikan pada tahun 2009 di Jakarta oleh Nadiem Makarim. Saat ini, Gojek telah tersedia di 50 kota di Indonesia. Hingga bulan Juni 2016, aplikasi Gojek sudah diunduh sebanyak hampir 10 juta kali di Google Play pada sistem operasi Android, dan telah tersedia di App Store. Gojek juga mempunyai layanan pembayaran digital yang bernama Gopay. Selain di Indonesia, layanan Gojek kini telah tersedia di Vietnam dan Singapura. Pada 17 Mei 2021, Tokopedia dan Gojek mengumumkan resmi merger dan membentuk Grup GoTo. Nama GoTo sendiri berasal dari singkatan Gojek dan Tokopedia dan juga berasal dari kata gotong-royong.
            ',
            'imgurl' => 'image/article/gojek.jpg',
            'author_id' => 1,
            'created_at' => '2023-01-08 09:12:13'
        ]);
        DB::table('articles')->insert([
            'title' => 'Bukalapak',
            'details'=>'PT Bukalapak.com Tbk. merupakan salah satu perusahaan perdagangan elektronik Indonesia. Mulanya perusahaan ini dibentuk oleh pemilik brand shopping lokal melalui grup kepemilikannya yang didirikan oleh Achmad Zaky, Nugroho Herucahyono, dan Muhamad Fajrin Rasyid pada tahun 2010. Bukalapak awalnya merupakan toko daring yang memungkinkan para pelaku Usaha Kecil dan Menengah (UKM) untuk merambah ke dunia maya. Perusahaan tersebut kini telah melakukan ekspansi ke berbagai lini bisnis lain, termasuk membantu meningkatkan penjualan para warung tradisional lewat layanan Mitra Bukalapak. Pada tahun 2017, Bukalapak masuk ke dalam jajaran startup unicorn Indonesia.
            ',
            'imgurl' => 'image/article/bukalapak.jpg',
            'author_id' => 1,
            'created_at' => '2023-01-08 09:12:13'
        ]);
        DB::table('articles')->insert([
            'title' => 'Shopee',
            'details'=>'Shopee adalah situs elektronik komersial yang berkantor pusat di Singapura yang dimiliki oleh Sea Limited (sebelumnya dikenal dengan nama Garena), yang didirikan pada 2009 oleh Forrest Li. Shopee pertama kali diluncurkan di Singapura pada tahun 2015, dan sejak itu memperluas jangkauannya ke Malaysia, Thailand, Taiwan, Indonesia, Vietnam, dan Filipina. Mulai tahun 2019, Shopee juga sudah aktif di negara Brasil, menjadikannya negara pertama di Amerika Selatan dan luar Asia yang dikunjungi Shopee. Shopee sendiri dipimpin oleh Chris Feng, mantan karyawan Rocket Internet yang pernah memimpin Zalora dan Lazada.
            ',
            'imgurl' => 'image/article/shoppe.jpg',
            'author_id' => 1,
            'created_at' => '2023-01-08 09:12:13'
        ]);
        DB::table('articles')->insert([
            'title' => 'Tokopedia',
            'details'=>'PT Tokopedia merupakan perusahaan perdagangan elektronik atau sering disebut toko daring. Sejak didirikan pada tahun 2009, Tokopedia telah bertransformasi menjadi sebuah unicorn yang berpengaruh tidak hanya di Indonesia tetapi juga di Asia Tenggara. Hingga saat ini, Tokopedia termasuk marketplace yang paling banyak dikunjungi oleh masyarakat Indonesia. Tokopedia turut mendukung para pelaku Usaha Mikro Kecil dan Menengah (UMKM) dan perorangan untuk mengembangkan usaha mereka dengan memasarkan produk secara daring dengan Pemerintah dan pihak-pihak lainnya. Salah satu program kolaborasi yang diinisasi oleh Tokopedia adalah acara tahunan MAKERFEST yang diadakan sejak bulan Maret 2018. Pada 17 Mei 2021, Tokopedia dan Gojek mengumumkan resmi merger dan membentuk Grup GoTo. Nama GoTo sendiri berasal dari singkatan Gojek dan Tokopedia dan juga berasal dari kata gotong-royong.',
            'imgurl' => 'image/article/tokopedia.jpg',
            'author_id' => 1,
            'created_at' => '2023-01-08 09:12:13'
        ]);
        DB::table('articles')->insert([
            'title' => 'Grab',
            'details'=>'Grab (sebelumnya dikenal sebagai GrabTaxi) merupakan salah satu platform layanan on demand asal Malaysia yang bermarkas di Singapura. Berawal dari layanan transportasi, perusahaan tersebut kini telah mempunyai layanan lain seperti pengantaran makanan dan pembayaran yang bisa diakses lewat aplikasi mobile. Pada awalnya, Grab didirikan di Malaysia, sebelum kemudian memindahkan kantor pusat mereka ke Singapura. Saat ini, Grab telah beroperasi di Asia Tenggara (kecuali Laos dan Brunei). Grab merupakan startup "decacorn" (sebutan untuk startup yang memiliki valuasi perusahaan sebesar US$10 miliar) pertama di Asia Tenggara. Di Indonesia, Grab melayani pemesanan kendaraan seperti ojek (GrabBike), mobil (GrabCar), taksi (GrabTaksi), kurir (GrabExpress), pesan-antar makanan (GrabFood), dan carpooling (GrabHitch Car). Saat ini Grab tersedia di 125 kota di seluruh Indonesia, mulai dari Banda Aceh - Aceh hingga Jayapura - Papua.',
            'imgurl' => 'image/article/grab.jpg',
            'author_id' => 1,
            'created_at' => '2023-01-08 09:12:13'
        ]);
        DB::table('articles')->insert([
            'title' => 'Traveloka',
            'details'=>'Traveloka adalah perusahaan yang menyediakan layanan pemesanan tiket pesawat dan hotel secara daring dengan fokus perjalanan domestik di Indonesia. Didirikan pada tahun 2012 oleh Ferry Unardi, Derianto Kusuma, dan Albert Zhang. Traveloka yang merupakan salah satu perusahaan rintisan (startup) berstatus unicorn asal Indonesia ini mengembangkan layanannya pada pemesanan tiket kereta api, bus, penyewaan mobil, hingga aktivitas wisata. Sejak tahun 2015, Traveloka mulai berekspansi ke sejumlah negara di Asia Tenggara seperti Singapura, Malaysia, Vietnam, Thailand, dan Filipina.',
            'imgurl' => 'image/article/traveloka.jpg',
            'author_id' => 1,
            'created_at' => '2023-01-08 09:12:13'
        ]);
        DB::table('articles')->insert([
            'title' => 'tiket.com',
            'details'=>'tiket.com (ditulis tanpa menggunakan huruf kapital) adalah perusahaan agen perjalanan daring yang berbasis aplikasi dan situs web untuk desktop dan mobile. Perusahaan ini berbasis di Indonesia dan dibangun pada bulan Agustus 2011. tiket.com dianggap sebagai pionir OTA (Online Travel Agency) di Indonesia dari penjualan tiket pesawat, kereta api, dan hotel. Perusahaan ini dibangun pada bulan Agustus 2011 oleh Wenas Agusetiawan, Dimas Surya Yaputra, Natali Ardianto, dan Mikhael Gaery Undarsa. Melalui tiket.com, mereka menghapus proses yang panjang dan rumit ketika orang ingin bepergian dengan membuat satu platform yang menyediakan beragam kebutuhan perjalanan secara lengkap. Tujuannya, agar tiket pesawat, hotel, kereta, dan lain sebagainya semuanya bisa diakses dengan sangat mudah secara real-time melalui sambungan internet. ',
            'imgurl' => 'image/article/tiket.jpg',
            'author_id' => 1,
            'created_at' => '2023-01-08 09:12:13'
        ]);
        DB::table('articles')->insert([
            'title' => 'Ruangguru',
            'details'=>'PT Ruang Raya Indonesia, melakukan bisnis sebagai Ruangguru, adalah sebuah perusahaan rintisan digital asal Indonesia yang bergerak di bidang pendidikan nonformal. Ruangguru menawarkan platform pembelajaran berbasis kurikulum sekolah melalui video tutorial interaktif oleh guru dan animasi di aplikasi ponsel dan komputer. Perusahaan ini didirikan oleh Belva Devara dan Iman Usman pada April 2014. Pada tahun 2021 Ruangguru dinobatkan menjadi perusahaan paling inovatif peringkat 25 di dunia dan peringkat 2 dalam kategori pendidikan oleh Fast Company.',
            'imgurl' => 'image/article/rg.jpg',
            'author_id' => 1,
            'created_at' => '2023-01-08 09:12:13'
        ]);
        DB::table('articles')->insert([
            'title' => 'Quipper',
            'details'=>'Quipper adalah perusahaan teknologi edukasi yang menyediakan fasilitas sistem pembelajaran daring (dalam jaringan). Quipper dirintis pada tahun 2010 di London, Inggris oleh Fumihiro Yamaguchi Diarsipkan 2021-06-16 di Wayback Machine.. Saat ini Quipper telah beroperasi di 4 negara yaitu Jepang, Indonesia, Filipina dan Meksiko. Pada awalnya, layanan utama perusahaan adalah Learning Management System (LMS) yang beroperasi secara berbeda di negara bersangkutan. Layanan terus berkembang dengan menyediakan fasilitas bimbingan belajar, pengajaran daring hingga info masuk perguruan tinggi.',
            'imgurl' => 'image/article/quipper.jpg',
            'author_id' => 1,
            'created_at' => '2023-01-08 09:12:13'
        ]);
        DB::table('articles')->insert([
            'title' => 'Halodoc',
            'details'=>'Halodoc merupakan sebuah aplikasi dan situs web asal Indonesia yang bergerak di bidang kesehatan. PT Media Dokter Investama, perusahaan aplikasi ini didirikan pada tahun 2016 di Jakarta oleh Jonathan Sudharta. Hingga tahun 2018, total pendanaan yang diterima adalah sekitar US$13 juta atau sekitar Rp171miliar; beberapa investornya atara lain Gojek, Blibli, Clermont, dan NSI Ventures. Halodoc mengumumkan kerjasama dengan Gojek pada bulan Mei 2018. Melalui kerja sama tersebut Gojek akan menghubungkan fitur Gomed di dalam aplikasi Gojek dengan aplikasi Halodoc. Sehingga pengguna Gojek akan langsung diarahkan ke aplikasi Halodoc untuk pemesanan kebutuhan medis seperti obat atau vitamin. Selain itu, Halodoc juga menjalin kerjasama dengan beberapa perusahaan asuransi.',
            'imgurl' => 'image/article/halodoc.jpg',
            'author_id' => 1,
            'created_at' => '2023-01-08 09:12:13'
        ]);
    }
}
