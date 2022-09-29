@extends('admin.layouts.admin-dash')
@section('title','Edit')

@section('content')
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>UsersTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Categories</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <h3 class="card-title"><a href="{{route('categories.create')}}">Add New Category</a></h3>
              </div>
            

              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    
                    <th>Edit</th>
                    <th>Delete</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($categories as $category)
                  <tr>
                  <td>{{ $category->name}}</td>  
                  <td ><img src ="{{ Storage::url($category->image) }}" width="100" height="100"></td>
                  <td>Description</td>
                   
                  <td>
                    <a href="{{route('categories.edit', $category->id)}}" class="btn btn-primary">Edit</a>
                    
                    </td>
                    <td>
                      <form action="{{ route('categories.destroy' , $category->id)}}" method="POST" onsubmit="return confirm('Are you sure?')">
                      {{csrf_field()}}
                      {{ method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger">DELETE</button>  
                  </form> 
                  </td>



                    <!-- <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td> -->
                  </tr>
                  @endforeach
                  
                  </tbody>
             
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @endsection
