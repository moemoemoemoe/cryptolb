<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
                           'full_name', 
                           'email' , 
                           'mobile' ,
                           'city' , 
                           'address' ,
                           'amount',
                           'role',
                           'date_of_order',
                           'status'
                           ];
}
