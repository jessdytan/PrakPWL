@extends('admin.layout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Postingan</h1>
    </div>
    <br>
    <a href="/admin/create_post" class="btn btn-primary">Tambah Postingan Baru</a>
    <br>
    <br>
    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong> {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <br><br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Excerpt</th>
            <th scope="col">Content</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i=1;
                @endphp
                @foreach ($posts as $post)
          <tr>
            <th scope="row">{{ $i }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->excerpt }}</td>
            <td>{{ $post->content }}</td>
            <td><img src="{{ asset('gambar/'. $post->image) }}" alt="" srcset="" width="320" height="250"></td>
            <td>
                <div class="row">
                    <div class="col-6">
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-danger">Hapus</button>
                    </div>
                </div>
            </td>

          </tr>
         @php
             $i++;
         @endphp
         @endforeach
        </tbody>
      </table>
</div>
<!-- /.container-fluid -->
@endsection