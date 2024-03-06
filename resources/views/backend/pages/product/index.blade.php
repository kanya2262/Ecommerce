@extends('backend.layouts.masters')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Products</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Product Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="products-example">
                        <thead>
                            <tr>
                                <th scope="col">S.No.</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Brand Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Details</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$product-> productname}}</td>
                                <td>{{$product->categoryname}}</td>
                                <td>{{$product->brandname}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->details}}</td>
                                <td>{{$product->image}}</td>
                                <td>{{$product->action}}


                                
        <form action="{{ route('product.destroy',$product->id) }}" method="POST">
        &nbsp;
        <a class="btn btn-info" href="{{ route('product.show',$product->id) }}">{{ 'Show' }}</a>
        &nbsp;
        <a class="btn btn-primary" href="{{ route('product.edit',$product->id) }}">{{ 'Edit' }}</a>
 
        @csrf
        @method('DELETE')
        &nbsp;
        <button type = "submit" class="btn btn-danger">Delete</button>                               


      </td>
                                @endforeach
                            </tr>

                        </tbody>
                    </table>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <!-- /.row -->
</div>
@endsection

