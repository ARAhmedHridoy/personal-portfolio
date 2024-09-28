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
            <div class="row row-sm">
                <div class="col-md-8">
                  <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Skills List</h3>
                    </div>
                    <div class="card-body">
                    <div class="table-wrapper">
                      <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Skills Name</th>
                            <th>Skills Parcent</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($get_data as $key=>$data)
                          <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $data->skill_name }}</td>
                            <td>{{ $data->skill_percent }}</td>
                            <td>
                              <a href="{{ url('admin/skill/edit/'.$data->id) }}" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i></a>
                              <a onclick="return confirm('Are you sure, you want to delete ?')" href="{{ url('admin/skill/delete/'.$data->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div><!-- table-wrapper -->
                  </div>
                  </div><!-- card -->
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header">Add New Skill</div>
                      <div class="card-body">
                    <form action="{{ url('admin/skill/post') }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label class="form-control-label">Skills Name : <span class="text-danger">*</span></label>
                          <input class="form-control" type="text" name="skill_name" placeholder="Enter Skills Name" required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Skills Parcent : <span class="text-danger">*</span></label>
                            <input class="form-control" type="number" name="skill_percent" placeholder="Enter Skills Parcent out of 100" min="0" max="100" maxlength="3" required>
                          </div>
                        <div class="form-layout-footer">
                          <button type="submit" class="btn btn-info">Add New</button>
                        </div><!-- form-layout-footer -->
                      </form>
                      </div>
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










{{-- @extends('layouts.admin-master')

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
                                Skills
                                
                            </h3>
                            <a href="" class="btn btn-success float-right">+ Add</a>
                        </div>
                        <div class="row row-sm">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="from-group row">
                                        <label class="col-form-label" for="name">Skills Name :</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name" value="{{ @$get_data[0]->name }}" placeholder="Enter Your Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <div class="from-group row">
                                        <label class="col-form-label" for="name">Skills Name :</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name" value="{{ @$get_data[0]->name }}" placeholder="Enter Your Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection --}}
