    @extends('admin.layouts.admin-dash')
    @section('title','Edit')

    @section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Role for Registered Users</h3>
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    </div>
                    
                    <div class="card-body">
                        <form action="admin/role-update/{{ $users->id}}" method="POST">
                            {{ csrf_field()}}
                            {{ method_field('PUT')}}
                            
                            <div class="form-group">
                                <label>Name</label>
                                    <input type="text" name="username" value="{{ $users->name}}" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                <label>Give Role</label>
                                <select name="is_admin" class="form-control">
                                    <option value="0">User</option>
                                    <option value="1">Admin</option>

                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="admin.users" class="btn btn-danger">Cancel</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection