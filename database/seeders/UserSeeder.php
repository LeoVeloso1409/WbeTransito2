<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nome' => 'LEONARDO VELOSO NEVES',
            'matricula' => '1445147',
            'email' => 'LEONARDO@EMAIL.COM',
            'orgao' => 'PMMG',
            'unidade' => '55 BPM',
            'funcao' => "ADMIN",
            'senha' => Hash::make('123456')
        ]);
}
