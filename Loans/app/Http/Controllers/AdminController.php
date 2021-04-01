<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_officer;
use App\Models\loan_type;
use App\Models\loan_plan;
use App\Models\loan_taken;
use App\Models\client;
use App\Models\payment;
use DB;
class AdminController extends Controller
{
    //
    public function index(){

        return view('admin.dashboard');
    }

    public function client(){
            $clients=client::all();
        return view('admin.clients',['clients'=>$clients]);
    }

    public function years(){
        
        $yearse=
        DB::table('payments')
        ->distinct()
        ->select('years')
        ->get();
    return view('admin.years',['years'=>$yearse]);
}
    public function payment($year){
            $payments = DB::table('loan_taken')
            ->join('clients','clients.id','=','loan_taken.client_id')
            ->join('payments','payments.loan_id','=','loan_taken.loan_id')
            ->distinct('months')
            ->select('months')
            ->where('years',$year)
            ->orderby('months','asc')
            ->get();

                
        return view('admin.payments',['payments'=>$payments]);
    }
    public function loan(){
        $details =DB::table('loan_taken')
            ->join('clients','clients.id','=','loan_taken.client_id')
            ->select('*')
            ->get();
        
            
        return view('admin.loans',['details'=>$details]);
    }
    public function loanplan(){
        $plans=loan_plan::all();
        return view('admin.loanplan',['plans'=>$plans]);
    }
    public function loantype(){
            $type=loan_type::all();
        return view('admin.loantypes',['types'=>$type]);
    }
    public function loanofficer(){
        $officers = tbl_officer::all();
        return view('admin.loanofficers', ['officers' => $officers]);
    }
    
    public function clientshow($id){
        $infos=client::findorfail($id);
        return view('admin.clientshow',['infos' => $infos]);
    }
}

