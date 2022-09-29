@extends('admin.layouts.admin-dash')
@section('title','Create')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <a href="{{route('categories.index')}}">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Content header -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
             
              <h3 class="card-title">Create</h3>
              </div>

<form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
  @csrf

  <div class="form-group">
       <label for="name">Category Name</label>
           <input type="text" class="form-control" id="base-input" name="name">
  </div>
 
    <div class="form-group">
                    <label for="exampleInputFile">Upload Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                        <label class="custom-file-label" >Choose file</label>
                    
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>            
    </div>
      </div>
       </div>
         </div>
       </div>
       <div class="card-footer">
       <button type="submit" class="btn btn-primary">Create Category</button>

                </div>
</form>
</section>

@endsection