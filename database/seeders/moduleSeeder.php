<?php

namespace Database\Seeders;

use App\Models\Module;
use Database\Factories\moduleFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class moduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules = [
            [
                'name' => 'телефоны',
                'icon' => 'fa-phone',
                'link' => 'phone_book',
                'function' => '',
                'type_handler' => 0,
                'controller_name' => 'phoneBook',
                'sort_field' => 1,
                'organization_id' => 1
            ],
            [
                'name' => 'Штатная структура',
                'icon' => 'fa-users',
                'link' => 'position',
                'function' => '',
                'type_handler' => 0,
                'controller_name' => 'position',
                'sort_field' => 2,
                'organization_id' => 1
            ]
        ];
        foreach ($modules as $module)
            Module::create($module);
    }
}
