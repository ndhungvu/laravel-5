<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('UserTableSeeder');

        Model::reguard();
    }
}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        $info = array(
                    'email' => 'admin@admin.com',
                    'username' => 'admin',
                    'password' => Hash::make('123123'),
                    'is_admin' => 1
                );
        User::create($info );
    }

}
