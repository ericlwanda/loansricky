@extends('layouts.layout')



    


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
                    <td> <a href="/admin/payments/{{$year->years}}">{{$year->years}}</a></td>
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