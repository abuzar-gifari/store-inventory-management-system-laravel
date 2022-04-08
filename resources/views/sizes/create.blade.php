@extends('layouts.master')

@section('main')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Size Create</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Size Create</li>
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
                  <h5 class="m-0">Create Size</h5>
                </div>
                <form class="form-horizontal" action="{{ route('sizes.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Size Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="size" id="size" placeholder="Enter Size">
                          @if ($errors->has('size'))
                            <span class="text-danger">{{ $errors->first('size') }}</span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-info">Create Size</button>
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
