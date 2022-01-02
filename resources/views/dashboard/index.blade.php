@extends('dashboard.layouts.main')

@section('container')

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome, Admin</h1>
        {{-- bisa panggil nama user admin = {{ auth()->user()->name }} --}}
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
      </div>

      <div class="col-12">
          <div class="konten">
              <h4>Tambah Postingan</h4>
              <hr/>
              <div class="row-fluid">
              <div class="col-12">
                  <form class="label">
                      <div class="row col-12">
                        <label>Judul</label>
                        <input type="text" placeholder="Ketikkan Judul.." class="input mb-4" />
                        <label>Excerpt</label>
                        <input type="text" placeholder="isi excerpt.." class="input mb-4" />
                        <label>Foto / Gambar</label>
                        <input type="file" class="col-5 mb-4" placeholder="Pilih gambar" />
                        <hr />
                        <label>Isi Berita</label>
                        <textarea class="ckeditor" name="editor-post"></textarea>

                    </div>
                  </form>
              </div>
              </div>
          </div>
      </div>

      @endsection
