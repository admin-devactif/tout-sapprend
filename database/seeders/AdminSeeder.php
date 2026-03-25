<?php

namespace Database\Seeders;

use App\Models\User;
use Artisan;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Artisan::call('shield:generate --all --panel=app --no-interaction');

        $admin = User::updateOrCreate([
            'name' => 'Admin',
            'email' => 'admin@devactif.ca',
            'password' => 'password',
        ]);

        $admin->assignRole(config('devactif.admin_role'));
    }
}
