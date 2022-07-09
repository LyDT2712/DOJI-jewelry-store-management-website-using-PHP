<?php

namespace App\Http\Controllers;

use App\Models\billsban;
use App\Models\khachhang;
use Illuminate\Http\Request;

class billsbancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = billsban::all();
        $kh= khachhang::all();
        return view('billsban.index',['billsban'=>$db,'khachhang'=>$kh]);
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
     * @param  \App\Models\billsban  $billsban
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $db = billsban::all($id);
        $kh= khachhang::all();
        return view('billsban.index',['billsban'=>$db,'khachhang'=>$kh]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\billsban  $billsban
     * @return \Illuminate\Http\Response
     */
    public function edit(billsban $billsban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\billsban  $billsban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $db = billsban::find($request->sid);
         $db->name=$request->sname;
         $db->date_order=$request->sdate_order;
         $db->tongtien=$request->stongtien;
         $db->payment=$request->spayment;
         $db->status=$request->status;
         $db->created_at=$request->screated_at;
         $db->updated_at=$request->supdated_at;
         $db->save();
        return redirect()->to('/admin/billsban');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\billsban  $billsban
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = billsban::find($id)->delete();
        return redirect()->to('/admin/billsban');
        //
    }
}
