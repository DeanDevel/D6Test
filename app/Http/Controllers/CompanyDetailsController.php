<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Companydetail;

class CompanyDetailsController extends Controller
{

    public function showcompanydetails() {
        $resultscompanyid = \DB::select('SELECT * from companydetails WHERE id = 1');
        return view('createinvoice',['resultscompanyid'=>$resultscompanyid]);
      }
}
