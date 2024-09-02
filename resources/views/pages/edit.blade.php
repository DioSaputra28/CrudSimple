@extends('layout/main')

@section('container')
 <div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4>Edit Data
            <a href="{{ route('pages.index') }}">
              <button class="btn btn-danger float-end">Back</button>
            </a>
          </h4>
      </div>
        <form action="{{ route('pages.update', $databarang->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Nama Barang</label>
                        <input class="form-control" name="namaBarang" type="text" value="{{ $databarang->namaBarang }}" >
                    </div>
                    <div class="mb-3">
                    <label for="">Harga Barang</label>
                    <input type="text" name="hargaBarang" class="form-control" value="{{ $databarang->hargaBarang }}" >
                    </div>
                    <div class="mb-3">
                    <label for="">Stok Barang</label>
                    <input type="text" name="stokBarang" class="form-control" value="{{ $databarang->stokBarang }}" >
                    </div>
                    <div class="mb-3">
                        <select name="kategoriBarang" class="form-select form-sele  ct-lg mb-3">
                          <option selected>{{ $databarang->kategoriBarang }}</option>
                          <option value="Komponen Komputer">Komponen Komputer</option>
                          <option value="Aksesoris Komputer">Aksesoris Komputer</option>
                        </select>
                      </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-warning">Edit Data</button>
                    </div>
                </div>
        </form>    
    </div>
  </div>
 </div>
@endsection