<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefit;
class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Tenda'
            ],
            [
                'camp_id' => 1,
                'name' => 'Makan 2x'
            ],
            [
                'camp_id' => 1,
                'name' => 'Dokumentasi'
            ],
            [
                'camp_id' => 1,
                'name' => 'Penjemputan'
            ],
            [
                'camp_id' => 1,
                'name' => 'P3K'
            ],
            [
                'camp_id' => 1,
                'name' => 'Doorprize'
            ],
            [
                'camp_id' => 1,
                'name' => 'Jodoh Bila Beruntung'
            ],
            [
                'camp_id' => 1,
                'name' => 'Guide'
            ],
            [
                'camp_id' => 1,
                'name' => 'Music'
            ],
            [
                'camp_id' => 2,
                'name' => 'Jeep Bromo'
            ],
            [
                'camp_id' => 2,
                'name' => 'Makan 2x'
            ],
            [
                'camp_id' => 2,
                'name' => 'Dokumentasi'
            ],

        ];

        CampBenefit::insert($campBenefits);
    }
}
