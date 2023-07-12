<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 1,
                'user_id' => 1,
                'cover' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688970892/PandanViewMandeh/snack_pfcp0v.jpg',
                'title' => 'Menikmati Lezatnya Snack di Pandan View Mandeh, Sumatera Barat',
                'slug' => 'menikmati-lezatnya-snack-di-pandan-view-mandeh',
                'desc' => '<p>Sumatera Barat tidak hanya terkenal dengan keindahan alamnya yang menakjubkan, tetapi juga dengan kelezatan makanan dan camilan khasnya. Salah satu tempat di Sumatera Barat yang patut dikunjungi oleh pecinta kuliner adalah Pandan View Mandeh. Berlokasi di kawasan wisata Pantai Mandeh, Pandan View Mandeh menawarkan pemandangan spektakuler dan beragam pilihan camilan lezat yang dapat memanjakan lidah Anda. Inilah artikel tentang snack di Pandan View Mandeh yang akan memanjakan selera Anda.</p>

<h3>Pisang Goreng Kipas</h3>

<p>Pisang goreng kipas menjadi salah satu camilan yang wajib dicicipi ketika mengunjungi Pandan View Mandeh. Camilan ini terbuat dari pisang yang digoreng dengan tepung yang renyah dan lezat. Yang membuatnya istimewa adalah bentuknya yang unik, seperti kipas yang terbuka. Rasanya yang manis dan teksturnya yang renyah membuat pisang goreng kipas menjadi favorit para pengunjung.</p>

<h3>Lemang</h3>

<p>Leman adalah makanan tradisional Sumatera Barat yang terbuat dari beras ketan yang dikukus dalam bambu. Di Pandan View Mandeh, Anda dapat menikmati lemang dengan berbagai pilihan pelengkap, seperti serundeng (kelapa parut yang digoreng) atau ikan asin. Lemang memiliki cita rasa yang gurih dan aromatik yang khas, serta tekstur yang kenyal. Rasanya yang lezat membuatnya menjadi camilan yang sangat disukai oleh wisatawan.</p>

<h3>Dadiah</h3>

<p>Dadiah adalah yogurt tradisional khas Sumatera Barat yang terbuat dari susu sapi segar. Di Pandan View Mandeh, Anda dapat menemukan dadiah segar yang dibuat secara tradisional. Dadiah memiliki rasa yang segar dan asam yang menyegarkan. Camilan ini juga mengandung banyak nutrisi dan baik untuk kesehatan pencernaan. Dadiah dapat dinikmati dalam keadaan dingin dan merupakan pilihan camilan yang sehat di tengah cuaca yang panas.</p>

<h3>Singkong Balado</h3>

<p>Singkong balado adalah camilan yang terbuat dari singkong yang digoreng dan dilumuri dengan bumbu balado yang pedas. Di Pandan View Mandeh, Anda dapat menemukan singkong balado yang gurih dan pedas dengan cita rasa yang autentik. Kombinasi antara kelezatan singkong yang renyah dengan kepedasan bumbu balado menciptakan harmoni rasa yang sempurna. Singkong balado adalah camilan yang cocok untuk Anda yang menyukai makanan pedas.</p>

<h3>Lempeng Pisang</h3>

<p>Lempeng pisang adalah camilan tradisional khas Sumatera Barat yang terbuat dari adonan tepung beras dan pisang yang digoreng hingga renyah. Di Pandan View Mandeh, Anda dapat menemukan lempeng pisang yang lezat dengan berbagai varian rasa, seperti lempeng pisang cokelat atau lempeng pisang keju. Camilan ini memiliki tekstur yang kenyal dan rasa manis yang menggoda, cocok untuk dinikmati sebagai teman minum teh atau kopi.</p>

<h3>Keripik Sanjai</h3>

<p>Keripik sanjai adalah camilan khas Sumatera Barat yang terbuat dari daun singkong yang dipotong tipis dan digoreng hingga renyah. Keripik sanjai memiliki cita rasa yang gurih dan renyah, serta memiliki aroma yang khas. Di Pandan View Mandeh, Anda dapat menemukan keripik sanjai yang segar dan dibuat dengan bahan-bahan berkualitas.</p>

