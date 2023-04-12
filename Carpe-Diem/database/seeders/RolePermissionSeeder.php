<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Create a new role
        $admin = Role::create(['name' => 'admin']);
        $organizer = Role::create(['name' => 'organizer']);
        $user = Role::create(['name' => 'user']);

        // Create a new permission
        $createEvent = Permission::create(['name' => 'create event']);
        $viewEvent = Permission::create(['name' => 'view event']);
        $deleteEvent = Permission::create(['name' => 'delete event']);

        // Assign permissions to roles
        $admin->givePermissionTo($createEvent, $viewEvent, $deleteEvent);
        $organizer->givePermissionTo($createEvent, $viewEvent);
        $user->givePermissionTo($viewEvent);
    }
}
