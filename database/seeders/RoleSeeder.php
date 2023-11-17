<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Worker']);
        $role3 = Role::create(['name' => 'Rep']);
        $role4 = Role::create(['name' => 'Reservation']);
        $role5 = Role::create(['name' => 'Cashier']);

        Permission::create(['name' => 'admin.agencies.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.agencies.create'])->assignRole($role1);;
        Permission::create(['name' => 'admin.agencies.edit'])->assignRole($role1);

        Permission::create(['name' => 'admin.hotels.index'])->syncRoles([$role1,$role2]);;
        Permission::create(['name' => 'admin.hotels.create'])->assignRole($role1);;
        Permission::create(['name' => 'admin.hotels.edit'])->assignRole($role1);

        Permission::create(['name' => 'admin.type-tours.index'])->syncRoles([$role1,$role2]);;
        Permission::create(['name' => 'admin.type-tours.create'])->assignRole($role1);;
        Permission::create(['name' => 'admin.type-tours.edit'])->assignRole($role1);

        Permission::create(['name' => 'admin.tours.index'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'admin.tours.show'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'admin.tours.create'])->assignRole($role1);;
        Permission::create(['name' => 'admin.tours.edit'])->assignRole($role1);

        Permission::create(['name' => 'admin.users.index'])->syncRoles([$role1,$role2]);;
        Permission::create(['name' => 'admin.users.create'])->assignRole($role1);;
        Permission::create(['name' => 'admin.users.edit'])->assignRole($role1);

        Permission::create(['name' => 'admin.paxes.index'])->syncRoles([$role1,$role4,$role5]);;
        Permission::create(['name' => 'admin.paxes.create'])->assignRole($role1,$role4);;
        //Permission::create(['name' => 'admin.paxes.edit'])->assignRole($role1);
    }
}
