<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            'id_setting' => 1,
            'nama_perusahaan' => 'Karapan',
            'alamat' => 'Jl. Pancursari Rt 3 RW 1 Desa Benculuk Kecamatan Cluring',
            'telepon' => '085155187441',
            'tipe_nota' => 1, // kecil
            'diskon' => 0,
            'path_logo' => '/img/logo.png',
            'path_kartu_member' => '/img/member.png',
        ]);
    }
}
