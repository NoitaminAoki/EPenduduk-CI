<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSider extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'nama_role' => 'admin',
        	'name' => 'admin',
        	'email' => 'admin@example.com',
        	'password' => bcrypt('admin')
       ]);
    
    	User::create([
    		'nama_role' => 'user',
        	'name' => 'user',
        	'email' => 'user@example.com',
        	'password' => bcrypt('user')
        ]);
    }
}
