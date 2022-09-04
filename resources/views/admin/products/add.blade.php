@extends('admin.layouts.layout')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Product Form</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Product Form</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Product Add</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Enter Product Name">
                                            <span class="input-error" style="color: red">{{ $errors->first('name') }}</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">price</label>
                                            <input type="text" name="price" class="form-control" id="price"
                                                placeholder="Enter Product Price">
                                            <span class="input-error"
                                                style="color: red">{{ $errors->first('price') }}</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input"
                                                        id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                            <span class="input-error"
                                                style="color: red">{{ $errors->first('image') }}</span>
                                        </div>

                                        <div class="featured-keyword-area">
                                            <div class="heading-area">
                                                <!-- <h4 class="title">Feature Tags</h4> -->
                                                <h4 class="title"> Add varients</h4>
                                            </div>
                                            <div class="feature-tag-top-filds" id="feature-section">
                                                <div class="feature-area">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <input type="text" name="addMoreInputFields[0][color]"
                                                                class="form-control my-colorpicker1 colorpicker-element"
                                                                placeholder="Choose color" data-colorpicker-id="1"
                                                                data-original-title="" title="">
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="input-group">
                                                                <input type="text" name="addMoreInputFields[0][size]"
                                                                    value="" class="form-control"
                                                                    placeholder="Add size (eg. S,M,L,XL,XXL,3XL,4XL)" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:;" id="feature-btn"
                                                class="add-fild-btn btn btn-sm btn brn-info"><i class="icofont-plus"></i>
                                                Add More Field</a>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->

                            <!-- /.card -->

                        </div>
                        <!--/.col (left) -->


                        <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

    </div>
    <!-- ./wrapper -->
@endsection