<p>Selain menikmati camilan lezat, Anda juga dapat menikmati pemandangan yang indah dari Pandan View Mandeh. Dikelilingi oleh pantai yang memukau dan pepohonan hijau, tempat ini merupakan tempat yang sempurna untuk bersantai sambil menikmati makanan lezat. Jadi, jika Anda berkunjung ke Sumatera Barat, jangan lewatkan kesempatan untuk mencicipi camilan khas di Pandan View Mandeh. Selamat menikmati perjalanan kuliner Anda di Sumatera Barat!</p>',
                'keywords' => 'Snack Pandan View, Pandan View, Mandeh, Pandan view Mandeh Snack',
                'meta_desc' => 'Menikmati Lezatnya Snack di Pandan View Mandeh, Sumatera Barat',
                'reads' => 11,
                'created_at' => '2022-05-10 13:02:40',
                'updated_at' => '2023-07-12 08:12:13',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 2,
                'user_id' => 1,
                'cover' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688972198/PandanViewMandeh/_AULA4_tbm1np.jpg',
                'title' => 'Tips Traveling di Sumatera Barat: Menikmati Keindahan Alam dan Budaya',
                'slug' => 'tips-traveling-di-sumatera-barat-menikmati-keindahan-alam-dan-budaya',
                'desc' => '<p>Sumatera Barat adalah salah satu provinsi di Indonesia yang kaya akan keindahan alam, budaya, dan sejarahnya. Terletak di pulau Sumatera, provinsi ini menawarkan berbagai destinasi menarik yang patut dikunjungi bagi para wisatawan yang mencari petualangan dan pengalaman baru. Berikut adalah beberapa tips yang dapat membantu Anda merencanakan perjalanan yang menyenangkan ke Sumatera Barat:</p>

<h3><strong>Rencanakan Itinerary dengan Baik:</strong></h3>

<p>Sebelum berangkat, buatlah rencana perjalanan yang terperinci. Identifikasi tempat-tempat yang ingin Anda kunjungi dan buatlah daftar aktivitas yang ingin dilakukan. Sumatera Barat memiliki berbagai destinasi menarik seperti Danau Maninjau, Bukittinggi, Pantai Carocok, dan Taman Nasional Kerinci Seblat. Dengan merencanakan itinerary dengan baik, Anda dapat mengoptimalkan waktu Anda dan mengunjungi semua tempat yang Anda inginkan.</p>

<h3><strong>Pilih Waktu yang Tepat: </strong></h3>

<p>Penting untuk memilih waktu yang tepat untuk mengunjungi Sumatera Barat. Cuaca di daerah ini cenderung panas sepanjang tahun, tetapi musim hujan biasanya terjadi antara Oktober dan Maret. Jika Anda ingin melakukan kegiatan di luar ruangan, seperti mendaki atau menjelajahi pantai, sebaiknya hindari musim hujan. Pilihlah bulan-bulan dengan cuaca cerah dan kering untuk menikmati keindahan alam Sumatera Barat secara optimal.</p>

<h3><strong>Persiapkan Fisik dan Kesehatan: </strong></h3>

<p>Beberapa destinasi di Sumatera Barat, seperti Gunung Marapi atau Gunung Singgalang, menawarkan petualangan yang menantang. Sebelum melakukan aktivitas fisik yang berat, pastikan Anda dalam kondisi fisik yang baik dan siap menghadapinya. Juga, pastikan Anda membawa perlengkapan yang sesuai, seperti sepatu dan pakaian yang nyaman serta alat-alat kebutuhan darurat. Selain itu, periksa kondisi kesehatan Anda dan pastikan untuk membawa obat-obatan yang mungkin Anda perlukan selama perjalanan.</p>

<h3><strong>Hargai Budaya dan Adat Istiadat Lokal: </strong></h3>

