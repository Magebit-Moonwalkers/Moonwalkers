<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'user_checkout_details';

   /**
    * @var array
    */
   protected $fillable = [
       'name','email','billing_address','billing_city','billing_state',
       'billing_zip','if_shipping_same','shipping_address','shipping_city',
       'shipping_state', 'shipping_zip','order_id'
   ];
}
