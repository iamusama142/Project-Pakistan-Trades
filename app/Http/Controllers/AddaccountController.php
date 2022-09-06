<?php

namespace App\Http\Controllers;

use App\Models\addaccount;
use App\Models\group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
class AddaccountController extends Controller
{

    public function store(Request $request)
    {
        $data = array(
            'accountgroup' => $request->acc_group,
            'accountcode' => $request->acc_code,
            'accountname' => $request->acc_name,
            'phone' => $request->acc_phone1,
            'phonetwo' => $request->acc_phone2,
            'address' => $request->acc_address,
        );

        $result = DB::table('addaccounts')->insert($data);
        return redirect()->route('accountlist.showaccount');
    }

    public function show(addaccount $addaccount)
    {
        $accountlist = DB::table('addaccounts')->get();
        return view('accountlist', ['accountlist' => $accountlist]);
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $group_data = DB::table('addaccounts')->find($id);
        $group_data_edit = group::all();

        // return view('editaccounts', ['group_data' => $group_data]);
        return view('editaccounts')->with(compact('group_data','group_data_edit'));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $data = array(
            'accountgroup' => $request->acc_group,
            'accountcode' => $request->acc_code,
            'accountname' => $request->acc_name,
            'phone' => $request->acc_phone1,
            'phonetwo' => $request->acc_phone2,
            'address' => $request->acc_address,
        );
        $result = DB::table('addaccounts')->where('id', $id)->update($data);
        return redirect()->route('accountlist.showaccount');
    }

    public function Show_Group()
    {
        $group_data = group::all();
        return view('addaccount', ['group_data' => $group_data]);
    }
    public function Show_Group_edit()
    {
        $group_data_edit = group::all();
        return view('editaccounts', ['group_data_edit' => $group_data_edit]);
    }
}
