@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Tambah Obat
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('obat.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Nama Obat:</label>
              <input type="text" class="form-control" name="nama_obat"/>
          </div>
          <div class="form-group">
              <label for="price">Harga Obat:</label>
              <input type="number" class="form-control" name="harga"/>
          </div>
          <div class="form-group">
              <label for="quantity">Jumlah Obat:</label>
              <input type="number" class="form-control" name="stok"/>
          </div>
		  <div class="form-group">
              <label for="quantity">Tanngal Expired:</label>
              <input type="date" class="form-control" name="expired_date"/>
          </div>
		  <div class="form-group">
              <label for="quantity">Tanggal Produksi:</label>
              <input type="date" class="form-control" name="production_date"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection