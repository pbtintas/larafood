<?php

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'name' => 'Plano de acesso - Free',
            'url' => 'businers',
            'price' => 0.00,
            'description' => 'Plano Grátis',
        ]);

        Plan::create([
            'name' => 'Plano de acesso - Prata',
            'url' => 'prata',
            'price' => 199.99,
            'description' => 'Plano Empresarial - Prata',
        ]);

        Plan::create([
            'name' => 'Plano de acesso - Ouro',
            'url' => 'ouro',
            'price' => 499.99,
            'description' => 'Plano Empresarial - Ouro',
        ]);
    }
}
