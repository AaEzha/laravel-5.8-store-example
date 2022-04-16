@extends('layouts.index')
@section('content')

<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4>{{ $daftar_produk->nama_produk }}</h4>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<img src="{{ url('upload_file') }}/{{ $daftar_produk->foto }}" class="rounded mx-auto d-block" width="100%" alt="">
							</div>
							<div class="col-md-6 mt-6">
								<h3>{{ $daftar_produk->nama_produk }}</h3>
								<table class="table table-hover table-striped">
									<tbody>
							            <tr>
							                <td>Stok</td>
							                <td>:</td>
							                <td>{{ $daftar_produk->stok }}</td>
							            </tr>

							            <tr>
							                <td>Kategori</td>
							                <td>:</td>
							                <td>{{ $daftar_produk->kategori }}</td>
							            </tr>

							            <tr>
							                <td>Harga</td>
							                <td>:</td>
							                <td>Rp. {{ $daftar_produk->harga }}</td>
							            </tr>

							            <tr>
							                <td>Berat Produk</td>
							                <td>:</td>
							                <td>{{ $daftar_produk->berat_produk }}</td>
							            </tr>

							            <tr>
							                <td>Masa Penyimpanan</td>
							                <td>:</td>
							                <td>{{ $daftar_produk->masa_penyimpanan }}</td>
							            </tr>

							            <tr>
							                <td>Tanggal Kadaluwarsa</td>
							                <td>:</td>
							                <td>{{ $daftar_produk->tanggal_kadaluwarsa }}</td>
							            </tr>

							            <tr>
							                <td>Deskripsi</td>
							                <td>:</td>
							                <td>{{ $daftar_produk->deskripsi }}</td>
							            </tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
