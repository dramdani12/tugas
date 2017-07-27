<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $S=[
        ['nama'=>'nadiyah','tanggal_lahir'=>'2000-12-04','tempat'=>'sayuran'],
        ['nama'=>'dani','tanggal_lahir'=>'1998-12-25','tempat'=>'citepus'],
        ['nama'=>'nisa','tanggal_lahir'=>'2000-02-28','tempat'=>'hiumacan']
        ];
        DB::table('Siswa')->insert($S);
    }
}
