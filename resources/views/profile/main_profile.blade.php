@extends('layouts.blank')
@section('title','Profile Rumah Sakit')
@section('content')
<!-- Begin Page Content -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
      .column {
        margin-left: 10%;
        width: 80%;
        height: 50%;
        margin-bottom: 16px;
        padding: 0 8px;
      }

      @media screen and (max-width: 650px) {
      .column {
        width: 100%;
        display: block;
      }
      }

      .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      }

      .container {
      padding: 0 16px;
      }

      .container::after, .row::after {
      content: "";
      clear: both;
      display: table;
      }

      .title {
      color: grey;
}

    </style>
  </head>
  <body>
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Profile Rumah Sakit</h3>
            </div>

            <div class="row">
              <div class="column">
                <div class="card">
                  <img src="2.jpg" alt="Rumah Sakit Sumber Waras" style="width:100%">
                  <div class="container">
                    <h2>RS.Sumber Waras</h2>
                    <p class="title"></p>
                    <p>Tambahan Berita Negara Nomor: 66 tanggal 18 Agustus 2009 <br>
                        Perubahan Anggran Dasar Nomor: 1080 tahun 2009<br>
                        Keputusan Menteri Hukum dan Hak Asasi Manusia Nomor: AHU-1125.AH.01.05 Tahun 2009<br>
                        tentang Persetujuan Anggaran Dasar Yayasan.</p>
                    <p>Dibuat Oleh : <br>
                      M.Rifki Firmansyah <br>
                      Naufal Ahnaf <br>
                      Viko Muhammad <br>
                      XI-RPL 3
                    </p>
                  </div>
                </div>
              </div>

        </div>
    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    @endsection

  </body>
</html>
