@extends('admin.layout')

@section('content')

  <div class="breadcrumb-wrapper">
      <h1>Breadcrumb</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb p-0">
        <li class="breadcrumb-item">
          <a href="index.html">
            <span class="mdi mdi-home"></span>                
          </a>
        </li>
        <li class="breadcrumb-item">
          components
        </li>
        <li class="breadcrumb-item" aria-current="page">breadcrumb</li>
      </ol>
    </nav>
  </div>
  <div class="row">
    <div class="col-12 col-xl-6">
      <div class="card card-default">
        <div class="card-header card-header-border-bottom">
          <h2>Breadcrumbs</h2>
        </div>
        <div class="card-body">
          <p class="mb-5">Breadcrumb Indicate the current page’s location within a navigational hierarchy that automatically adds separators via CSS. Read bootstrap documentaion for <a href="https://getbootstrap.com/docs/4.1/components/breadcrumb/" target="_blank">more details.</a></p>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
          </nav>

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Components</li>
            </ol>
          </nav>

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Components</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Bredcrumbs</li>
            </ol>
          </nav>

        </div>
      </div>
    </div>
  </div>
@endsection