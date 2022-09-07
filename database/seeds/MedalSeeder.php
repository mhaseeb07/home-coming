<?php

use App\Models\Medal;
use Illuminate\Database\Seeder;

class MedalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [1,'Gold','Gold Medal',1,1],
            [2,'Sliver','Sliver Medal',1,1],
            [3,'Bronze','Bronze Medal',1,1],
        ];
        foreach ($types as $type) {
            Medal::create(['id' => $type[0],'title'=>$type[1],'description'=>$type[2],'created_by'=>$type[3],'updated_by'=>$type[4]]);
        }
    }
}
