<?php


namespace App\Http\Controllers;

use App\Models\pakTrader;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PDFcontroller extends Controller
{
    //     public function download(Request $request)
    //     {
    // $data=$request;
    // echo "<pre>";
    // print_r($data);
    // die;
    //         // $tradepdf = PDF::loadview('invoice', ['tradepdf' => $tradepdf,]);
    //         // return $pdf->download('invoice.pdf');
    //         $tradepdf = DB::table('pak_traders')->join('addaccounts', 'pak_traders.purchasername', '=', 'addaccounts.id')->get();
    //         return view('invoice', ['tradepdf' => $tradepdf,]);
    //         // return $tradepdf->download('invoice.pdf',[]);
    //         // return PDF::loadview('invoice', ['tradepdf' => $tradepdf,])->download('pdfnamehere.pdf');
    //     }
    // public function downfilter( Request $request)
    // {
    //     $id = $request->id;
    //     if (isset($_GET['AccountName']) && $_GET['AccountName'] != "") {
    //         $namefilter = $_GET['AccountName'];
    //         $wheatsalepurchase = DB::table('pak_traders')
    //             ->where('purchasername', $namefilter)->get();
    //     } else if (isset($_GET['fromDate']) && $_GET['toDate'] != "") {
    //         $date2 = $_GET['fromDate'];
    //         $date = $_GET['toDate'];
    //         $wheatsalepurchase = DB::table('pak_traders')->whereBetween('date', [$date2, $date])->get();
    //     } else if (isset($_GET['AccountName']) && $_GET['AccountName'] != "" && isset($_GET['fromDate']) && $_GET['toDate'] != "") {
    //         $date2 = $_GET['fromDate'];
    //         $date = $_GET['toDate'];
    //         $namefilter = $_GET['AccountName'];
    //         $wheatsalepurchase = DB::table('pak_traders')
    //             ->where('date', '>=', $date)->where('date', '<=', $date2)->where('purchasername', $namefilter)->get();
    //     } else {
    //         $wheatsalepurchase = DB::table('pak_traders')
    //             ->get();
    //     }
    //     // $one = pakTrader::find($id);
    //     // echo "<pre>";
    //     // print_r($one);
    //     // die;
    //     $wheatsalepurchase = DB::table('pak_traders')->join('addaccounts', 'pak_traders.purchasername', '=', 'addaccounts.id')->get();
    //     return view('filterinvoice', ['wheatsalepurchase' => $wheatsalepurchase, ]);
    // }

    // public function downloadpdf(Request $request)
    // {
    //     $method = $request->method();
    //     if ($request->isMethod('get')) {
    //         $date2 = $request->input('fromDate');
    //         $date   = $request->input('toDate');
    //         if (isset($_GET['AccountName']) && $_GET['AccountName'] != "") {
    //             $name = $_GET['AccountName'];
    //             $wheatsalepurchase = DB::table('pak_traders')
    //                 ->where('purchasername', $name)->get();
    //                 dd($wheatsalepurchase);
    //         } else if (isset($_GET['fromDate']) && $_GET['toDate'] != "") {
    //             $date2 = $_GET['fromDate'];
    //             $date = $_GET['toDate'];
    //             $wheatsalepurchase = DB::table('pak_traders')->whereBetween('date_create', [$date2, $date])->get();
    //         } else if (isset($_GET['AccountName']) && $_GET['AccountName'] != "" && isset($_GET['fromDate']) && $_GET['toDate'] != "") {
    //             $date2 = $_GET['fromDate'];
    //             $date = $_GET['toDate'];
    //             $name = $_GET['AccountName'];
    //             $wheatsalepurchase = DB::table('pak_traders')
    //                 ->where('date', '>=', $date)->where('date_create', '<=', $date2)->where('purchasername', $name)->get();
    //         } else {
    //             $wheatsalepurchase = DB::table('pak_traders')
    //                 ->get();
    //         }
    //         $account = DB::table('addaccounts')->get();
    //         return view('invoice')->with(compact('wheatsalepurchase', 'account'));
    //     }
    // }


    // $tradepdf = DB::table('pak_traders')->join('addaccounts', 'pak_traders.purchasername', '=', 'addaccounts.id')->get();
    //         return view('invoice', ['tradepdf' => $tradepdf,]);
    //     $method = $request->method();
    //     if ($request->isMethod('get')) {
    //         $date2 = $request->input('fromDate');
    //         $date   = $request->input('toDate');
    //         if (isset($_GET['AccountName']) && $_GET['AccountName'] != "") {
    //             $name = $_GET['AccountName'];
    //             $wheatsalepurchase = DB::table('pak_traders')
    //                 ->where('purchasername', $name)->get();
    //         } else if (isset($_GET['fromDate']) && $_GET['toDate'] != "") {
    //             $date2 = $_GET['fromDate'];
    //             $date = $_GET['toDate'];
    //             $wheatsalepurchase = DB::table('pak_traders')->whereBetween('date_create', [$date2, $date])->get();
    //         } else if (isset($_GET['AccountName']) && $_GET['AccountName'] != "" && isset($_GET['fromDate']) && $_GET['toDate'] != "") {
    //             $date2 = $_GET['fromDate'];
    //             $date = $_GET['toDate'];
    //             $name = $_GET['AccountName'];
    //             $wheatsalepurchase = DB::table('pak_traders')
    //                 ->where('date', '>=', $date)->where('date_create', '<=', $date2)->where('purchasername', $name)->get();
    //         } else {
    //             $wheatsalepurchase = DB::table('pak_traders')
    //                 ->get();
    //         }
    //         $account = DB::table('addaccounts')->get();
    //         return view('invoice')->with(compact('wheatsalepurchase', 'account'));
    //     }
    // }
    // if ($request->has('search')) {
    //     // select search
    //     $wheatsalepurchase = DB::select("SELECT * FROM pak_traders WHERE date_create BETWEEN '$from' AND '$to'");
    //     return view('invoice', ['salepurchasedata' => $wheatsalepurchase]);
    // } elseif ($request->has('method')) {
    //     // select PDF
    //     $wheatsalepurchase = DB::select("SELECT * FROM pak_traders WHERE date_create BETWEEN '$from' AND '$to'");
    //     return view('invoice', ['wheatsalepurchase' => $wheatsalepurchase]);
    //     // return $pdf->download('invoice.pdf');
    // }
    // } else {
    // //select all
    // $wheatsalepurchase = DB::select('SELECT * FROM pak_traders');
    // return view('shwowheatsalepurchase', ['wheatsalepurchase' => $wheatsalepurchase]);
    // }
    // $show = pakTrader::find($id);
    // dd($show);
    // $pdf = PDF::loadView('invoice', compact('show'));




    public function download_pdf()
    {
        // if (isset($_GET['AccountName']) && $_GET['AccountName'] != "") {
        //     $name = $_GET['AccountName'];
        //     $wheatsalepurchase = DB::table('pak_traders')
        //         ->where('purchasername', $name)->get();
        //     // dd($wheatsalepurchase);

        // } else if (isset($_GET['fromDate']) && $_GET['toDate'] != "") {
        //     $date2 = $_GET['fromDate'];
        //     $date = $_GET['toDate'];
        //     $wheatsalepurchase = DB::table('pak_traders')->whereBetween('date_create', [$date2, $date])->get();
        // } else if (isset($_GET['AccountName']) && $_GET['AccountName'] != "" && isset($_GET['fromDate']) && $_GET['toDate'] != "") {
        //     $date2 = $_GET['fromDate'];
        //     $date = $_GET['toDate'];
        //     $name = $_GET['AccountName'];
        //     $wheatsalepurchase = DB::table('pak_traders')
        //         ->where('date_create', '>=', $date)->where('date_create', '<=', $date2)->where('purchasername', $name)->get();
        // } else {
        //     $wheatsalepurchase = DB::table('pak_traders')
        //         ->get();
        // }
        // // $account = DB::table('addaccounts')->get();
        // $account = DB::table('addaccounts')->get();
        // return $pdf->download('invoice')->with(compact('wheatsalepurchase', 'account'));
        $tradepdf = DB::table('pak_traders')->join('addaccounts', 'pak_traders.purchasername', '=', 'addaccounts.id')->get();
        $pdf=PDF::loadview('invoice',['tradepdf' => $tradepdf,]);
        return $pdf->download('invoice.pdf');
    }
}
