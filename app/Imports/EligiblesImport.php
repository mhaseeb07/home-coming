<?php

namespace App\Imports;

use App\Models\Eligibles;
use Maatwebsite\Excel\Row;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Throwable;

class EligiblesImport implements OnEachRow,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function startRow(): int
    {
        return 2;
    }
    public function onRow(Row $row)
    {
        $row = $row->toArray();
        try {
            $eligible = Eligibles::updateOrCreate(
                ['reg_no'   => $row['0'], 'cnic'   => $row['2']],
                [
                    'eligible_type_id'      => session()->get('eligible_type_id'),
                    'status'      => session()->get('status'),
                    'session_id'      => session()->get('session_id'),
                    'created_by'      => session()->get('created_by'),
                    'updated_by'      => session()->get('updated_by'),
                    'reg_no'   => $row['0'],
                    'name'   => $row['1'],
                    'cnic'   => $row['2'],
                    'email'   => $row['3'],
                    'degree_name'   => $row['4'],
                    'passout_session'   => $row['5'],
                    'passout_year'   => $row['6'],
                    'student_id_erp'   => $row['7'],
                    'campus_id'   => $row['8'],
                    'father_name'   => $row['9'],
                    'father_cnic'   => $row['10'],
                    'address'   => $row['11'],
                    'amount'   => $row['12'],
                ]);
        } catch (Throwable $e) {
            $eType= $e->errorInfo[2];
            $code = $e->getCode();
            $error = '['.$code.'] '.$eType;
            return redirect()->route('eligibles.index')
                ->with('warning',$error);
        }
    }
}
