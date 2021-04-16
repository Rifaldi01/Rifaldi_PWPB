@extends('layouts.master')
@section('content')

<div class="row" id="cancel-row">

    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Zero Configuration</h4>

                        <!-- Button trigger modal -->
                        <button type="button" style="margin-right: 25px;" class="btn btn-primary float-right" data-toggle="modal" data-target="#addCat">
                            Add Category
                        </button>


                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="table-responsive mb-4">
                    <table id="zero-config" class="table table-striped table-hover table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Category Utama</th>
                                <th>Sub Category</th>
                                <th class="text-center">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $key => $data)

                            <tr>
                            <td class="text-primary">{{$key+1}}</td>
                                <td>{{$data->cat_name}}</td>
                                <td>{{$data->parent_name}}</td>
                                <td class="text-center">
                                    <a href="{{URL::to('/admin/cat/edit', $data->CatId)}}" class="btn btn-sm btn-primary"
                                         data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="flaticon-pencil-1" style="font-size: 18px"></i>
                                    </a>

                                    <a href="{{URL::to('/admin/cat/delete', $data->CatId)}}"  class="btn btn-sm btn-danger"
                                        data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="flaticon-delete-6" style="font-size: 18px"></i>
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

@endsection
    <!-- Modal -->
    <div class="modal fade" id="addCat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
            <h5 class="modal-title" id="exampleModalLongTitle">Add Category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form method="POST" action="{{URL::to('admin/add-category')}}">
                @csrf
            <div class="modal-body">
               <div class="row">
                   <div class="col-8">
                       <label>Pilih Category</label>
                       <select name="parent_id" required class="form-control">
                           <option value="">Pilih Category</option>
                           @foreach ($parent as $data)
                               <option value="{{$data->id}}">{{$data->parent_name}}</option>
                           @endforeach
                       </select>
                       <label>Nama Category</label>
                       <input type="text" name="cat_name" class="form-control">

                   </div>
                   <div class="col-4">
                       <label>Tambah Category Utama</label>
                    <button type="button" style="margin-right: 25px;" class="btn btn-primary rounded"  data-toggle="modal" data-target="#addParent">
                        Add Category Utama
                    </button>
                   </div>

               </div>
            </div>
            <div class="modal-footer float-left">
             <button type="submit" class="btn btn-primary">Save </button>
            <button type="button" class="btn btn-secondary btn-danger" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
        </div>
    </div>

    <div class="modal fade" id="addparent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
            <h5 class="modal-title" id="exampleModalLongTitle">Add Parent</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form method="POST" action="{{URL::to('admin/add-parent')}}">
                @csrf
            <div class="modal-body">
               <div class="form-group">
                   <label>Pilih Category</label>
                   <input type="text" name="parent_name" class="form-control">
               </div>
            </div>
            <div class="modal-footer ">
            <button type="submit" class="btn btn-primary">Save Category </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
        </div>
    </div>