<p>Sumatera Barat memiliki kekayaan budaya dan adat istiadat yang unik. Saat mengunjungi daerah ini, penting untuk menghargai dan menghormati budaya lokal. Kenali beberapa tata krama dasar, seperti memberikan salam dengan ramah kepada penduduk setempat dan meminta izin sebelum memotret orang atau tempat suci. Jika Anda berkesempatan, cobalah untuk mencicipi hidangan tradisional Minangkabau, seperti rendang atau nasi kapau, untuk merasakan cita rasa kuliner yang khas.</p>

<h3><strong>Bawa Uang Tunai yang Cukup: </strong></h3>

<p>Meskipun ada beberapa tempat di Sumatera Barat yang menerima kartu kredit atau debit, sebaiknya Anda juga membawa uang tunai yang cukup selama perjalanan. Beberapa daerah pedesaan mungkin tidak memiliki mesin ATM atau sarana pembayaran elektronik. Pastikan Anda memiliki uang tunai dalam pecahan kecil untuk membayar tiket masuk, makanan, dan transportasi lokal.</p>

<h3><strong>Bersiaplah dengan Transportasi: </strong></h3>

<p>Sumatera Barat memiliki beragam pilihan transportasi, termasuk taksi, ojek, dan angkutan umum. Jika Anda merencanakan perjalanan antar kota atau ingin menjelajahi destinasi terpencil, sebaiknya Anda menyewa kendaraan pribadi atau menggunakan jasa tur yang sudah terpercaya. Pastikan kendaraan dalam kondisi baik dan aman, serta lengkap dengan peta atau panduan yang diperlukan.</p>

<h3><strong>Jaga Kebersihan dan Lingkungan: </strong></h3>

<p>Sebagai wisatawan yang bertanggung jawab, penting untuk menjaga kebersihan dan lingkungan selama perjalanan. Sumatera Barat memiliki keindahan alam yang memukau, seperti hutan hujan tropis dan pantai yang indah. Jangan meninggalkan sampah sembarangan dan ikuti aturan-aturan yang ada di setiap destinasi wisata. Bantu menjaga kelestarian alam Sumatera Barat agar tetap indah untuk dinikmati oleh generasi mendatang.</p>

<p>Dengan mengikuti tips ini, Anda akan dapat menikmati perjalanan yang tak terlupakan di Sumatera Barat. Nikmati keindahan alam yang luar biasa, jelajahi kebudayaan yang kaya, dan ciptakan kenangan indah selama petualangan Anda di provinsi ini. Selamat menikmati perjalanan Anda!</p>',
                'keywords' => 'travel, pariwisata, info-pariwisata, mandeh, pandan view mandeh',
                'meta_desc' => 'travel, pariwisata, info-pariwisata, mandeh, pandan view mandeh',
                'reads' => 27,
                'created_at' => '2023-04-10 13:57:14',
                'updated_at' => '2023-07-12 08:12:37',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => 1,
                'user_id' => 1,
                'cover' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688975417/PandanViewMandeh/20230518_111000_rov6f1.jpg',
                'title' => 'Pandan View Mandeh Resort',
                'slug' => 'pandan-view-mandeh',
                'desc' => '<p>Pandan View Mandeh terletak dikawasan destinasi wisata bahari Teluk Mandeh yang menghadirkan sebuah kafe dan cottage untuk wisatawan lokal, domestik dan manca negara. Pandan View Mandeh terdapat beberapa spot spot berfoto yang indah dan pemandangan yang indah langsung kelaut dan pulau dikawasan Teluk Mandeh. Dan wisatawan juga bisa menikmati Cottage yang tersedia di Pandan View Mandeh ini dengan ada 2 type kamar , type kamar Lumbung dan Type kamar Villa dengan harga yang masih terjangkau. Selain Tersedia nya Spot Foto dan Cottage, para pengunjung juga dimanjakan dengan live musik akustik dengan pemain dan musik sesuai para tamunya .</p>

