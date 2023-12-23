<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Customer;
use App\Models\Admin\Item;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index', [
            'customer' => Customer::count(),
            'item' => Item::count(),
            'order' => Order::count(),
            'total' => Order::sum('total')
        ]);
    }
}
