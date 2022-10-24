@extends('master')
@section("content")
<div class="search-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-4 trending-wrapper">
            <h4>Result for Products</h4>
            @foreach ($products as $item)
            <div class="search-item">
            <a href="detail/{{$item['id']}}">
              <img class="trending-img" src="{{$item['gallery']}}" >
              <div class="">
                  <h2 >{{$item['name']}}<h2>

              </div>
            </a>
           </div>
           @endforeach
          </div>
    </div>
</div>
@endsection
