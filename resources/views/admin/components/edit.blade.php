@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Country</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active"><a href="">Country</a></li>
                            <li class="breadcrumb-item active">Edit</li>
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
                    <!-- jquery validation -->
                        <div class="card card-primary">

                            <div class="card-header">
                                <h3 class="card-title">Edit Country</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->

                            <form action="" method="post" >
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name<span style="color: red; font-size: 20px">*</span></label>
                                        <input type="text" name="name" class="form-control" value="" placeholder="Ente name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Code<span style="color: red; font-size: 20px">*</span></label>
                                        <input type="text" name="code" class="form-control" value="" placeholder="Ente Code">
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                    </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </section>
    </div>
@endsection
