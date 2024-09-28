@extends('layouts.admin-master')

@section('admin_content')

<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Blog</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('admin/blog') }}" id="addForm" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <ul class="alert alert-danger d-none" id="save_errorList"></ul>
                <div class="form-group mb-3">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group mb-3">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group mb-3">
                    <label for="title">Description</label>
                    <textarea class="form-control" name="description" id="" cols="30" rows="5" accept="image/png, image/jpeg, image/jpg"></textarea>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
      </div>
    </div>
</div> 

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
                            <h3 class="card-title">Blogs</h3>
                            <a href="#" class="btn btn-success float-right" data-toggle="modal" data-target="#addModal">Add</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($get_data as $key=>$data)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $data->title }}</td>
                                            <td>
                                                @if(!empty($data->image))
                                                <img src="{{ url('img/blog/'.$data->image) }}" style="height: 80px; width: 100px;" alt="Image">
                                                @endif
                                            </td>
                                            <td>{{ $data->description }}</td>
                                            <td>
                                                <a href="{{ url('admin/blog/edit/'.$data->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                <a onclick="return confirm('Are you sure, you want to delete ?')" href="{{ url('admin/blog/delete/'.$data->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on(submit, '#addForm', function (e) {
                e.preventDefault();
                let formData = new FormData($('#addForm')[0]);
                $.ajax({
                    type: "post",
                    url: "admin/blog",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        if(response.status == 400){
                            $('#save_errorList').html("");
                            $('#save_errorList').removeClass('d-none');
                            $.each(response.errors, function (key, error_value) { 
                                 $('#save_errorList').append('<li>'+error_value+'</li>');
                            });
                        }else if(response.status == 200){
                            $('#save_errorList').html("");
                            $('#save_errorList').addClass('d-none');

                            //this.reset();
                            $('#addForm').find('input').val('');
                            $('#addModal').modal('hide');
                            alert(response.message);
                        }
                    }
                });
            });
        });
    </script>
@endsection
