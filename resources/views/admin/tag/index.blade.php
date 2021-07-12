@extends('admin.layout')

@section('content')
<div class="breadcrumb-wrapper">
    <h1>Tag</h1>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb p-0">
      <li class="breadcrumb-item">
        <a href="index.html">
          <span class="mdi mdi-home"></span>                
        </a>
      </li>
      <li class="breadcrumb-item">
        article
      </li>
      <li class="breadcrumb-item" aria-current="page">tag</li>
    </ol>
  </nav>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="card card-default">
      <div class="card-body">
        <div class="mb-3">
          <a href="{{ route('tags.create')}}" class="btn btn-info">Tambah Tag</a>
        </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Kategori</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tags as $tag => $hasil)
            <tr>
              <td scope="row">{{ $tag + $tags->firstitem()}}</td>
              <td>{{ $hasil->name }}</td>
              <td>
                <form action="{{ route('tags.destroy', $hasil->id) }}" method="POST">
                  @method('delete')
                  @csrf
                  <a href="{{ route('tags.edit', $hasil->id)}}" class="btn btn-sm btn-primary">Edit</a>
                  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $tags->links() }}
      </div>
    </div>
  </div>
</div>

@endsection