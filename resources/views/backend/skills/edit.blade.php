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
                                Edit Skills
                            </h3>
                        </div>
                        <form class="form-horizontal" method="POST" action="{{ url('admin/skill/update/'.$get_data->id) }}">
                            @csrf
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="skill_name">Skills Name :</label>
                                    <div class="col-sm-10">
                                      <input class="form-control" type="text" name="skill_name" value="{{ $get_data->skill_name }}" placeholder="Enter Skills Name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="fron-group row">
                                    <label class="col-sm-2 col-form-label" for="skill_percent">Skills Percent :</label>
                                    <div class="col-sm-10">
                                      <input class="form-control" type="number" name="skill_percent" value="{{ $get_data->skill_percent }}" placeholder="Enter Skills Parcent out of 100" maxlength="3" min="0" max="100" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ url('admin/skill') }}" class="btn btn-default float-right">Cancel</a>
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
