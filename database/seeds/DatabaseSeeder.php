<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(CategoriesTableSeeder::class);
        // $this->call(CustomersTableSeeder::class);
        // EmailSender模型数据填充
        // $emailsenders= factory(App\Models\EmailSender::class)->times(5)->create();
        factory(App\Models\EmailTemplate::class)->times(5)->create();
    }
}
