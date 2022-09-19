@extends('admin.layouts.admin-dash')
@section('title','Users')

@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>UsersTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
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
                <h3 class="card-title">Registered Users</h3>
              </div>
              <x-success-status class="mb-4" :status="session('message')" />
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Billing Address</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $row)
                  <tr>
                  <td>{{ $row->id}}</td>  
                  <td>{{ $row->name}}</td>
                    <td>{{ $row->email}}</td>
                    <td>Billing Address</td>
                    <td>
                    <a href="admin/edit/{{ $row->id }}"class="btn btn-primary">Edit</a>
                    
                    </td>
                    <td>
                      <form action="admin/role-delete/{{ $row->id }}" method="POST">
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
                  <!-- <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot> -->
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