@extends('layouts.master')
@section('head')
    <link rel="stylesheet" type="text/css" href="{{URL::to('/assets/plugins/jquery-step/jquery.steps.css')}}">

    <link href="{{URL::to('assets/plugins/file-upload/file-upload-with-preview.css')}}" rel="stylesheet"
          type="text/css"/>

    <link href="{{URL::to('assets/assets/css/ui-kit/buttons/creative/creative-icon-buttons.css') }}" rel="stylesheet"
          type="text/css"/>


@endsection
@section('header')
    <h2>Add Product</h2>
@endsection
@section('content')
    <form action="{{URL::to('/admin/add-product')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="widget-content widget-content-area">
            <div id="icon-text" class="">


                <h3>
                    <i class="flaticon-home-fill" style="color: #f8538d;"></i>
                    Category
                </h3>
                <section>

                    <div class="form-group">
                        <label>Kategori Barang</label>
                        <select name="cat_id" required class="form-control">
                            <option value="">Pilih Kategori Barang</option>
                            @foreach($cat as $data)
                                <option value="{{$data->id}}">{{$data->cat_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" name="item_name">
                    </div>
                    <div class="form-group">
                        <label>Total Barang</label>
                        <input type="number" class="form-control" name="qty">
                    </div>
                </section>
                <h3>
                    <i class="flaticon-menu-1" style="  color: #f58b22;"></i>
                    Product Information
                </h3>
                <section>
                    <textarea name="desc" class="form-control" cols="10" rows="10"></textarea>
                </section>
                <h3>
                    <i class="flaticon-money" style="color: #00b1f4;"></i>
                    Price
                </h3>
                <section>
                    <div class="form-group">
                        <label>Harga Asli</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                    <div class="form-group">
                        <label>Harga Jual</label>
                        <input type="number" class="form-control" name="sale_price">
                    </div>
                </section>
                <h3>
                    <i class="flaticon-picture" style="color: #18d17f;"></i>
                    Image
                </h3>
                <section>
                    <div class="widget-content widget-content-area">
                        <div class="custom-file-container" data-upload-id="myFirstImage">
                            <label>Upload (Single File) <a href="javascript:void(0)"
                                                           class="custom-file-container__image-clear"
                                                           title="Clear Image">x</a></label>
                            <label class="custom-file-container__custom-file">
                                <input type="file" name="image"
                                       class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760"/>
                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                            </label>
                            <div class="custom-file-container__image-preview"></div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <button type="submit" class="btn-creative btn-3 btn-3e flaticon-arrow-left btn-block">
                                <span>Upload Foto</span></button>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </form>
@endsection

@section('js')
    <script src="{{URL::to('assets/plugins/jquery-step/jquery.steps.min.js')}}"></script>

    <script src="{{URL::to('assets/plugins/jquery-step/custom-jquery.steps.js')}}"></script>

    <script src="{{URL::to('assets/plugins/file-upload/file-upload-with-preview.js')}}"></script>

    <script>
        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
        //Second upload
        var secondUpload = new FileUploadWithPreview('mySecondImage')
    </script>
@endsection
