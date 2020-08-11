<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Absen;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $absens = \DB::table('absens');
       $absens = $absens -> get();
       return view('admin/home',['absens'=>$absens]);
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
        \DB::table('absens') -> insert ([
            'name' => $request->nama,
            'date' => $request->tanggal,
            'division' => $request->divisi
        ]);

        return view('user.home');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \DB::table('absens')->where('id','=',$id)->delete();
        return redirect('/admin');
    }

    public function cari(Request $request){
        //$nama = $request->nama;
        //$divisi = $request->divisi;

        $absens = \DB::table('absens')
        ->where('name', '=', $request->nama)
        ->where('division', '=', $request->divisi);
        $absens=$absens->get();

        return view('user/kehadiran', ['absens'=>$absens]);
    }
}
