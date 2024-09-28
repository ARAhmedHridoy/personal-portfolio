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
                                Add Quality
                            </h3>
                        </div>
                        <form class="form-horizontal" method="POST" action="{{ url('admin/quality/post') }}">
                            @csrf
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="degree_name">Degree Name<span class="text-danger">*</span> :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="degree_name"  placeholder="Enter Degree Name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="institution_name">Institution Name<span class="text-danger">*</span> :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="institution_name"  placeholder="Enter Institution Name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="passing_year">Passing Year<span class="text-danger">*</span> :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="passing_year"  placeholder="2020-2024" maxlength="11" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="description">Description :</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="description" cols="30" rows="4" maxlength="200" placeholder="Maximum 200 Characters"></textarea>
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
