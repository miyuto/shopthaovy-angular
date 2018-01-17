@extends('master')
@section('content')
<div class="wrapper list-product">
    <div class="container container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="product-menu">
                    <h3 class="title">
                        <span>Thời trang nam</span>
                    </h3>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-check"></i>
                                <span>Quần nam</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-check"></i>
                                <span>Áo nam</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-check"></i>
                                <span>Bộ đồ thể thao nam</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="breadcrumb clearfix">
                    <ul>
                    <li class="home">
                        <a href="#">Trang chủ</a>
                    </li>
                    <li class="icon-li">
                        <span>Thời trang nam</span>
                    </li>
                    </ul>
                </div>
                <h1 class="title clearfix">
                    <span>Thời trang nam</span>
                </h1>
                <div class="nav navbar-default product-filter clearfix">
                    <div class="limit">
                        <span>Sản phẩm/trang</span>
                        <select>
                            <option value="10" selected>10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <div class="sort">
                        <span>Sắp xếp</span>
                        <select>
                            <option value="" selected>Mặc định</option>
                            <option value="" >Giá tăng dần</option>
                            <option value="" >Giá giảm dần</option>
                        </select>
                    </div>
                </div>

                {{--<div class="product-content">--}}
                    {{--<div class="col-md-12">--}}
                        {{--<div class="breadcrumb clearfix">--}}
                            {{--<ul>--}}
                                {{--<li class="home">--}}
                                    {{--<a href="#">Trang chủ</a>--}}
                                {{--</li>--}}
                                {{--<li class="icon-li">--}}
                                    {{--<strong>Thời trang nam</strong>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<h1 class="title clearfix">--}}
                            {{--<span>Thời trang nam</span>--}}
                        {{--</h1>--}}
                        {{--<div class="row">--}}
                            {{--<nav class="navbar navbar-default product-filter">--}}
                                {{--<ul class="display">--}}
                                    {{--<li>--}}
                                        {{--<a href="#" title="Grid"><i class="fa fa-th-large"></i></a>--}}
                                    {{--</li>--}}
                                    {{--<li><a href="#" title="List"><i class="fa fa-th-list"></i></a></li>--}}
                                {{--</ul>--}}
                                {{--<div class="limit">--}}
                                    {{--<span>Sản phẩm/trang</span>--}}
                                    {{--<select id="lblimit" name="lblimit" class="nb_item" style="height: 30px;">--}}
                                        {{--<option value="10" selected>10</option>--}}
                                        {{--<option value="20">20</option>--}}
                                        {{--<option value="50">50</option>--}}
                                        {{--<option value="100">100</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                                {{--<div class="sort">--}}
                                    {{--<span>Sắp xếp theo</span>--}}
                                    {{--<select class="selectProductSort" style="height: 30px;">--}}
                                        {{--<option value="" selected>Mặc định</option>--}}
                                        {{--<option value="" >Giá tăng dần</option>--}}
                                        {{--<option value="" >Giá giảm dần</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</nav>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
</div>
@endsection












