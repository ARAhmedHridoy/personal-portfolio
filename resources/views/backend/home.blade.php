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
                                Home
                            </h3>
                        </div>
                        <form class="form-horizontal" method="POST" action="{{ url('admin/home/post') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="name">Name :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name" value="{{ @$get_data[0]->name }}" placeholder="Enter Your Name">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="experience">Experience :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="experience" value="{{ @$get_data[0]->experience }}" placeholder="Enter Your Experience">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="image">Image :</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="image" accept="image/png, image/jpeg">
                                        @if (@$get_data[0]->image)
                                            <img src="{{ url('img/'.@$get_data[0]->image) }}" width="200" height="200" style="margin-top: 5px" alt="Image">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="video">Youtube Video Link :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="video" value="{{ @$get_data[0]->video }}" placeholder="YouTube Embeded Video Link">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="cv">Your CV Link :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="cv" value="{{ @$get_data[0]->cv }}" placeholder="Enter Your CV Link">
                                    </div>
                                </div>
                                <input type="hidden" name="id"value=" {{ @$get_data[0]->id }}">
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="add_to_update" id="add_to_update" value="@if(count($get_data)>0) Edit @else ADD @endif">@if(count($get_data)>0) Edit @else ADD @endif</button>
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
