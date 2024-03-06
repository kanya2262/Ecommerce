@extends('backend.layouts.masters')
@section('content')

<form method="POST" action="{{route('category.store')}}"  enctype="multipart/form-data">
@csrf

<!-- <div class="col">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="page-header">category</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Create category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        
    
                                        <div class="form-group">
                                        <label for="categoryname">Category Name</label>&nbsp;&nbsp;
                                        <!-- <input class="form-control" name="categoryname"
                                            placeholder=" Enter Category Name"> -->
                                        <select name="category_id" class="form-control" id="category_id">
                                            @foreach($product as $p)
                                            <option value="{{$p->id}}">{{$p->categoryname}}</option>
                                            @endforeach
                                    </div>
                                    </select>

                                        <div class="form-group">
                                        <label for ="description">Description</label>&nbsp;&nbsp;
                                            <input class="form-control"  name="description" placeholder="Enter Description">
                                        </div>
                                        
                                        
                     
                                        <button type="submit" class="btn btn-default">Submit</button>
                                        <!-- <button type="reset" class="btn btn-default">Reset Button</button> -->
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
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

