<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\OrderDetail;
use App\Product;
use Illuminate\Http\Request;
use App\User;

class MarkterController extends Controller
{


    public function index()
    {

        $users = User::paginate(100);
        $orders= Order::paginate(100);

        $products = Product::with(['category', 'subcategory'])->paginate(100);
        return inertia()->render('Dashboard/markters/index', [
            'products' => $products,
            'users' => $users,
            'orders'=>$orders,

        ]);
    }

    public function show(Order $order)
   
    {

        $orderDetails = OrderDetail::where('order_id', $order->id)->get();
        $orderDetails->map(function ($orderDetail) {
            $orderDetail['image'] = $orderDetail->product->image;
            return $orderDetail;
        });

        $commission = $orderDetails->reduce(function ($initail, $detail) {
            return $initail += $detail->product->category->marketer_commission;
        }, 0);

        return inertia()->render('Dashboard/markters/show', [
            'order' => $order,
            "orderDetails" => $orderDetails,
            "commission" => $commission
        ]);
    }




    public function destroy(Order $order)
    {

        $order->delete();

        session()->flash('toast', [
            'type' => 'success',
            'message' => 'تم تسليم المسوقه'
        ]);
        return redirect()->route('markters.index');
    }
}
