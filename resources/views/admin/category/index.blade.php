@extends('admin.layout')

@section('content')
<div class="breadcrumb-wrapper">
    <h1>Kategori</h1>
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
      <li class="breadcrumb-item" aria-current="page">kategori</li>
    </ol>
  </nav>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="card card-default">
      <div class="card-body">
        <div class="mb-3">
          <a href="{{ route('categories.create')}}" class="btn btn-info">Tambah Kategori</a>
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
            @foreach ($categories as $category => $kategori)
            <tr>
              <td scope="row">{{ $category + $categories->firstitem()}}</td>
              <td>{{ $kategori->name }}</td>
              <td>
                <form action="{{ route('categories.destroy', $kategori->id) }}" method="POST">
                  @method('delete')
                  @csrf
                  <a href="{{ route('categories.edit', $kategori->id)}}" class="btn btn-sm btn-primary">Edit</a>
                  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $categories->links() }}
      </div>
    </div>
  </div>
</div>

@endsection