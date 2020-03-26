<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;
use App\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //ROLES
        DB::table('roles')->insert([
            'name' => 'Abogado jefe',
            'guard_name' => 'web'
        ]);

        DB::table('roles')->insert([
            'name' => 'Abogado auxiliar',
            'guard_name' => 'web'
        ]);

        DB::table('roles')->insert([
            'name' => 'Secretaria',
            'guard_name' => 'web'
        ]);

        //PERMISOS
        DB::table('permissions')->insert([
            'name' => 'vista',
            'guard_name' => 'web'
        ]);
        
        DB::table('permissions')->insert([
            'name' => 'crear',
            'guard_name' => 'web'
        ]);

        DB::table('permissions')->insert([
            'name' => 'editar',
            'guard_name' => 'web'
        ]);

        DB::table('permissions')->insert([
            'name' => 'eliminar',
            'guard_name' => 'web'
        ]);
        //ASIGNAR LOS PERMISOS A LOS ROLES
        //vista
        $role = Role::find(1);
        $role->givePermissionTo('vista');

        $role = Role::find(2);
        $role->givePermissionTo('vista');

        $role = Role::find(3);
        $role->givePermissionTo('vista');

        //crear
        $role = Role::find(1);
        $role->givePermissionTo('crear');

        $role = Role::find(3);
        $role->givePermissionTo('crear');

        //editar
        $role = Role::find(1);
        $role->givePermissionTo('editar');

        $role = Role::find(3);
        $role->givePermissionTo('editar');

        //eliminar
        $role = Role::find(1);
        $role->givePermissionTo('eliminar');

        //USUARIO JEFE
        DB::table('users')->insert([
            'cedula' => '404040',
            'nombre' => 'Orlando Mosquera',
            'email' => 'OM@gmail.com',
            'telefono' => '404040',
            'password' => Hash::make('proyecto1'),
        ]);

        $user = User::find('404040');
        $user->assignRole('abogado jefe');

    }
}
