<?php

namespace App\Models\Admin;

use App\Models\Order_Item;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'price', 'description'
    ];

    public function orderItems()
    {
        return $this->hasMany(Order_Item::class, 'item_id', 'id');
    }
}
