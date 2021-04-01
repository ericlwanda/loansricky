@extends('layouts.offlayout')



    


@section('title', 'years')

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
              <div class='container-flluid'>
              <button type="button" class="btn  btn-primary "data-toggle="modal" data-target="#exampleModal">Add Payment</button>
                </div>
                <br>
                
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  method="post">
			
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label for="" class="control-label">Loan Reference</label>
						<select name="loan_id" id="" class="custom-select browser-default select2">
							<option value=""></option>
	
							<option value="" ></option>
							
						</select>
						
					</div>
				</div>
				
			</div>
			<div class="row" >
				
				
			<div class="col-md-4">
			<label for="amount" class="control-label">Amount</label>
					<div class="form-group">
					
					<input type="text" name="amount" value="" id="amount" class="form-control" required>
					</div>
				</div>
				<div class="col-md-4">
				<label for="penalty" class="control-label">Penalty</label>
					<div class="form-group">
					<input type="text" name="penalty" value="" id="penalty" class="form-control">
					</div>
				</div>
				<div class="col-md-4">
				<div class="form-group">
				<label for="" class="control-label">Date</label>
                                    <select class="custom-select browser-default select2"  name="date">
									
                                                        <option value="">Choose date</option>
                                                     
                                                <option value=""></option>
                                        
                                    </select>
                            </div>
				</div>
				<div class="col-md-4">
				<div class="form-group">
				<label for="" class="control-label">Month</label>
                                                    <select class="custom-select browser-default select2" id="selectmonth" name="month">
                                                        <option value="">Choose month</option>
                                                   
                                                <option value=""></option>
                                       
                                    </select>
                            </div>
				</div>
				<div class="col-md-4">
				<div class="form-group">
				<label for="" class="control-label">Year</label>
                                                    
                                                    <select name = "year" class="custom-select browser-default select2" id="exampleFormControlSelect1">
                                                        <option value="">Choose year</option>
                                                     
                                                        <option value=""></option>
                                                        
                                                    </select>
                                                </div>
				</div>


				<div class="container-fluid">

				<input type="submit" name="save" value="save" class="btn btn-success" >

				</div>
			</div>
		</form>
</div>
  </div>
</div>
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Year</th>
                    
                    
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                   @foreach($years as $year)
                    <td>{{ $loop->index }}</td>
                    <td> <a href="/officer/payments/{{$year->years}}">{{$year->years}}</a></td>
                    @endforeach
                  </tr>
              
                
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>#</th>
                    <th>Year</th>
                    
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