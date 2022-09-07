<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            ['dashboard',3],
            ['permission-group-list',1],
            ['permission-group-create',1],
            ['permission-group-edit',1],
            ['permission-group-delete',1],
            ['permission-list',1],
            ['permission-create',1],
            ['permission-edit',1],
            ['permission-delete',1],
            ['role-list',2],
            ['role-create',2],
            ['role-edit',2],
            ['role-delete',2],
            ['user-list',2],
            ['user-create',2],
            ['user-edit',2],
            ['user-delete',2],
            ['session-list',2],
            ['session-create',2],
            ['session-edit',2],
            ['session-delete',2],
            ['campus-list',3],
            ['campus-create',3],
            ['campus-edit',3],
            ['campus-delete',3],
            ['venue-list',3],
            ['venue-create',3],
            ['venue-edit',3],
            ['venue-delete',3],
            ['seat-list',3],
            ['seat-create',3],
            ['seat-edit',3],
            ['seat-delete',3],
            ['medal-list',3],
            ['medal-create',3],
            ['medal-edit',3],
            ['medal-delete',3],
            ['eligible-type-list',3],
            ['eligible-type-create',3],
            ['eligible-type-edit',3],
            ['eligible-type-delete',3],
            ['eligible-list',3],
            ['eligible-create',3],
            ['eligible-edit',3],
            ['eligible-delete',3],
            ['doc-type-list',3],
            ['doc-type-create',3],
            ['doc-type-edit',3],
            ['doc-type-delete',3],
            ['guest-attendance-list',3],
            ['guest-attendance-create',3],
            ['guest-attendance-edit',3],
            ['guest-attendance-delete',3],
            ['guest-doc-type-list',3],
            ['guest-doc-type-create',3],
            ['guest-doc-type-edit',3],
            ['guest-doc-type-delete',3],
            ['user-attendance-list',3],
            ['user-attendance-create',3],
            ['user-attendance-edit',3],
            ['user-attendance-delete',3],
            ['user-doc-type-list',3],
            ['user-doc-type-create',3],
            ['user-doc-type-edit',3],
            ['user-doc-type-delete',3],
            ['user-ledger-list',3],
            ['user-ledger-create',3],
            ['user-ledger-edit',3],
            ['user-ledger-delete',3],
            ['eligible-voucher-list',4],
            ['eligible-voucher-edit',4],
            ['eligible-registered-list',4],
            ['eligible-registered-approve',4],
            ['regalia-list',4],
            ['regalia-create',4],
            ['regalia-edit',4],
            ['regalia-delete',4],
            ['candidate-registration-list',5],
            ['candidate-registration-create',5],
            ['candidate-registration-edit',5],
            ['candidate-registration-delete',5],
            ['guest-list',5],
            ['guest-create',5],
            ['guest-edit',5],
            ['guest-delete',5],
            ['not-paid-eligibles-list',6],
            ['paid-eligibles-list',6],
            ['final-summary-report',6],
            ['register-candidate-report',6],
            ['register-guest-report',6],
            ['attendance-candidate-report',6],
            ['attendance-guest-report',6],
        ];


        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission['0'],'group_id'=>$permission[1]]);
        }
    }
}
