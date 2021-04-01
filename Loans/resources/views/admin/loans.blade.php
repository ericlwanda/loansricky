@extends('layouts.layout')



    


@section('title', 'Loan Taken')

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
                    <th>Loan details</th>
                    <th>Due date</th>
                    <th>Amount paid</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
@foreach($details as $detail)
                  <tr>
                    <td>{{$loop->index}}</td>
                    <td>
                    {{$detail->lastname}},{{$detail->firstname}} {{$detail->middlename}}

                    </td>
                    <td>Loan id: {{$detail->loan_id}}<br>
                      Amount taken:{{$detail->amount_taken}}<br>
                      Branch: {{$detail->branch}}<br>
                      Date taken: {{$detail->date_taken}}
                    </td>
                    <td> {{$detail->date_due}}</td>
                    <td>X</td>
                    <td>
                      @if($detail->status == 1)
                    <span class="badge badge-warning">ongoing</span>
                    @else
                    <span class="badge badge-success">completed</span>
                   @endif
                  </td>
                  </tr>
@endforeach
           
                
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>#</th>
                    <th>Client</th>
                    <th>Loan details</th>
                    <th>Due date</th>
                    <th>Amount paid</th>
                    <th>Status</th>
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