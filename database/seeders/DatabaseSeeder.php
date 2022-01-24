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

        Orderdetail::create([
            'order_receiver_personname' => 'Jane Doe',
            'order_receiver_name' => 'Demo Company',
            'order_receiver_address' => '225 Demo Address',
            'order_receiver_city' => 'Miami',
            'order_receiver_province' => 'Western Cape',
            'order_receiver_postalcode' => '8000',
            'order_receiver_phone' => '0674451241',
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
            'order_receiver_personname' => 'John Doe',
            'order_receiver_name' => 'Atsupplies',
            'order_receiver_address' => '323 Posum Point Road',
            'order_receiver_city' => 'Florida',
            'order_receiver_province' => 'Eastern Cape',
            'order_receiver_postalcode' => '5200',
            'order_receiver_phone' => '0679865241',
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

