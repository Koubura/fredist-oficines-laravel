<?php

namespace Database\Seeders;

use App\Models\User;
use App\Repositories\RoleRepository;
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
        $fabio = User::create(
            [
                'name' => 'Fabio',
                'surname' => 'Valencia',
                'username' => 'fabio',
                'password' => '6454',
                'category' => 'Admin',
                'free_days' => '0'
            ]
        );
        $fabio->role()->attach(RoleRepository::findByName('admin')->id);

        $natalia = User::create(
            [
                'name' => 'Natalia',
                'surname' => 'Valencia',
                'username' => 'natalia',
                'password' => '1234',
                'category' => 'Semi-junior',
                'free_days' => '24'
            ]
        );
        $natalia->role()->attach(RoleRepository::findByName('employee')->id);

        $judit = User::create(
            [
                'name' => 'Judit',
                'surname' => 'Santigosa',
                'username' => 'judit',
                'password' => '1234',
                'category' => 'Senior',
                'free_days' => '24'
            ]
        );
        $judit->role()->attach(RoleRepository::findByName('employee')->id);

        $marta = User::create(
            [
                'name' => 'Marta',
                'surname' => 'Pujols',
                'username' => 'marta',
                'password' => '1234',
                'category' => 'Directora',
                'free_days' => '24'
            ]
        );
        $marta->role()->attach(RoleRepository::findByName('visitor')->id);

        $sara = User::create(
            [
                'name' => 'Sara',
                'surname' => 'Güera',
                'username' => 'sara',
                'password' => '1234',
                'category' => 'Semi-senior',
                'free_days' => '24'
            ]
        );
        $sara->role()->attach(RoleRepository::findByName('employee')->id);

        $rosa = User::create(
            [
                'name' => 'Rosa',
                'surname' => 'Verdejo',
                'username' => 'rosa',
                'password' => '1234',
                'category' => 'Semi-senior',
                'free_days' => '24'
            ]
        );
        $rosa->role()->attach(RoleRepository::findByName('employee')->id);

        $xevi = User::create(
            [
                'name' => 'Xevi',
                'surname' => 'Capdevila',
                'username' => 'xevi',
                'password' => '1234',
                'category' => 'Semi-senior',
                'free_days' => '24'
            ]
        );
        $xevi->role()->attach(RoleRepository::findByName('employee')->id);

        $katy = User::create(
            [
                'name' => 'Katy',
                'surname' => 'Sandino',
                'username' => 'katy',
                'password' => '1234',
                'category' => 'Junior',
                'free_days' => '24'
            ]
        );
        $katy->role()->attach(RoleRepository::findByName('employee')->id);

        $jihane = User::create(
            [
                'name' => 'Jihane',
                'surname' => 'El hanouti',
                'username' => 'jihane',
                'password' => '1234',
                'category' => 'Semi-senior',
                'free_days' => '24'
            ]
        );
        $jihane->role()->attach(RoleRepository::findByName('employee')->id);

        $espi = User::create(
            [
                'name' => 'Francesc',
                'surname' => 'Espinosa',
                'username' => 'espi',
                'password' => '1234',
                'category' => 'Gerent',
                'free_days' => '0'
            ]
        );
        $espi->role()->attach(RoleRepository::findByName('visitor')->id);

        $joan = User::create(
            [
                'name' => 'Joan',
                'surname' => 'Casanovas',
                'username' => 'joan',
                'password' => '1234',
                'category' => 'Gerent',
                'free_days' => '0'
            ]
        );
        $joan->role()->attach(RoleRepository::findByName('visitor')->id);

        $ian = User::create(
            [
                'name' => 'Ian',
                'surname' => 'Ferrer',
                'username' => 'ian',
                'password' => '1234',
                'category' => 'Semi-senior',
                'free_days' => '24'
            ]
        );
        $ian->role()->attach(RoleRepository::findByName('employee')->id);

    }
}
