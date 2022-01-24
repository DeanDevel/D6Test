<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'companyName',
        'address',
        'subTotal',
        'taxRate',
        'taxAmount',
        'totalAftertax',
        'amountPaid',
        'amountDue'
    ];

}
