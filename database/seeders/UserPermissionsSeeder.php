<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'user_id' => 1,
                'permission' => 'post_create'
            ],
            [
                'user_id' => 1,
                'permission' => 'post_update'
            ],
            [
                'user_id' => 1,
                'permission' => 'post_delete'
            ],
            [
                'user_id' => 2,
                'permission' => 'post_delete'
            ],

            [
                'user_id' => 3,
                'permission' => 'post_update'
            ],
        ];

        foreach ($permissions as $permission) {
            $data = [
                'user_id' => $permission['user_id'],
                'permission' => $permission['permission'],
                'created_at' => Carbon::now('America/Sao_Paulo'),
                'updated_at' => Carbon::now('America/Sao_Paulo'),
            ];

            DB::table('users_permissions')->insert($data);
        }
    }
}
