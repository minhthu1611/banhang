<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('seedAdmin');
    }
}
class seedAdmin extends Seeder
{
	public function run()
	{
        DB::table('admins')->insert([
			['email'=>'admin@gmail.com','password'=>bcrypt('1611'),'hoten'=>'Ngô Minh Thư','gioitinh'=>'Nữ','diachi'=>'Ô môn'],
		]);
	}
}
