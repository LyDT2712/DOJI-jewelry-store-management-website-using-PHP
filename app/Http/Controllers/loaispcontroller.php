<?php

namespace App\Http\Controllers;

use App\Models\loaisp;
use Illuminate\Http\Request;

class loaispcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = loaisp::all();
        return view('loaisp.index',['loaisp'=>$db]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $db = new loaisp();
        $db->tenloai=$request->sname;
        $db->created_at=$request->created_at;
        $db->updated_at=$request->updated_at;
        $db->save();
        return redirect()->to('/admin/loaisp');
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
    public function show2()
    {
        
        return view('loaisp.create');
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\loaisp  $loaisp
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $db =loaisp::find($id);
        return view('loaisp.edit',['loaisp'=>$db]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\loaisp  $loaisp
     * @return \Illuminate\Http\Response
     */
    public function edit(loaisp $loaisp)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\loaisp  $loaisp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $db = loaisp::find($request->sid);
        $db->tenloai=$request->sname;
        $db->created_at=$request->created_at;
        $db->updated_at=$request->updated_at;
        $db->save();
       return redirect()->to('/admin/loaisp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\loaisp  $loaisp
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = loaisp::find($id)->delete();
        return redirect()->to('/admin/loaisp');
    }
}
