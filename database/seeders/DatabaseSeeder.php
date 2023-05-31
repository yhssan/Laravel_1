<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Destinasi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Destinasi::create([
            'nama'=> 'Tokyo',
            'foto'=> 'img\tokyo.jpg',
            'alamat'=> 'Negara Jepang, Prefektur Tokyo.',
            'maps'=> '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62622656.5083!2d58.63917877329755!3d16.667692196304575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x605d1b87f02e57e7%3A0x2e01618b22571b89!2sTokyo%2C%20Japan!5e0!3m2!1sen!2sid!4v1685431166443!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'wiki'=> 'https://id.wikipedia.org/wiki/Tokyo',
            'deskripsi'=> 'Tokyo (東京, Tōkyō, bahasa Jepang: [toːkʲoː] ( simak); lit. "Ibu kota Timur"), nama resminya Metropolis Tokyo (東京都 Tōkyō-to), adalah salah satu dari 47 prefektur Jepang yang menjadi ibu kota Jepang sejak 1869.[6][7] Hingga 2018, Tokyo Raya menempati peringkat pertama sebagai wilayah metropolitan terpadat di dunia.[8] Tokyo menjadi tempat bertakhtanya Kaisar Jepang, pemerintah Jepang, dan Parlemen Jepang. Tokyo mencakup sebagian dari wilayah Kanto, Kepulauan Izu, dan Kepulauan Ogasawara.[9] Tokyo dulunya bernama Edo ketika Shōgun Tokugawa Ieyasu menjadikan kota ini sebagai markas besarnya pada 1603. Kota ini berganti nama menjadi Tokyo setelah Kaisar Meiji menjadikannya sebagai ibu kota dan memindahkan takhtanya dari Kyoto pada tahun 1868. Metropolis Tokyo dibentuk pada tahun 1943 dari penggabungan bekas Prefektur Tokyo (東京府, Tōkyō-fu) dan Kota Tokyo (東京市, Tōkyō-shi). Tokyo sering kali disebut sebagai sebuah kota, padahal secara resmi Tokyo merupakan sebuah "prefektur metropolitan" yang sangat berbeda dari kota biasa dan menggabungkan unsur-unsur kota dan prefektur.'

        ]);
        // $d = new Destinasi();
        // $d->nama=''
    }
}
