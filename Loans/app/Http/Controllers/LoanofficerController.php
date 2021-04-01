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

class LoanofficerController extends Controller
{
    //
    public function index(){
        
        return view('officer.dashboard');
    }

    
    public function client(){
        $clients=client::all();
        return view('officer.clients',['clients'=>$clients]);
    }
    public function clientshow($id){
        $infos=client::findorfail($id);
        return view('officer.clientshow',['infos' => $infos]);
    }
    public function years(){
        
        $yearse=
        DB::table('payments')
        ->distinct()
        ->select('years')
        ->get();
    return view('officer.years',['years'=>$yearse]);
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

            

        return view('officer.payments',['payments'=>$payments]);
    }
    public function loan(){
        $details =DB::table('loan_taken')
        ->join('clients','clients.id','=','loan_taken.client_id')
        ->select('*')
        ->get();
    
        return view('officer.loans',['details'=>$details]);
    }
    public function loanplan(){

        $plans=loan_plan::all();
        return view('officer.loanplan',['plans'=>$plans]);
    }
    public function loantype(){
        $type=loan_type::all();
        return view('officer.loantypes',['types'=>$type]);
    }
    

}

