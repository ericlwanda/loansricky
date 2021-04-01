@extends('layouts.offlayout')



    


@section('title', 'Payments')

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

    @foreach($payments as $payment)
               @php
                $datas = DB::table('loan_taken')
                ->join('clients','clients.id','=','loan_taken.client_id')
                ->join('payments','payments.loan_id','=','loan_taken.loan_id')
                ->select('*')
                ->where('months',$payment->months)
                ->orderby('dates')
                ->get();
              @endphp


            <div class="card">
              <div class="card-header">
                
              <h3 class="card-title"><p>
                @if($payment->months == 1)
                   <h3> January</h3> 
                   @php
                   $i=1;
                   @endphp
                  @elseif($payment->months == 2)
                  <h3>February</h3> 
                  @php
                   $i=2;
                   @endphp
                  @elseif($payment->months == 3)
                  <h3>March</h3>
                  @php
                   $i=3;
                   @endphp 
                  @elseif($payment->months == 4)
                  <h3>April</h3> 
                  @php
                   $i=4;
                   @endphp
                  @elseif($payment->months == 5)
                  <h3>May</h3> 
                  @php
                   $i=5;
                   @endphp
                  @elseif($payment->months == 6)
                  <h3>June</h3> 
                  @php
                   $i=6;
                   @endphp
                  @elseif($payment->months == 7)
                  <h3> July</h3> 
                  @php
                   $i=7;
                   @endphp
                  @elseif($payment->months == 8)
                  <h3>August</h3>
                  @php
                   $i=8;
                   @endphp 
                  @elseif($payment->months == 9)
                  <h3> September</h3>
                  @php
                   $i=9;
                   @endphp 
                  @elseif($payment->months == 10)
                  <h3> october</h3>
                  @php
                   $i=10;
                   @endphp 
                  @elseif($payment->months == 11)
                  <h3> November</h3>
                  @php
                   $i=11;
                   @endphp 
                  @else
                  <h3>December </h3>
                  @php
                   $i=12;
                   @endphp 
                @endif
                </p></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
    
<table id='@php echo "example".$i @endphp' class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>#</th>
                    <th>Name</th>
                    <th>amount paid</th>
                    <th>Date</th>
                    
                  </tr>
                  </thead>
                  <tbody>

         
                    @foreach($datas as $data)
                  <tr>
                   <td>
                    {{ $loop->index }}</td>
                    <td>{{$data->lastname}},{{$data->firstname}} {{$data->middlename}}</td>

                    <td>{{$data->amount}} </td>
                    <td>{{$data->dates}}/{{$data->months}}/{{$data->years}}</td>
                    
                  </tr>
                   @endforeach


          
           

                  </tbody>
                  <tfoot>
                  <tr>
                  <th>#</th>
                  <th>Name</th>
                    <th>amount paid</th>
                    <th>Date</th>
                  </tr>
                  </tfoot>
                </table>
                <br>
                @php
                $datos = DB::table('loan_taken')
                ->join('clients','clients.id','=','loan_taken.client_id')
                ->join('payments','payments.loan_id','=','loan_taken.loan_id')
                ->select('*',DB::raw('SUM(amount) AS amounts'))
                ->where('months',$payment->months)
                ->get();


              @endphp
              @foreach($datos as $dato)
                

               <span> <h3>Total Amount: {{$dato->amounts}}</h3></span>
                
             
                @endforeach
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            @endforeach
       
  </div>
  <!-- /.content-wrapper -->
  </section>
  
  @endsection