<?php

namespace Database\Seeders;

use App\Models\User;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'Fabio',
                'surname' => 'Valencia',
                'username' => 'fabio',
                'password' => bcrypt('6454'),
                'role_id' => RoleRepository::findByName('admin')->id,
                'category' => 'Admin',
                'free_days' => '0'
            ]
        );

        User::create(
            [
                'name' => 'Natalia',
                'surname' => 'Valencia',
                'username' => 'natalia',
                'password' => bcrypt('1234'),
                'role_id' => RoleRepository::findByName('employee')->id,
                'category' => 'Semi-junior',
                'free_days' => '24'
            ]
        );

        User::create(
            [
                'name' => 'Judit',
                'surname' => 'Santigosa',
                'username' => 'judit',
                'password' => bcrypt('1234'),
                'role_id' => RoleRepository::findByName('employee')->id,
                'category' => 'Senior',
                'free_days' => '24'
            ]
        );

        User::create(
            [
                'name' => 'Marta',
                'surname' => 'Pujols',
                'username' => 'marta',
                'password' => bcrypt('1234'),
                'role_id' => RoleRepository::findByName('visitor')->id,
                'category' => 'Directora',
                'free_days' => '24'
            ]
        );

        User::create(
            [
                'name' => 'Sara',
                'surname' => 'Güera',
                'username' => 'sara',
                'password' => bcrypt('1234'),
                'role_id' => RoleRepository::findByName('employee')->id,
                'category' => 'Semi-senior',
                'free_days' => '24'
            ]
        );

        User::create(
            [
                'name' => 'Rosa',
                'surname' => 'Verdejo',
                'username' => 'rosa',
                'password' => bcrypt('1234'),
                'role_id' => RoleRepository::findByName('employee')->id,
                'category' => 'Semi-senior',
                'free_days' => '24'
            ]
        );

        User::create(
            [
                'name' => 'Xevi',
                'surname' => 'Capdevila',
                'username' => 'xevi',
                'password' => bcrypt('1234'),
                'role_id' => RoleRepository::findByName('employee')->id,
                'category' => 'Semi-senior',
                'free_days' => '24'
            ]
        );

        User::create(
            [
                'name' => 'Katy',
                'surname' => 'Sandino',
                'username' => 'katy',
                'password' => bcrypt('1234'),
                'role_id' => RoleRepository::findByName('employee')->id,
                'category' => 'Junior',
                'free_days' => '24'
            ]
        );

        User::create(
            [
                'name' => 'Jihane',
                'surname' => 'El hanouti',
                'username' => 'jihane',
                'password' => bcrypt('1234'),
                'role_id' => RoleRepository::findByName('employee')->id,
                'category' => 'Semi-senior',
                'free_days' => '24'
            ]
        );

        User::create(
            [
                'name' => 'Francesc',
                'surname' => 'Espinosa',
                'username' => 'espi',
                'password' => bcrypt('1234'),
                'role_id' => RoleRepository::findByName('visitor')->id,
                'category' => 'Gerent',
                'free_days' => '0'
            ]
        );

        User::create(
            [
                'name' => 'Joan',
                'surname' => 'Casanovas',
                'username' => 'joan',
                'password' => bcrypt('1234'),
                'role_id' => RoleRepository::findByName('visitor')->id,
                'category' => 'Gerent',
                'free_days' => '0'
            ]
        );

        User::create(
            [
                'name' => 'Ian',
                'surname' => 'Ferrer',
                'username' => 'ian',
                'password' => bcrypt('1234'),
                'role_id' => RoleRepository::findByName('employee')->id,
                'category' => 'Semi-senior',
                'free_days' => '24'
            ]
        );

    }
}
