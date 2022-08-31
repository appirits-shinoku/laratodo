<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class FrontAuthUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'name' => 'テストユーザ',
            'email' => 'hoge@hoge',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => Hash::make('hoge'),
        ]);
    }
}
