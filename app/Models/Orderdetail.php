<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'toPersonName',
        'companyName',
        'address',
        'companyCity',
        'companyProvince',
        'companyPostalcode',
        'companyPhone',
        'subTotal',
        'taxRate',
        'taxAmount',
        'totalAftertax',
        'amountPaid',
        'amountDue'
    ];

}
