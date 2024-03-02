<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Collection::create([
            'id' => 'bfa4ddb9-918e-49f4-8d0b-612a4f790825',
            'name' => "Mona Lisa",
            'createdBy' => "Leonardo da Vinci",
            'discovery_year' => '1503 - 1517',
            'origin' => "Italia",
            'description' => "Nama atau judul lukisan Mona Lisa berasal dari biografi Giorgio Vasari tentang Leonardo da Vinci, yang terbit 31 tahun setelah ia meninggal dunia. Di dalam buku ini disebutkan bahwa wanita dalam lukisan ini adalah Lisa Gherardini.[4][5]

Mona dalam bahasa Italia adalah singkatan untuk ma donna yang artinya adalah `nyonyaku`. Sehingga judul lukisan artinya adalah Nyonya Lisa. Dalam bahasa Italia biasanya judul lukisan ditulis sebagai Monna Lisa.

Lalu La Gioconda adalah bentuk feminin dari Giocondo. Kata giocondo dalam bahasa Italia artinya adalah `riang` dan la gioconda artinya adalah `wanita riang`. Berkat senyum Mona Lisa yang misterius ini, frasa ini memiliki makna ganda. Begitu pula terjemahannya dalam bahasa Prancis; La Joconde.

Nama Mona Lisa dan La Gioconda atau La Joconde menjadi judul lukisan ini yang diterima secara luas semenjak abad ke-19. Sebelumnya lukisan ini disebut dengan berbagai nama seperti `Wanita dari Firenze` atau `Seorang wanita bangsawan dengan kerudung tipis`. "
        ]);
        \App\Models\Collection::create([
            'id' => '4af62d38-6e0a-42b4-9bb1-48a49f538380',
            'name' => "The Potato Eaters ",
            'createdBy' => "Vincent van Gogh",
            'discovery_year' => '1853 - 1890',
            'origin' => "Belanda",
            'description' => "Van Gogh melihat Potato Eaters sebagai sebuah karya pameran, sehingga ia sengaja memilih komposisi yang sulit untuk membuktikan bahwa ia sedang dalam perjalanan menjadi seorang pelukis figur yang baik. Lukisan itu harus menggambarkan kenyataan pahit kehidupan pedesaan, jadi ia memberikan para petani wajah kasar dan tangan kurus yang bekerja. Ia ingin menunjukkan dengan cara ini bahwa mereka 'telah menggarap tanah mereka sendiri dengan tangan-tangan yang mereka masukkan ke dalam piring... bahwa mereka dengan jujur telah mendapatkan makanan mereka'.

Dia melukis lima sosok itu dengan warna tanah – 'seperti warna kentang yang sangat berdebu, tentu saja tidak dikupas'. Pesan lukisan itu lebih penting bagi Van Gogh daripada anatomi yang benar atau kesempurnaan teknis. Ia sangat senang dengan hasilnya: namun lukisannya menuai banyak kritik karena warnanya sangat gelap dan gambarnya penuh kesalahan. Saat ini, Potato Eaters adalah salah satu karya Van Gogh yang paling terkenal."
        ]);
        \App\Models\Collection::create([
            'id' => 'e7fbc122-ba3a-413d-b5a0-127cccdb3144',
            'name' => "The Bedroom",
            'createdBy' => "Vincent van Gogh",
            'discovery_year' => '1853 - 1890',
            'origin' => "Belanda",
            'description' => "Saat berada di Arles, Van Gogh membuat lukisan kamar tidurnya di Gedung Kuning. Dia menyiapkan ruangan itu sendiri dengan perabotan sederhana dan dengan karya sendiri di dinding. Warna-warna cerah dimaksudkan untuk mengekspresikan 'istirahat' atau 'tidur' yang mutlak. Penelitian menunjukkan bahwa warna-warna sangat kontras yang kita lihat pada karya-karya saat ini adalah hasil dari perubahan warna selama bertahun-tahun. Dinding dan pintu, misalnya, awalnya berwarna ungu, bukan biru. Sementara itu, sudut dinding belakang yang tampak aneh, bukanlah kesalahan Van Gogh – sudutnya benar-benar miring. Aturan perspektif tampaknya tidak diterapkan secara akurat di seluruh lukisan, tapi ini adalah pilihan yang disengaja. Vincent mengatakan kepada Theo dalam suratnya bahwa dia sengaja 'meratakan' interiornya dan menghilangkan bayangan agar fotonya menyerupai cetakan Jepang. Van Gogh sangat senang dengan lukisan itu: 'Ketika saya melihat kanvas saya lagi setelah saya sakit, yang menurut saya paling baik adalah kamar tidur.'"
        ]);
        \App\Models\Collection::create([
            'id' => '21684860-8ed8-4c8b-9256-a91385653600',
            'name' => "Café Terrace at Night",
            'createdBy' => "Vincent van Gogh",
            'discovery_year' => '1888',
            'origin' => "Belanda",
            'description' => "Café Terrace at Night adalah lukisan cat minyak tahun 1888 karya seniman Belanda Vincent van Gogh. Ia juga dikenal sebagai The Cafe Terrace di Place du Forum, dan ketika pertama kali dipamerkan pada tahun 1891, diberi judul Coffeehouse, in the night (Café, le soir).

Van Gogh melukis Café Terrace at Night di Arles, Prancis, pada pertengahan September 1888. Lukisan tersebut tidak ditandatangani, namun dijelaskan dan disebutkan oleh senimannya dalam tiga surat.

Pengunjung situs dapat berdiri di sudut timur laut Place du Forum, tempat sang seniman memasang kuda-kudanya. Situs ini direnovasi pada tahun 1990 dan 1991 untuk meniru lukisan van Gogh. Dia melihat ke selatan ke arah teras kedai kopi populer dengan pencahayaan artifisial, serta ke dalam kegelapan rue du Palais yang mengarah ke struktur bangunan (di sebelah kiri, tidak digambarkan) dan, di luar struktur ini, menara bekas gereja yang sekarang menjadi Musée Lapidaire.

Ke arah kanan, Van Gogh menunjukkan sebuah toko yang terang benderang dan beberapa cabang pohon yang mengelilingi tempat itu, namun ia menghilangkan sisa-sisa monumen Romawi tepat di samping toko kecil ini.

Lukisan itu kini berada di Muzium Kröller-Müller di Otterlo, Belanda."
        ]);
        \App\Models\Collection::create([
            'id' => 'e8d65233-0f2c-4960-ac0f-ae67182252cd',
            'name' => "The Virgin and Child with Saint Anne",
            'createdBy' => "Leonardo da Vinci",
            'discovery_year' => '1501 - 1519',
            'origin' => "Italia",
            'description' => "Kemungkinan besar lukisan itu dipesan oleh Raja Louis XII dari Perancis setelah kelahiran putrinya pada tahun 1499, namun lukisan itu tidak pernah dikirimkan kepadanya. Leonardo menyelidiki penggabungan tokoh-tokoh ini dengan menggambar Kartun Burlington House (Galeri Nasional). Pada tahun 2008, seorang kurator di Louvre menemukan beberapa sketsa samar yang diyakini dibuat oleh Leonardo di bagian belakang lukisan. Reflektografi inframerah digunakan untuk mengungkap 'gambar kepala kuda berukuran 7 kali 4 inci', yang memiliki kemiripan dengan sketsa kuda yang dibuat Leonardo sebelumnya sebelum menggambar Pertempuran Anghiari. Juga terungkap sketsa kedua berukuran 61⁄2 inci kali 4 inci yang menggambarkan setengah tengkorak. Sketsa ketiga menunjukkan bayi Yesus sedang bermain dengan seekor domba, yang sketsanya mirip dengan yang dilukis di sisi depan.[2] Juru bicara Louvre mengatakan bahwa sketsa itu 'sangat mungkin' dibuat oleh Leonardo dan ini adalah pertama kalinya gambar apa pun ditemukan di 'sisi lain salah satu karyanya'. Gambar-gambar tersebut akan dipelajari lebih lanjut oleh sekelompok ahli saat lukisan tersebut menjalani restorasi."
        ]);
        \App\Models\Collection::create([
            'id' => 'caa3e5df-366b-483d-83da-79af96d99469',
            'name' => "A Sunday Afternoon on the Island of La Grande Jatte",
            'createdBy' => "Georges Seurat",
            'discovery_year' => '1884 – 1886',
            'origin' => "Prancis",
            'description' => "dilukis Suatu Minggu Sore antara Mei 1884 dan Maret 1885, dan dari Oktober 1885 hingga Mei 1886, dengan cermat memusatkan perhatian pada lanskap taman dan berkonsentrasi pada isu-isu warna, cahaya, dan bentuk. Lukisan itu berukuran kira-kira 2 kali 3 meter (6,6 kaki × 9,8 kaki). Seurat menyelesaikan banyak gambar awal dan sketsa cat minyak sebelum menyelesaikan karyanya. Satu lukisan lengkap, ruang belajar di sebelah kanan, berukuran 27 3/4 x 41 inci (70,5 x 104,1 cm) dan dipajang di Museum Metropolitan.

Terinspirasi oleh efek optik dan persepsi yang melekat dalam teori warna Michel Eugène Chevreul, Ogden Rood dan lain-lain, Seurat mengadaptasi penelitian ilmiah ini ke dalam lukisannya.[4] Seurat mengontraskan titik-titik mini atau sapuan kuas kecil warna yang bila disatukan secara optik di mata manusia akan dianggap sebagai satu warna atau rona. Dia percaya bahwa bentuk lukisan ini, yang pada saat itu disebut Divisionisme (istilah yang dia sukai)[5] tetapi sekarang dikenal sebagai Pointillisme, akan membuat warna lebih cemerlang dan kuat daripada sapuan kuas standar. Penggunaan titik-titik dengan ukuran yang hampir seragam terjadi pada tahun kedua karyanya pada lukisan itu, 1885–1886. Agar pengalaman melukisnya semakin hidup, pada bagian pinggir lukisan ia mengelilinginya dengan bingkai titik-titik yang dilukis, yang selanjutnya ia tutupi dengan bingkai kayu berwarna putih bersih, begitulah lukisan itu dipamerkan di Institut Seni. dari Chicago.
Bagian barat laut La Grande Jatte pada tahun 2018

Pulau la Grande Jatte terletak di gerbang kota Paris, terletak di Sungai Seine antara Neuilly dan Levallois-Perret, tidak jauh dari kawasan bisnis La Défense saat ini. Meskipun selama bertahun-tahun merupakan lokasi industri, namun telah menjadi lokasi taman umum dan pembangunan perumahan. Ketika Seurat mulai melukis pada tahun 1884, pulau ini merupakan tempat peristirahatan pedesaan yang jauh dari pusat kota.

Lukisan ini pertama kali dipamerkan pada pameran Impresionis kedelapan (dan terakhir) pada bulan Mei 1886, kemudian pada bulan Agustus 1886, mendominasi Salon kedua Société des Artistes Indépendants, yang mana Seurat menjadi pendirinya pada tahun 1884. Seurat sangat disiplin, selalu serius, dan sangat tertutup—sebagian besar, ia mengarahkan jalannya sendiri. Sebagai seorang pelukis, ia ingin membuat perbedaan dalam sejarah seni rupa dan bersama La Grande Jatte, Seurat segera diakui. "
        ]);
        \App\Models\Collection::create([
            'id' => '2851495c-5056-41b1-b106-5a6e6c4d7b0e',
            'name' => "The Night Watch",
            'createdBy' => "Rembrandt van Rijn",
            'discovery_year' => '1642',
            'origin' => "Belanda",
            'description' => "Kompi Milisi Distrik II di bawah Komando Kapten Frans Banninck Cocq,[1] juga dikenal sebagai Kompi Penembakan Frans Banning Cocq dan Willem van Ruytenburch, namun biasa disebut dengan The Night Watch (Belanda: De Nachtwacht), adalah kompi tahun 1642 lukisan oleh Rembrandt van Rijn. Lukisan ini ada dalam koleksi Museum Amsterdam tetapi ditampilkan secara mencolok di Rijksmuseum sebagai lukisan paling terkenal dalam koleksinya. The Night Watch adalah salah satu lukisan Zaman Keemasan Belanda yang paling terkenal. Lukisan besar Rembrandt (363 kali 437 sentimeter (12 kali 14+1⁄2 kaki)) terkenal karena mengubah potret kelompok perusahaan penjaga sipil menjadi drama menarik yang diberi energi oleh cahaya dan bayangan (tenebrisme). Judulnya keliru; lukisan itu tidak menggambarkan pemandangan malam hari.

Night Watch selesai dibangun pada tahun 1642 pada puncak Zaman Keemasan Belanda. Ini menggambarkan rombongan eponymous yang bergerak keluar, dipimpin oleh Kapten Frans Banninck Cocq (berpakaian hitam, dengan selempang merah) dan letnannya, Willem van Ruytenburch (berpakaian kuning, dengan selempang putih). Di belakang mereka, warna perusahaan dibawa oleh panji, Jan Visscher Cornelissen. Rembrandt memasukkan lambang tradisional arquebusiers pada sosok gadis muda yang membawa ayam mati di ikat pinggangnya, merujuk pada clauweniers (arquebusiers) dan sejenis klakson minum yang digunakan pada jamuan makan kelompok."
        ]);
        \App\Models\Collection::create([
            'id' => '9ff135fe-7723-4d12-84f3-749c2f682c01',
            'name' => "The Mystical Nativity",
            'createdBy' => "Sandro Botticelli",
            'discovery_year' => '1500 - 1501',
            'origin' => "Italia",
            'description' => "Kelahiran Mistik adalah lukisan cat minyak di atas kanvas bertanggal c. 1500–1501 oleh master Renaisans Italia Sandro Botticelli, di Galeri Nasional di London. Ini adalah satu-satunya karyanya yang ditandatangani dan mempunyai ikonografi yang tidak biasa untuk lukisan Kelahiran.

Prasasti Yunani di atas diterjemahkan sebagai: 'Gambar ini, pada akhir tahun 1500, dalam kesulitan Italia, saya, Alessandro, di paruh waktu setelah waktu itu, dilukis, menurut [bab] kesebelas dari Santo Yohanes, dalam celaka kedua dari Kiamat, selama pelepasan iblis selama tiga setengah tahun; kemudian dia akan diikat di [bab] kedua belas dan kita akan melihat [dia dikuburkan] seperti pada gambar ini'.[4] Botticelli percaya dirinya hidup pada Masa Kesengsaraan Besar, mungkin karena pergolakan di Eropa pada saat itu, dan meramalkan milenium Kristus sebagaimana tercantum dalam Kitab Wahyu.

Lukisan ini dikaitkan dengan pengaruh Girolamo Savonarola, yang pengaruhnya muncul di sejumlah lukisan terakhir karya Botticelli, meskipun isi gambarnya mungkin telah ditentukan oleh orang yang menugaskannya. Lukisan itu menggunakan konvensi abad pertengahan yang menunjukkan Perawan Maria dan bayi Yesus lebih besar daripada tokoh lain, dan lingkungannya; hal ini tentu saja dilakukan dengan sengaja untuk memberikan efek, karena karya Botticelli sebelumnya menggunakan perspektif grafis yang benar.

Jangan bingung dengan Kelahiran Mistik atau Adorasi di Hutan oleh Filippo Lippi, yang sekarang berada di Berlin."
        ]);
        \App\Models\Collection::create([
            'id' => 'd94ac532-77bf-41d9-b60e-ef3bd31a0bab',
            'name' => "San Zaccaria Altarpiece",
            'createdBy' => "Giovanni Belini",
            'discovery_year' => '1505',
            'origin' => "Italia",
            'description' => "Kemungkinan besar lukisan itu dipesan oleh Raja Louis XII dari Perancis setelah kelahiran putrinya pada tahun 1499, namun lukisan itu tidak pernah dikirimkan kepadanya. Leonardo menyelidiki penggabungan tokoh-tokoh ini dengan menggambar Kartun Burlington House (Galeri Nasional). Pada tahun 2008, seorang kurator di Louvre menemukan beberapa sketsa samar yang diyakini dibuat oleh Leonardo di bagian belakang lukisan. Reflektografi inframerah digunakan untuk mengungkap 'gambar kepala kuda berukuran 7 kali 4 inci', yang memiliki kemiripan dengan sketsa kuda yang dibuat Leonardo sebelumnya sebelum menggambar Pertempuran Anghiari. Juga terungkap sketsa kedua berukuran 61⁄2 inci kali 4 inci yang menggambarkan setengah tengkorak. Sketsa ketiga menunjukkan bayi Yesus sedang bermain dengan seekor domba, yang sketsanya mirip dengan yang dilukis di sisi depan.[2] Juru bicara Louvre mengatakan bahwa sketsa itu 'sangat mungkin' dibuat oleh Leonardo dan ini adalah pertama kalinya gambar apa pun ditemukan di 'sisi lain salah satu karyanya'. Gambar-gambar tersebut akan dipelajari lebih lanjut oleh sekelompok ahli saat lukisan tersebut menjalani restorasi."
        ]);
        \App\Models\Collection::create([
            'id' => '982ca7a2-c234-4862-a946-c436216fca80',
            'name' => "The Starry Night",
            'createdBy' => "Vincent van Gogh",
            'discovery_year' => '1889',
            'origin' => "Belanda",
            'description' => "Setelah kerusakan pada tanggal 23 Desember 1888 yang mengakibatkan telinga kirinya melukai diri sendiri, Van Gogh secara sukarela memasukkan dirinya ke rumah sakit jiwa Saint-Paul-de-Mausole pada tanggal 8 Mei 1889. ] [11] Bertempat di bekas biara, Saint-Paul-de-Mausole melayani orang kaya dan kurang dari setengahnya ketika Van Gogh tiba,[12] memungkinkan dia untuk menempati tidak hanya kamar tidur di lantai dua tetapi juga kamar di lantai dasar untuk digunakan sebagai studio lukisan.
Selama tahun Van Gogh tinggal di rumah sakit jiwa di Saint-Rémy-de-Provence, hasil lukisan produktif yang ia mulai di Arles terus berlanjut. Selama periode ini, ia menghasilkan beberapa karya paling terkenal dalam karirnya, termasuk Irises dari Mei 1889, sekarang di Museum J. Paul Getty, dan potret diri berwarna biru dari September 1889, di Musée d'Orsay. Malam Berbintang dilukis pada pertengahan Juni sekitar tanggal 18 Juni, tanggal dimana dia menulis surat kepada saudaranya Theo untuk mengatakan bahwa dia memiliki studi baru tentang langit berbintang."
        ]);
        \App\Models\Collection::create([
            'id' => 'bb84b5ae-af06-45a1-a2ef-4b9817e29a9a',
            'name' => "The Shipwreck",
            'createdBy' => "Turner",
            'discovery_year' => '1805',
            'origin' => "Tate",
            'description' => "The Shipwreck is a landscape painting by J. M. W. Turner in the collection of the Tate.[1][2] It was completed around 1805, when it was exhibited in Turner's own gallery. The painting is an important example of the sublime in British art.
It is thought that the picture probably records the then recent sinking of the Earl of Abergavenny, which foundered of Weymouth on 4 February 1805."
        ]);
        \App\Models\Collection::create([
            'id' => '05ed08c9-816b-41a3-851f-261d61bd6de4',
            'name' => "The Storm on the Sea of Galilee",
            'createdBy' => "Rembrandt",
            'discovery_year' => '1633',
            'origin' => "Jerman",
            'description' => "Dikategorikan sebagai karya Rembrandt selama bertahun-tahun, keraguan diungkapkan mengenai asal usulnya pada tahun 1984 oleh komisi kurator Belanda yang khusus dibentuk untuk menyelidiki karya Rembrandt yang keasliannya dipertanyakan. Pernyataan itu mereka sampaikan saat melihat lukisan itu di Berlin Barat.
Pada bulan November 1985, pakar seni yang berbasis di Berlin Jan Kelch mengumumkan bahwa detail penting dalam gaya lukisan itu tidak sesuai dengan gaya karya Rembrandt yang terkenal, dan bahwa lukisan itu mungkin dilukis pada tahun 1650 oleh salah satu murid Rembrandt.
'Ini bukan palsu,' Kelch menegaskan. “Ini tetap merupakan karya luar biasa yang luar biasa."
        ]);
        \App\Models\Collection::create([
            'id' => '864e6462-a1df-43d1-b566-859b24432e14',
            'name' => "The Man with the Golden Helmet",
            'createdBy' => "Rembrandt",
            'discovery_year' => '1650',
            'origin' => "Berlin",
            'description' => "Dikategorikan sebagai karya Rembrandt selama bertahun-tahun, keraguan diungkapkan mengenai asal usulnya pada tahun 1984 oleh komisi kurator Belanda yang khusus dibentuk untuk menyelidiki karya Rembrandt yang keasliannya dipertanyakan. Pernyataan itu mereka sampaikan saat melihat lukisan itu di Berlin Barat.
Pada bulan November 1985, pakar seni yang berbasis di Berlin Jan Kelch mengumumkan bahwa detail penting dalam gaya lukisan itu tidak sesuai dengan gaya karya Rembrandt yang terkenal, dan bahwa lukisan itu mungkin dilukis pada tahun 1650 oleh salah satu murid Rembrandt.
'Ini bukan palsu,' Kelch menegaskan. “Ini tetap merupakan karya luar biasa yang luar biasa."
        ]);
        \App\Models\Collection::create([
            'id' => '1259cda9-6fe5-4642-99b3-6c6480085003',
            'name' => "Justus Lipsius",
            'createdBy' => "Justus Lipsius",
            'discovery_year' => '1547',
            'origin' => "Belanda",
            'description' => "Dikategorikan sebagai karya selama bertahun-tahun, keraguan diungkapkan mengenai asal usulnya pada tahun 1984 oleh komisi kurator Belanda yang khusus dibentuk untuk menyelidiki karya Rembrandt yang keasliannya dipertanyakan. Pernyataan itu mereka sampaikan saat melihat lukisan itu di Berlin Barat.
Pada bulan November 1985, pakar seni yang berbasis di Berlin Jan Kelch mengumumkan bahwa detail penting dalam gaya lukisan itu tidak sesuai dengan gaya karya Rembrandt yang terkenal, dan bahwa lukisan itu mungkin dilukis pada tahun 1650 oleh salah satu murid Rembrandt.
'Ini bukan palsu,' Kelch menegaskan. “Ini tetap merupakan karya luar biasa yang luar biasa."
        ]);
        \App\Models\Collection::create([
            'id' => '33a89882-cb9d-4f04-9344-320e8d605f12',
            'name' => "The Fall of Phaeton",
            'createdBy' => "Peter Paul Rubens",
            'discovery_year' => '1604 - 1605',
            'origin' => "Belanda",
            'description' => "Dikategorikan sebagai karya selama bertahun-tahun, keraguan diungkapkan mengenai asal usulnya pada tahun 1984 oleh komisi kurator Belanda yang khusus dibentuk untuk menyelidiki karya Rembrandt yang keasliannya dipertanyakan. Pernyataan itu mereka sampaikan saat melihat lukisan itu di Berlin Barat.
Pada bulan November 1985, pakar seni yang berbasis di Berlin Jan Kelch mengumumkan bahwa detail penting dalam gaya lukisan itu tidak sesuai dengan gaya karya Rembrandt yang terkenal, dan bahwa lukisan itu mungkin dilukis pada tahun 1650 oleh salah satu murid Rembrandt.
'Ini bukan palsu,' Kelch menegaskan. “Ini tetap merupakan karya luar biasa yang luar biasa."
        ]);
        \App\Models\Collection::create([
            'id' => '29c8e298-2a8c-47c5-9beb-1dfd236ff3d3',
            'name' => "The Honeysuckle Bower",
            'createdBy' => "Peter Paul Rubens",
            'discovery_year' => '1609',
            'origin' => "Belanda",
            'description' => "Dikategorikan sebagai karya selama bertahun-tahun, keraguan diungkapkan mengenai asal usulnya pada tahun 1984 oleh komisi kurator Belanda yang khusus dibentuk untuk menyelidiki karya Rembrandt yang keasliannya dipertanyakan. Pernyataan itu mereka sampaikan saat melihat lukisan itu di Berlin Barat.
Pada bulan November 1985, pakar seni yang berbasis di Berlin Jan Kelch mengumumkan bahwa detail penting dalam gaya lukisan itu tidak sesuai dengan gaya karya Rembrandt yang terkenal, dan bahwa lukisan itu mungkin dilukis pada tahun 1650 oleh salah satu murid Rembrandt.
'Ini bukan palsu,' Kelch menegaskan. “Ini tetap merupakan karya luar biasa yang luar biasa."
        ]);
        \App\Models\Collection::create([
            'id' => '848122b1-9130-4fe9-a52d-e678c77df199',
            'name' => "Anne of Austria",
            'createdBy' => "Peter Paul Rubens",
            'discovery_year' => '1643',
            'origin' => "Belanda",
            'description' => "Dikategorikan sebagai karya selama bertahun-tahun, keraguan diungkapkan mengenai asal usulnya pada tahun 1984 oleh komisi kurator Belanda yang khusus dibentuk untuk menyelidiki karya Rembrandt yang keasliannya dipertanyakan. Pernyataan itu mereka sampaikan saat melihat lukisan itu di Berlin Barat.
Pada bulan November 1985, pakar seni yang berbasis di Berlin Jan Kelch mengumumkan bahwa detail penting dalam gaya lukisan itu tidak sesuai dengan gaya karya Rembrandt yang terkenal, dan bahwa lukisan itu mungkin dilukis pada tahun 1650 oleh salah satu murid Rembrandt.
'Ini bukan palsu,' Kelch menegaskan. “Ini tetap merupakan karya luar biasa yang luar biasa."
        ]);
    }
}
