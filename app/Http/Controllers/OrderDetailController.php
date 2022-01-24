<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Mail;
use DB;
use App\Models\Orderdetail;

class OrderDetailController extends Controller
{

  public function showlist() {
   
    $resultslist = \DB::select('SELECT * from orderdetails');
    //dd($resultslist);
    return view('invoicelist',['resultslist'=>$resultslist]);

  } 
  
  public function showinvoice($id) {
   
    $invoicelist = \DB::select('SELECT * from orderdetails WHERE order_id = ?', [$id]);
    //dd($resultslist);
    return view('viewinvoice',['invoicelist'=>$invoicelist]);

  } 
  
  public function destroy($id) 
  {
    ///delete the orders details
     DB::delete('DELETE FROM orderdetails WHERE order_id = ?', [$id]);

     ///delete all multiple items for this order also

    return back()->with('success', 'Invoice has been deleted');
  }

  public function storeinvoice(Request $request) {

      $request->validate([
        'toPersonName'=>'required',
        'companyName'=>'required',
        'address'=>'required',
        'companyCity'=>'required',
        'companyProvince'=>'required',
        'companyPostalcode'=>'required',
        'companyPhone'=>'required',
        'subTotal'=>'required',
        'taxRate'=>'required',
        'taxAmount'=>'required',
        'totalAftertax'=>'required',
        'amountPaid'=>'required',
        'amountDue'=>'required'
        ]);


     //multiple items for other database
     $productCode = json_encode($request->get('productCode'));
     $productName = json_encode($request->get('productName'));
     $quantity = json_encode($request->get('quantity'));
     $price = json_encode($request->get('price'));
     $total = json_encode($request->get('total'));

      ///insert into main order
      $test = DB::insert("INSERT INTO `orderdetails` (`order_id`, `order_receiver_personname`, `order_receiver_name`, `order_receiver_address`, `order_receiver_city`, `order_receiver_province`, `order_receiver_postalcode`, `order_receiver_phone`, `order_total_before_tax`, `order_total_tax`, `order_tax_per`, `order_total_after_tax`, `order_amount_paid`, `order_total_amount_due`, `order_date`, `note`, `productCode`, `productName`, `quantity`, `price`, `total`, `created_at`, `updated_at`) VALUES (NULL, '".$request->get('toPersonName')."', '".$request->get('companyName')."', '".$request->get('address')."', '".$request->get('companyCity')."', '".$request->get('companyProvince')."', '".$request->get('companyPostalcode')."', '".$request->get('companyPhone')."', '".$request->get('subTotal')."', '".$request->get('taxAmount')."', '".$request->get('taxRate')."', '".$request->get('totalAftertax')."', '".$request->get('amountPaid')."', '".$request->get('amountDue')."', '".Carbon::now()."', '".$request->get('notes')."', '".$productCode."', '".$productName."', '".$quantity."', '".$price."', '".$total."', '".Carbon::now()."', '".Carbon::now()."');");
      
      //dd($test);
      return back()->with('success', 'Thanks for creating the invoice!');
  
  }


}