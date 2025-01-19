<?php

namespace Database\Seeders;

use App\Models\Memo;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //MemoSeeder呼び出し//configフォルダのapp.phpを見る APP_ENV 公開するときはプロダクションに変更する｡このようにすると覚えてしまう｡
        if(config("app.env") == "local"){
            $this->call(MemoSeeder::class);
        }
    }
}
