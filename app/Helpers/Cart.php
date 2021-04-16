<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
class Cart {
    public static function hitungCart(){
        return \App\Models\Cart::whereUserId(Auth::user()->id)->count();
    }
}
