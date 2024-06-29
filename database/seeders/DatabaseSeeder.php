<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('tb_alternatif')->insert([
            [
                'id_alternatif' => 'A01',
                'nama_alternatif' => 'keluarga 1',
            ],
            [
                'id_alternatif' => 'A02',
                'nama_alternatif' => 'keluarga 2',
            ],
            [
                'id_alternatif' => 'A03',
                'nama_alternatif' => 'keluarga 3',
            ],
            [
                'id_alternatif' => 'A04',
                'nama_alternatif' => 'keluarga 4',
            ],
            [
                'id_alternatif' => 'A05',
                'nama_alternatif' => 'keluarga 5',
            ],
        ]);

        DB::table('tb_kriteria')->insert([
            [
                'id_kriteria' => 'C01',
                'nama_kriteria' => 'penghasilan',
                'atribut' => 'Cost',
                'bobot' => 1,
            ],
            [
                'id_kriteria' => 'C02',
                'nama_kriteria' => 'luas rumah',
                'atribut' => 'Cost',
                'bobot' => 2,
            ],
            [
                'id_kriteria' => 'C03',
                'nama_kriteria' => 'anggota keluarga',
                'atribut' => 'Benefit',
                'bobot' => 3,
            ],
            [
                'id_kriteria' => 'C04',
                'nama_kriteria' => 'kondisi rumah',
                'atribut' => 'Cost',
                'bobot' => 4,
            ],
            [
                'id_kriteria' => 'C05',
                'nama_kriteria' => 'luas tanah',
                'atribut' => 'Cost',
                'bobot' => 4,
            ],
        ]);

        DB::statement("INSERT INTO tb_nilai (id_alternatif, id_kriteria, nilai) SELECT id_alternatif, id_kriteria, ROUND(RAND() * 5) FROM tb_alternatif, tb_kriteria");
    }
}