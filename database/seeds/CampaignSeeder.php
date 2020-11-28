<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campaigns')->insert([
            [
                'id'            => Str::uuid(),
                'title'         => 'Donasi untuk korban covid-19',
                'description'   => 'Ini adalah donasi untuk korban covid-19',
                'image'         => '/img/1.jpg',
                'created_at'    => now(),
                'address'       => 'Depok',
                'required'      => 5000000,
                'collected'     => 1000000
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Donasi untuk korban tsunami',
                'description'   => 'Ini adalah donasi untuk korban tsunami',
                'image'         => '/img/1.jpg',
                'created_at'    => now(),
                'address'       => 'Depok',
                'required'      => 5000000,
                'collected'     => 1000000
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Donasi untuk korban gunung merapi',
                'description'   => 'Ini adalah donasi untuk korban gunung merapi',
                'image'         => '/img/1.jpg',
                'created_at'    => now(),
                'address'       => 'Depok',
                'required'      => 5000000,
                'collected'     => 1000000
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Donasi untuk korban banjir',
                'description'   => 'Ini adalah donasi untuk korban banjir',
                'image'         => '/img/1.jpg',
                'created_at'    => now(),
                'address'       => 'Depok',
                'required'      => 5000000,
                'collected'     => 1000000
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Donasi untuk korban tanah longsor',
                'description'   => 'Ini adalah donasi untuk korban tanah longsor',
                'image'         => '/img/1.jpg',
                'created_at'    => now(),
                'address'       => 'Depok',
                'required'      => 5000000,
                'collected'     => 1000000
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Donasi untuk korban anak yatim',
                'description'   => 'Ini adalah donasi untuk korban anak yatim',
                'image'         => '/img/1.jpg',
                'created_at'    => now(),
                'address'       => 'Depok',
                'required'      => 5000000,
                'collected'     => 1000000
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Donasi untuk dhuafa',
                'description'   => 'Ini adalah donasi untuk dhuafa',
                'image'         => '/img/1.jpg',
                'created_at'    => now(),
                'address'       => 'Depok',
                'required'      => 5000000,
                'collected'     => 1000000
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Donasi untuk korban gunung sinabung',
                'description'   => 'Ini adalah donasi untuk korban gunung sinabung',
                'image'         => '/img/1.jpg',
                'created_at'    => now(),
                'address'       => 'Depok',
                'required'      => 5000000,
                'collected'     => 1000000
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Donasi untuk penderita kanker',
                'description'   => 'Ini adalah donasi untuk penderita kanker',
                'image'         => '/img/1.jpg',
                'created_at'    => now(),
                'address'       => 'Depok',
                'required'      => 5000000,
                'collected'     => 1000000
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Donasi untuk relawan covid-19',
                'description'   => 'Ini adalah donasi untuk relawan covid-19',
                'image'         => '/img/1.jpg',
                'created_at'    => now(),
                'address'       => 'Depok',
                'required'      => 5000000,
                'collected'     => 1000000
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Donasi untuk nakes covid-19',
                'description'   => 'Ini adalah donasi untuk nakes covid-19',
                'image'         => '/img/1.jpg',
                'created_at'    => now(),
                'address'       => 'Depok',
                'required'      => 5000000,
                'collected'     => 1000000
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Donasi untuk panti jompo',
                'description'   => 'Ini adalah donasi untuk panti jompo',
                'image'         => '/img/1.jpg',
                'created_at'    => now(),
                'address'       => 'Depok',
                'required'      => 5000000,
                'collected'     => 1000000
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Donasi untuk warga Palestina',
                'description'   => 'Ini adalah donasi untuk warga Palestina',
                'image'         => '/img/1.jpg',
                'created_at'    => now(),
                'address'       => 'Depok',
                'required'      => 5000000,
                'collected'     => 1000000
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Donasi untuk penderita tumor',
                'description'   => 'Ini adalah donasi untuk penderita tumor',
                'image'         => '/img/1.jpg',
                'created_at'    => now(),
                'address'       => 'Depok',
                'required'      => 5000000,
                'collected'     => 1000000
            ],
            [
                'id'            => Str::uuid(),
                'title'         => 'Donasi untuk pondok pesantren',
                'description'   => 'Ini adalah donasi untuk pondok pesantren',
                'image'         => '/img/1.jpg',
                'created_at'    => now(),
                'address'       => 'Depok',
                'required'      => 5000000,
                'collected'     => 1000000
            ],
        ]);
    }
}
