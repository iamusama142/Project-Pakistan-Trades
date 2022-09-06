<?php

namespace App\Http\Controllers;

use App\Models\creditvoucher;
use Illuminate\Http\Request;
use App\Models\addaccount;
use DateTime;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use PDF;
use Redirect;

class CreditvoucherController extends Controller
{
    public function accountshowS()
    {
        $group_show_edit = addaccount::all();
        return view('creditvoucher')->with(compact('group_show_edit',));
    }
    public function storecredit(Request $request)
    {
        $data = array(
            'creditvoucherno' => $request->creditno,
            'c_accountname' => $request->AccountName,
            'c_ammount' => $request->ammount,
            'c_description' => $request->description,
        );
        $result = DB::table('creditvouchers')->insert($data);
        $datatwo = array(
            'account_id' => $request->AccountName,
            'voucher_type' => 'Credit Voucuher',
            'date' => Carbon::now(),
            'decription' => $request->description,
            'Credit' => $request->ammount,
        );
        $res = DB::table('leadgers')->insert($datatwo);
        $last = creditvoucher::all()->last();
        $getdata = $last->creditvoucherno;
        $grouplist = DB::table('addaccounts')
            ->join('creditvouchers', 'creditvouchers.c_accountname', '=', 'addaccounts.accountcode')
            ->where('creditvoucherno', $getdata)
            ->get();
        $date = Carbon::now();
        $pdf = PDF::loadView('creditPDF', ['grouplist' => $grouplist])->setPaper('a4', 'landscape');
        foreach ($grouplist as $list) {
            $accountsdetails1 = " Credit Voucher " . "$list->accountname" . "$date" . " ";
        }
        return  $pdf->download($accountsdetails1 . '.pdf');
        return Redirect::to('/creditvoucher');
    }
}
