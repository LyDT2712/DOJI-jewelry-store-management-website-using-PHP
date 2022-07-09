<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\users;
use \Datetime;
class apiuserscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return users::all();
        //return users::with('loaisp')->get();
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
        $db = new users();
        $db->full_name = $request->full_name;
        $db->users_name = $request->users_name;
        $db->email = $request->email;
        $db->password = $request->password;
        $db->phone = $request->phone;
        $db->address = $request->address;
        $db->Delet = $request->Delet;
        $db->remember_token = $request->remember_token;
        $db->created_at = new Datetime();
        $db->save();
        return $db;
    }
    //đăng nhập
    public function show2($tk,$mk)
    {
        $db=users::where("users_name","=","$tk")->where("password","=","$mk")->get();
        return $db[0];
    }
    //đăng kí
    public function show3($users_name)
    {
        $db=users::where("users_name","=","$users_name")->get();
        return $db[0];
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return users::findOrFail($id);
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
        $db = users::find($id);
        $db->full_name = $request->full_name;
        $db->users_name = $request->users_name;
        $db->email = $request->email;
        $db->password = $request->password;
        $db->phone = $request->phone;
        $db->address = $request->address;
        $db->Delet = $request->Delet;
        $db->remember_token = $request->remember_token;
        $db->updated_at = new Datetime();
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
        users::findOrFail($id)->delete();
        return "Deleted";
    }
}
