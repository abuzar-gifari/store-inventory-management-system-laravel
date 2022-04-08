@extends('layouts.master')

@section('main')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Update Size</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Update Size</li>
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
                  <h5 class="m-0">Update Size</h5>
                </div>
                <form class="form-horizontal" action="{{ route('sizes.update',$size->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Size</label>
                        <div class="col-sm-10">
                          <input value="{{ $size->size }}" type="text" class="form-control" name="size" id="size" placeholder="Enter Category Name">
                          @if ($errors->has('size'))
                            <span class="text-danger">{{ $errors->first('size') }}</span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-info">Update Size</button>
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
