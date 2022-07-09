<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\slide;
use \Datetime;
class apislidecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return slide::all();
        // return slides:: with 'loaisp' ->get();
    }

    /**
     * Show the form for creating a slide resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a slidely created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $db = new slide();
        $db->link = $request->link;           
        $db->image = $request->image;
        $db->created_at = new Datetime();
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_slide
     * @return \Illuminate\Http\Response
     */
    public function show($id_slide)
    {
        return slide::findOrFail($id_slide);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_slide
     * @return \Illuminate\Http\Response
     */
    public function edit($id_slide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_slide)
    {
        $db = slide::find($id_slide);
        $db->link = $request->link;
        
        $db->image = $request->image;
        $db->updated_at = new Datetime();
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_slide
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_slide)
    {
        slide::findOrFail($id_slide)->delete();
        return "Deleted";
    }
}
