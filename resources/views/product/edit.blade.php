@extends('layouts.app')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <h4> Edit Data Product </h4>
                    <form action="/product/{{$product->id}}/update" method="POST">
                    {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Masukan Nama Product</label>
                                <input type="text" class="form-control form-control-sm" name="product_name" value="{{$product->product_name}}">
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Harga</label>
                                <input type="text" class="form-control form-control-sm" name="price" value="{{$product->price}}">
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Deskripsi</label>
                                <input type="text" class="form-control form-control-sm" name="description" value="{{$product->description}}">
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Image</label>
                                <input type="text" class="form-control form-control-sm" name="image" value="{{$product->image}}">
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