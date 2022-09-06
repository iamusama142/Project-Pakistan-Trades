<?php

namespace App\Http\Controllers;

use App\Models\wheatsale;
use Illuminate\Http\Request;
use App\Models\addaccount;
use Illuminate\Support\Facades\DB;

class WheatsaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\wheatsale  $wheatsale
     * @return \Illuminate\Http\Response
     */
    public function show(wheatsale $wheatsale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\wheatsale  $wheatsale
     * @return \Illuminate\Http\Response
     */
    public function edit(wheatsale $wheatsale)
    {
        //
    }

    public function showwheatsale()
    {
        $wheatsalepurchase = DB::table('pak_traders')
        ->join('addaccounts', 'pak_traders.purchasername', '=', 'addaccounts.id')->get();
       $purchasername="";
       $sellername="";
        foreach( $wheatsalepurchase as  $wheatsalepurcha){
            $purchasername=$wheatsalepurcha->purchasername;
            $sellername=$wheatsalepurcha->sellername;
        }
        $account= DB::table('addaccounts')->get();
    $account_p= DB::table('addaccounts')->where('id',$purchasername) ->get();
    $account_s = DB::table('addaccounts')->where('id',$sellername) ->get();

        $accountname="";
        foreach ($account_p as $value) {
            $accountname=$value->accountname;
        }
        $accountname2="";
        foreach ($account_s as $value) {
            $accountname2=$value->accountname;
        }
    return view('wheatdata')->with(compact('wheatsalepurchase', 'accountname','accountname2','account'));
}

}



