@extends('layout/main')

@section('container')
 <div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4>Detail Data
            <a href="{{ route('pages.index') }}">
              <button class="btn btn-danger float-end">Back</button>
            </a>
          </h4>
      </div>
      <div class="card-body">
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Nama Barang</label>
                <input class="form-control" type="text" value="{{ $databarang->namaBarang }}" disabled readonly>
            </div>
            <div class="mb-3">
              <label for="">Harga Barang</label>
              <input type="text" name="hargaBarang" class="form-control" value="{{ $databarang->hargaBarang }}" disabled readonly>
            </div>
            <div class="mb-3">
              <label for="">Stok Barang</label>
              <input type="text" name="stokBarang" class="form-control" value="{{ $databarang->stokBarang }}" disabled readonly>
            </div>
            <div class="mb-3">
                <label for="">Kategori Barang</label>
                <input type="text" name="stokBarang" class="form-control" value="{{ $databarang->kategoriBarang }}" disabled readonly>
            </div>
            <div class="mb-3">
                <label for="">Waktu Dibuat</label>
                <input type="text" name="created_at" class="form-control" value="{{ $databarang->created_at }}" disabled readonly>
            </div>
            <div class="mb-3">
                <label for="">Waktu Diupdate</label>
                <input type="text" name="updated_at" class="form-control" value="{{ $databarang->updated_at }}" disabled readonly>
            </div>
      </div>
    </div>
  </div>
 </div>
@endsection