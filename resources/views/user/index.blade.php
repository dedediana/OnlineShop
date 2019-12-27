@extends('layouts.app')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <h4>Data Pengguna</h4>
                        <div class="d-felx">
                            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalTambah"> Tambahkan Data </button>
                        </div>
                    </div>

                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th> Nama Pengguna </th>
                                <th> Email Pengguna </th>
                                <th> Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data_user as $user)
                            <tr>
                                <td> {{ $user->name }} </td>
                                <td> {{ $user->email }} </td>
                                <td>
                                    <a href="/user/{{$user->id}}/edit" class="btn btn-sm btn-info"> Ubah </a>
                                    <a href="/user/{{$user->id}}/delete" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghaus data ini ?')"> Hapus </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    </div>
                </div>                    
            </div>
        </div>
    </div>
</div> <!--content-wrapper-->

<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="/user/create" method="POST">
        {{ csrf_field() }}
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Masukan Nama User</label>
                    <input type="text" class="form-control form-control-sm" name="name">
                </div>
                <div class="form-group">
                    <label for="">Masukan E-Mail</label>
                    <input type="text" class="form-control form-control-sm" name="email">
                </div>
                <div class="form-group">
                    <label for="">Masukan Password</label>
                    <input type="password" class="form-control form-control-sm" name="password">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection