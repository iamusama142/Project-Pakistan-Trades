<?php

namespace App\Http\Controllers;

use App\Models\leadger;
use App\Models\pakTrader;
use App\Models\addaccount;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeadgerController extends Controller
{

    public function leadgerdetail(Request $req)
    {
        $method = $req->method();

        if ($req->isMethod('post')) {
            $from = $req->input('fromDate');
            $to   = $req->input('toDate');
            $name = $req->input('AccountName');
            // dd($from);
            // die;
            if ($req->has('search')) {
                // $search = DB::select("SELECT * FROM leadgers WHERE date BETWEEN '$from' AND '$to' AND  account_id= '$name'");
                $search = DB::table('leadgers')->join('addaccounts', 'leadgers.account_id', '=', 'addaccounts.accountcode')->where('account_id', $name)->whereBetween('date', [$from, $to])->get();
                $creditsum = DB::table('leadgers')->where('account_id', $name)->where('date', '<', $from)->sum('Credit');
                $debitsum = DB::table('leadgers')->where('account_id', $name)->where('date', '<', $from)->sum('Debit');
                $openbalance = $creditsum - $debitsum;
                $accountsdetails1 = DB::table('addaccounts')->get();
                return view('leader-form', ['leadger' => $search, 'accountsdetails1' => $accountsdetails1, 'openbalance' => $openbalance,]);
            } else if ($req->has('exportPDF')) {
                $PDFReport = DB::table('leadgers')->join('addaccounts', 'leadgers.account_id', '=', 'addaccounts.accountcode')->where('account_id', $name)->whereBetween('date', [$from, $to])->get();
                $creditsum = DB::table('leadgers')->where('account_id', $name)->where('date', '<', $from)->sum('Credit');
                $debitsum = DB::table('leadgers')->where('account_id', $name)->where('date', '<', $from)->sum('Debit');
                $openbalance = $creditsum - $debitsum;
                $accountsdetails1 = DB::table('addaccounts')->get();
                $from = $req->input('fromDate');

                $pdf = PDF::loadView('leadgerPDF', ['PDFReport' => $PDFReport, 'accountsdetails1' => $accountsdetails1, 'openbalance' => $openbalance, 'from' => $from])->setPaper('a4', 'landscape');
                foreach ($PDFReport as $list) {
                    $accountsdetails1 =  $list->accountname . " " . $from . " " . $to . " Leadger Report " .  " ";
                }
                return $pdf->download($accountsdetails1 . '.pdf');
            }

        } else {

            $leadger = DB::table("leadgers")->join('addaccounts', 'leadgers.account_id', '=', 'addaccounts.accountcode')
                ->get();
            $from = $req->input('fromDate');
            $to   = $req->input('toDate');
            $name = $req->input('AccountName');

            $accountsdetails1 = DB::table('addaccounts')->get();
            return view('leader-form')->with(compact('leadger', 'accountsdetails1',));
        }
    }
    public function showdetails()
    {


        $leadger = DB::table('addaccounts')
            ->join('leadgers', 'leadgers.account_id', '=', 'addaccounts.accountcode')
            ->get();
        $grouplist = DB::table('leadgers')->get();
        return view('leader-form')->with(compact('grouplist', 'leadger',));


        // $grouplist = DB::table('generalvouchers')->latest()->first();
        // return view('generalPDF')->with(compact('grouplist'));
    }
    public function showleadger()
    {
        $leadger = DB::table('leadgers')
            ->join('addaccounts', 'leadgers.account_id', '=', 'addaccounts.id')
            // ->join('creditvouchers','leadgers.account_id','=','creditvouchers.id')
            // ->join('debitvouchers','leadgers.account_id','=','debitvouchers.accountname')
            ->get();


        return view('leader-form', ['leadger' => $leadger]);

        //  return($leadger);
    }
}
