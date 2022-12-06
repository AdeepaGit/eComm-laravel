@extends('master')
@section("content")
<div class="position-relative  start-50 translate-middle-x p-3 m-3 ordernow">
    <div class="col-sm-10 ">
        <table class="table ">

            <tbody>
              <tr>

                <td>Amount</td>
                <td>$ {{ $total }}</td>

              </tr>
              <tr>
                <td>tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>$ {{ $total +10 }}</td>
              </tr>
            </tbody>
          </table>
    </div>
    <form action="/orderplace" method="POST">
        <div class="mb-3">
         @csrf
          <textarea name="address" class="form-control" placeholder="type your Address"></textarea>

        </div>
        <div class="mb-3">
          <label  class="form-label">Payment Method</label>
          <div>
          <input type="radio" value="cash" name="payment" class="radio"><span>Onlione Payment</span>
          </div><div>
          <input type="radio" value="cash" name="payment" class="radio"><span>EMI Payment</span>
        </div><div>
          <input type="radio" value="cash" name="payment" class="radio"><span>Cash On Delivery</span>
        </div>
        </div>

        <button type="submit" class="btn btn-primary">Order Now</button>
      </form></div>
</div>


</div>
@endsection
