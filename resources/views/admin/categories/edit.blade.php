@extends('admin.layouts.admin-dash')
@section('title','Edit')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <a href="{{route('categories.index')}}">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit</li>
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
             
              <h3 class="card-title">Edit</h3>
              </div>

<form action="{{route('categories.update', $category->id)}}" method="POST" enctype="multipart/form-data">
@csrf
 @method('PUT')
  <div class="form-group p-2">
       <label for="name">Category Name</label>
           <input type="text" class="form-control" id="base-input"name="name" value ="{{$category->name}}">
  </div>
 
          <div class="form-group p-2">
                    <label for="exampleInputFile">Upload Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" name="image">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                        <img src="{{ Storage::url($category->image) }}" alt="">
                      </div>
                    </div>
                  
   </div> 
   <div class="form-group">
       <label for="description">Description</label>
       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$category->description}}<</textarea>
   
           @error('description')
          <div class="text-danger">{{ $message }}</div>
            @enderror
  </div>
      </div>
       </div>
         </div>
       </div>
       <div class="card-footer">
       <button type="Submit" class="btn btn-primary">Update Category</button>

                </div>
</form>
</section>

@endsection