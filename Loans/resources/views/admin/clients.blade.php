

@extends('layouts.layout')



    


@section('title', 'Clients')

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
                       <td><a href='/admin/clientshow/{{$client->id}}'>{{ $client->lastname }}, {{ $client->firstname }} {{ $client->middlename }}</a><br>
                       
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