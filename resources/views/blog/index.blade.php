@extends('layout.template')

@section('headscript')

@endsection
<center>
@section('title', 'Halaman Home Blog RPL')

@section('judul_halaman')
Ini adalah halaman Home dari Blog RPL
@endsection

@section('content')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
    <table>
        <tr>
            <td>No&emsp;</td>
            <td>&ensp;&ensp;Nama&emsp;</td>
            <td>&ensp;&ensp;Kelas&emsp;</td>
            <td>&ensp;NIS&emsp;</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Yulia Rizki&emsp;</td>
            <td>XII RPL 1&emsp;</td>
            <td>16926&emsp;</td>
        </tr>
        <tr>
            <td>2&emsp;</td>
            <td>Rizki Ardani&emsp;&emsp;</td>
            <td>XII RPL 1&emsp;&emsp;</td>
            <td>16927&emsp;</td>
        </tr>
        <tr>
            <td>3&emsp;</td>
            <td>Yulia Ardani&emsp;</td>
            <td>XII RPL 1&emsp;</td>
            <td>16928&emsp;</td>
        </tr>
      
    </table>
    @endsection