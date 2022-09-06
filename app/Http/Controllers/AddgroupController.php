<?php

namespace App\Http\Controllers;

use App\Models\addgroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class AddgroupController extends Controller
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
        $data = array(
            'groupname' => $request->accountgroup,
        );
        $result = DB::table('addgroups')->insert($data);
        return redirect()->route('accountgrouplist.showgroup');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\addgroup  $addgroup
     * @return \Illuminate\Http\Response
     */
    public function show(addgroup $addgroup)
    {
        $grouplist = DB::table('addgroups')->get();
        return view('accountgrouplist',['grouplist'=>$grouplist]);

        // return($grouplist);
    }

    public function groupedit( Request $request)
    {
        $id = $request->id;
        $list =DB::table('addgroups')->find($id);
        return redirect('editgroup',['list'=>$list]);
    }


    public function update(Request $request)
    {
$id = $request->id;
$data = array(
    'groupname' => $request->accountgroup,
);
$result =DB::table('addgroups')->where('id',$id)->update($data);
return redirect()->route('grouplist.showgroup');
    }
}
