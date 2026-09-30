<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        return view('customer.index', compact('foods'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'table_number' => 'required|integer|min:1',
            'items' => 'required|array',
            'items.*' => 'nullable|integer|min:0',
        ]);

        $orderedItems = array_filter($request->items, fn($qty) => $qty > 0);

        if (empty($orderedItems)) {
            return back()->with('error', 'Pilih minimal satu menu makanan!');
        }

        DB::beginTransaction();

        try {
            $order = Order::create([
                'customer_name' => $request->customer_name,
                'table_number' => $request->table_number,
                'total_price' => 0,
                'status' => 'pending',
            ]);

            $totalPrice = 0;

            foreach ($orderedItems as $foodId => $quantity) {
                $food = Food::findOrFail($foodId);
                $price = $food->price * $quantity;
                $totalPrice += $price;

                OrderDetail::create([
                    'order_id' => $order->id,
                    'food_id' => $food->id,
                    'quantity' => $quantity,
                    'price' => $price,
                ]);
            }

            $order->update(['total_price' => $totalPrice]);
            DB::commit();

            return redirect()->route('customer.index')
                ->with('success', 'Pesanan berhasil dibuat! Nomor Meja: ' . $order->table_number);
        } catch (\Exception $e) {
            DB::rollBack();

            return back()->with('error', 'Gagal memproses pesanan: ' . $e->getMessage());
        }
    }

    public function adminDashboard()
    {
        $orders = Order::with('OrderDetails.food')->latest()->get();

        return view('dashboard', compact('orders'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string'
        ]);

        $order = Order::findOrFail($id);
        $order->update([
            'status' => $request->status
        ]);

        return back()->with(
            'success',
            'Status pesanan #' . $order->id . ' berhasil diperbarui!'
        );
    }
}