@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA ARSIP SURAT</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Lihat Arsip Surat
                        </h2>
                    </div>
                    <div class="body">
                        <p>Nomor : {{$data->nomor}}</p>
                        <p>Kategori : {{$data->kategori}}</p>
                        <p>Judul : {{$data->judul}}</p>
                        <p>Waktu : {{$data->created_at}}</p>
                        <iframe id="fred" style="border:1px solid #666CCC" title="PDF in an i-Frame" src="{{$data->file}}" frameborder="1" scrolling="auto" height="600" width="100%" ></iframe>
                     <div class="row clearfix">
                      <div class="col-md-1">
                     <a href="{{url('admin/surat')}}"><button type="button" class="btn btn-warning center-block" >Cancel</button></a>
                </div>
                 <div class="col-md-1">
                     <a href="{{url('admin/surat/download/'.$data->id)}}" target="_blank"><button type="button" class="btn btn-info center-block" >Unduh</button></a>
                </div>
                 <div class="col-md-1">
                     <a href="{{url('admin/surat/edit/'.$data->id)}}"><button type="button" class="btn btn-success center-block" >Ganti/Edit File</button></a>
                </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
@endsection