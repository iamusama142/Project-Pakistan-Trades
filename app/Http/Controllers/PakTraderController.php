<?php

namespace App\Http\Controllers;

use App\Models\pakTrader;
use App\Models\group;
use App\Models\addaccount;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class PakTraderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdfshowdownload(Request $req)
    {
        $method = $req->method();

        if ($req->isMethod('post')) {
            $from = $req->input('fromDate');
            $to   = $req->input('toDate');
            $name = $req->input('AccountName');
            // dd($name);
            // die;
            if ($req->has('search')) {
                // $search = DB::select("SELECT * FROM pak_traders WHERE date_create BETWEEN '$from' AND '$to' AND  purchasername= '$name'");
                $search = DB::table('pak_traders')->where('purchasername', $name)->whereBetween('date_create', [$from, $to])->get();

                $account = DB::table('addaccounts')->get();
                return view('showwheatsalepurchase', ['ViewsPage' => $search, 'account' => $account]);
            } elseif ($req->has('exportPDF')) {
                // $PDFReport = DB::table('pak_traders')->where('purchasername', $name)->get();
                $PDFReport = DB::table('pak_traders')->join('addaccounts', 'pak_traders.purchasername', '=', 'addaccounts.accountcode')->where('purchasername', $name)->whereBetween('date_create', [$from, $to])->get();

                $account = DB::table('addaccounts')->get();
                $pdf = PDF::loadView('invoice', ['PDFReport' => $PDFReport, 'account' => $account])->setPaper('a4', 'landscape');
                return $pdf->download($name . '.pdf');
            }
        } else {


            $ViewsPage = DB::select("SELECT * FROM pak_traders");

            $account = DB::table('addaccounts')->get();


            return view('showwheatsalepurchase')->with(compact('ViewsPage', 'account'));
        }
    }




    public function store(Request $request)
    {
        $data = array(
            'invoiceno' => $request->inv,
            'date_create' => $request->salepurchaseDate,
            'purchasername' => $request->purchaserName,
            'sellername' => $request->saleName,
            'p_gateno' => $request->gateNoPurchase,
            'p_vehicleno' => $request->vehicleNoPurchase,
            'p_product' => $request->productPurcahse,
            'p_firstwt' => $request->weightPurchase,
            'p_bouri' => $request->bouriPurchase,
            'p_bourirate' => $request->bouriPurchaseRate,
            'p_bouritotal' => $request->bouriTotalRatePurcahse,
            'p_bouritwo' => $request->bouri2Purchase,
            'p_bouriratetwo' => $request->bouri2PurchaseRate,
            'p_bouritwototal' => $request->bouri2TotalRatePurcahse,
            'p_thela' => $request->thelaPurchase,
            'p_thelarate' => $request->thelaRatePurchase,
            'p_thelatotal' => $request->thelaTotalRatePurchase,
            'p_thelatwo' => $request->thela2Purchase,
            'p_thelatworate' => $request->thela2RatePurchase,
            'p_thelatwototal' => $request->thela2TotalRatePurchase,
            'p_bwt' => $request->bwtPurchase,
            'p_ewt' => $request->ewtPurchase,
            'p_netwt' => $request->netPurchase,
            'p_rate' => $request->ratePurchase,
            'p_totalamount' => $request->totalAmountPurchase,
            'p_barrs' => $request->barRatePurchase,
            'p_vrent' => $request->rentPurchase,
            'p_netamount' => $request->amountPurchase,
            's_gateno' => $request->gateNoSale,
            's_vehicleno' => $request->vehicleNoSale,
            's_firstwt' => $request->weightSale,
            's_bouri' => $request->bouriSale,
            's_bourirate' => $request->bouriSaleRate,
            's_bouritotal' => $request->bouriTotalRateSale,
            's_bouritwo' => $request->bouri2Sale,
            's_bouriratetwo' => $request->bouri2SaleRate,
            's_bouritwototal' => $request->bouri2TotalRateSale,
            's_thela' => $request->thelaSale,
            's_thelarate' => $request->thelaRateSale,
            's_thelatotal' => $request->thelaTotalRateSale,
            's_thelatwo' => $request->thela2Sale,
            's_thelatworate' => $request->thela2RateSale,
            's_thelatwototal' => $request->thela2TotalRateSale,
            's_bwt' => $request->bwtSale,
            's_ewt' => $request->ewtSale,
            's_netwt' => $request->netSale,
            's_rate' => $request->rateSale,
            's_totalamount' => $request->totalAmountSale,
            's_barrs' => $request->barRateSale,
            's_vrent' => $request->rentSale,
            's_netamount' => $request->amountSale,
            'purchasenetamount' => $request->purchaseNetAmount,
            'salenetamount' => $request->SaleNetAmount,
            'profit' => $request->profit,
            'loss' => $request->loss,
            'firstwtdifference' => $request->wtDifference,
            'firstbouridifference' => $request->bour1Difference,
            'firstbouriratedifference' => $request->bour1RateDifference,
            'firstbouritotaldifference' => $request->bour1TotalDifference,
            'seconfbouridifference' => $request->bour2Difference,
            'seconfbouriratedifference' => $request->bour2RateDifference,
            'seconfbouritotaldifference' => $request->bour2TotalDifference,
            'firsttheladifference' => $request->thela1Difference,
            'firstthelaratedifference' => $request->thela1RateDifference,
            'firstthelatotaldifference' => $request->thela1TotalDifference,
            'secondtheladifference' => $request->thela2Difference,
            'secondthelaratedifference' => $request->thela2RateDifference,
            'secondthelatotaldifference' => $request->thela2TotalDifference,
            'wtdifference' => $request->bwtDifference,
            'ewtdifference' => $request->ewtDifference,
            'netewtdifference' => $request->netwtDifference,
            'ratedifference' => $request->rateDifference,
            'totalamountdifference' => $request->totalAmountDifference,
            'barrsdifference' => $request->barRateDifference,
            'vrentdifference' => $request->rentDifference,
        );
        $des = "Wheat Purchase" . $request->weightPurchase / 40 . " Bouri Rate" . $request->bouriTotalRatePurcahse . " Bouri Two" . $request->bouri2TotalRatePurcahse;
        $result = DB::table('pak_traders')->insert($data);
        $datatwo = array(
            'account_id' => $request->purchaserName,
            'inv_id' => $request->inv,
            'voucher_type' => 'Purchase Voucher',
            'decription' => $des,
            'date' => $request->salepurchaseDate,
            'Credit' => $request->amountPurchase,
        );
        $desSale = "Wheat Purchase " . $request->weightPurchase / 40 . " Bouri Rate" . $request->bouriTotalRatePurcahse . " Bouri Two" . $request->bouri2TotalRatePurcahse;
        $res = DB::table('leadgers')->insert($datatwo);
        $datathree = array(
            'account_id' => $request->saleName,
            'inv_id' => $request->inv,
            'voucher_type' => 'Sale Voucher',
            'decription' => $desSale,
            'date' => $request->salepurchaseDate,
            'Debit' => $request->amountSale,

        );
        $restwo = DB::table('leadgers')->insert($datathree);
        // insertGetid is used to use id in sessions
        return redirect('/wheatsalepurchase');
    }

    public function show_name_group(pakTrader $pakTrader)
    {
        $group_show_name = addaccount::all();
        return view('wheatsalepurchase', ['group_show_name' => $group_show_name]);
    }

    public function show_name_select(pakTrader $pakTrader)
    {
        $show_name_select = DB::table('addaccounts')->get();
        return view('wheatsalepurchase', ['show_name_select' => $show_name_select]);
    }



    // public function showwheatsalepurchase()
    // {
    //     if (isset($_GET['AccountName']) && $_GET['AccountName'] != "") {
    //         $name = $_GET['AccountName'];
    //         $wheatsalepurchase = DB::table('pak_traders')
    //             ->where('purchasername', $name)->get();
    //         // dd($wheatsalepurchase);

    //     } else if (isset($_GET['fromDate']) && $_GET['toDate'] != "") {
    //         $date2 = $_GET['fromDate'];
    //         $date = $_GET['toDate'];
    //         $wheatsalepurchase = DB::table('pak_traders')->whereBetween('date_create', [$date2, $date])->get();
    //     } else if (isset($_GET['AccountName']) && $_GET['AccountName'] != "" && isset($_GET['fromDate']) && $_GET['toDate'] != "") {
    //         $date2 = $_GET['fromDate'];
    //         $date = $_GET['toDate'];
    //         $name = $_GET['AccountName'];
    //         $wheatsalepurchase = DB::table('pak_traders')
    //             ->where('date_create', '>=', $date)->where('date_create', '<=', $date2)->where('purchasername', $name)->get();
    //     } else {
    //         $wheatsalepurchase = DB::table('pak_traders')
    //             ->get();
    //     }
    //     // $account = DB::table('addaccounts')->get();
    //     $account = DB::table('addaccounts')->get();

    //     // return $pdf->download('invoice.pdf');
    //     return view('showwheatsalepurchase')->with(compact('wheatsalepurchase', 'account'));
    // }

    // public function showwheatsalepurchase1(Request $request)
    // {
    //     if (isset($_GET['AccountName']) && $_GET['AccountName'] != "") {
    //         $name = $_GET['AccountName'];
    //         $wheatsalepurchase = DB::table('pak_traders')
    //             ->where('purchasername', $name)->get();
    //         // dd($wheatsalepurchase);

    //     } else if (isset($_GET['fromDate']) && $_GET['toDate'] != "") {
    //         $date2 = $_GET['fromDate'];
    //         $date = $_GET['toDate'];
    //         $wheatsalepurchase = DB::table('pak_traders')->whereBetween('date_create', [$date2, $date])->get();
    //     } else if (isset($_GET['AccountName']) && $_GET['AccountName'] != "" && isset($_GET['fromDate']) && $_GET['toDate'] != "") {
    //         $date2 = $_GET['fromDate'];
    //         $date = $_GET['toDate'];
    //         $name = $_GET['AccountName'];
    //         $wheatsalepurchase = DB::table('pak_traders')
    //             ->where('date_create', '>=', $date)->where('date_create', '<=', $date2)->where('purchasername', $name)->get();
    //     } else {
    //         $wheatsalepurchase = DB::table('pak_traders')
    //             ->get();
    //     }
    //     // $account = DB::table('addaccounts')->get();
    //     $account = DB::table('addaccounts')->get();

    //     return view('showwheatsalepurchase')->with(compact('wheatsalepurchase', 'account'));
    // }
    public function update_salepurchase_data(Request $request, $id,)
    {
        $id = $request->id;
        $invoicepak = $request->invoiceno;

        $update = array(
            'invoiceno' => $request->inv,
            'date_create' => $request->salepurchaseDate,
            'purchasername' => $request->purchaserName,
            'sellername' => $request->saleName,
            'p_gateno' => $request->gateNoPurchase,
            'p_vehicleno' => $request->vehicleNoPurchase,
            'p_product' => $request->productPurcahse,
            'p_firstwt' => $request->weightPurchase,
            'p_bouri' => $request->bouriPurchase,
            'p_bourirate' => $request->bouriPurchaseRate,
            'p_bouritotal' => $request->bouriTotalRatePurcahse,
            'p_bouritwo' => $request->bouri2Purchase,
            'p_bouriratetwo' => $request->bouri2PurchaseRate,
            'p_bouritwototal' => $request->bouri2TotalRatePurcahse,
            'p_thela' => $request->thelaPurchase,
            'p_thelarate' => $request->thelaRatePurchase,
            'p_thelatotal' => $request->thelaTotalRatePurchase,
            'p_thelatwo' => $request->thela2Purchase,
            'p_thelatworate' => $request->thela2RatePurchase,
            'p_thelatwototal' => $request->thela2TotalRatePurchase,
            'p_bwt' => $request->bwtPurchase,
            'p_ewt' => $request->ewtPurchase,
            'p_netwt' => $request->netPurchase,
            'p_rate' => $request->ratePurchase,
            'p_totalamount' => $request->totalAmountPurchase,
            'p_barrs' => $request->barRatePurchase,
            'p_vrent' => $request->rentPurchase,
            'p_netamount' => $request->amountPurchase,
            'purchasenetamount' => $request->purchaseNetAmount,
            'salenetamount' => $request->SaleNetAmount,
            's_gateno' => $request->gateNoSale,
            's_vehicleno' => $request->vehicleNoSale,
            's_firstwt' => $request->weightSale,
            's_bouri' => $request->bouriSale,
            's_bourirate' => $request->bouriSaleRate,
            's_bouritotal' => $request->bouriTotalRateSale,
            's_bouritwo' => $request->bouri2Sale,
            's_bouriratetwo' => $request->bouri2SaleRate,
            's_bouritwototal' => $request->bouri2TotalRateSale,
            's_thela' => $request->thelaSale,
            's_thelarate' => $request->thelaRateSale,
            's_thelatotal' => $request->thelaTotalRateSale,
            's_thelatwo' => $request->thela2Sale,
            's_thelatworate' => $request->thela2RateSale,
            's_thelatwototal' => $request->thela2TotalRateSale,
            's_bwt' => $request->bwtSale,
            's_ewt' => $request->ewtSale,
            's_netwt' => $request->netSale,
            's_rate' => $request->rateSale,
            's_totalamount' => $request->totalAmountSale,
            's_barrs' => $request->barRateSale,
            's_vrent' => $request->rentSale,
            's_netamount' => $request->amountSale,
            'purchasenetamount' => $request->purchaseNetAmount,
            'salenetamount' => $request->SaleNetAmount,
            'profit' => $request->profit,
            'loss' => $request->loss,
            'firstwtdifference' => $request->wtDifference,
            'firstbouridifference' => $request->bour1Difference,
            'firstbouriratedifference' => $request->bour1RateDifference,
            'firstbouritotaldifference' => $request->bour1TotalDifference,
            'seconfbouridifference' => $request->bour2Difference,
            'seconfbouriratedifference' => $request->bour2RateDifference,
            'seconfbouritotaldifference' => $request->bour2TotalDifference,
            'firsttheladifference' => $request->thela1Difference,
            'firstthelaratedifference' => $request->thela1RateDifference,
            'firstthelatotaldifference' => $request->thela1TotalDifference,
            'secondtheladifference' => $request->thela2Difference,
            'secondthelaratedifference' => $request->thela2RateDifference,
            'secondthelatotaldifference' => $request->thela2TotalDifference,
            'wtdifference' => $request->bwtDifference,
            'ewtdifference' => $request->ewtDifference,
            'netewtdifference' => $request->netwtDifference,
            'ratedifference' => $request->rateDifference,
            'totalamountdifference' => $request->totalAmountDifference,
            'barrsdifference' => $request->barRateDifference,
            'vrentdifference' => $request->rentDifference,
        );
        $des = "Wheat Purchase " . $request->weightPurchase / 40 . " Bouri Rate" . $request->bouriTotalRatePurcahse . " Bouri Two" . $request->bouri2TotalRatePurcahse;

        $result = DB::table('pak_traders')->where('id', $id)->update($update);
        $datatwo = array(
            'account_id' => $request->purchaserName,
            'inv_id' => $request->inv,
            'voucher_type' => 'Purchase Voucher',
            'decription' => $des,
            'date' => $request->salepurchaseDate,
            'Credit' => $request->amountPurchase,
            'Debit'=>'0',

        );
        $p="Purchase Voucher";
        $resone = DB::table('leadgers')->where('inv_id', $id)->where('voucher_type',$p)->update($datatwo);
        $desSale = "Wheat Purchase" . $request->weightPurchase / 40 . " Bouri Rate" . $request->bouriTotalRatePurcahse . " Bouri Two" . $request->bouri2TotalRatePurcahse;

        $datathree = array(
            'account_id' => $request->saleName,
            'inv_id' => $request->inv,
            'voucher_type' => 'Sale Voucher',
            'decription' => $desSale,
            'date' => $request->salepurchaseDate,
            'Credit'=>'0',
            'Debit' => $request->amountSale,


        );
        $v="Sale Voucher";



        // dd($datathree);
        $restwo = DB::table('leadgers')->where('inv_id', $id)->where('voucher_type',$v)->update($datathree);
        $ViewsPage = DB::select("SELECT * FROM pak_traders");
        $account = DB::table('addaccounts')->get();
        return view('showwheatsalepurchase')->with(compact('ViewsPage', 'account'));
    }

    public function edit_salepurchase_data(Request $request, $id)
    {
        $id = $request->id;
        $wheat_data = DB::table('pak_traders')->find($id);
        $group_show_edit = addaccount::all();
        // // $url = url('salepurchase.update' . "/" . $id);
        // return view('editaccounts', ['group_data' => $group_data]);
        return view('editwheatsale')->with(compact('wheat_data', 'group_show_edit',));
    }
}