<p>Meskipun pandan view ini masih dalam penyelesaian dan dalam pengerjaan 30% lagi, pengunjung sudah bisa menikmati fasilitas yang ada di Pandan View Mandeh ini, dengan prasarana yang ada, mushalla , toilet , kafe dan spot foto lainnya Fitur Pandan View Sangat Mempesona Jika berbicara mengenai tempat wisata di sumatera barat, tentu tak bisa dilepaskan dengan kawasan wisata mandeh. Destinasi ini menyuguhkan perpaduan antara indahnya teluk dan perbukitan alami. Keindahanya disebut sebut mirip dengan Raja Ampat di papua. Kawasan wisata mandeh sendiri memiliki luas mencapai 18 ribu ha, terdiri dari tiga nagari dan tujuh desa. Topografinya meliputi pantai, gugusan pulau kecil, hingga hutan mangrove. Kini mandeh mulai berkembang dan dikenal banyak orang baik dalam skala nasional maupun international. Ada banyak destinasi yang bisa kita kunjungi di kawasan wisata mandeh.</p>

<p>Puncak Indah Mandeh tentunya menjadi tujuan utama para traveller yang berkunjung. Selain itu kini banyak cafe, resto maupun resort yang bisa kamu kunjungi. Salah satunya adalah Pandan view Mandeh yang berada di ampang pulau Kabupaten Pesisir Selatan. Daya Tarik Pandan View Mandeh Pandan view mandeh merupakan resort dan resto sekaligus tempat wisata yang bisa kamu kunjungi ketika berwisata di kawasan wisata mandeh. Para pengunjung bisa bersantai dan menikmati beragam menu makanan/ minuman. Area restonya juga berada di bibir pantai, jadi kita akan disuguhkan lautan dan gugusan pulau yang ada didepan mata.</p>

<p>Selain itu, ada banyak aktivitas seru yang bisa dilakukan di kawasan wisata mandeh. Disana kamu bisa melakukan wisata laut baik sekedar menikmati suasana pantai, berenang, bahkan snorkeling. Yups, keindahan bawah laut mandeh gak kalah dengan tempat tempat lain di Indonesia. Kamu bisa menikmati berbagaijenis terumbu karang dan biota laut. Pandan view memiliki beberapa paket wisata yang bisa kamu pesan. Daya tarik selanjutnya tentunya adalah penginapan berupa villa dan cottage. Bagi kalian yang datang dari luar kota, bisa memesan penginapan tersebut. Jenis cottage cukup menarik dengan bentuknya yang seperti lumbung dengan kapasitas sampai 4 orang.</p>',
                'keywords' => 'travel, pariwisata, info-pariwisata, mandeh, pandan view mandeh',
                'meta_desc' => 'travel, pariwisata, info-pariwisata, mandeh, pandan view mandeh',
                'reads' => 10,
                'created_at' => '2022-12-10 14:50:49',
                'updated_at' => '2023-07-12 08:13:06',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => 3,
                'user_id' => 1,
                'cover' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688977377/PandanViewMandeh/image_1920x_62880a5334c1f_hweesy.jpg',
                'title' => 'Kemenag Pessel Gelar Raker Tahun 2022 di Pandan View Kawasan Mandeh',
                'slug' => 'kemenag-pessel-gelar-raker-tahun-2022-di-pandan-view-kawasan-mandeh',
            'desc' => '<p>Untuk mengevaluasi hasil kinerja tahun 2021 dan membahas program kerja tahun anggaran 2022, serta perencanaan program tahun 2023, Kementerian Agama Kabupaten Pesisir Selatan menggelar Rapat Kerja (Raker), Sabtu (21/5) di Pandan View, Kawasan Mandeh Resort Kabupaten Pesisir Selatan.</p>

<p>Rapat kerja dibuka Kepala Kantor Kementerian Agama Kabupaten Pesisir Selatan, Abrar Munanda dan diikuti Kasubbag Tata Usaha, Kasi, penyelenggara, ASN Kankemenag Pessel, serta perwakilan kepala KUA, Forum K2MI, K2MTs, K2MA, pengawas, serta penyuluh agama di lingkungan Kantor Kementerian Agama Kabupaten Pesisir Selatan. Selain itu raker juga dihadiri Ketua Darma Wanita Persatuan Kantor Kementerian Agama Kabupaten Pesisir Selatan, Ny. Yenny Abrar Munanda beserta perwakilan anggota.</p>

