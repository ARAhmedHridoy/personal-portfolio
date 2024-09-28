@extends('layouts.admin-master')

@section('admin_content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @include('_message')
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">
                                Add Blog
                            </h3>
                        </div>
                        <form class="form-horizontal" method="POST" action="{{ url('admin/blog/post') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="from-group row">
                                    <label class="col-sm-2 col-form-label" for="title">Title<span class="text-danger">*</span> :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title"  placeholder="Enter Title" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="from-group row">
                                    <label class="col-sm-2 col-form-label" for="description">Description :</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="description" cols="30" rows="4" maxlength="200" placeholder="Maximum 200 Characters"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="from-group row">
                                    <label class="col-sm-2 col-form-label" for="image">Image<span class="text-danger">*</span> :</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="image" accept="image/png, image/jpeg" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">ADD</button>
                                <a href="#" class="btn btn-default float-right">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
