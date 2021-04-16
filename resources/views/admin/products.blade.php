@extends('layouts.master')
@section('content')

    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Products</h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="index-2.html"><i class="flaticon-home-fill"></i></a></li>
                        <li><a href="#">eCommerce</a></li>
                        <li class="active"><a href="#">Products</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row margin-bottom-120">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Product List </h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="ecommerce-product-list" class="table  table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Nama Barang</th>
                                    <th>Categori</th>
                                    <th>Jumlah</th>
                                    <th>Stok</th>
                                    <th>Harga</th>
                                    <th class="align-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($item as $key => $data)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame mr-2 rounded-circle">
                                                    <img src="{{URL::to('image/'. $data->item_image)}}"
                                                         alt="admin-profile" class="img-fluid rounded-circle">

                                                </div>

                                            </div>
                                        </td>
                                        <td>{{$data->item_name}}</td>
                                        <td>{{$data->cat_name}}</td>
                                        <td>{{$data->item_total}}</td>
                                        <td>{{$data->item_stok}}</td>
                                        <td>{{$data->item_price_sale}}</td>
                                        <td class="text-center">
                                            <a href="{{URL::to('/admin/products/edit', $data->id)}}"
                                               class="btn btn-sm btn-primary"
                                               data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="flaticon-pencil-1" style="font-size: 10px"></i>
                                            </a>

                                            <a href="{{URL::to('admin/products/delete', $data->id)}}"
                                               class="btn btn-sm btn-danger"
                                               data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="flaticon-delete-6" style="font-size: 10px"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



@endsection