<p>Menurut Kepala Kantor Kementerian Agama Kabupaten Pesisir Selatan, Abrar Munanda, kegiatan raker ini diselenggarakan selama 2 hari, tanggal 21 dan 22 Mei 2022. Raker yang mengusung tema Transformasi Layanan Umat, sebagai ikhtiar untuk terus berbenah di dalam mewujudkan tatanan kualitas layanan yang prima kepada masyarakat. &quot;Disamping melakukan evaluasi tahun 2021, dan strategi akselarasi percepatan anggaran triwulan tiga, serta merancang anggaran yang akan kita laksanakan di tahun 2023,&quot; ungkap Abrar. Abrar Munanda mengatakan, kegiatan ini adalah rangkaian yang kedua, karena telah diawali dengan pra raker, dan hari ini kita tinggal memplenokan hasil yang telah dibahas oleh masing-masing komisi ketika pra raker pada tanggal 17 Mei 2022 lalu. &ldquo;Kita mengharapkan raker tahun 2022 ini dapat menghasilkan rekomendasi dan memberikan jalan dalam upaya meningkatkan pelayanan di lingkungan Kantor Kementerian Agama Kabupaten Pesisir Selatan, sesuai dengan tema yang kita usung Transformasi Layanan Umat,&rdquo; harap Abrar.</p>

<p>Lebih lanjut dikatakan bahwa raker tahun ini sangat berbeda dengan raker pada tahun-tahun sebelumnya, pada raker tahun ini akan diisi juga dengan kegiatan outbond. Abrar Munanda mengatakan kegiatan outbond ini selain untuk mempererat tali silaturahmi, hendaknya juga bisa berfungsi sebagai penyegaran dan refreshing bagi seluruh ASN dengan berbagai rutinitas sehari-hari di kantor sebagai pelayan masyarakat. Diharapkan dengan kegiatan outbond ini nantinya akan dapat membangun tim yang solid dan persatuan yang lebih kokoh melalui berbagai game yang diikuti untuk dapat diimplementasikan dalam melaksanakan tugas pokok dan fungsi sebagai ASN di lingkungan Kantor Kementerian Agama Kabupaten Pesisir Selatan.</p>

<p>&quot;Kemudian untuk tempat, kenapa kita memilih pelaksanaan raker di kawasan wisata, karena kita ingin seluruh ASN Kankemenag Pessel untuk bisa mendukung serta turut berkontribusi dalam mempromosikan pariwisata di Pesisir Selatan,&quot; ujar kakan kemenag. Pada kesempatan itu kakan kemenag mengucapkan terima kasih dan mengapresiasi panitia yang telah mempersiapkan segala sesuatunya hingga acara raker tahun 2022 dapat dilaksanakan dengan lancar dan sukses. &quot;Diharapkan pelaksanaan raker ini menghasilkan perencanaan yang baik, serta memunculkan inovasi-inovasi yang akan mengantarkan Kantor Kementerian Agama Kabupaten Pesisir Selatan menjadi terdepan,&quot; harap kakan kemenag. Kemudian raker dilanjutkan dengan pelaksanaan sidang pleno yang akan memaparkan hasil yang telah dibahas pada kegiatan pra raker sebelumnya dari masing-masing komisi.</p>',
                'keywords' => 'Rapat Kerja, Rapat Dinas',
                'meta_desc' => 'Rapat Kerja, Rapat Dinas',
                'reads' => 8,
                'created_at' => '2022-05-10 15:23:15',
                'updated_at' => '2023-07-11 20:28:28',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'category_id' => 4,
                'user_id' => 1,
                'cover' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1689050239/PandanViewMandeh/resort_m5ekf8.jpg',
                'title' => 'Perbedaan Hotel, Bungalow, Resort, Cottage, dan Villa',
                'slug' => 'perbedaan-hotel-bungalow-resort-cottage-dan-villa',
                'desc' => '<p>Dalam industri perhotelan dan akomodasi, terdapat berbagai jenis tempat menginap yang dapat dipilih oleh wisatawan. Beberapa di antaranya adalah hotel, bungalow, resort, cottage, dan villa. Meskipun mereka semua menyediakan tempat tinggal sementara, terdapat perbedaan signifikan dalam desain, fasilitas, dan pengalaman yang ditawarkan oleh masing-masing jenis akomodasi. Artikel ini akan menjelaskan perbedaan antara hotel, bungalow, resort, cottage, dan villa.</p>

