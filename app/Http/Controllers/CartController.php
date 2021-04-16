<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cart(){
        $data ['cart'] = Cart::whereUserId(Auth::user()->id)
            ->join('items', 'carts.item_id', '=', 'items.id')
            ->select([
                'items.*', 'carts.qty'

        ])
            ->get();

        return view('user.cart', $data);
    }

    public function addCart($id, Request $request){
        Cart::create([
            'item_id'=> $id,
            'qty'=> $request->input('qty'),
            'user_id'=> Auth::user()->id
        ]);
        return back();
    }

}
