@extends('layouts.master')
@section('content')

<div class="row" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Shopping Cart</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area view-cart-content">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <form method="post">
                                <div class="table-responsive">
                                    <table class="table view-cart-table">
                                        <thead>
                                            <tr>
                                                <th class="col-thumbnail">Product</th>
                                                <th class="col-title"></th>
                                                <th class="col-price">Price</th>
                                                <th class="col-quantity">Quantity</th>
                                                <th class="col-subtotal">Total</th>
                                                <th class="col-remove"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="#"><img class="product-thumbnail img-fluid" src="assets/img/t-shirt-4.jpg" alt=""></a></td>
                                                <td>
                                                    <h6 class="mb-0"><a href="#">Printed T-Shirt</a></h6>
                                                    <p><small>Color : Peach | Size : 36.5</small></p>
                                                </td>
                                                <td>$30.00</td>
                                                <td>
                                                    <input class="form-control" type="number" step="1" min="1" value="1">
                                                </td>
                                                <td>$30.00</td>
                                                <td class="cart-remove text-center"><a href="#"><i class="flaticon-close-fill"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><img class="product-thumbnail img-fluid" src="assets/img/t-shirt-2.jpg" alt=""></a></td>
                                                <td>
                                                    <h6 class="mb-0"><a href="#">Basic T-Shirt</a></h6>
                                                    <p><small>Color : Blue | Size : 36.5</small></p>
                                                </td>
                                                <td>$20.00</td>
                                                <td>
                                                    <input class="form-control" type="number" step="1" min="1" value="1">
                                                </td>
                                                <td>$20.00</td>
                                                <td class="cart-remove text-center"><a href="#"><i class="flaticon-close-fill"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><img class="product-thumbnail img-fluid" src="assets/img/t-shirt-3.jpg" alt=""></a></td>
                                                <td>
                                                    <h6 class="mb-0"><a href="#">Sports T-Shirt</a></h6>
                                                    <p><small>Color : Grey | Size : 36.5</small></p>
                                                </td>
                                                <td>$10.00</td>
                                                <td>
                                                    <input class="form-control" type="number" step="1" min="1" value="1">
                                                </td>
                                                <td>$10.00</td>
                                                <td class="cart-remove text-center"><a href="#"><i class="flaticon-close-fill"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <input class="form-control" type="text" placeholder="Coupon Code">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <a class="btn btn-outline-dark btn-rounded" href="javascript:void(0);">Apply Coupon</a>
                                        <i class="flaticon-question" data-toggle="tooltip" data-placement="top" title="Apply coupon to avail discount"></i>
                                    </div>
                                    <div class="form-group col-md-4 text-md-right">
                                        <a class="btn btn-primary btn-rounded" href="javascript:void(0);">Update Cart</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table cart-table">
                                <tbody>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td class="text-right">$21.00</td>
                                    </tr>
                                    <tr>
                                        <td>Discount</td>
                                        <td class="text-right">$1.00</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td class="text-right">$20.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-right"><a class="btn btn-primary btn-rounded mt-4 mb-3" href="javascript:void(0);">Checkout</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection