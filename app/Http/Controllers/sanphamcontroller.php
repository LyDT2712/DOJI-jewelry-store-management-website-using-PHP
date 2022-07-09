<?php

namespace App\Http\Controllers;

use App\Models\sanpham;
use App\Models\loaisp;
use Illuminate\Http\Request;

class sanphamcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = sanpham::all();
        $loaisp = loaisp::all();
        return view('sanpham.index',['sanpham'=>$db,'loaisp'=>$loaisp]);
    }
    public function create(Request $request)
    {
        $db = new sanpham();
        $db->name = $request->name;
        $db->id_loai_sp = $request->loaisp;
        $db->id_ncc = $request->ncc;
        $db->unit_price = $request->price;
        $db->so_luong = $request->sl;
        $db->image = $request->image;
        $db->mota_sp = $request->mota_sp;
        $db->don_vi_tinh = $request->dvt;
        $db->delet = $request->delet;
        $db->new = $request->new;
        $db->save();
        return redirect()->to('/admin/sanpham');
    }
    public function show2()
    {
        
        return view('sanpham.create');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $db = sanpham::find($id);
        $loaisp = loaisp::all();
        return view('sanpham.edit',['sanpham'=>$db,'loaisp'=>$loaisp]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function edit(sanpham $sanpham)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $db = sanpham::find($request->sid);
         $db->name=$request->sname;
         $db->mota_sp=$request->description;
         $db->save();
        return redirect()->to('/admin/sanpham');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = sanpham::find($id)->delete();
        return redirect()->to('/admin/sanpham');
        //
    }
}
