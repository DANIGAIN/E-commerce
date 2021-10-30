@extends('front.master')
@section('content')

<div class="cart-page pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="section-wrap">
                            <h3 class="sectin-wrap-title">Shopping Cart</h3>
                            <div class="table-responsive m-y-20">
                                <div class="primary-table">
                                    <table class="table" >
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>name </th>
                                                <th>Price</th>
                                                <th>Qnty</th>
                                                <th>Total</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            @if(isset($items[0]))
                                               @foreach($items as $item)
                                                 @if($item->product)
                                                  <tr>
                                                    <td>
                                                    <div class="producd-info d-flex align-items-center has-open">
                                                        <a href="#" class="product-img mr-3">
                                                            <img src="{{asset($item->product->image1)}}" alt="product" />
                                                        </a>  
                                                    </div>
                                                    </td>
                                                    <td><a class="product-name" href="#">{{$item->product->name}}</a></td>
                                                    <td>${{$item->product->quantity}}</td>
                                                    <td>
                                                    <div class="cart-plus-minus">
                                                        <div class="dec qtybutton">-</div>
                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                                        <div class="inc qtybutton">+</div>
                                                    </div>
                                                    </td>
                                                    <td>${{total($item->product->quantity)}}</td>
                                                    <td>
                                                        <a class="trash-btn" href="{{route('delete.cart',$item->id)}}"><i class="fas fa-trash"></i></a>
                                                     </td>
                                                  </tr>
                                                  @endif
                                                @endforeach 
                                            @endif
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="cart-bottom mt-5">
                                <ul class="d-flex align-items-center justify-content-between">
                                    <li><a class="btn-style-two back-btn" href="{{route('home')}}"> <i class="fas fa-angle-left"></i> Back to shopping</a></li>
                                    <li><a class="btn-style-two" href="#">Update Cart</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-page-right">
                            <div class="card-right-wrap coupon-code-info ">
                                <h3 class="sectin-wrap-title">Discount Coupon</h3>
                                <form>
                                    <div class="form-group">
                                      <input type="text" class="form-control" id="coupon" name="coupon" placeholder="Coupon Code" />
                                    </div>
                                    <button type="submit" class="apply-btn">Apply</button>
                                </form>
                            </div>
                            <div class="card-right-wrap proceed-checkout-info">
                                <ul>
                                    <li>Product Cost <span>${{CartAmount()}}</span></li>
                                    <li>TAX (5%) <span>${{totaltax(CartAmount(),5)}}</span></li>
                                    <li>Shipping Cost <span>$50</span></li>
                                    <li class="total">Total <span>${{totalcost(CartAmount(),totaltax(CartAmount() ,5),50)}}</span></li>
                                </ul>
                                <a class="checkout-btn" href="{{route('payment.index')}}">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection