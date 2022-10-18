@extends('admin.layouts.admin-dash')
@section('title', 'Products')
@section('content')

<section class="content-header">
<div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Products Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
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
              <h3 class="card-title"><a href="{{route('products.create')}}">Add New Product</a></h3>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Product Name</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Color</th>
                    <th>Grips</th>
                    <th>Frame-size</th>
                    <th class="text-center">Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $product)
                  <tr>
                  <td>{{ $product->name}}</td>  
                  <td ><img src ="{{ Storage::url($product->image) }}" width="100" height="100"></td>
                  <td>{{ $product->category->name }}</td>
                  <td class="py-4 px-6">{{$product->description}}</td>
                  <td class="py-4 px-6">{{$product->price}}</td>
                  <td>{{ $product->color }}</td>
                  <td>{{ $product->grips }}</td>
                  <td>{{ $product->frame_size }}</td>




                  <td>
                    <div class="d-inline-flex p-2">
                    <a href="{{route('products.edit', $product->id)}}" class="btn btn-primary">Edit</a>
                    &nbsp
                    &nbsp


                    
                   
                      <form action="{{ route('products.destroy' , $product->id)}}" method="POST" onsubmit="return confirm('Are you sure?')">
                      {{csrf_field()}}
                      {{ method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger">DELETE</button>  
                  </form>
                  </div> 
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
@endsection('content')