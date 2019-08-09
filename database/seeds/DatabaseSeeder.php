<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Agama',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Aksesories',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Anak-anak',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Bahasa dan Kamus',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Biografi',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Busana dan Kecantikan',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Ekonomi dan Manajemen',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Fiksi',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Hobi dan Usaha',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Hukum dan Undang-undang',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Inspirasi',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Kesehatan dan Lingkungan',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Komik',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Komputer dan Internet',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Majalah',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Masakan dan Makanan',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Orangtua dan Keluarga',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Perhotelan dan Pariwisata',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Psikologi dan Pengembangan Diri',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Referensi',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Remaja',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Sains dan Teknologi',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Sekolah',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Sastra dan Filsafat',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Sejarah dan Budaya',
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama' => 'Teknik',
        ]);
        DB::table('bukus')->insert([
            'bukuNama' => 'Al-Mughni Ukuran A5',
            'bukuHarga' => 51200,
            'bukuPenerbit' => 'Mulia Quran',
            'bukuPenulis' => 'Mulia Quran',
            'bukuStok' => 30,
            'bukuDeskripsi' => 'Al-Quran Al-Mughni ukuran A4 ada cover coklat dan biru',
        ]);
        DB::table('bukus')->insert([
            'bukuNama' => 'Hadis Tarbawi',
            'bukuHarga' => 30800,
            'bukuPenerbit' => 'Remaja Rosdakarya ',
            'bukuPenulis' => 'Hasbiyallah, H., DR., M.Ag., Dkk.',
            'bukuStok' => 20,
            'bukuDeskripsi' => 'Untuk mencapai keberhasilan dalam dunia pendidikan, tentunya banyak fase dan proses yang harus dilalui lebih dulu oleh para pelaku pendidikan'
        ]);
        DB::table('bukus')->insert([
            'bukuNama' => 'Kumpulan Khotbah Jumat Terbaik Sepanjang Tahun Hijriah - Hard Cover',
            'bukuHarga' => 119400,
            'bukuPenerbit' => 'Senja Publishing',
            'bukuPenulis' => 'Abdul Bakir, S.Ag',
            'bukuStok' => 20,
            'bukuDeskripsi' => 'Khutbah memiliki kedudukan yang agung dalam syariat Islam sehingga sepantasnya seorang khatib melaksanakan tugasnya dengan sebaik-baiknya',
        ]);
        DB::table('bukus')->insert([
            'bukuNama' => 'Bungkus Kertas Kado Motif Snow White & Cinderella',
            'bukuHarga' => 3000,
            'bukuPenerbit' => 'Bukukita.com ',
            'bukuPenulis' => 'Tim Bukukita.com',
            'bukuStok' => 40,
            'bukuDeskripsi' => 'Kertas kado cantik hanya untukmu loh, yuk segera beli !',
        ]);
        DB::table('bukus')->insert([
            'bukuNama' => 'MODUL RESMI SPMB PKN STAN EDISI SUPERLENGKAP',
            'bukuHarga' => 135000,
            'bukuPenerbit' => 'Cmedia',
            'bukuPenulis' => 'TIM GARUDA EDUKA',
            'bukuStok' => 100,
            'bukuDeskripsi' => 'Politeknik Keuangan Negara STAN (PKN STAN) adalah Perguruan Tinggi Vokasi di bawah naungan Kementerian Keuangan RI yang menyelenggarakan Program Studi Diploma di Bidang Keuangan Negara.',
        ]);
        DB::table('bukus')->insert([
            'bukuNama' => 'Cinta x Cinta = Cinta Kuadrat',
            'bukuHarga' => 3000,
            'bukuPenerbit' => 'Indiva Media Kreasi ',
            'bukuPenulis' => 'Sinta Yudisia',
            'bukuStok' => 40,
            'bukuDeskripsi' => 'Tak ada yang pernah mengatakan, menjadi remaja adalah masa-masa yang mudah. (Albert Einstein)
            Puppy love (bukan cinta anjing, ya, tapi cinta monyet) adalah cinta yang terjadi di masa remaja. Entah mengapa dia disebut cinta monyet',
        ]);
        DB::table('bukus')->insert([
            'bukuNama' => 'Akuntansi Biaya (Panduan Lengkap Analisis Biaya dan Perhitungan Harga Pokok Produksi)',
            'bukuHarga' => 59075,
            'bukuPenerbit' => 'Quadrant ',
            'bukuPenulis' => 'Indra Mahardika Putra',
            'bukuStok' => 10,
            'bukuDeskripsi' => 'Dewasa ini, banyak sekali kaum muda yang tertarik untuk "mencemplungkan" diri ke dunia bisnis ',
        ]);
        DB::table('bukus')->insert([
            'bukuNama' => 'Property Cash Machine (Hard Cover)',
            'bukuHarga' => 153000,
            'bukuPenerbit' => 'Buku Aquarius ',
            'bukuPenulis' => 'Joe Hartanto',
            'bukuStok' => 20,
            'bukuDeskripsi' => 'LANGKAH CERDAS MEMBANGUN KEKAYAAN MELALUI PROPERTI

            TERBUKTI kurang dari 3 tahun. Berhasil tingkatkan aset properti 2000%!',
        ]);
        DB::table('users')->insert([
            'name' => 'Meissa',
            'email' => 'meissaeka66@gmail.com',
            'password' =>  Hash::make('123456789'),
            'isAdmin' => 1,
        ]); 
        DB::table('users')->insert([
            'name' => 'Udin',
            'email' => 'udin@gmail.com',
            'password' =>  Hash::make('udin'),
            'isAdmin' => 1,
        ]); 
        DB::table('users')->insert([
            'name' => 'Fachrizal',
            'email' => 'fachrizal@gmail.com',
            'password' =>  Hash::make('987654321'),
            'isAdmin' => 0,
        ]); 
        DB::table('users')->insert([
            'name' => 'Dadang',
            'email' => 'dadang@gmail.com',
            'password' =>  Hash::make('dadang'),
            'isAdmin' => 0,
        ]); 
    }

}
