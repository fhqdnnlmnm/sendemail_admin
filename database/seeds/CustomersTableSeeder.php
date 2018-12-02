<?php

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Customer::truncate();
        $customers = factory(App\Models\Customer::class)->times(5)->create()->each(function($u){
            $u->contacts()->save(factory(App\Models\Contact::class)->make());
        });
        // Customer::insert($customers->toArray());
    }
}
