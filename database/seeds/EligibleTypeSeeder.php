<?php

use App\Models\EligibleType;
use Illuminate\Database\Seeder;

class EligibleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [1,'TUF',1,1],
            [2,'UMDC',1,1],
        ];
        foreach ($types as $type) {
            EligibleType::create(['id' => $type[0],'title'=>$type[1],'created_by'=>$type[2],'updated_by'=>$type[3]]);
        }
    }
}
