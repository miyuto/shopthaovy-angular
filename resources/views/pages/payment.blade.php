@extends('master')
@section('content')
    <div class="payment-content">
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
                        <h1 class="title">
                            <span>Thanh toán</span>
                        </h1>
                    </div>
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
                            <li class="payment col-md-2 col-xs-12 col-sm-4 active">
                                    <span>
                                        <i class="glyphicon glyphicon-usd"></i>
                                    </span>
                                <span>Thanh toán</span>
                                <span class="step-number">
                                        <a>2</a>
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
                    <form action="{{ route('post-payment') }}" method="POST">
                        <div class="payment-block clearfix">
                            {{ csrf_field()}}
                            <div class="col-md-4 col-xs-12 col-sm-12 steps1 payment-step">
                                <h4>1. Địa chỉ thanh toán và giao hàng</h4>
                                <div class="step-preview clearfix">
                                    <h2 class="title">Thông tin thanh toán</h2>
                                    @if(count($errors)>0)
                                        <div class="alert alert-danger error-payment" id="error_payment">
                                            @foreach($errors->all() as $err)
                                                <div>{{ $err}}</div>
                                            @endforeach
                                        </div>
                                    @endif
                                    @if(count($customer))
                                        <div class="form-block ng-scope">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Họ & Tên" type="text" name="full_name"
                                                       value="{{ $customer->full_name }}">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Số điện thoại" type="text" name="tel"
                                                       value="{{ $customer->phone }}">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Địa chỉ 1" type="text" name="address1"
                                                       value="{{ $customer->address1 }}">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Địa chỉ 2" type="text" name="address2"
                                                       value="{{ $customer->address2 }}">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="4" placeholder="Ghi chú đơn hàng" name="description"></textarea>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-12 steps2 payment-step">
                                <h4>2. Thanh toán và vận chuyển</h4>
                                <div class="step-preview clearfix">
                                    <h2 class="title">Vận chuyển</h2>
                                    <div class="form-group">
                                        <select class="form-control" name="ship_type">
                                            @if(count($transportFee))
                                                @foreach($transportFee as $feeItem)
                                                    @if( $feeItem->price > 0 )
                                                        <option value="">
                                                            {{ $feeItem->name }} - {{ number_format($feeItem->price) }}
                                                        </option>
                                                    @else
                                                        <option value="">
                                                            {{ $feeItem->name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-12 steps3 payment-step">
                                <h4>3. Thông tin đơn hàng</h4>
                                <div class="step-preview clearfix">
                                    <div class="cart-info">
                                        @if(count($cart))
                                            @foreach($cart as $item)
                                                <div class="cart-items clearfix">
                                                <span class="image pull-left">
                                                    <a href="#">
                                                        <img src="/{{ $item->image_link }}" class="img-responsive">
                                                    </a>
                                                </span>
                                                    <div class="product-info pull-left">
                                                    <span class="product-name">
                                                        <a href="#">{{ $item->name }}</a>x
                                                        <span>{{ $item->qty }}</span>
                                                    </span>
                                                    </div>
                                                    <span class="price">{{ number_format($item->price * $item->qty) }} ₫</span>
                                                </div>
                                            @endforeach
                                        @endif

                                        <div class="total-price">
                                            Thành tiền
                                            <span>{{ $total }} ₫</span>
                                        </div>
                                        <div class="shipping-price">
                                            Phí vận chuyển
                                            <span>0 đ</span>
                                        </div>
                                        <div class="btn-coupon">
                                            <a class="btn btn-primary">Sử dụng mã giảm giá </a>
                                        </div>
                                        <div class="use-coupon">
                                            <form method="get" action="{{ route('use-discount') }}">
                                                <div class="form-group">
                                                    <input placeholder="Nhập mã giảm giá" class="coupon-code form-control" name="discount-ratio">
                                                    @if(Session::has('not_discount'))
                                                        <div class="alert-danger" id="error_discount">{{ Session::get('not_discount') }}</div>
                                                    @endif
                                                    <button type="submit" class="btn btn-primary">Sử dụng</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="total-payment">
                                            Thanh toán
                                            @if(Session::has('ratio'))
                                                <span>{{ $total * (100 - Session::get('ratio'))/100 }} ₫</span>
                                            @else
                                                <span>{{ $total }} ₫</span>
                                            @endif
                                        </div>
                                        <div class="button-submit">
                                            <button class="btn btn-default" type="submit">Đặt hàng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        setTimeout(function () {
            $('#error_discount').remove();
        },4000);

        $("select[name='ship_type']").change(function () {
            var shipType = $(this).val();
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "/payment",
                method: 'GET',
                data: {
                    select_type_ship: shipType,
                    _token: token
                },
                success: function (data) {
                }
            });
        });

        $('#finish_icon').css("color","#aaaaaa !important;");
        $('#finish_title').css("color","#aaaaaa !important;");
        $('#finish_number').css("background-color","#aaaaaa !important;");

        setTimeout(function () {
            $('#error_payment').remove();
        },4000);
    </script>
@endsection
