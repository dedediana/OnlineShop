@extends('layouts.app')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <h4>Data Barang</h4>
                        <div class="d-felx">
                            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalTambah"> Tambahkan Data </button>
                        </div>
                    </div>

                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th> Nama Produk </th>
                                <th> Price </th>
                                <th> Deskripsi </th>
                                <th> Foto </th>
                                <th> Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data_product as $product)
                            <tr>
                                <td> {{ $product->product_name }} </td>
                                <td> {{ $product->price }} </td>
                                <td> {{ $product->description }} </td>
                                <td> {{ $product->image }} </td>
                                <td>
                                    <a href="/product/{{$product->id}}/edit" class="btn btn-sm btn-info"> Ubah </a>
                                    <a href="/product/{{$product->id}}/delete" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghaus data ini ?')"> Hapus </a>
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
            <h5 class="modal-title" id="exampleModalLabel">Ubah Data Barang</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="/product/create" method="POST">
        {{ csrf_field() }}
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Masukan Nama Product</label>
                    <input type="text" class="form-control form-control-sm" name="product_name">
                </div>
                <div class="form-group">
                    <label for="">Masukan Harga</label>
                    <input type="text" class="form-control form-control-sm" name="price">
                </div>
                <div class="form-group">
                    <label for="">Masukan Deskripsi</label>
                    <input type="text" class="form-control form-control-sm" name="description">
                </div>
                <div class="form-group">
                    <label for="">Masukan Image</label>
                    <input type="text" class="form-control form-control-sm" name="image">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection