@extends('layouts.blank')
@section('title','Data Tempat Tidur')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">


    <div class="container-fluid">
        <div class="salah">

        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Kelola Data Tempat Tidur</h6>
            </div>

            <div class="card-header py-3">
                <button class="btn btn-success btn-icon-split tambah">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah</span>
                </button>
                <button class="btn btn-danger btn-icon-split hide">
                    <span class="icon text-white-50">
                        <i class="fas fa-minus-square"></i>
                    </span>
                    <span class="text">Batal</span>
                </button>
            </div>
            <div class="container">
                <form action="{{url('main-tempat-tidur')}}" method='post' class="mb-2 tambah">
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
                    <button type="submit" class="btn btn-primary mt-2">Tambah</button>
                </form>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="m-0 font-weight-bold text-primary"> No</th>
                                <th class="m-0 font-weight-bold text-primary"><i class="fas fa-thumbtack"></i> Kode Tempat Tidur</th>
                                <th class="m-0 font-weight-bold text-primary"> Nama Ruangan</th>
                                <th class="m-0 font-weight-bold text-primary"> Status</th>
                                <th class="m-0 font-weight-bold text-primary" colspan="2">
                                    <center>Action</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tempat as $row)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$row->kode}}</td>
                                <td>{{$row->nama_ruangan}}</td>
                                @if($row->status == '1')
                                <td>Terisi</td>
                                @elseif($row->status == '0')
                                <td>Kosong</td>
                                @endif

                                <td>
                                    <center>
                                        <a href="{{url('main-tempat-tidur/' . $row->id . '/edit')}}" class="btn btn-warning btn-circle" data-toggle="modal" data-target="#delete" data-id="{{$row->id}}" data-kode="{{$row->kode}}">
                                            <i class="fas fa-user-edit"></i>
                                        </a>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <button class="btn btn-danger btn-circle" data-toggle="modal" data-target="#deleteRanjang" data-id="{{$row->id}}" data-kode="{{$row->kode}}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </center>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal delete-->
<div class="modal fade" id="deleteRanjang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <form action="{{url('/main-tempat-tidur/delete')}}" method="post">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" id="id" name="id">
                    <button type="submit" class="btn btn-danger "> Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{asset('js/modal.js')}}"></script>
<script>
    $(window).on('load', function() {
        $('form.tambah').hide();
    })

    $(document).ready(function() {
        $(".tambah").on('click', function() {
            $('form.tambah').show();

        })
        $(".hide").on('click', function() {
            $('form.tambah').hide();

        })

    })
</script>
@endsection