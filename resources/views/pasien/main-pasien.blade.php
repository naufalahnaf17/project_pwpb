@extends('layouts.blank')
@section('title','Data Pasien')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            <br>
            @if(session('success'))
              <div class="alert alert-success">
                {{ session ('success') }}
              </div>
            @endif

            @if(session('error'))
              <div class="alert alert-error">
                {{ session ('error') }}
              </div>
            @endif
        </div>

        <div class="card-header py-3">
            <a href="{{url('pasien/add-pasien')}}" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah</span>
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pasien</th>
                            <th>No RM</th>
                            <th>Gender</th>
                            <th>Golongan Darah</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Nama Ibu</th>
                            <th>Status Menikah</th>
                            <th colspan="2">
                                <center>Action</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($pasien as $row)
                        <tr>
                            <td>{{isset($i) ? ++$i : $i = 1 }}</td>
                            <td>{{$row->nama_pasien}}</td>
                            <td>{{$row->no_rm}}</td>
                            <td>{{$row->gender}}</td>
                            <td>{{$row->golongan_darah}}</td>
                            <td>{{$row->tempat_lahir}}</td>
                            <td>{{$row->tanggal_lahir}}</td>
                            <td>{{$row->nama_ibu}}</td>
                            <td>{{$row->status_menikah}}</td>
                            <td>
                                <center>
                                    <a href="{{ url('/pasien/' . $row->id . '/edit' )}}" class="btn btn-warning btn-circle">
                                        <i class="fas fa-user-edit"></i>
                                    </a>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <button class="btn btn-danger btn-circle ml-1" type="submit" name="button" data-id = "{{$row->id}}" data-nama= "{{$row->nama_pasien}}" data-toggle = "modal" data-target = "#deletePasien">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </center>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection

<!-- Modal delete-->
<div class="modal fade" id="deletePasien" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <form class="" action="{{ url('/pasien/' . $row->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <input type = "hidden" value= "" name="id" id = "id">
                    <button class="btn btn-danger " type="submit" name="button">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@section('js')
<script src="{{asset('js/modal.js')}}"></script>
@endsection