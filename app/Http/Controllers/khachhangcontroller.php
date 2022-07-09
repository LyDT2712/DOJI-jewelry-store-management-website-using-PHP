<?php

namespace App\Http\Controllers;

use App\Models\khachhang;
use Illuminate\Http\Request;

class khachhangcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = khachhang::all();
        return view('khachhang.index',['khachhang'=>$db]);
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
     * @param  \App\Models\khachhang  $khachhang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $db = khachhang::find($id);
        return view('khachhang.index',['khachhang'=>$db]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\khachhang  $khachhang
     * @return \Illuminate\Http\Response
     */
    public function edit(khachhang $khachhang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\khachhang  $khachhang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $db = khachhang::find($request->sid);
        $db->ten_kh=$request->stenkh;
        $db->email=$request->semail;
        $db->dia_chi=$request->sdia_chi;
        $db->sdt=$request->ssdt;
        $db->note=$request->snote;
        $db->name=$request->sname;
        $db->created_at=$request->screated_at;
        $db->updated_at=$request->supdated_at;

        $db->mota_sp=$request->description;
        $db->save();
       return redirect()->to('/admin/khachhang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\khachhang  $khachhang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = loaisp::find($id)->delete();
        return redirect()->to('/admin/khachhang');
    }
}
