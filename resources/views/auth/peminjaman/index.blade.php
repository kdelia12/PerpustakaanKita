@extends('layouts.admins')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
        <div class="card">
        <div class="card-header">
            Data Peminjam
        </div>
        <div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped" id="Tablekucok"> 
            <thead>
            <tr>
                <th>Nomor Peminjaman</th>
                <th>Nama Peminjam</th>
                <th>Kode Buku</th>
                <th>Waktu Peminjaman</th>
                <th>Harus Dikembalikan</th>
                <th>Denda</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datas as $data)
            <tr>
                <td>{{$data->nomor_peminjaman}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->id_buku}}</td>
                <td>{{$data->tanggal_pinjam}}</td>
                <td>{{$data->tanggal_kembali}}</td>
                @php 
                $then = ($data->tanggal_kembali);
                $then = new DateTime($then);
                $now = new DateTime();
                if($data->statuspeminjaman == "Sedang"){
                    $denda = $then->diff($now);
                $denda = $denda->format('%R%a');
                if ($denda<=0){
                    $denda = 0;
                    echo ('<td>'.$denda.'</td>');
                } else{
                    $denda = $denda*3000;
                    echo ('<td class="p-3 mb-2 bg-danger text-white">'.$denda.'</td>');
                }

                }else{
                    $denda = 0;
                    echo ('<td>'.$denda.'</td>');
                }
                
                @endphp
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
        </div>
        </div>
    </div>
</div>


@endsection
    
