<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'id'            => Str::uuid(),
                'title'         => 'Membantu sesama itu baik',
                'description'   => 'Ini adalah motivasi untuk membantu sesama',
                'image'         => '/img/2.jpg',
                'created_at'    => now(),
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Jangan ragu untuk membantu',
                'description'   => 'Ini adalah motivasi untuk membantu sesama',
                'image'         => '/img/2.jpg',
                'created_at'    => now(),
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Pahala bagi orang yang membantu sesama',
                'description'   => 'Ini adalah motivasi untuk membantu sesama',
                'image'         => '/img/2.jpg',
                'created_at'    => now(),
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Saudara kita butuh bantuan',
                'description'   => 'Ini adalah motivasi untuk membantu sesama',
                'image'         => '/img/2.jpg',
                'created_at'    => now(),
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Membantu sesama tidak akan membuat kita miskin',
                'description'   => 'Ini adalah motivasi untuk membantu sesama',
                'image'         => '/img/2.jpg',
                'created_at'    => now(),
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Kirimkan bantuan anda sekarang',
                'description'   => 'Ini adalah motivasi untuk membantu sesama',
                'image'         => '/img/2.jpg',
                'created_at'    => now(),
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Kirimkan donasi anda sekarang',
                'description'   => 'Ini adalah motivasi untuk membantu sesama',
                'image'         => '/img/2.jpg',
                'created_at'    => now(),
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Kirimkan doa anda sekarang',
                'description'   => 'Ini adalah motivasi untuk membantu sesama',
                'image'         => '/img/2.jpg',
                'created_at'    => now(),
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Jadilah relawan untuk membantu sesama',
                'description'   => 'Ini adalah motivasi untuk membantu sesama',
                'image'         => '/img/2.jpg',
                'created_at'    => now(),
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Saudara kita menunggu uluran tangan anda',
                'description'   => 'Ini adalah motivasi untuk membantu sesama',
                'image'         => '/img/2.jpg',
                'created_at'    => now(),
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Membantu anak yatim adalah perbuatan yang mulia',
                'description'   => 'Ini adalah motivasi untuk membantu sesama',
                'image'         => '/img/2.jpg',
                'created_at'    => now(),
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Bantulah orang tua kita yang berada di panti jompo',
                'description'   => 'Ini adalah motivasi untuk membantu sesama',
                'image'         => '/img/2.jpg',
                'created_at'    => now(),
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Semangat membantu akan membawa keberkahan',
                'description'   => 'Ini adalah motivasi untuk membantu sesama',
                'image'         => '/img/2.jpg',
                'created_at'    => now(),
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Ikhlas dalam membantu akan dibayar dengan pahala',
                'description'   => 'Ini adalah motivasi untuk membantu sesama',
                'image'         => '/img/2.jpg',
                'created_at'    => now(),
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Banyak saudara kita yang membutuhkan',
                'description'   => 'Ini adalah motivasi untuk membantu sesama',
                'image'         => '/img/2.jpg',
                'created_at'    => now(),
            ]
        ]);
    }
}
