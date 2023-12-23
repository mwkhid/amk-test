<?php

namespace App\Http\Controllers;

use App\Models\Admin\Customer;
use App\Models\Admin\Item;
use App\Models\Order;
use App\Models\Order_Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Order::with('customers')->get();
        $roles = Auth::User()->roles;
        if ($roles === 'ADMIN') {
            return view('admin.orders.index', [
                'items' => $items
            ]);
        } else {
            return view('staff.orders.index', [
                'items' => $items
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::all();
        $items = Item::all();

        $roles = Auth::User()->roles;
        if ($roles === 'ADMIN') {
            return view('admin.orders.create', [
                'customers' => $customers,
                'items' => $items
            ]);
        } else {
            return view('staff.orders.create', [
                'customers' => $customers,
                'items' => $items
            ]);;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // menangkap harga item
        $idItem = Item::findOrFail($data['item_id']);
        $harga = $idItem['price'];
        $subtotal = $harga * $data['qty'];
        $total = $subtotal - ($subtotal * $data['discount'] / 100);
        Order::create([
            'code' => $data['code'],
            'date' => $data['date'],
            'customer_id' => $data['customer_id'],
            'subtotal' => $subtotal,
            'discount' => $data['discount'],
            'total' => $total
        ]);
        $order = Order::latest()->first();
        Order_Item::create([
            'order_id' => $order->id,
            'item_id' => $data['item_id'],
            'qty' => $data['qty'],
            'note' => $data['note']
        ]);

        $roles = Auth::User()->roles;
        if ($roles === 'ADMIN') {
            return redirect()->route('orders.index');
        } else {
            return redirect()->route('staff.order');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Order_Item::findOrFail($id);

        $roles = Auth::User()->roles;
        if ($roles === 'ADMIN') {
            return view('admin.orders.detail', [
                'item' => $item
            ]);
        } else {
            return view('staff.orders.detail', [
                'item' => $item
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Order_Item::findOrFail($id);
        $items = Item::all();
        $customers = Customer::all();
        return view('admin.orders.edit', [
            'data' => $data,
            'items' => $items,
            'customers' => $customers
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //id adalah id order
        $data = $request->all();
        $idItem = Item::findOrFail($data['item_id']);
        $harga = $idItem['price'];
        $subtotal = $harga * $data['qty'];
        $total = $subtotal - ($subtotal * $data['discount'] / 100);


        $order = Order::findOrFail($id);
        $order->update([
            'code' => $data['code'],
            'date' => $data['date'],
            'customer_id' => $data['customer_id'],
            'subtotal' => $subtotal,
            'discount' => $data['discount'],
            'total' => $total
        ]);

        $idOrderItem = Order_Item::where('order_id', $id)->first();
        $orderItem = Order_Item::findOrFail($idOrderItem->id);
        $orderItem->update([
            'item_id' => $data['item_id'],
            'qty' => $data['qty'],
            'note' => $data['note']
        ]);

        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Order::findOrFail($id);
        $item->delete();
        Order_Item::where('order_id', $id)->delete();

        return redirect()->route('orders.index');
    }
}
