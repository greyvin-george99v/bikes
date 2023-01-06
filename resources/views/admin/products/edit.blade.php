@extends('admin.layouts.admin-dash')
@section('title' , 'create')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <a href="{{route('products.index')}}">
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

<form class="p-2" action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
<div>
  <div class="form-group">
       <label for="name">Product Name</label>
           <input type="text" class="form-control @error('name') border-danger @enderror" id="base-input" name="name" value="{{ $product->name }}" >
           @error('name')
          <div class="text-danger">{{ $message }}</div>
            @enderror
  </div>
  <div class="form-group">
       <label for="description">Description</label>
       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$product->description}}<</textarea>
   
           @error('description')
          <div class="text-danger">{{ $message }}</div>
            @enderror
  </div>
 
                    <div class="form-group">
                    <label for="image">Upload Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input  @error('image') border-danger @enderror" name="image">
                        <img src="{{Storage::url($product->image)}}" width="50" height="50"alt="">
                        @error('image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <label class="custom-file-label" >Choose file</label>
                      </div>
                      <!-- <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div> -->
                    </div>  
                    <div class="form-group">
       <label for="name">Color</label>
           <input type="text" class="form-control" id="base-input" name="color"  value="{{$product->color}}" >
        </div>
        <div class="form-group">
       <label for="name">Grips</label>
           <input type="text" class="form-control" id="base-input" name="grips"  value="{{$product->grips}}">
        </div>
        <div class="form-group">
       <label for="name">Frame Size</label>
           <input type="text" class="form-control" id="base-input" name="frame_size" value="{{$product->frame_size}}" >
        </div>
        <label for="name">Country Registration</label>
           <input type="text" class="form-control" id="base-input" name="country_registration" value="{{$product->country_registration}}">
        </div>
        <div class="form-group">
       <label for="price">Price</label>
        <input type="text" class="form-control" name="price" value="{{$product->price}}" >
         @error('price')
        <div class="text-danger">{{ $message }}</div>
         @enderror

            <div class="form-group">
            <label for="category">Category</label>
            <select class="form-select" name="category_id" >
            <option selected>Select Category</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{ $category->name }}</option>
               
                @endforeach
            </select>

        </div>

  </div>
  </div>    
    </div>
      </div>
       </div>
         </div>
         <div class="card-footer">
       <button type="submit" class="btn btn-primary">Update Product</button>
      </div>
       </div>
       
       </div>
</form>
</section>
@endsection('content')