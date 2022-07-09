<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\bill_detail_ban;
use Illuminate\Http\Request;
use App\Models\billsban;
use \Datetime;

class apibillsbancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return billsban::all();
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
        $db = new billsban();
        $db->id_kh = $request->id_kh;
        $db->date_order = new Datetime();
        $db->tong_tien= $request->tong_tien;
        $db->payment = 'on';
        $db->status = '1';
        $db->note ='';
        $db->updated_at = new Datetime();
        $db->created_at = new Datetime();
        $db->save();

        $details = $request->details;
        foreach($details as $detail) {
            $item = new bill_detail_ban();
            $item->id_bill_ban = $db->id;
            $item->id_sp = $detail['id'];
            $item->sl = $detail['quantity'];
            $item->save();
        }

        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $db = billsban::find($id);
        $db->id_kh = $request->id_kh;
        $db->date_order = $request->date_order;
        $db->tong_tien= $request->tong_tien;
        $db->payment = $request->payment;
        $db->status = $request->status;
        $db->note =$request->note;
        $db->updated_at = new Datetime();
        $db->created_at = new Datetime();
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        billsban::findOrFail($id)->delete();
        return "Deleted";
    }
}
