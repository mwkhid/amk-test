<?php

namespace App\Models;

use App\Models\Admin\Item;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Order_Item extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'order_items';

    protected $fillable = [
        'order_id', 'item_id', 'qty', 'note'
    ];

    public function orders()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

    public function items()
    {
        return $this->belongsTo(Item::class, 'item_id', 'id');
    }
}
