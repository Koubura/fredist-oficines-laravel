<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create(
            [
                'name' => 'Assignar rutes',
            ]
        );

        Task::create(
            [
                'name' => 'Validar rutes',
            ]
        );

        Task::create(
            [
                'name' => 'Escanejar albarans',
            ]
        );

    }
}
