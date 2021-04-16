<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Parents;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index(){

        return view ('admin.dashboard');
    }

    public function category(){
        $data['parent']= Parents::all();
        $data['category'] = Category::
        join('parents' , 'categories.parent_id' , '=' , 'parents.id')
        ->select(
            'categories.*', 'categories.id as CatId',
            'parents.*' , 'parents.id as ParentId'
        )
        ->get();
        return view ('admin.category', $data);
    }

    public function products(){
        return view ('admin.products');
    }

    public function carts(){
        return view ('admin.carts');
    }

    public function StoreParent(request $request){
        $cek = parents::whereParentName($request->input('parent_name'))->first();
        if($cek){
            Alert::error('gagal', 'Nama Category Sudah Tersedia');
            return back();
        }
        Parents::create([
            'parent_name' => request('parent_name'),
            'parent_slug' => str::slug(request('parent_name'))
        ]);
        return back()->withToastSuccess('Berhasil Ditambahkan');
    }

    public function StoreCategory(Request $request){
        $cek = Category::whereCatName(request('cat_name'))
        ->whereParentId(request('parent_id'))->first();
        if($cek){
            Alert::error('gagal', 'Nama Category Sudah Tersedia');
            return back();
        }

        Category::create([
            'cat_name' => request('cat_name'),
            'parent_id' => request('parent_id'),
            'cat_slug' => str::slug(request('cat_name'))
        ]);
        return back()->withSuccess('behasil');
    }

    public function DeleteCategory($id){
        Category::whereId($id)->delete();
        return back()->withsuccess('Product Berhasil Dihapus');
    }
}
