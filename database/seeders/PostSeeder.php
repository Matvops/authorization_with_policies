<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['admin', 'user', 'visitor'];
        $posts = [];

        $user_id = 1;
        foreach ($roles as  $role) {
            $posts[] = [
                'user_id' => $user_id++,
                'title' => "Title criado por user $role",
                'content' => "Conteúdo criado po $role",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];
        }

        DB::table('posts')->insert($posts);
    }
}
