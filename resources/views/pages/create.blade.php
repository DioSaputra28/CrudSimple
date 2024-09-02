@extends('layout/main')

@section('container')
 <div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4>Tambah Data
          <a href="{{ route('pages.index') }}">
            <button class="btn btn-danger float-end">Back</button>
          </a>
        </h4>
      </div>
      <div class="card-body">
        <form action="{{ route('pages.store') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="">Nama Barang</label>
              <input type="text" name="namaBarang" class="form-control">
            </div>
            <div class="mb-3">
              <label for="">Harga Barang</label>
              <input type="text" name="hargaBarang" class="form-control">
            </div>
            <div class="mb-3">
              <label for="">Stok Barang</label>
              <input type="text" name="stokBarang" class="form-control">
            </div>
            <div class="mb-3">
              <select name="kategoriBarang" class="form-select form-sele  ct-lg mb-3">
                <option selected>Kategori</option>
                <option value="Komponen Komputer">Komponen Komputer</option>
                <option value="Aksesoris Komputer">Aksesoris Komputer</option>
              </select>
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </form>
      </div>
    </div>
  </div>
 </div>
@endsection