<ol>
<li>
<p>Hotel: Hotel adalah akomodasi yang umumnya terdiri dari beberapa kamar atau suite yang dikelola secara profesional. Hotel biasanya memiliki berbagai tipe kamar, mulai dari standar hingga mewah, dengan fasilitas yang lengkap seperti restoran, bar, pusat kebugaran, kolam renang, dan layanan kamar. Hotel juga seringkali terletak di pusat kota atau dekat dengan atraksi wisata utama. Mereka menawarkan berbagai layanan tambahan seperti resepsionis 24 jam, concierge, dan fasilitas konferensi.</p>
</li>
<li>
<p>Bungalow: Bungalow adalah akomodasi yang umumnya terdiri dari sebuah bangunan berukuran kecil atau menengah yang terdiri dari satu atau dua kamar tidur. Mereka seringkali memiliki desain yang lebih santai dan terletak di sekitar alam, seperti pantai atau pegunungan. Bungalow seringkali menawarkan privasi yang lebih tinggi daripada hotel dan biasanya dilengkapi dengan dapur atau dapur kecil, serta teras atau balkon untuk menikmati pemandangan alam sekitarnya.</p>
</li>
<li>
<p>Resort: Resort adalah akomodasi yang biasanya terletak di lokasi wisata alam atau pantai. Mereka menawarkan berbagai fasilitas dan aktivitas rekreasi, seperti kolam renang, spa, klub anak-anak, pusat olahraga air, dan restoran. Resort seringkali memiliki banyak pilihan kamar, mulai dari kamar biasa hingga suite mewah atau vila pribadi. Mereka bertujuan untuk memberikan pengalaman liburan yang lengkap, dengan fokus pada relaksasi, hiburan, dan aktivitas rekreasi.</p>
</li>
<li>
<p>Cottage: Cottage adalah akomodasi yang biasanya terletak di pedesaan atau lingkungan alami. Mereka cenderung memiliki desain tradisional dan memberikan suasana yang hangat dan nyaman. Cottage umumnya lebih kecil dibandingkan dengan hotel atau resort, dengan satu hingga beberapa kamar tidur, dapur, ruang tamu, dan area outdoor seperti taman atau halaman. Mereka cocok untuk wisatawan yang ingin merasakan kehidupan desa atau menghabiskan waktu dalam keheningan alam.</p>
</li>
<li>
<p>Villa: Villa adalah akomodasi mewah yang biasanya berdiri sendiri dan menawarkan privasi yang tinggi. Mereka seringkali dilengkapi dengan fasilitas yang lengkap seperti kolam renang pribadi, taman tropis, dapur lengkap, ruang makan, dan ruang keluarga. Villa dapat berukuran besar dengan beberapa kamar tidur, sehingga cocok untuk keluarga atau kelompok yang ingin tinggal bersama. Mereka terletak di lokasi eksklusif, seperti pantai atau pegunungan, dan menawarkan pengalaman liburan yang mewah dan intim.</p>
</li>
</ol>

<p>Dalam memilih jenis akomodasi, penting untuk mempertimbangkan preferensi pribadi, anggaran, lokasi, fasilitas, dan pengalaman yang diinginkan. Hotel, bungalow, resort, cottage, dan villa semuanya memiliki keunikan dan daya tariknya sendiri, dan akan memberikan pengalaman menginap yang berbeda kepada para tamu.</p>',
                'keywords' => 'perbedaan, hotel, bungalow, resort, cottage, villa, akomodasi, liburan, penginapan',
                'meta_desc' => 'Temukan perbedaan antara hotel, bungalow, resort, cottage, dan villa dalam artikel ini. Dapatkan pemahaman yang lebih baik tentang jenis-jenis akomodasi ini dan pilihlah yang sesuai dengan preferensi liburan Anda',
                'reads' => 13,
                'created_at' => '2023-07-11 11:36:33',
                'updated_at' => '2023-07-12 08:21:17',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'category_id' => 1,
                'user_id' => 1,
                'cover' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1689124778/PandanViewMandeh/_LAYOUT_yfoybb.jpg',
                'title' => 'Pandan View Mandeh: Keindahan Puncak Mandeh yang Menakjubkan',
                'slug' => 'pandan-view-mandeh-keindahan-puncak-mandeh-yang-menakjubkan',
                'desc' => '<p>Pandan View Mandeh adalah tempat yang memikat di Puncak Mandeh, destinasi wisata alam yang menawarkan pemandangan spektakuler dan pengalaman liburan yang tak terlupakan. Jika Anda mencari tempat untuk menikmati keindahan alam yang menakjubkan dan merasakan ketenangan yang luar biasa, maka Pandan View Mandeh adalah pilihan yang tepat. Dalam artikel ini, kita akan menjelajahi pesona Puncak Mandeh dan pengalaman yang bisa Anda dapatkan di sana.</p>

