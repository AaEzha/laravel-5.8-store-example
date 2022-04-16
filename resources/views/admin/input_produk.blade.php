@extends('layouts.index')
@section('content')
  <div class="content">
    <div class="container">
      <div class="p-3 mt-3">
        <h3 class="text-center mb-3">FORM INPUT PRODUK</h3><br>
        <div class="card p-3">
          <form action="{{ route('simpan_input_produk') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
              <label for="nama_produk">Nama Produk</label>
              <input type="text" name="nama_produk" id="nama_produk"
                class="form-control">
              <br>

              <label for="stok">Stok</label>
              <input type="number" name="stok" id="stok" class="form-control">
              <br>

              <label for="kategori">Kategori</label>
              <select name="kategori" id="kategori" class="form-control">
                <option value="">Pilih Kategori</option>
                <option value="Skin Care">Skin Care</option>
                <option value="Cosmetics">Cosmetics</option>
                <option value="Lip Products">Lip Products</option>
              </select>
              <br>

              <label for="harga">Harga</label>
              <input type="number" name="harga" id="harga" class="form-control">
              <br>

              <label for="berat_produk">Berat Produk</label>
              <input type="text" name="berat_produk" id="berat_produk"
                class="form-control">
              <br>

              <label for="masa_penyimpanan">Masa Penyimpanan</label>
              <input type="text" name="masa_penyimpanan" id="masa_penyimpanan"
                class="form-control">
              <br>

              <label for="tanggal_kadaluwarsa">Tanggal Kadaluwarsa</label>
              <input type="date" name="tanggal_kadaluwarsa" id="tanggal_kadaluwarsa"
                class="form-control">
              <br>

              <label for="deskripsi">Deskripsi</label>
              <input type="text" name="deskripsi" id="deskripsi"
                class="form-control">
              <br>

              <label for="foto">Foto</label></th>
              <input type="file" name="foto" id="foto" class="form-control">
              <br><br>

              {{-- <button type="submit" id="submit_input" name="submit_input" class="btn btn-md btn-primary mt-3">Input Produk</button> --}}
              <button type="submit" id="submit_input" name="submit_input" hidden></button>
              <button type="button" class="btn btn-md btn-primary mt-3" onclick="validasi()">Input Produk</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="MyModalInput" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Input Produk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-hover table-striped">
              <tr>
                <td>Nama Produk</td>
                <td>
                  <h5 id="nama_produk_tampil"></h5>
                </td>
              </tr>

              <tr>
                <td>Stok</td>
                <td>
                  <h5 id="stok_tampil"></h5>
                </td>
              </tr>

              <tr>
                <td>Kategori</td>
                <td>
                  <h5 id="kategori_tampil"></h5>
                </td>
              </tr>

              <tr>
                <td>Harga</td>
                <td>
                  <h5 id="harga_tampil"></h5>
                </td>
              </tr>

              <tr>
                <td>Berat Produk</td>
                <td>
                  <h5 id="berat_produk_tampil"></h5>
                </td>
              </tr>

              <tr>
                <td>Masa Penyimpanan</td>
                <td>
                  <h5 id="masa_penyimpanan_tampil"></h5>
                </td>
              </tr>

              <tr>
                <td>Tanggal Kadaluwarsa</td>
                <td>
                  <h5 id="tanggal_kadaluwarsa_tampil"></h5>
                </td>
              </tr>

              <tr>
                <td>Deskripsi</td>
                <td>
                  <h5 id="deskripsi_tampil"></h5>
                </td>
              </tr>

              <tr>
                <td>Foto</td>
                <td>
                  <h5 id="foto_tampil"></h5>
                </td>
              </tr>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="submit_input()">Simpan Data Produk</button>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      function validasi() {
        var nama_produk = document.getElementById('nama_produk').value;
        var stok = document.getElementById('stok').value;
        var kategori = document.getElementById('kategori').value;
        var harga = document.getElementById('harga').value;
        var berat_produk = document.getElementById('berat_produk').value;
        var masa_penyimpanan = document.getElementById('masa_penyimpanan').value;
        var tanggal_kadaluwarsa = document.getElementById('tanggal_kadaluwarsa').value;
        var deskripsi = document.getElementById('deskripsi').value;
        var foto = document.getElementById('foto').value;

        if (nama_produk == '') {
          swal("Oops!", "Nama Produk Tidak Boleh Kosong!", "warning");
        } else if (stok == '') {
          swal("Oops!", "Stok Tidak Boleh Kosong!", "warning");
        } else if (kategori == '') {
          swal("Oops!", "Kategori Tidak Boleh Kosong!", "warning");
        } else if (harga == '') {
          swal("Oops!", "Harga Tidak Boleh Kosong!", "warning");
        } else if (berat_produk == '') {
          swal("Oops!", "Berat Produk Tidak Boleh Kosong!", "warning");
        } else if (masa_penyimpanan == '') {
          swal("Oops!", "Masa Penyimpanan Tidak Boleh Kosong!", "warning");
        } else if (tanggal_kadaluwarsa == '') {
          swal("Oops!", "Tanggal Kadaluwarsa Tidak Boleh Kosong!", "warning");
        } else if (deskripsi == '') {
          swal("Oops!", "Deskripsi Tidak Boleh Kosong!", "warning");
        } else if (foto == '') {
          swal("Oops!", "Foto Tidak Boleh Kosong!", "warning");
        } else {
            console.log('sukses?');
          $('#nama_produk_tampil').html(nama_produk);
          $('#stok_tampil').html(stok);
          $('#kategori_tampil').html(kategori);
          $('#harga_tampil').html(harga);
          $('#berat_produk_tampil').html(berat_produk);
          $('#masa_penyimpanan_tampil').html(masa_penyimpanan);
          $('#tanggal_kadaluwarsa_tampil').html(tanggal_kadaluwarsa);
          $('#deskripsi_tampil').html(deskripsi);
          $('#foto_tampil').html(foto);
          $('#MyModalInput').modal('show');
        }
      }

      function submit_input() {
        document.getElementById('submit_input').click();
      }
    </script>
  @endsection
