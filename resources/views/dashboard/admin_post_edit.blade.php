@extends('dashboard.layouts.main')

@section('container')

    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome, Admin</h1>
        {{-- bisa panggil nama user admin = {{ auth()->user()->name }} --}}
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>

    <div class="col-12">
        <div class="konten">
            <h4>Edit Postingan</h4>
            <hr />
            <div class="row-fluid">
                <div class="col-md-5 mx-2 mb-2">
                    <label for="category" class="form-label mx-2">Category</label>
                    <select class="form-category" id="category" required="">
                        @foreach ($categories as $category)
                            <option value="">{{ $category->name }}</option>
                        @endforeach
                        <option value="">Edukasi</option>
                        <option>Kriminalitas</option>
                        <option>Makanan</option>
                        <option>Tempat Wisata</option>
                        <option>Liburan</option>
                    </select>
                </div>
                <div class="col-12">
                    <form class="label">
                        <div class="row col-12">
                            <label>Judul</label>
                            <input type="title" value="{{ $post->title }}" class="input mb-4" />
                            <label>Excerpt</label>
                            <input type="excerpt" class="input mb-4" value="{{ $post->excerpt }}">
                            <label>Slug</label>
                            <input type="slug" class="input mb-4" value="{{ $post->slug }}" />
                            {{-- <label>Foto / Gambar</label>
                        <input type="file" class="col-5 mb-4" placeholder="Pilih gambar" /> --}}
                            <hr />
                            <label>Isi Berita</label>
                            <textarea class="  ckeditor" name="editor-post" type="body">{{ $post->body }}</textarea>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-3">
                                <button class="btn btn-success me-md-2" type="button" value="simpan"
                                    href="/admin_post_edit/update/{{ post:slug }}">Update</button>
                                <button class="btn btn-danger" type="button">Batal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
