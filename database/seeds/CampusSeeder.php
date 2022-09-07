<?php

use App\Models\Campus;
use Illuminate\Database\Seeder;

class CampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campuses = [
            [1,'Health Sciences Wing','Sargodha Road, University Town, Faisalabad',1,1],
            [2,'Engineering Wing','Canal Road, Faisal Town, Faisalabad',1,1],
        ];


        foreach ($campuses as $campus) {
            Campus::create(['id' => $campus[0],'name'=>$campus[1],'location'=>$campus[2],'created_by'=>$campus[3],'updated_by'=>$campus[4]]);
        }
    }
}
