<?php

namespace App\Models;

use App\Models\Admin\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code', 'date', 'customer_id', 'subtotal', 'discount', 'total'
    ];

    public function customers()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    public function orderItems()
    {
        return $this->hasMany(Order_Item::class, 'order_id', 'id');
    }
}
