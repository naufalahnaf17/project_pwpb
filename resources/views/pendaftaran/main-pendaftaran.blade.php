@extends('layouts.blank')
@section('title','Form Pendaftaran')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  @if(session('error'))
  <div class="alert alert-danger">
    {{ session('error') }}
  </div>
  @endif

  @if(count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Alert</strong>
    <br>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error}}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <!-- Ini Form Untuk Data Pendaftaran  -->
  <form action="{{ url('pendaftaran') }}" method="post">

  <!-- Action Bar Data Pendaftaran  -->
  <div class="row">
    <div class="col-md-6">
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pendaftaran</h6>
              <hr>
              <!-- Konten Form Data Pendaftaran -->
              <div class="form-group ">
                <label for="inputEmail4">No Registrasi</label>
                <input type="text" class="form-control" id="inputreg"  name="no_reg" placeholder="Nomer Registrasi">
              </div>

              <div class="form-group ">
                <label for="inputhp4">No Rawat</label>
                <input type="text" class="form-control" id="inputnorawat" placeholder="No Rawat" name="no_rawat">
              </div>

              <div class="form-group">
                <label for="inputState">Cara Masuk</label>
                <select id="inputState" class="form-control" name="cara_masuk">
                  <option selected>Rawat Inap</option>
                  <option>UGD</option>
                  <option>ICU</option>
                </select>
              </div>

              <div class="form-group">
                <label for="inputAddress2">Ruangan Di Rawat</label>
                <input type="text" class="form-control" id="inputruangan" placeholder="Masukan Kode Tempat Tidur">
              </div>

              <div class="form-group">
                <label for="inputAddress2">Tanggal Daftar</label>
                <input type="text" class="form-control" id="inputtanggal" placeholder="YYYY-MM-DD contoh : 1999-08-02">
              </div>

              <div class="form-group">
                <label for="inputAddress2">Dokter Penanggung Jawab</label>
                <input type="text" class="form-control" id="inputdokter" placeholder="Dr Sanjay Kusumah">
              </div>

              <div class="form-group">
                <label for="inputAddress2">Poliklinik Tujuan</label>
                <select id="inputState" class="form-control" name="poliklinik">
                  <option selected>POLI GIGI</option>
                  <option>POLI KEPALA</option>
                  <option>POLI RAMBUT</option>
                </select>
              </div>

              <div class="form-group">
                <label for="inputAddress2">Jenis Bayar</label>
                <select id="inputState" class="form-control" name="bayar">
                  <option selected>Bayar Sendiri</option>
                  <option>Kartu Kredit</option>
                  <option>Transfer Bank</option>
                </select>
              </div>

            </div>
          </div>
        </div>

        <!-- Data Pasien Form -->

        <!-- Action Bar Data Pasien -->
        <div class="col-md-6">
          <div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
                  <hr>

                  <div class="form-group ">
                    <label for="inputEmail4">No Rekamedis</label>
                    <input type="text" class="form-control" id="inputreg" name="no_reka_medis" placeholder="Masukan No Rekamedis">
                  </div>

                  <div class="form-group ">
                    <label for="inputhp4">Nama Pasien</label>
                    <input type="text" class="form-control" id="inputnorawat" placeholder="Nama Pasien" name="nama_pasien">
                  </div>

                  <div class="form-group">
                    <label for="inputAddress2">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="inputtanggallahir" placeholder="YYYY-MM-DD contoh : 1999-08-02">
                  </div>

                  <div class="form-group">
                    <label for="inputAddress2">Nama Penanggung Jawab</label>
                    <input type="text" class="form-control" id="inputnamapenanggung" placeholder="Nama Penanggung Jawab">
                  </div>

                  <div class="form-group">
                    <label for="inputAddress2">Hubungan Dengan Penanggung Jawab</label>
                    <select id="inputState" class="form-control" name="hubungan">
                        <option selected>Saudara Kandung</option>
                        <option>Saudara Tiri</option>
                        <option>Orang Tua</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="inputAddress2">Alamat Penanggung Jawab</label>
                    <input type="text" class="form-control" id="inputrujukan" placeholder="Alamat Penanggung Jawab">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Tambahkan Data </button>
            </div>

      <!-- Penutup Form -->
    </form>
  </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
