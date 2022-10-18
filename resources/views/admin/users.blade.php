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
                    <th>Action</th>
                   
                    
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                  <tr>
                  <td>{{ $user->id}}</td>  
                  <td>{{ $user->name}}</td>
                    <td>{{ $user->email}}</td>
                    <td>
                      @if($user->is_admin)
                      Admin
                      @else
                      User
                      @endif
                      
                    </td>
                    <td>{{date("m-d-Y", strtotime($user->created_at))}}</td>
                    <td>
                      <div class="d-flex">
                    <a title="Edit" href="admin/edit/{{ $user->id }}"class="btn btn-primary">Edit</a>
                    &nbsp
                    
                      <!-- @if($user->trashed())
                      <form action="admin/role-restore/{{ $user->id }}" method="POST" onsubmit="return confirm('Are you sure you want to re-activate user?')">
                      {{csrf_field()}}
                      <input type="hidden" name="id" value = "{{auth()->user()->id}}">
                      <button title="Restore" type="submit" class="btn btn-success">RESTORE</button> 
                      </form> -->

                      <!-- @else -->
                      <form action="admin/role-delete/{{ $user->id }}" method="POST" onsubmit="return confirm('Are you sure?')">
                        {{csrf_field()}}
                        {{ method_field('DELETE')}}
                        
                        <button title="Delete" type="submit" class="btn btn-danger">DELETE</button>  
                      </form>
                      <!-- @endif -->
                      </div>
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