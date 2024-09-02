@extends('layout/main')

@section('container')

    <div class="card">
      <div class="card-header">
        <h2>Data Barang</h2>
      </div>
      <div class="card-body">
        <a href="{{ route('pages.create') }}" data-toggle="modal" data-target="#ModalCreate" class="btn btn-primary">Tambah Data</a>
        <br/>
        <br/>
        @if(Session::has('Berhasil'))
        <div class="alert alert-success" role="alert">
          {{ Session::get('Berhasil') }}
        </div>
        @endif
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Harga Barang</th>
              <th scope="col">Stok Barang</th>
              <th scope="col">Kategori Barang</th>
              <th scope="col">Opsi</th>
            </tr>
          </thead>
          @if($dataBarangs->count() > 0)
          @foreach($dataBarangs as $databarang)
          <tbody>
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $databarang->namaBarang }}</td>
              <td>{{ $databarang->hargaBarang }}</td>
              <td>{{ $databarang->stokBarang }}</td>
              <td>{{ $databarang->kategoriBarang }}</td>
              <td>
                <a href="{{ route('pages.show', $databarang->id) }}" title="Viev Data" ><button type="button" class="btn btn-secondary"><i class="fa-solid fa-eye"></i> View</button></a>
                <a href="{{ route('pages.edit', $databarang->id) }}" title="Edit Data" ><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</button></a>
                  <form action="{{ route('pages.destroy', $databarang->id) }}" title="Delete Data" method="POST" class="btn btn-danger m-0 p-0" type="button" onsubmit="return confirm('Hapus?')" name="DioDashboardForm">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger m-0"><i class="fa-solid fa-trash-can"></i> Delete</button>
                  </form>
              </td>
            </tr>
            @endforeach
            @else 
              <tr>
                <td class="text-center" colspan="6">
                  <i class="fa-solid fa-triangle-exclamation"></i>Tidak Ada Data
                </td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
@endsection