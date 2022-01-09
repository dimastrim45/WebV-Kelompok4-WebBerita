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
            <hr />
            <form method="post" action="/dashboard">
                @csrf
                <div class=" row-fluid">
                    <div class=" col-md-5 mx-2 mb-2">
                        <label for="category" class="form-label mx-2">Category</label>
                        <select class="form-category" id="category" required name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="label">
                            <div class="row col-12">
                                <div class="row col-12">
                                    <label>Judul</label>
                                    <input type="text" class="input mb-4" name="title" id="title">
                                    @if ($errors->has('title'))
                                        <div class="text-danger">
                                            {{ $errors->first('title') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="row col-12">
                                    <label>Slug</label>
                                    <input type="text" class="input mb-4" name="slug" id="slug" disabled readonly>
                                    @if ($errors->has('slug'))
                                        <div class="text-danger">
                                            {{ $errors->first('slug') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="row col-12">
                                    <label>Excerpt</label>
                                    <input type="excerpt" class="input mb-4" name="excerpt">
                                    @if ($errors->has('excerpt'))
                                        <div class="text-danger">
                                            {{ $errors->first('excerpt') }}
                                        </div>
                                    @endif
                                </div>
                                <hr />
                                <div class="row col-12">
                                    <label>Isi Berita</label>
                                    <textarea class="  ckeditor" name="body" type="body"></textarea>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-3">
                                    </div>
                                    @if ($errors->has('body'))
                                        <div class="text-danger">
                                            {{ $errors->first('body') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success me-md-2" type="submit">Simpan</button>
                        <button class="btn btn-danger" type="button" href="/dashboard">Batal</button>
            </form>
        </div>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>

@endsection
