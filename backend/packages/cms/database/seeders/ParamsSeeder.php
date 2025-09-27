<?php

namespace Op\Database\Seeders;

use Illuminate\Database\Seeder;
use Op\Cms\Enums\ParamsType;
use Op\Cms\Models\Cms\Param;

class ParamsSeeder extends Seeder {
  
  public function run(): void {
    Param::create([
      'name' => 'address',
      'type' => ParamsType::Json->value,
      'val_json' => json_encode([
        'country' => 'Poland',
        'street' => 'Main St',
        'street_number' => '1A',
        'city' => 'Warsaw',
        'postal_code' => '00-000',
        'province' => 'Mazowieckie',
      ]),
    ]);
    Param::create([
      'name' => 'telefon',
      'type' => ParamsType::Integer->value,
      'val_int' => '123456789',
    ]);
    Param::create([
      'name' => 'project_name',
      'type' => ParamsType::String->value,
      'val_string' => 'testtest',
    ]);
    Param::create([
      'name' => 'tax_number',
      'type' => ParamsType::Integer->value,
      'val_int' => '0123456789',
    ]);
    Param::create([
      'name' => 'email',
      'type' => ParamsType::String->value,
      'val_string' => 'test@gmail.com',
    ]);
  }
}