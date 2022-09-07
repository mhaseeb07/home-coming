<?php

use App\Models\ConvocationConfig;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sessions = [
            [1,'pass_print_guest_seat_no','1','Pass Print Guest Seat No','1'],
            [2,'pass_print_eligible_seat_no','1','Pass Print Eligible Seat No','1'],
            [3,'max_guest','1','Max Guest','1'],
            [4,'max_free_guest','1','Max Free Guest','1'],
            [5,'max_positions','3','Max Positions','1'],
            [6,'eligible_voucher_amount','2500','Eligible Voucher Amount','1'],
            [7,'guest_voucher_amount','0','Guest Voucher Amount','1'],
        ];


        foreach ($sessions as $session) {
            ConvocationConfig::create(['id' => $session[0],'key'=>$session[1],'value'=>$session[2],'description'=>$session[3],'session_id'=>$session[4]]);
        }
    }
}
