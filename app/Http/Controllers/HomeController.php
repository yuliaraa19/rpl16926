<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class HomeController extends Controller
{
    public function blog() {
        $data1 = new stdClass;
        $data1->nama = 'Yulia Rizki';
        $data1->kelas = 'XII RPL 1';
        $data1->nis = '16926';

        $data2 = new stdClass;
        $data2->nama = 'Rizki Ardani';
        $data2->kelas = 'XII RPL 1';
        $data2->nis = '16926';

        $data3 = new stdClass;
        $data3->nama = 'Yulia Ardani';
        $data3->kelas = 'XII RPL 1';
        $data3->nis = '16928';





        $datas = array($data1, $data2, $data3);

        return view('blog.index', ['data' => $datas]);
    }

    public function about()
    {
        return view('blog.about');
    }
    
    public function contact()
    {
        return view('blog.contact');
    }
}