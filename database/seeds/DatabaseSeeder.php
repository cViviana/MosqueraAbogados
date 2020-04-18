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
            'cedula' => '34617667',
            'nombre' => 'Orlando De Jesus Mosquera Solarte',
            'email' => 'omosquera@unicauca.edu.co',
            'telefono' => '3122894603',
            'password' => Hash::make('proyecto1'),
        ]);

        $user = User::find('34617667');
        $user->assignRole('Abogado jefe');


        DB::table('users')->insert([
            'cedula' => '1061808363',
            'nombre' => 'Juan Camilo Solarte Orozco',
            'email' => 'juansolarteo98@gmail.com',
            'telefono' => '3125929647',
            'password' => Hash::make('proyecto1'),
        ]);

        $user = User::find('1061808363');
        $user->assignRole('Abogado auxiliar');

        DB::table('users')->insert([
            'cedula' => '1061683462',
            'nombre' => 'Maria Paula Aristizabal',
            'email' => 'mparistizabal@unicauca.edu.co',
            'telefono' => '3159827563',
            'password' => Hash::make('proyecto1'),
        ]);

        $user = User::find('1061683462');
        $user->assignRole('Secretaria');

        //CLIENTES

        DB::table('cliente')->insert([
            'numero' => '1061543413',
            'nombre' => 'Leidy Viviana Cortes',
            'tipo' => 'natural',
            'telefono' => '3209426518',
            'email' => 'leidy@gmail.com',
            'roll' => 'cliente',
        ]);

        DB::table('cliente')->insert([
            'numero' => '1061689213',
            'nombre' => 'Jhon Melo',
            'tipo' => 'natural',
            'telefono' => '317389449',
            'email' => 'JhonM@gmail.com',
            'roll' => 'cliente',
        ]);

        DB::table('cliente')->insert([
            'numero' => '10617820124',
            'nombre' => 'Victor Rendon',
            'tipo' => 'juridica',
            'telefono' => '8203018',
            'email' => 'victor@gmail.com',
            'roll' => 'contraparte',
        ]);

        DB::table('cliente')->insert([
            'numero' => '1061739120',
            'nombre' => 'Angelica Pinto',
            'tipo' => 'natural',
            'telefono' => '3019329123',
            'email' => 'angelica@gmail.com',
            'roll' => 'contraparte'
        ]);

        //UBICACIÓN
        DB::table('ubicacion_fisica')->insert([
            'numArchivero' => '1',
            'numGaveta' => '1'
        ]);

        DB::table('ubicacion_fisica')->insert([
            'numArchivero' => '1',
            'numGaveta' => '2'
        ]);

        DB::table('ubicacion_fisica')->insert([
            'numArchivero' => '11',
            'numGaveta' => '15'
        ]);

        DB::table('ubicacion_fisica')->insert([
            'numArchivero' => '20',
            'numGaveta' => '26'
        ]);

        DB::table('ubicacion_fisica')->insert([
            'numArchivero' => '3',
            'numGaveta' => '8'
        ]);

        DB::table('ubicacion_fisica')->insert([
            'numArchivero' => '3',
            'numGaveta' => '7'
        ]);

        //TIPO DOCUMENTO
        DB::table('tipo_documento')->insert([
            'nombre' => 'Sociedades civiles'
        ]);

        DB::table('tipo_documento')->insert([
            'nombre' => 'Sociedades mercantiles'
        ]);

        DB::table('tipo_documento')->insert([
            'nombre' => 'Acta de constitución'
        ]);

        DB::table('tipo_documento')->insert([
            'nombre' => 'Legalidad'
        ]);

        DB::table('tipo_documento')->insert([
            'nombre' => 'Firmas personales'
        ]);
        //CASO

        DB::table('caso')->insert([
            'radicado' => '98124',
            'estado' => 'activo',
            'fecha_inicio' => '2020-04-06',
            'descripcion' => 'Perdida de bienes',
            'cliente' => '1061543413',
            'contraparte' => '10617820124'
        ]);

        DB::table('caso')->insert([
            'radicado' => '16124',
            'estado' => 'activo',
            'fecha_inicio' => '2020-03-31',
            'descripcion' => 'Denuncia de acoso sexual',
            'fecha_fin' => '2020-04-15',
            'cliente' => '1061689213',
            'contraparte' => '1061739120'
        ]);

        //DOCUMENTO
    }
}
