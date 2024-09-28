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
                                Edit Portfolio
                            </h3>
                        </div>
                        <form class="form-horizontal" method="POST" action="{{ url('admin/portfolio/update/'.$get_data->id)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="title">Title<span class="text-danger">*</span> :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title"  placeholder="Enter Title" value="{{ $get_data->title }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="image">Image<span class="text-danger">*</span> :</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="image" accept="image/png, image/jpeg">
                                        @if (@$get_data->image)
                                            <img src="{{ url('public/img/portfolio/'.@$get_data->image) }}" width="200" height="200" style="margin-top: 5px" alt="Image">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="portfolio_link">Portfolio Link :</label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" name="portfolio_link" value="{{ $get_data->portfolio_link }}"  placeholder="Enter Your Portfolio Link">
                                    </div>
                                </div>
                                {{-- <input type="hidden" name="id"value=" {{ @$get_data[0]->id }}"> --}}
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ url('admin/portfolio') }}" class="btn btn-default float-right">Cancel</a>
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
