<?php

use Illuminate\Database\Seeder;
use App\Models\Valley;
use Illuminate\Support\Str;

class ValleySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $valleys = ['Val Brembana', 'Val Seriana', 'Val di Scalve', 'Val Serina', 'Val Gandino', 'Val Calepio', 'Bergamo','Val Imagna', 'Isola e Bassa Bergamasca'];

        foreach ($valleys as $valley){
            $_valley = new Valley();
            $_valley->name = $valley;
            $_valley->slug = Str::slug($_valley->name, '-');
            $_valley->save();
        
    }
}
}