<ol>
<li>
<p>Keindahan Alam yang Menakjubkan di Pandan View Mandeh Pandan View Mandeh terletak di Puncak Mandeh, di Mandeh, Sumatera Barat. Dari puncak ini, Anda akan disuguhkan pemandangan alam yang menakjubkan, termasuk hamparan pepohonan hijau yang memanjakan mata dan pemandangan Teluk Mandeh yang mempesona. Dengan udara segar yang sejuk, Anda dapat menikmati panorama spektakuler yang membentang di sekitar Anda. Jangan lupa untuk membawa kamera, karena Anda pasti ingin mengabadikan momen indah ini.</p>
</li>
<li>
<p>Aktivitas Seru di Puncak Mandeh Selain menikmati pemandangan yang menakjubkan, Anda juga dapat melakukan berbagai aktivitas seru di Puncak Mandeh. Anda dapat melakukan trekking melalui jalur-jalur alam yang indah, menikmati kegiatan berkemah di alam terbuka, atau hanya bersantai sambil menikmati panorama alam yang menenangkan. Anda juga dapat menjelajahi objek wisata lainnya di sekitar Puncak Mandeh, seperti Pantai Mandeh yang menakjubkan.</p>
</li>
<li>
<p>Menikmati Keindahan Alam Laut di Mandeh Tidak jauh dari Puncak Mandeh, Anda akan menemukan Mandeh, sebuah destinasi wisata laut yang memukau. Dengan air laut yang jernih dan pasir putih yang lembut, Mandeh menawarkan keindahan alam laut yang menakjubkan. Anda dapat melakukan snorkeling, menyelam, atau berlayar di perairan yang tenang, sambil menikmati keindahan bawah laut yang menawan. Jangan lewatkan juga untuk mencicipi hidangan laut segar yang tersedia di sekitar area wisata Mandeh.</p>
</li>
</ol>

<p>Pandan View Mandeh adalah tempat yang memikat di Puncak Mandeh, Sumatera Barat, yang menawarkan pemandangan spektakuler dan pengalaman liburan yang tak terlupakan. Nikmati keindahan alam yang menakjubkan di Pandan View Mandeh, sambil menjelajahi aktivitas seru di Puncak Mandeh dan menikmati pesona Mandeh yang indah di sekitarnya. Jelajahi dan rasakan pesona Puncak Mandeh yang memukau, dan buat liburan Anda menjadi pengalaman yang tak terlupakan.</p>',
                'keywords' => 'Pandan View Mandeh, Puncak Mandeh, keindahan alam, pemandangan spektakuler, liburan, destinasi wisata, Mandeh',
                'meta_desc' => 'Temukan keindahan alam yang menakjubkan di Pandan View Mandeh, puncak tertinggi di Mandeh yang menawarkan pemandangan spektakuler dan pengalaman liburan yang tak terlupakan. Jelajahi destinasi wisata alam yang menakjubkan ini dan rasakan pesona Puncak Mandeh.',
                'reads' => 0,
                'created_at' => '2023-07-12 08:20:32',
                'updated_at' => '2023-07-12 08:20:32',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'category_id' => 4,
                'user_id' => 1,
                'cover' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1689125048/PandanViewMandeh/20230518_104044_lvp2w1.jpg',
                'title' => 'Menjelajahi Dunia Melalui Pariwisata: Merayakan Keajaiban Alam dan Budaya',
                'slug' => 'menjelajahi-dunia-melalui-pariwisata-merayakan-keajaiban-alam-dan-budaya',
                'desc' => '<p>Pariwisata merupakan pintu gerbang untuk menjelajahi keajaiban alam dan kekayaan budaya yang ada di seluruh dunia. Dengan perjalanan, kita dapat mengalami keindahan luar biasa dari alam yang memukau, serta memahami dan merayakan keragaman budaya yang ada di berbagai belahan dunia. Artikel ini akan mengajak Anda dalam perjalanan untuk mengeksplorasi tempat-tempat menakjubkan, memahami budaya yang berbeda, dan menciptakan kenangan tak terlupakan dalam perjalanan wisata Anda.</p>

