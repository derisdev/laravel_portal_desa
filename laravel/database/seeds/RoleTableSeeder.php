<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run()
    {
        $role_normal_user = new Role;
        $role_normal_user->name = 'user';
        $role_normal_user->description = 'Pengguna biasa yang hanya membaca';
        $role_normal_user->save();

        $role_writer_user = new Role;
        $role_writer_user->name = 'writer';
        $role_writer_user->description = 'Khusus untuk penulis, misalnya Sekretaris atau staff lainnya';
        $role_writer_user->save();

        $role_admin_user = new Role;
        $role_admin_user->name = 'admin';
        $role_admin_user->description = 'Khusus admin, tidak jauh berbeda dengan penulis untuk fasilitasnya';
        $role_admin_user->save();

    }
}
