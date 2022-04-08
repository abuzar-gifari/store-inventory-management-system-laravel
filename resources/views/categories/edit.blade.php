@extends('layouts.master')

@section('main')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Update Category</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Update Category</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
      <!-- /.content-header -->

      <div class="content">
        <div class="container-fluid">
          <div class="row">
           
            <!-- /.col-md-6 -->
            <div class="col-lg-8">
              <div class="card">
                <div class="card-header">
                  <h5 class="m-0">Update Category</h5>
                </div>
                <form class="form-horizontal" action="{{ route('categories.update',$category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
                        <div class="col-sm-10">
                          <input value="{{ $category->name }}" type="text" class="form-control" name="name" id="name" placeholder="Enter Category Name">
                          @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-info">Update Category</button>
                      <button type="submit" class="btn btn-default float-right">Cancel</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
                
              </div>
  
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->





@endsection
