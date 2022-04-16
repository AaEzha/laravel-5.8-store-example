@extends('layouts.index')
@section('content')

<div class="content">
	<div class="container">
		<div class="p-3 mt-3">
			<h3 class="text-center mt-3">LIST PRODUCT</h3><br>
			<a href="{{ url('/admin/input_produk') }}" class="btn btn-md btn-primary">Tambah Produk</a><br><br>
			@if (session('hapus'))
			<div class="alert alert-danger">
				{{ session('hapus') }}
			</div>
			@endif
			@if (session('edit'))
			<div class="alert alert-info">
				{{ session('edit') }}
			</div>
			@endif
				<table class="table table-light table-border">
					<thead class="text-center">
						<th>NO</th>
						<th>Nama Produk</th>
						<th>Foto Produk</th>
						<th>Stok</th>
						<th>Kategori</th>
						<th>Harga</th>
						<th>Berat Produk</th>
						<th>Masa Penyimpanan</th>
						<th>Tanggal Kadaluwarsa</th>
						<th>Deskripsi</th>
						<th>Aksi</th>
					</thead>
					<tbody>
						<?php
							$no = 1;
						?>

						@foreach($daftar_produk as $item)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $item->nama_produk }}</td>
							<td><img src="{{asset('/upload_file/'.$item->foto)}}" width="100px" height="auto"></td>
							<td>{{ $item->stok }}</td>
							<td>{{ $item->kategori }}</td>
							<td>{{ $item->harga }}</td>
							<td>{{ $item->berat_produk }}</td>
							<td>{{ $item->masa_penyimpanan }}</td>
							<td>{{ $item->tanggal_kadaluwarsa }}</td>
							<td>{{ $item->deskripsi }}</td>
							<td class="text-center">
								<a href="/delete_produk/{{$item->produk_id}}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Produk Ini?')">Hapus</a>
								<a href="/admin/edit_produk/{{$item->produk_id}}" class="btn btn-sm btn-info" onclick="return confirm('Apakah Anda Yakin Akan Mengedit Produk Ini?')">Edit</a>
								<a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#myModal{{ $item->produk_id }}">Detail</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
		</div>
	</div>
	@foreach($daftar_produk as $item)
	<!-- The Modal -->
	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal{{ $item->produk_id }}">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">

	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title">Detail Produk</h4>
	      </div>

	      <!-- Modal body -->
	      <div class="modal-body">
	      	<center><img class="mb-3" src="{{asset('/upload_file/'.$item->foto)}}" style="width: 60%"></center><br>
	      	<table class="table table-hover table-bordered table-striped">
	            <tr>
	                <td>Nama Produk</td>
	                <td><?php echo $item->nama_produk; ?></td>
	            </tr>

	            <tr>
	                <td>Stok</td>
	                <td><?php echo $item->stok; ?></td>
	            </tr>

	            <tr>
	                <td>Kategori</td>
	                <td><?php echo $item->kategori; ?></td>
	            </tr>

	            <tr>
	                <td>Harga</td>
	                <td><?php echo $item->harga; ?></td>
	            </tr>

	            <tr>
	                <td>Berat Produk</td>
	                <td><?php echo $item->berat_produk; ?></td>
	            </tr>

	            <tr>
	                <td>Masa Penyimpanan</td>
	                <td><?php echo $item->masa_penyimpanan; ?></td>
	            </tr>

	            <tr>
	                <td>Tanggal Kadaluwarsa</td>
	                <td><?php echo $item->tanggal_kadaluwarsa; ?></td>
	            </tr>

	            <tr>
	                <td>Deskripsi</td>
	                <td><?php echo $item->deskripsi; ?></td>
	            </tr>
	        </table>
	      </div>

	      <!-- Modal footer -->
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	@endforeach
	@endsection