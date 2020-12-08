<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
use App\Account;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run()
    {
        
        
        $user = new User;
        $user->name = 'User';
        $user->email = 'user@mail.com';
        $user->password = bcrypt('userpassword');
        $user->save();
        $user->roles()->attach(Role::where('name', 'user')->first());
        $user->account()->save(factory(Account::class)->make());

        $writer = new User;
        $writer->name = 'Writer';
        $writer->email = 'writer@mail.com';
        $writer->password = bcrypt('writerpassword');
        $writer->save();
        $writer->roles()->attach(Role::where('name', 'writer')->first());
        $writer->account()->save(factory(Account::class)->make());
        

        $admin = new User;
        $admin->name = 'Admin';
        $admin->email = 'admin@mail.com';
        $admin->password = bcrypt('adminpassword');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'admin')->first());
        $admin->account()->save(factory(Account::class)->make());

        $roles = App\Role::all();  

        

   
    }
}


