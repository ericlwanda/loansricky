

@extends('layouts.offlayout')



    


@section('title', 'Clients')

@section('content')
<section>
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
              <!-- /.card-header -->
              <div class="card-body">
              <div class='container-flluid'>
              <button type="button" class="btn  btn-primary "data-toggle="modal" data-target="#exampleModal">Add Client</button>
                </div>
                <br>
                
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Client</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    	<form method="post">
			
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label for="" class="control-label">Last Name</label>
						<input name="lastname" class="form-control" required="" value="">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="">First Name</label>
						<input name="firstname" class="form-control" required="" value="">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="">Middle Name</label>
						<input name="middlename" class="form-control" value="">
					</div>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-6">
							<label for="">Address</label>
							<textarea name="address" id="" cols="40" rows="3" class="form-control" required=""></textarea>
				</div>
				<div class="col-md-5">
					<div class="">
						<label for="">Contact #</label>
						<input type="text" class="form-control" name="contact" value="">
					</div>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-6">
							<label for="">Email</label>
							<input type="email" class="form-control" name="email" value="">
				</div>
				<div class="col-md-5">
					<div class="">
						<label for="">Tax ID</label>
						<input type="text" class="form-control" name="tax_id" value="">
					</div>
				</div>
				<div class="col-md-5">
					<div class="">
						<label for="">location</label>
						<input type="text" class="form-control" name="location" value="">
					</div>
				</div>
				
			</div>
			
		</form>
      </div>
      <div class="modal-footer">
        
      <input type="submit" class="btn btn-primary container-fluid" name="add_user" Value="Add">
      </div>
    </div>
  </div>
</div>    <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Client</th>
                    <th>Payment made</th>
                    <th>Payment required</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($clients as $client)
                     
                     <tr>
                       <td>{{ $loop->index}}</td>
                       <td><a href='/officer/clientshow/{{$client->id}}'>{{ $client->lastname }}, {{ $client->firstname }} {{ $client->middlename }}</a><br>
                       
                       </td>
                       <td> payments made</td>
                       <td> payments required</td>
                       <td>Edit </td>
                       
                       
                     </tr>
                   
                     @endforeach
                  
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>#</th>
                    <th>Client</th>
                    <th>Payment made</th>
                    <th>Payment required</th>
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