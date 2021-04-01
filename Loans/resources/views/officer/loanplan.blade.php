@extends('layouts.offlayout')



    


@section('title', 'loan plan')

@section('content')

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
            
        
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
                <div class="card-body">
                <table id="example13" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>#</th>
                    <th>plan</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  @foreach($plans as $plan)
                     
                     <tr>
                       <td>{{ $loop->index}}</td>
                       <td>Months:{{ $plan->months }} <br>
                       Interest:{{ $plan->intrest_percentage }}<br>
                       Penalty:{{ $plan->penalty_rate }}</td>
                       <td>Edit </td>
                       
                       
                     </tr>
                   
                     @endforeach
                    
                  </tr>
          
           
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>#</th>
                    <th>plan</th>
                    <th>Action</th>
                    
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

</section>
</div>








  

  
  @endsection