@extends('user.layouts.user-dash')
@section('title','User')

@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>My details</h1>
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
              <form>
              <div class="form-group row">
                  <label for="inputName" class="col-sm-2 col-form-label">First Name</label>
                 <div class="col-sm-10">
                 <input type="text" class="form-control" id="inputPassword" placeholder="Password">
                 </div>
                  </div>
                <div class="form-group row">
                  <label for="inputName" class="col-sm-2 col-form-label">Second Name</label>
                 <div class="col-sm-10">
                 <input type="text" class="form-control" id="inputPassword" placeholder="Password">
                 </div>
                  </div>
                  <div class="form-group row">
                  <label for="inputPhone" class="col-sm-2 col-form-label">Phone NO.</label>
                 <div class="col-sm-10">
                 <input type="text" class="form-control" id="inputPassword" placeholder="Password">
                 </div>
                  </div>
                  <div class="form-group row">
                  <label for="inputCity" class="col-sm-2 col-form-label">City</label>
                 <div class="col-sm-10">
                 <input type="text" class="form-control" id="inputPassword" placeholder="Password">
                 </div>
                  </div>
                  <div class="form-group row">
                  <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
                 <div class="col-sm-10">
                 <input type="text" class="form-control" id="inputPassword" placeholder="Password">
                 </div>
                  </div>
                  <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Save Changes</button>
                          </div>
                          </div>
                  </form>
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