@extends('layouts.blank')
@section('title','Form Tempat Tidur')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="salah">

    </div>
    <form action="{{url('main-tempat-tidur')}}" method='post'>
        @csrf

        @if(!empty($dokter))
        @method('PATCH')
        @endif
        <div class="form-group ">
            <label for="inputEmail4">Kode Tempat Tidur</label>
            <input type="text" class="form-control kode" id="inputEmail4" name="kode" placeholder="Kode Tempat Tidur" value="RS {{$waktu}}" readonly>
        </div>
        <div class="form-grou">
            <label for="exampleFormControlInput1" class="mt-2">Nama Ruangan</label>
            <select class="form-control nama_ruangan" id="exampleFormControlSelect1" name="nama_ruangan">
                @foreach($ruangan as $row)
                <option value="{{$row->id}}" id="optionValueR">{{$row->nama_ruangan}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group nama_gedung">
            <label for="exampleFormControlInput1" class="mt-2">Nama Gedung</label>
            <select class="form-control " id="exampleFormControlSelect1" name="nama_gedung">
                @foreach($gedung as $row)
                <option value="{{$row->id}}" id="optionValue">{{$row->nama_gedung}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
@section('js')

@endsection