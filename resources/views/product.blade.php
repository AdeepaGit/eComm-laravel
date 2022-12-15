@extends('master')
@section("content")
<div class="custom-product">

 <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  @foreach ($products as $item)
  <div class="carousel-item {{$item['id']==1?'active':''}}">
    <a href="detail/{{$item['id']}}">
    <img class="d-block slider-img" src="{{$item['gallery']}}" >
    <div class="carousel-caption sider-text">
        <h3 class="Pro-name">{{$item['name']}}<h3>
        <p class="description">{{$item['description']}}</p>
    </div>
</a>
 </div>
  @endforeach
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>
<div class="trending-wrapper">
  <h3>Tranding Products</h3>
  @foreach ($products as $item)
  <div class="tranding-item">
  <a href="detail/{{$item['id']}}">
    <img class="trending-img" src="{{$item['gallery']}}" >
    <div class="">
        <h3 >{{$item['name']}}<h3>
    </div>

  </a>
 </div>
  @endforeach
</div>
@include('sweetalert::alert')
</div>
@endsection
