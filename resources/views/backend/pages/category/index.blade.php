@extends('backend.layouts.masters')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">category</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Category Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="categories-example">
                        <thead>
                            <tr>
                                <th scope="col">S.No.</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>

                                
                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$category->product->categoryname ?? '-'}}</td> 
                             <td>{{$category->description}}</td>
                                <td>{{$category->action}}

                                

                                
        <form action="{{ route('category.destroy',$category->id) }}" method="POST">
        &nbsp;
        <a class="btn btn-info" href="{{ route('category.show',$category->id) }}">{{ 'Show' }}</a>
        &nbsp;
        <a class="btn btn-primary" href="{{ route('category.edit',$category->id) }}">{{ 'Edit' }}</a>
 
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

