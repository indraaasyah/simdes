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
      <li class="breadcrumb-item" aria-current="page">Tag</li>
    </ol>
  </nav>
</div>
<div class="row">
  <div class="col-lg-8">
    <div class="card card-default">
      <div class="card-body">
        <form action="{{ route('tags.update', $tags->id) }}" method="POST">
          @csrf
          @method('patch')
          <div class="form-group">
            <label>Nama Tag</label>
            <input type="text" class="form-control" name="name" value="{{ $tags->name }}">
          </div>
          <div>
            <button class="btn btn-sm btn-primary">Update Tag</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection