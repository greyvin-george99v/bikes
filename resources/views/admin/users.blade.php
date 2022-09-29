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
                    <th>Role</th>
                    <th>Date Joined</th>
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
                    <td>
                      @if($row->is_admin)
                      Admin
                      @else
                      User
                      @endif
                      
                    </td>
                    <td>{{date("m-d-Y", strtotime($row->created_at))}}</td>
                    <td>
                    <a href="admin/edit/{{ $row->id }}"class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                      @if($row->thrashed())
                      <form action="admin/role-restore/{{ $row->id }}" method="POST" onsubmit="return confirm('Are you sure you want to re-activate user?')">
                      {{csrf_field()}}
                      <input type="hidden" name="id" value = "{{auth()->row()->id}}">
                      <button type="submit" class="btn btn-success">RESTORE</button>  
                      @else
                      <form action="admin/role-delete/{{ $row->id }}" method="POST" onsubmit="return confirm('Are you sure?')">
                        {{csrf_field()}}
                        {{ method_field('DELETE')}}
                        
                        <button type="submit" class="btn btn-danger">DELETE</button>  
                      </form>
                      @endif
                  </td>
                    
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection