@extends('layouts.index')
@section('content')

<!-- Content -->
      <div class="content">
        <div class="row">
          @foreach($daftar_produk as $item)
          <div class="col-md-3">
            <div class="card">
              <img class="card-img-top" src="{{ url('upload_file') }}/{{ $item->foto }}" alt="Card image cap" height="280px" width="170px">
              <div class="card-body">
                <h5 class="card-title">{{ $item->nama_produk }}</h5>
                <p class="card-text">
                  <strong>Harga :</strong> Rp. {{ $item->harga }} <br>
                  <strong>Stok :</strong> {{ $item->stok }} <br>
                  <hr>
                  <strong>Deskripsi :</strong> <br>
                  {{ $item->deskripsi }}
                </p>
                <a href="{{ url('admin/pesan_produk') }}/{{ $item->produk_id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>  Pesan</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <!-- End Content -->
@endsection