@extends('layouts.master')

@section('main')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Category List</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Category List</li>
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
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="m-0">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary">Create a Category</a>
                    
                  </h5>
                </div>
                <table class="table table-bordered datatable pr-2 pl-2">
                  <thead>
                    <tr>
                      <th>#SL</th>
                      <th>Name</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if ($categories)
                      @foreach ($categories as $key=>$cat)
                        <tr>
                          <td>{{ ++$key }}</td>
                          <td>{{ $cat->name ?? "" }}</td>
                          <td>
                            <a href="{{ route('categories.edit',$cat->id) }}" class="btn btn-success btn-sm">
                              <i class="fa fa-edit"></i>
                            </a>
                          </td>
                          <td>
                            <form action="{{ route('categories.destroy',$cat->id) }}" method="post">
                              @csrf
                              @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                  <i class="fa fa-trash"></i>  
                                </button>
                            </form>
                          </td>
                        </tr>                        
                      @endforeach
                    @endif
                  </tbody>
                </table>
                
              </div>
  
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->





@endsection
