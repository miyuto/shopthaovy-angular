@extends('master')
@section('content')
    <div class="cart-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb clearfix">
                        <ul>
                            <li class="home">
                                <a href="#">Trang chủ</a>
                            </li>
                            <li class="icon-li">
                                <strong>Giỏ hàng</strong>
                            </li>
                        </ul>
                    </div>
                    <div class="cart-content">
                        <h1 class="title">
                            <span>Giỏ hàng của tôi</span>
                        </h1>
                        <div class="steps clearfix">
                            <ul class="clearfix">
                                <li class="cart active col-md-2 col-xs-12 col-sm-4 col-md-offset-3 col-sm-offset-8 col-xs-offset-0">
                                    <span>
                                        <i class="glyphicon glyphicon-shopping-cart"></i>
                                    </span>
                                    <span>Giỏ hàng của tôi</span>
                                    <span class="step-number">
                                        <a>1</a>
                                    </span>
                                </li>
                                <li class="payment col-md-2 col-xs-12 col-sm-4">
                                    <span class="payment_icon" id="payment_icon">
                                        <i class="glyphicon glyphicon-usd"></i>
                                    </span>
                                    <span id="payment_title">Thanh toán</span>
                                    <span class="step-number">
                                        <a id="payment_number">2</a>
                                    </span>
                                </li>
                                <li class="finish col-md-2 col-xs-12 col-sm-4">
                                    <span id="finish_icon">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                                    <span id="finish_title">Hoàn tất</span>
                                    <span class="step-number">
                                        <a id="finish_number">3</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="cart-block">
                            <div class="cart-info table-responsive">
                                <table class="table product-list">
                                    <thead>
                                        <tr>
                                            <th>Sản phẩm</th>
                                            <th>Hình ảnh</th>
                                            <th>Giá</th>
                                            <th>Số lượng</th>
                                            <th>Thành tiền</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($cart))
                                        @foreach($cart as $item)
                                        <tr>
                                            <td class="des">
                                                <h2 class="ng-binding">{{ $item->name }}</h2>
                                            </td>
                                            <td class="image">
                                                <img src="images/ao1.jpg" class="img-responsive">
                                            </td>
                                            <td class="price">{{ $item->price }}</td>
                                            <td class="cart_quantity_button">
                                                <a class="cart_quantity_up"
                                                   href='{{ url("update-cart?product_id=$item->id&decrease=1") }}'> - </a>
                                                <input class="cart_quantity_input" type="text" name="quantity" value="{{ $item->qty }}" autocomplete="off" size="2">
                                                <a class="cart_quantity_down"
                                                   href='{{ url("update-cart?product_id=$item->id&increment=1") }}'> + </a>
                                            </td>
                                            <td class="amount ng-binding">{{ number_format($item->price * $item->qty) }} đ</td>
                                            <td class="remove">
                                                <a href="{{ route('delete-cart',$item->rowId) }}">
                                                    <i class="glyphicon glyphicon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-right clearfix">
                                <span>
                                    <b>Tổng thanh toán:</b>
                                </span>
                                @if($totalPrice)
                                    <span class="pay-price">{{ $totalPrice }} đ</span>
                                @endif
                            </div>

                            <div class="text-right button">
                                <a class="btn btn-default" href="{{ route('index') }}">Tiếp tục mua hàng</a>
                                <a class="btn btn-primary" href="{{route('payment')}}">Tiến hành thanh toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('#payment_title').css("color","#aaaaaa !important;");
        $('#payment_icon').css("color","#aaaaaa !important;");
        $('#payment_number').css("background-color","#aaaaaa !important;");
        $('#finish_icon').css("color","#aaaaaa !important;");
        $('#finish_title').css("color","#aaaaaa !important;");
        $('#finish_number').css("background-color","#aaaaaa !important;");

    </script>
@endsection
