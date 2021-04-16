<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Parents;
use App\Models\Item;
use Illuminate\Http\Request;

class ProductContrller extends Controller
{
    public function AddProduct(){
        $data['cat']=Category::join('parents' , 'categories.parent_id' , '=' , 'parents.id')
        ->orderBy('parent_id' , 'ASC')
            ->select(
                'categories.cat_name' , 'categories.id',
                'parents.parent_name'
            )
            -> get();
        return view('admin.add-product', $data);
    }
    public function StoreProduct(request $request){
        $file = $request->file('image');
        $ex = $file->getClientOriginalExtension();
        $image_name =now().'.'.$ex;
        $file->move('image',$file->getClientOriginalName());

            $parentId = Category::whereId($request->input('cat_id'))->first();
            $create = new Item();
            $create->cat_id = $parentId->id;
            $create->item_parent_id = $parentId->parent_id;
            $create->item_name = request ('item_name');
            $create->item_total = request ('qty');
            $create->item_stok = request ('qty');
            $create->item_price = request ('price');
            $create->item_price_sale = request ('sale_price');
        $create->item_image = $file->getClientOriginalName();
        $create->save();
        return back()->withSuccess('Data Berhasil diinput');
    }

    public function ListProduct(){
        $data ['item'] = Item::join('categories' , 'items.cat_id' , '=' , 'categories.id')
            ->select(
                'items.*' , 'categories.cat_name'
            )
            ->get();
        return view('admin.products', $data);
    }

    public function DeleteProduct($id){
        Item::whereId($id)->delete();
        return back()->withsuccess('Product Berhasil Dihapus');
    }
}
