<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Regional;
use App\Models\Departamento;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RegionalSeeder::class);
        $this->call(DepartamentoSeeder::class);

        User::create([
            'name' => 'Carolina Galvis Arango',
            'email' => 'cga@admin.com',
            'password' => bcrypt('123456')
        ]);

        Post::factory()->count(24)->create();
    }

}