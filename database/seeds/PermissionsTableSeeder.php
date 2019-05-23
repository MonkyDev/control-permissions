<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
/*	Proveedor   \paquete\carpeta\Entidad*/	

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	//USERS
        Permission::create([
        	'name'			=>	'Navegar usuarios',
        	'slug'			=>	'users.index',
        	'description'	=>	'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
        	'name'			=>	'Ver detalle de usuario',
        	'slug'			=>	'users.show',
        	'description'	=>	'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
        	'name'			=>	'Ediciòn de usuarios',
        	'slug'			=>	'users.edit',
        	'description'	=>	'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
        	'name'			=>	'Eliminar usuario',
        	'slug'			=>	'users.destroy',
        	'description'	=>	'Eliminar cualquier usuario del sistema',
        ]);

        //ROLES
        Permission::create([
        	'name'			=>	'Navegar roles',
        	'slug'			=>	'roles.index',
        	'description'	=>	'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
        	'name'			=>	'Ver detalle de rol',
        	'slug'			=>	'roles.show',
        	'description'	=>	'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
        	'name'			=>	'Creaciòn de roles',
        	'slug'			=>	'roles.create',
        	'description'	=>	'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
        	'name'			=>	'Ediciòn de roles',
        	'slug'			=>	'roles.edit',
        	'description'	=>	'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
        	'name'			=>	'Eliminar rol',
        	'slug'			=>	'roles.destroy',
        	'description'	=>	'Eliminar cualquier rol del sistema',
        ]);

         //VIDEOS
        Permission::create([
        	'name'			=>	'Navegar videos',
        	'slug'			=>	'videos.index',
        	'description'	=>	'Lista y navega todos los videos del sistema',
        ]);
        Permission::create([
        	'name'			=>	'Ver detalle de video',
        	'slug'			=>	'videos.show',
        	'description'	=>	'Ver en detalle cada video del sistema',
        ]);
        Permission::create([
        	'name'			=>	'Creaciòn de videos',
        	'slug'			=>	'videos.create',
        	'description'	=>	'Editar cualquier dato de un video del sistema',
        ]);
        Permission::create([
        	'name'			=>	'Ediciòn de videos',
        	'slug'			=>	'videos.edit',
        	'description'	=>	'Editar cualquier dato de un video del sistema',
        ]);
        Permission::create([
        	'name'			=>	'Eliminar video',
        	'slug'			=>	'videos.destroy',
        	'description'	=>	'Eliminar cualquier video del sistema',
        ]);

    }
}
