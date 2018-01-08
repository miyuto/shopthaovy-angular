<div class="top-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4 top-link">
                <ul>
                    <li><i class="glyphicon glyphicon-earphone"></i></li>
                    <li>Hotline : 0983807784</li>
                </ul>
            </div>
            <div class="col-md-5 col-md-offset-3 top-menu hidden-xs hidden-sm">
                <ul>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-pencil"></i>Kiểm tra đơn hàng</a>
                    </li>
                    <li><a href="#"><i class="glyphicon glyphicon-shopping-cart"></i>Giỏ hàng</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-log-in"></i>Đăng nhập</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-plus-sign"></i>Đăng ký</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>
<div class="header-content">
    <div class="container">
        <div class="row">
            <div class="col-md-3 header-left">
                <div class="logo">
                    <a href="{{route('index')}}"><img src="images/logo.png"></a>
                </div>
            </div>
            <div class="col-md-9  header-right">
                <div class="sale-policy clearfix hidden-sm hidden-xs">
                    <ul class="clearfix">
                        <li class="shipping">
                            <i class="fa fa-truck"></i>
                            <span>Giao hàng miễn phí</span>
                        </li>
                        <li class="payment">
                            <i class="fa fa-money"></i>
                            <span>Thanh toán linh hoạt</span>
                        </li>
                        <li>
                            <i class="fa fa-refresh"></i>
                            <span>Trả hàng trong 30 ngày</span>
                        </li>
                    </ul>
                </div>
                <div class="cart">
                    <a href="#">
                        <i class="fa fa-shopping-bag" style="font-size: 36px;"></i>
                        <span>    0 sp - 0đ </span>
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="search hidden-sm hidden-xs">
                    <div class="form-search">
                        <div class="form-search-controls">
                            <input type="text" class="form-control" name="search" id="txtSearch" placeholder="Tìm kiếm">
                        </div>
                        <div class="select-categories">
                            <select class="selectpicker">
                                <option value="0" selected="selected">Tất cả</option>
                                <option value="1">Thời trang nam</option>
                                <option value="2">Thời trang nữ</option>
                                <option value="3">Mỹ phẩm</option>
                                <option value="4">Túi xách</option>
                            </select>
                        </div>
                        <button class="btn btn-search" title="Search" type="button" id="btnSearch">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>
{{--<div class="clearfix"></div>--}}
<div class="navigation-menu clearfix">　
    <div class="container container-fluid">
        <div class="menu-top">
            <div class="row">
                <div class="col-md-3">
                    <div class="menu-cate menu-quick-select">
                        <div class="menu-cate-title">
                            <span>
                                <i class="glyphicon glyphicon-th-list"></i>
                                <a href="{{route('list-product')}}">Danh mục sản phẩm</a>
                            </span>
                        </div>
                        {{--<ul class="menu-cate-content">--}}
                            {{--<li>--}}
                                {{--<a href="#">--}}
                                    {{--<i>Thời trang nam</i>--}}
                                    {{--<span class="arrow-menu"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">--}}
                                    {{--<i>Thời trang nữ</i>--}}
                                    {{--<span class="arrow-menu"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">--}}
                                    {{--<i>Mỹ phẩm</i>--}}
                                    {{--<span class="arrow-menu"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">--}}
                                    {{--<i>Túi xách</i>--}}
                                    {{--<span class="arrow-menu"></span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="navbar nav-menu">
                        <div class="navbar-header">
                            <div id="mobile-menu" class="mobile-menu collapse navbar-collapse">
                                <ul class="menu nav navbar-nav">
                                    <li class="level0">
                                        <a href="{{route('index')}}"><span>Trang chủ</span></a>
                                    </li>
                                    <li class="level0">
                                        <a href="#">Sản phẩm</a>
                                        {{--<ul class="level1">--}}
                                            {{--<li>--}}
                                                {{--<a href="#"><span></span></a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}

                                    <li class="level0">
                                        <a href="{{route('news')}}">Tin tức</a>
                                    </li>
                                    <li class="level0">
                                        <a href="{{route('introduction')}}">Giới thiệu</a>
                                    </li>
                                    <li class="level0">
                                        <a href="{{route('contact-us')}}">Liên hệ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>