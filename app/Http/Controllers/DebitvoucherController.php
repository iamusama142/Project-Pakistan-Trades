<?php

namespace App\Http\Controllers;

use App\Models\debitvoucher;
use App\Models\addaccount;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use PDF;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Http\Request;

class DebitvoucherController extends Controller
{
    public function accountshow()
    {
        $group_show_edit = addaccount::all();
        return view('debitvoucher')->with(compact('group_show_edit',));
    }
    public function storedebit(Request $request)
    {
        $data = array(
            'debitvoucherno' => $request->debitno,
            'p_accountname' => $request->AccountName,
            'ammount' => $request->ammount,
            'description' => $request->description,
        );
        $result = DB::table('debitvouchers')->insert($data);
        $datathree = array(
            'account_id' => $request->AccountName,
            'voucher_type' => 'Debit Voucuher',
            'date' => Carbon::now(),
            'decription' => $request->description,
            'Debit' => $request->ammount,
        );
        $res = DB::table('leadgers')->insert($datathree);
        $last = debitvoucher::all()->last();
        $getdata = $last->debitvoucherno;
        $grouplist = DB::table('addaccounts')
            ->join('debitvouchers', 'debitvouchers.p_accountname', '=', 'addaccounts.accountcode')
            ->where('debitvoucherno', $getdata)
            ->get();
        $pdf = PDF::loadView('debitPDF', ['grouplist' => $grouplist])->setPaper('a4', 'landscape');
        $date = Carbon::now();
        foreach ($grouplist as $list) {
            $accountsdetails1 = " Debit Voucher " . "$list->accountname" . "$date" . " ";
        }
        return $pdf->download($accountsdetails1 . '.pdf');
        return Redirect::to('/debitvoucher ');

    }
}
