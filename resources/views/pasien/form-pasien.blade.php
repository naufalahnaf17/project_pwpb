@extends('layouts.blank')
@section('title','Form Pasien')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <form action="{{ url('pasien') }}" method="POST">
      @csrf
        <div class="form-group ">
            <label for="inputEmail4">Nama Pasien</label>
            <input type="text" class="form-control" id="inputEmail4" name="nama_pasien" placeholder="Nama Pasien">
        </div>
        <fieldset class="form-group">
            <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
            <div class="col-sm-10">
                <div class="row">
                    <div class="form-check ml-3">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="pria" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Pria
                        </label>
                    </div>
                    <div class="form-check ml-5">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="wanita">
                        <label class="form-check-label" for="gridRadios2">
                            Wanita
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="form-group">
            <label for="inputState">Golongan Darah</label>
            <select id="inputState" class="form-control" name="golongan_darah">
                <option selected>Pilih Golongan Darah</option>
                <option>A</option>
                <option>B</option>
                <option>AB</option>
                <option>0</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Tempat Lahir</label>
            <input type="text" class="form-control" id="inputAddress2"  placeholder="Kota / Kabupaten" name="tempat_lahir">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Tanggal Lahir</label>
            <input type="text" class="form-control" id="inputAddress2"  placeholder="YYYY/mm/dd" name="tanggal_lahir">
        </div>
        <!-- <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputState">Tanggal</label>
                <select id="inputState" class="form-control">
                    <option selected>Pilih Tanggal</option>
                    @for($i = 1 ; $i <= 31 ; $i++)
                    <option>{{$i}}</option>
                    @endfor
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Bulan</label>
                <select id="inputState" class="form-control">
                    <option selected>Pilih Bulan</option>
                    <option>Januari</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Tahun</label>
                <select id="inputState" class="form-control">
                    <option selected>Pilih Tahun</option>
                    <option>1999</option>
                </select>
            </div>
        </div> -->
        <div class="form-group">
            <label for="inputAddress2">Nama Ibu</label>
            <input type="text" class="form-control" id="inputAddress2" name="nama_ibu" placeholder="Masukan Nama Ibu">
        </div>
        <fieldset class="form-group">
            <legend class="col-form-label col-sm-2 pt-0">Status Menikah</legend>
            <div class="col-sm-10">
                <div class="row">
                    <div class="form-check ml-3">
                        <input class="form-check-input" type="radio" name="status_menikah" id="gridRadios1" value="menikah" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Menikah
                        </label>
                    </div>
                    <div class="form-check ml-5">
                        <input class="form-check-input" type="radio" name="status_menikah" id="gridRadios2" value="lajang">
                        <label class="form-check-label" for="gridRadios2">
                            Lajang
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
