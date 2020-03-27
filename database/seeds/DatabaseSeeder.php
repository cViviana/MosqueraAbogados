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

        $role = Role::find(2);
        $role->givePermissionTo('editar');

        $role = Role::find(3);
        $role->givePermissionTo('editar');

        //eliminar
        $role = Role::find(1);
        $role->givePermissionTo('eliminar');

        //USUARIOS
        DB::table('users')->insert([
            'cedula' => '404040',
            'nombre' => 'Orlando Mosquera',
            'email' => 'OM@gmail.com',
            'telefono' => '40404040',
            'password' => Hash::make('proyecto1'),
        ]);

        $user = User::find('404040');
        $user->assignRole('Abogado jefe');


        DB::table('users')->insert([
            'cedula' => '101010',
            'nombre' => 'Juan Solarte',
            'email' => 'juan@gmail.com',
            'telefono' => '10101010',
            'password' => Hash::make('proyecto1'),
        ]);

        $user = User::find('101010');
        $user->assignRole('Abogado auxiliar');

        DB::table('users')->insert([
            'cedula' => '202020',
            'nombre' => 'Maria',
            'email' => 'Maria@gmail.com',
            'telefono' => '20202020',
            'password' => Hash::make('proyecto1'),
        ]);

        $user = User::find('202020');
        $user->assignRole('Secretaria');

        //CLIENTES

        DB::table('cliente')->insert([
            'numero' => '606060',
            'nombre' => 'Viviana',
            'tipo' => 'natural',
            'telefono' => '606060',
            'email' => 'viviana@gmail.com',
        ]);

        DB::table('cliente')->insert([
            'numero' => '707070',
            'nombre' => 'Victor',
            'tipo' => 'juridica',
            'telefono' => '70707070',
            'email' => 'victor@gmail.com',
            'roll' => 'contraparte',
        ]);

        DB::table('cliente')->insert([
            'numero' => '808080',
            'nombre' => 'Angelica',
            'tipo' => 'natural',
            'telefono' => '80808080',
            'email' => 'angelica@gmail.com',
            'roll' => 'contraparte'
        ]);

        //UBICACIÓN
        DB::table('ubicacion_fisica')->insert([
            'numArchivero' => '10',
            'numGaveta' => '15'
        ]);

        DB::table('ubicacion_fisica')->insert([
            'numArchivero' => '20',
            'numGaveta' => '20'
        ]);

        //TIPO DOCUMENTO
        DB::table('tipo_documento')->insert([
            'nombre' => 'familia'
        ]);

        DB::table('tipo_documento')->insert([
            'nombre' => 'legal'
        ]);

        //CASO
        
        DB::table('caso')->insert([
            'radicado' => '1111',
            'estado' => 'activo',
            'fecha_inicio' => '2020-04-06',
            'descripcion' => 'prueba1',
            'fecha_fin' => '2020-04-15',
            'cliente' => '606060',
            'contraparte' => '707070'
        ]);
        
        //DOCUMENTO
    }
}
