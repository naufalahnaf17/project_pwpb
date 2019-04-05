@extends('layouts.blank')
@section('title','Form Dokter')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <form>
        @csrf

        @if(!empty($dokter))
        @method('PATCH')
        @endif
        <div class="form-group ">
            <label for="inputEmail4">Nama Dokter</label>
            <input type="text" class="form-control" id="inputEmail4" name="nama_dokter" placeholder="Nama Dokter" value="{{ old('nama_dokter','@$dokter->nama_dokter')}}">
        </div>
        <div class="form-group ">
            <label for="inputhp4">No HandPhone</label>
            <input type="text" class="form-control" id="inputhp4" placeholder="No HandPhone" name="no_hp" value="{{old('no_hp','@$dokter->no_hp')}}">
        </div>
        <div class="form-group">
            <label for="inputState">Spesialis</label>
            <select id="inputState" class="form-control" name="">
                <option selected>Pilih Spesialis</option>
                <option>Rumah</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputAddress2">No Izin Praktek</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="112131 / 6 Number">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Alumni</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Universitas Anda Lulus">
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection