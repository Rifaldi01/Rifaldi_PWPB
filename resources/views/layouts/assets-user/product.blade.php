<!-- Featured Product Start -->
<div class="featured-product product">
    <div class="container-fluid">
        <div class="section-header">
            <a href="{{URL::to('product-list')}}" class="btn btn">View All</a>
        </div>
        <div class="row align-items-center product-slider product-slider-4">
            @foreach($item as $data)
            <div class="col-lg-3">
                <div class="product-item">
                    <div class="product-title">
                        <a href="#">{{($data->item_name)}}</a>
                        <div class="ratting">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <div class="product-image">
                        <a href="product-detail.html">
                            <img src="{{URL::to('image' , $data->item_image)}}" alt="Product Image">
                        </a>
                        <div class="product-action">
                            <a href="{{URL::to('cart')}}"><i class="fa fa-cart-plus"></i></a>
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="{{URL::to('detail', $data->id)}}"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="product-price">
                        <h3><span>IDR</span>{{number_format($data->item_price_sale, 0,'.','.')}}</h3>
                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Featured Product End -->