<h2>Menemukan Keajaiban Alam</h2>

<p>Pariwisata memungkinkan kita untuk menjelajahi keajaiban alam yang menakjubkan di seluruh dunia. Dari pegunungan yang menjulang tinggi hingga lembah yang hijau dan lautan yang luas, alam menawarkan pemandangan yang tak terlupakan. Kita dapat menikmati keindahan matahari terbenam di atas tebing karang, merasakan kesejukan dan keasrian hutan tropis, atau menyelam di terumbu karang yang indah. Perjalanan wisata memberikan kesempatan untuk terhubung dengan alam dan menghargai keindahan yang ada di dunia ini.</p>

<h2>Merasakan Kekayaan Budaya</h2>

<p>Pariwisata juga membawa kita dalam perjalanan untuk memahami dan merayakan kekayaan budaya yang beragam di berbagai destinasi. Melalui perjalanan, kita dapat belajar tentang tradisi, seni, dan adat istiadat masyarakat setempat. Mengunjungi tempat bersejarah, menyaksikan pertunjukan seni tradisional, atau mencicipi makanan khas daerah adalah cara-cara untuk merasakan keunikan budaya di seluruh dunia. Hal ini membuka pikiran kita dan memberi kita wawasan yang lebih dalam tentang kehidupan manusia di berbagai tempat.</p>

<h2>Menciptakan Kenangan Tak Terlupakan</h2>

<p>Perjalanan wisata bukan hanya tentang tempat yang dikunjungi, tetapi juga tentang pengalaman yang kita dapatkan dan kenangan yang kita ciptakan. Melalui perjalanan, kita dapat bertemu dengan orang-orang baru, menjalin persahabatan, dan merasakan kegembiraan dalam menjelajahi tempat baru. Setiap perjalanan memberikan pengalaman yang unik dan menciptakan kenangan yang tak terlupakan. Kenangan ini akan menjadi harta berharga sepanjang hidup dan menginspirasi kita untuk terus menjelajahi dunia.</p>

<p>Pariwisata adalah cara yang indah untuk menjelajahi dunia, merayakan keajaiban alam, dan memahami kekayaan budaya yang ada di berbagai tempat. Melalui perjalanan, kita dapat menemukan tempat-tempat menakjubkan, merasakan budaya yang beragam, dan menciptakan kenangan tak terlupakan. Jadi, jadilah seorang pelancong yang berani, mulailah merencanakan petualangan Anda, dan nikmati setiap momen dalam perjalanan wisata Anda.</p>',
                'keywords' => 'pariwisata, keajaiban alam, kekayaan budaya, menjelajahi dunia, tempat-tempat menakjubkan, budaya yang beragam, kenangan tak terlupakan, perjalanan wisata.',
                'meta_desc' => 'Temukan keindahan dan kekayaan budaya dunia melalui pariwisata. Artikel ini akan membawa Anda dalam perjalanan untuk menjelajahi tempat-tempat menakjubkan, merasakan budaya yang beragam, dan menciptakan kenangan tak terlupakan di perjalanan wisata Anda.',
                'reads' => 0,
                'created_at' => '2023-07-12 08:24:24',
                'updated_at' => '2023-07-12 08:24:24',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}