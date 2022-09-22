<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class SiswaController extends Controller
{
    public function blog() {
        $data1 = new stdClass;
        $data1->nama = 'Yulia Rizki';
        $data1->kelas = 'XII RPL 1';
        $data1->nis = '16926';
        $data1->jk='Perempuan';
        $data1->aksi='';
        $data1->alamat='Clapar';

        $data2 = new stdClass;
        $data2->nama = 'Rizki Ardani';
        $data2->kelas = 'XII RPL 1';
        $data2->nis = '16927';
        $data2->jk='Perempuan';
        $data2->aksi='';
        $data2->alamat='Madukara';

        $data3 = new stdClass;
        $data3->nama = 'Yulia Ardani';
        $data3->kelas = 'XII RPL 1';
        $data3->nis = '16928';
        $data3->jk='Perempuan';
        $data3->aksi='';
        $data3->alamat='Banjarnegara';

        $data4 = new stdClass;
        $data4->nama = 'Ardani Rizki';
        $data4->kelas = 'XII RPL 1';
        $data4->nis = '16928';
        $data4->jk='Perempuan';
        $data4->aksi='';
        $data4->alamat='Banjarnegara';





        $datas = array($data1, $data2, $data3, $data4);

        return view('siswa.siswa', ['data' => $datas]);
    }

    public function siswa()
    {
        return view('siswa.siswa');
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
        //
    }
}
