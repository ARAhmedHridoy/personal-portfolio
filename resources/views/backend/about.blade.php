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
                                About
                            </h3>
                        </div>
                        <form class="form-horizontal" method="POST" action="{{ url('admin/about/post') }}"  enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="name">Name :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name" value="{{ @$get_data_about[0]->name }}" placeholder="Enter Your Name">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="title">Title :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title" value="{{ @$get_data_about[0]->title }}" placeholder="Enter Your Title">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="description">Description :</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="description" cols="30" rows="4">{{ @$get_data_about[0]->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="birthday">Birthday :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="birthday" value="{{ @$get_data_about[0]->birthday }}" placeholder="Enter Your Birthday">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="degree">Degree :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="degree" value="{{ @$get_data_about[0]->degree }}" placeholder="Enter Your Degree">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="experience">Experience :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="experience" value="{{ @$get_data_about[0]->experience }}" placeholder="Enter Your Experience">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="phone">Phone :</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="phone" value="{{ @$get_data_about[0]->phone }}" placeholder="Enter Your Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="email">Email :</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" value="{{ @$get_data_about[0]->email }}" placeholder="Enter Your Email">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="address">Address :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="address" value="{{ @$get_data_about[0]->address }}" placeholder="Enter Your Address">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="freelance">Freelance :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="freelance" value="{{ @$get_data_about[0]->freelance }}" placeholder="Available or Not Available">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="learn">Learn More Link :</label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" name="learn" value="{{ @$get_data_about[0]->learn }}" placeholder="Enter Your Learn More Button Link">
                                    </div>
                                </div>
                                <input type="hidden" name="id"value=" {{ @$get_data_about[0]->id }}">
                            </div>
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="image">Image :</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="image_about" accept="image/png, image/jpeg">
                                        @if (@$get_data_about[0]->image_about)
                                            <img src="{{ url('public/img/about/'.@$get_data_about[0]->image_about) }}" width="200" height="200" style="margin-top: 5px" alt="Image">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="add_to_update" id="add_to_update" value="@if(count($get_data_about)>0) Edit @else ADD @endif">@if(count($get_data_about)>0) Edit @else ADD @endif</button>
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
