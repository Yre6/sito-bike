<?php

use Illuminate\Database\Seeder;
use App\Models\Environment;

class EnvironmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $environments = ['Pianura', 'Collina', 'Montagna', 'Cicloescursionismo'];

        foreach ($environments as $environment) {
            $_env = new Environment();
            $_env->name = $environment;
            $_env->save();
        }
    }
}
