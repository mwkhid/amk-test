<?php

namespace App\Http\Controllers;

use App\Models\Admin\Customer;
use App\Models\Admin\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // return view('home');

        $roles = Auth::User()->roles;
        if ($roles == 'ADMIN') {
            return redirect()->route('dashboard.admin');
        }
        if ($roles == 'STAFF') {
            return view('staff.dashboard.index', [
                'customer' => Customer::count(),
                'item' => Item::count(),
                'order' => Order::count(),
                'total' => Order::sum('total')
            ]);
        }
    }
}
