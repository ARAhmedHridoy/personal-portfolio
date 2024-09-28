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
                <section class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Experience</h3>
                            <a href="{{ url('admin/experience/add') }}" class="btn btn-success float-right">Add</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Experience Name</th>
                                        <th>Company Name</th>
                                        <th>Working Year</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($get_data as $key=>$data)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $data->experience_name }}</td>
                                            <td>{{ $data->company_name }}</td>
                                            <td>{{ $data->year }}</td>
                                            <td>{{ $data->description }}</td>
                                            <td>
                                                <a href="{{ url('admin/experience/edit/'.$data->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                <a onclick="return confirm('Are you sure, you want to delete ?')" href="{{ url('admin/experience/delete/'.$data->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <!-- /.row -->
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
