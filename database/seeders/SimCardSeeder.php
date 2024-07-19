<?php

namespace Database\Seeders;

use App\Models\SimCard;
use Illuminate\Database\Seeder;

class SimCardSeeder extends Seeder
{
    public function run(): void
    {
        SimCard::factory(4) // This is just because of Dissto's gifted subs
            ->create();
    }
}
