@extends('admin.layout')

@section('content')
<div class="content">
  <div class="breadcrumb-wrapper">
      <h1>Categories</h1>
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
        <li class="breadcrumb-item" aria-current="page">categories</li>
      </ol>
    </nav>
  </div>
  <div class="row">
    <div class="col-12 col-xl-12">
      <div class="card card-default">
        <div class="card-header card-header-border-bottom">
          <h2>Breadcrumbs</h2>
        </div>
        <div class="card-body">
        </div>
      </div>
    </div>
  </div>
</div>
@endsection