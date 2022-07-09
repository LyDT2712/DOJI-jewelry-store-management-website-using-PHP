<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\news;
use \Datetime;
class apinewscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return news::all();
        // return news:: with 'loaisp' ->get();
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
        $db = new news();
        $db->title = $request->title;     
        $db->content = $request->content;
        $db->image = $request->image;
        $db->created_at = new Datetime();
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_new
     * @return \Illuminate\Http\Response
     */
    public function show($id_new)
    {
        return news::findOrFail($id_new);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_new
     * @return \Illuminate\Http\Response
     */
    public function edit($id_new)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_new
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_new)
    {
        $db = news::find($id_new);
        $db->title = $request->title;
        $db->content = $request->content;
        $db->image = $request->image;
        $db->updated_at = new Datetime();
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_new
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_new)
    {
        news::findOrFail($id_new)->delete();
        return "Deleted";
    }
}