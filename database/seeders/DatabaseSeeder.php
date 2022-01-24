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
            'order_total_before_tax' => '208',
            'order_total_tax' => '29',
            'order_tax_per' => '14',
            'order_total_after_tax' => '237',
            'order_amount_paid' => '100',
            'order_total_amount_due' => '137',
            'order_date' => Carbon::now(),
            'note' => 'this is demo company notes',
            'productCode' => '["234234","23469"]',              
            'productName' => '["item one","item two"]',              
            'quantity' => '["23","58"]',  
            'price' => '["4","2"]',  
            'total' => '["92","116"]',           
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
            'order_total_before_tax' => '1168',
            'order_total_tax' => '164',
            'order_tax_per' => '14',
            'order_total_after_tax' => '1332',
            'order_amount_paid' => '1200',
            'order_total_amount_due' => '132',
            'order_date' => Carbon::now(),
            'note' => 'None Demo Test',  
            'productCode' => '["43534556","2345645"]',              
            'productName' => '["test 1 item","test 2 item"]',              
            'quantity' => '["3","4"]',  
            'price' => '["344","34"]',  
            'total' => '["1032","136"]',                         
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);




    }
}

