<?php

use App\Models\User;
use App\Models\Companydetail;
use App\Models\Orderdetail;
use App\Models\Orderdetailitems;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Companydetail::create([
            'companyname' => 'CompLara',
            'address' => '15 city street',
            'city' => 'Cape Town',
            'email' => 'company@test.com',
            'phone' => '0123456789',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Orderdetail::create([
            'company_id' => '1',
            'order_receiver_name' => 'Demo Company',
            'order_receiver_address' => '225 Demo Address',
            'order_total_before_tax' => '2839',
            'order_total_tax' => '142.52',
            'order_tax_per' => '7',
            'order_total_after_tax' => '2178.52',
            'order_amount_paid' => '2178.52',
            'order_total_amount_due' => '0',
            'order_date' => Carbon::now(),
            'note' => 'this is demo company notes',
            'productCode' => '["item1111","item2222","item3333"]',              
            'productName' => '["item name one","item name two","item name three"]',              
            'quantity' => '["1","2","3"]',  
            'price' => '["40","60","80"]',  
            'total' => '["40","120","240"]',           
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Orderdetail::create([
            'company_id' => '1',
            'order_receiver_name' => 'Atsupplies',
            'order_receiver_address' => '323 Posum Point Road',
            'order_total_before_tax' => '1036',
            'order_total_tax' => '15.0',
            'order_tax_per' => '8',
            'order_total_after_tax' => '6524.21',
            'order_amount_paid' => '6524.21',
            'order_total_amount_due' => '0',
            'order_date' => Carbon::now(),
            'note' => 'None Demo Test',  
            'productCode' => '["item1111","item2222","item3333"]',              
            'productName' => '["item name one","item name two","item name three"]',              
            'quantity' => '["1","2","3"]',  
            'price' => '["40","60","80"]',  
            'total' => '["40","120","240"]',                         
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);




    }
}

