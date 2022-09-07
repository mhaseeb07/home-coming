<?php

use App\Models\ConvocationSession;
use Illuminate\Database\Seeder;

class ConvocationSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sessions = [
            [1,'2016-2020',1,'2016 to 2020','2021-09-30',1,1],
        ];


        foreach ($sessions as $session) {
            ConvocationSession::create(['id' => $session[0],'title'=>$session[1],'status'=>$session[2],'description'=>$session[3],'session_year'=>$session[4],'created_by'=>$session[5],'updated_by'=>$session[6]]);
        }
    }
}
