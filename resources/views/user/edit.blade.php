@extends('layouts.app')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <h4> Edit Data Pengguna </h4>
                    <form action="/user/{{$user->id}}/update" method="POST">
                    {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Masukan Nama Product</label>
                                <input type="text" class="form-control form-control-sm" name="name" value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Harga</label>
                                <input type="email" class="form-control form-control-sm" name="price" value="{{$user->email}}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button href="#" class="btn btn-secondary" data-dismiss="modal">Back</button>
                            <button type="submit" class="btn btn-primary">Update Data</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection