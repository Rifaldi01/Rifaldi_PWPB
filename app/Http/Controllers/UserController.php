<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data['item'] = Item::orderBy(DB::raw('RAND()'))
        ->limit(15)
        ->get();
        return view ('user.user', $data);
    }
    public function product(){
        return view('user.product');
    }

    public function detail($id){
        $data['detail'] = Item::whereId($id)->first();

        return view('user.detail', $data);
    }

}

