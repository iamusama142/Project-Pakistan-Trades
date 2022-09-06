<?php

namespace App\Http\Controllers;

use App\Models\group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function store_group_data(Request $request)
    {
      
            $gname = $request->accountgroup;
            $g_obj = new group();
            $g_obj->groupname = $gname;
            $g_obj->save();
            $request->session()->flash('insert', 'Rocord Inserted Successfully...');
            return redirect('addaccountgroup');

    }
    public function show_group_data(group $group)
    {
        $datas = group::all();
        return view('accountgrouplist')->with('data', $datas);
    }

    public function edit_group_data(group $group, $eid, Request $request)
    {
        $gname = $request->accountgroup;
        $g_obj = group::find($eid);
        $g_obj->groupname = $gname;
        $g_obj->save();
        $request->session()->flash('update', 'Rocord Updated Successfully...');
        return redirect('groupdata');
    }

    public function update_group_data(Request $request, group $group, $uid)
    {
        $one = group::find($uid);
        return view('editgroup')->with('data', $one);
    }

    
}
