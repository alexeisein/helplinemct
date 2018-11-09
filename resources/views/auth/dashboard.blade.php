@extends('layouts.app')

@section('title', ucwords(Auth::user()->username))

<style>
    .pills-success .nav-item .dropdown-toggle.nav-link:focus {
    background-color: #00C851;
    color: #fff;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}
</style>

@section('content')
<div class="container">
    <ul class="nav md-pills nav-justified pills-success">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#panel52" role="tab">Active</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
      aria-expanded="false">Dropdown</a>
    <div class="dropdown-menu dropdown-success">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#panel51" role="tab">Link 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#panel50" role="tab">Link 2</a>
  </li>
</ul>
</div>
@endsection
