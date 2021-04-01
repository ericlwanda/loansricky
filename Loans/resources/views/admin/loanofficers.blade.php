@extends('layouts.layout')



    


@section('title', 'Loan officers')

@section('content')
  
<section class="container-fluid">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
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


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <div>
              
            </div>
            
           
              <!-- /.card-header -->
              <div class="card-body">
              <div class='container-flluid'>
              <button type="button" class="btn  btn-primary btn-lg"data-toggle="modal" data-target="#exampleModal">Add officer</button>
                </div>
                <br>
                
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add officer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  method="post" >
	<div class="form-group">
			<label for="firstname">Firstname</label>
			<input type="text" name="firstname" id="firstname" class="form-control" value="" required>
		</div>
		<div class="form-group">
			<label for="lastname">Lastname</label>
			<input type="text" name="lastname" id="lastname" class="form-control" value="" required>
		</div>
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" class="form-control" value="" required>
           <div class="container-fluid"> <h4 style="color:red;"></h4></div>
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" class="form-control" value="" required>
		</div>

		<div class="form-group">
			<label for="location">Branch</label>
			<input type="text" name="location" id="location" class="form-control" value="" required>
		</div>
		<div class="container-fluid"><h4 style="color:green;" ></h4></div>
		
        
	</form>
      </div>
      <div class="modal-footer">
        
      <input type="submit" class="btn btn-primary container-fluid" name="add_user" Value="Add">
      </div>
    </div>
  </div>
</div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Location</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($officers as $officer)
                     
                  <tr>
                    <td>{{ $loop->index}}</td>
                    <td>{{ $officer->firstname }} {{ $officer->lastname }}</td>
                    <td>{{ $officer->username }} </td>
                    <td>{{ $officer->location }}</td>
                    <td>edit</td>
                  </tr>
                
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>#</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Location</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
       
  </div>
  <!-- /.content-wrapper -->
  </section>
  
  @endsection