@extends('layouts.admins')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-10">
    <a href="{{route('peminjaman.create')}}" class="btn btn-warning float-lg-right">Tambah Peminjaman</a>
    <div class="card">
    <div class="card-header">
        Edit Data Peminjaman
    </div>
    <div class="card-body">
    {!! Form::model($data, ['route'=> ['peminjaman.update',$data], 'method'=>'PUT']) !!}

    <div class="form-group">
    {!! Form::text('nama', null, ['class'=>'form-control','id'=>'nama']) !!}
    </div>
    <div class="form-group">
    {!! Form::text('kode_buku', null, ['class'=>'form-control','id'=>'kode_buku']) !!}
    </div>
    <div class="form-group">
                <label for="jenis">Status Peminjaman</label>
                <select name="status_peminjaman" id="">
                    <option {{old('status_peminjaman',$data->status_peminjaman)=="Sedang"? 'selected':''}}value = "Sedang">Sedang</option>
                    <option {{old('status_peminjaman',$data->status_peminjaman)=="Dikembalikan"? 'selected':''}}value = "Dikembalikan">Dikembalikan</option>
        </select>
    </div>
    </div>
    <div class="form-group">
    {!! Form::submit('Simpan', ['class'=>"btn btn-primary"]) !!}
    </div>
{!! Form::close()!!}
    </div>
</div>
    </div>
</div>
</div>


@endsection
    

