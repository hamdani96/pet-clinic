<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::user()->id)->whereNull('delete_at')->orderBy('created_at', 'desc')->paginate(6);

        return view('user.history.index', compact('orders'));
    }
}
