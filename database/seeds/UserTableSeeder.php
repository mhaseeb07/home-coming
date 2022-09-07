<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Web Team',
            'email' => 'web@tuf.edu.pk',
            'role_status' => '1',
            'email_verified_at' => now(),
            'password' => bcrypt('XE1L4wKHHXdpul4P')
        ]);

        $role = Role::create(['name' => 'Developer']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
