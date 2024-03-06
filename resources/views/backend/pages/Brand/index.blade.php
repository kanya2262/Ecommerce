@extends('backend.layouts.masters')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">brands</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Brand Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="brands-example">
                        <thead>
                            <tr>
                                <th scope="col">S.No.</th>
                                <th scope="col">Brand Name</th>
                                <th scope="col">Categories-id</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>

                                
                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($brands as $brand)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$brand-> brandname}}</td>
                                <td>{{$brand->product->categoryname ?? '-'}}</td>                                <td>{{$brand->description}}</td>
                                <td>{{$brand->action}}

                                

                                
        <form action="{{ route('brand.destroy',$brand->id) }}" method="POST">
        &nbsp;
        <a class="btn btn-info" href="{{ route('brand.show',$brand->id) }}">{{ 'Show' }}</a>
        &nbsp;
        <a class="btn btn-primary" href="{{ route('brand.edit',$brand->id) }}">{{ 'Edit' }}</a>
 
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

