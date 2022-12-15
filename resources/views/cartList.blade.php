@extends('master')
@section("content")
<div class="search-product">
    <div class="col-sm-10">
        <a href="#">Filter</a>
    </div>
    <div class="justify-content-center">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            <a href="ordernow" class="btn btn-success orderbtn" >Order Now</a>

            @foreach ($products as $item)
            <div class="row search-item">
            <div class="col-sm-2">
                <a href="detail/{{$item->id}}">
                    <img class="trending-img" src="{{$item->gallery}}" >
                  </a>
            </div>
            <div class="col-sm-6">
                <a href="detail/{{$item->id}}">
                    <div class="">
                        <h2 >{{$item->name}}<h2>
                         <h3 >{{$item->description}}<h3>
                    </div>
                  </a>
            </div>
            <div class="col-sm-3">
                    <div class="">
                        <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning" >Remove</a>

                    </div>
                  </a>
            </div>
            <hr>
           </div>
           @endforeach
          </div>

    </div>
</div>
@endsection
