@extends('master')
@section("content")
<div class="custom-product">
    @include('sweetalert::alert')
    <div class="row">
     <div class="col-sm-6">
       <img class="detai-img" src="{{$product['gallery']}}" alt="" >
     </div>
     <div class="col-sm-6">
        <a href="/">Go Back</a>
        <h2 class="pro-name">{{$product['name']}}</h2>
        <h3>Price : {{$product['price']}}</h3>
        <h4 class="detail-descr">Detailsa : {{$product['description']}}</h4>
        <h4>Category : {{$product['category']}}</h4>

      <form action="/add_to_cart" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{$product['id']}}">
        <button class="btn btn-primary crt-button">Add to Cart</button>
      </form>

        <button class="btn btn-success crt-button">Buy Now</button>
      </div>

    </div>
</div>
</div>
@endsection
