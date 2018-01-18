@extends('master')
@section('content')
    <div class="product-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="breadcrumb clearfix">
                        <ul>
                            <li class="home">
                                <a href="#">Trang chủ</a>
                            </li>
                            <li class="home">
                                <a href="#">Thời trang nam</a>
                            </li>
                            <li class="home">
                                <a href="#">Áo khoác nam</a>
                            </li>
                            <li class="home">
                                <a href="#">Áo khoác Kaki/ Jean</a>
                            </li>
                            <li class="icon-li">
                                <strong>{{ $product->name }}</strong>
                            </li>
                        </ul>
                    </div>
                    <div class="product-block clearfix">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="product-wrap">
                                    <div class="product-large">
                                        <a href="#">
                                            <img src="/{{ $product->image_link }}">
                                        </a>
                                    </div>
                                    <div class="product-thumbs">
                                        @if($photos)
                                            @foreach($photos as $photo)
                                                <a href="#">
                                                    <img src="/{{ $photo->link }}">
                                                </a>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <form method="post" action="{{ route('post-cart') }}">
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                {{ csrf_field()}}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <h2 class="title">{{ $product->name }}</h2>
                                    <div class="price">
                                        <span class="price-new">{{ number_format($product->price*(100-$product->discount)/100) }} đ</span>
                                        <span class="price-old">{{ number_format($product->price) }} đ</span>
                                    </div>
                                    <div class="product-code">
                                        <span>Mã SP : </span>
                                    </div>
                                    <div class="description">
                                        <p>
                                            {{ $product->description }}
                                        </p>
                                    </div>
                                    <div class="social">
                                        <div class="fb-like" data-width=""></div>
                                    </div>
                                    <div class="quantity clearfix">
                                        <label>Số lượng </label>
                                        <div class="quantity-input">
                                            <input type="number" value="1" name="quantity">
                                        </div>
                                    </div>
                                    <div class="button">
                                        <button class="btn btn-default" type="submit" name="action" value="btnAddCart"><i class="glyphicon glyphicon-shopping-cart"></i>Thêm giỏ hàng</button>
                                        <button class="btn btn-primary" type="submit" name="action" value="btnAddBuy"><i class="glyphicon glyphicon-ok"></i>Mua ngay</button>
                                    </div>
                                    <div class="call">
                                        <p class="title">Để lại số điện thoại, chúng tôi sẽ tư vấn ngay sau từ 5-10 phút</p>
                                        <div class="input">
                                            <div class="input-group">
                                                <input class="form-control ng-pristine ng-valid ng-touched" ng-model="CustomerPhone" onblur="if(this.value=='')this.value='Nhập số điện thoại...'" onfocus="if(this.value=='Nhập số điện thoại...')this.value=''" placeholder="Nhập số điện thoại..." type="text">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-primary" type="button"><i class="fa fa-phone"></i> Gọi lại cho tôi</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sales_policy">
                        <h3 class="title">
                            <span>Chính sách bán hàng</span>
                        </h3>
                        <ul>
                            <li>Giao hàng toàn quốc</li>
                            <li>Thanh toán khi nhận hàng</li>
                            <li>Đổi trả trong <span>15 ngày</span></li>
                            <li>Hoàn ngay tiền mặt</li>
                            <li>Chất lượng đảm bảo</li>
                            <li>Miễn phí vận chuyển: <span>Đơn hàng từ 3 món trở lên</span></li>
                        </ul>
                    </div>
                    <div class="shopping_guide">
                        <h3 class="title">
                            <span>Hướng dẫn mua hàng</span>
                        </h3>
                        <ul>
                            <li>Mua hàng trực tiếp tại website <strong>http://thaovyshop.com.vn</strong></li>
                            <li>Gọi điện thoại <span>0983807784</span> để mua hàng</li>
                            <li> Mua tại Trung tâm CSKH:
                                <strong>Số nhà 10 khu I thị trấn Kim Tân - huyện Thạch Thành - tỉnh Thanh Hóa</strong>
                                <br>
                                <a href="#">Xem bản đồ</a>
                            </li>
                            <li> Mua sỉ/buôn xin gọi <span>0983807784</span> để được hỗ trợ.</li>

                        </ul>
                    </div>
                    <div class="hot_products">
                        <h3 class="title">
                            <span>Sản phẩm hot</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=130411427706870&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
@endsection
