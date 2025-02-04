<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Value::create([
            "attribute_id" => 1,
            "name" => [
                "uz" => "Qizil uz",
                "ru" => "Qizil ru"
            ],
        ]);
        Value::create([
            "attribute_id" => 1,
            "name" => [
                "uz" => "Qora uz",
                "ru" => "Qora ru"
            ],
        ]);
        Value::create([
            "attribute_id" => 1,
            "name" => [
                "uz" => "Jigarrang uz",
                "ru" => "Jigarrang ru"
            ],
        ]);

        Value::create([
            "attribute_id" => 2,
            "name" => [
                "uz" => "MDF uz",
                "ru" => "MDF ru"
            ],
        ]);
        Value::create([
            "attribute_id" => 2,
            "name" => [
                "uz" => "LDSP uz",
                "ru" => "LDSP ru"
            ],
        ]);
    }
}
