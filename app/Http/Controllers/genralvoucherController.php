<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addaccount;
use App\Models\generalvoucher;
use PDF;
use Illuminate\Support\Carbon;

use Illuminate\Support\Facades\DB;

class genralvoucherController extends Controller
{
    public function accountshowgenral()
    {
        $group_show_edit = addaccount::all();
        return view('generalvoucher')->with(compact('group_show_edit',));
    }
    public function generalstore(Request $request)
    {
        $accountname = $request->business;
        $cvammount = $request->creditammount;
        $dvammount = $request->debitammount;
        $total = $request->totalsumval;
        $g_obj = new generalvoucher();
        for ($i = 0; $i < count($request->business); $i++) {
            $datathree = array(
                'jvno' => $request->jvno,
                'acc_id' => $request->business[$i],
                'cvammount' => $request->cvammount[$i],
                'dvammount' => $request->dvammount[$i],
                'date' => $request->date,
                'description' => $request->description[$i],
            );
            $restwo = DB::table('generalvouchers')->insert($datathree);
            $datatwo = array(
                'voucher_type' => 'Journal  Voucher',
                'account_id' => $request->business[$i],
                'decription' => $request->description[$i],
                'date' => $request->date,
                'Credit' => $request->cvammount[$i],
                'Debit' => $request->dvammount[$i],
            );
            $resthree = DB::table('leadgers')->insert($datatwo);
        }
        $last = generalvoucher::all()->last();
        $getdata = $last->jvno;
        $grouplist = DB::table('addaccounts')
            ->join('generalvouchers', 'generalvouchers.acc_id', '=', 'addaccounts.accountcode')
            ->where('jvno', $getdata)
            ->get();
        $pdf = PDF::loadView('generalPDF', ['grouplist' => $grouplist])->setPaper('a4', 'landscape');
        foreach ($grouplist as $list) {
            $accountsdetails1 = " Journel Voucher " . $list->date . " ";
        }
        return $pdf->download($accountsdetails1 . '.pdf');
        return redirect('generalvoucher');
    }
}
