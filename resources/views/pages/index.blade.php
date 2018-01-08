@extends('master')
@section('content')
    <div class="banner-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-8 hidden-xs hidden-sm">
                    <div class="w3-content w3-display-container">
                        <img class="mySlides" src="images/sliders/anh1.png" style="max-width: 100%;max-height: 100%">
                        <img class="mySlides" src="images/sliders/anh2.png" style="max-width: 100%;max-height: 100%">
                        <img class="mySlides" src="images/sliders/anh1.png" style="max-width: 100%;max-height: 100%">
                        <img class="mySlides" src="images/sliders/anh2.png" style="max-width: 100%;max-height: 100%">

                        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(1)">&#10094;</button>
                        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(-1)">&#10095;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="adv"></div>
    <div class="main">
        <div class="container">
            <div class="row">
                <h1 class="title clearfix">
                    <span>Sản phẩm</span>
                </h1>
                {{--<div class="product-title clearfix">--}}
                    {{--<div class="col-md-2 title-name">--}}
                        {{--<span>Sản phẩm</span>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-10 hidden-sm hidden-xs separator">--}}
                        {{--<h3 class="title-separator"></h3>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
            <div class="row">
                <nav class="navbar navbar-default product-filter">
                        <ul class="display">
                            <li>
                                <a href="#" title="Grid"><i class="fa fa-th-large"></i></a>
                            </li>
                            <li><a href="#" title="List"><i class="fa fa-th-list"></i></a></li>
                        </ul>
                    <div class="limit">
                        <span>Sản phẩm/trang</span>
                        <select id="lblimit" name="lblimit" class="nb_item" style="height: 30px;">
                            <option value="10" selected>10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <div class="sort">
                        <span>Sắp xếp theo</span>
                        <select class="selectProductSort" style="height: 30px;">
                            <option value="" selected>Mặc định</option>
                            <option value="" >Giá tăng dần</option>
                            <option value="" >Giá giảm dần</option>
                        </select>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="product-block product-grid clearfix">
                    <div class="col-md-3 col-sm-3 col-xs-6 product-item-box">
                        <div class="product-item product-resize" style="height: 366px">
                            <div class="image image-resize" style="height: 268px">
                                <a href="#" title="">
                                    <img src="images/ao1.jpg">
                                </a>
                                <span class="promotion">-45%</span>
                            </div>
                            <div class="right-block">
                                <h2 class="name">
                                    <a href="#">Áo khoác len lông xù kiểu Hàn Quốc</a>
                                </h2>
                                <div class="rating"></div>
                                <div class="cotentprice clearfix">
                                    <div class="discountpercent">45%</div>
                                    <div class="price">
                                        <span class="price-new">175.000 đ</span>
                                        <span class="price-old">350.000 đ</span>
                                    </div>
                                    <div class="button-more">
                                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 product-item-box">
                        <div class="product-item product-resize" style="height: 366px">
                            <div class="image image-resize" style="height: 268px">
                                <a href="#" title="">
                                    <img src="images/ao1.jpg">
                                </a>
                                <span class="promotion">-45%</span>
                            </div>
                            <div class="right-block">
                                <h2 class="name">
                                    <a href="#">Áo khoác len lông xù kiểu Hàn Quốc</a>
                                </h2>
                                <div class="rating"></div>
                                <div class="cotentprice clearfix">
                                    <div class="discountpercent">45%</div>
                                    <div class="price">
                                        <span class="price-new">175.000 đ</span>
                                        <span class="price-old">350.000 đ</span>
                                    </div>
                                    <div class="button-more">
                                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 product-item-box">
                        <div class="product-item product-resize" style="height: 366px">
                            <div class="image image-resize" style="height: 268px">
                                <a href="#" title="">
                                    <img src="images/ao1.jpg">
                                </a>
                                <span class="promotion">-45%</span>
                            </div>
                            <div class="right-block">
                                <h2 class="name">
                                    <a href="#">Áo khoác len lông xù kiểu Hàn Quốc</a>
                                </h2>
                                <div class="rating"></div>
                                <div class="cotentprice clearfix">
                                    <div class="discountpercent">45%</div>
                                    <div class="price">
                                        <span class="price-new">175.000 đ</span>
                                        <span class="price-old">350.000 đ</span>
                                    </div>
                                    <div class="button-more">
                                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 product-item-box">
                        <div class="product-item product-resize" style="height: 366px">
                            <div class="image image-resize" style="height: 268px">
                                <a href="#" title="">
                                    <img src="images/ao1.jpg">
                                </a>
                                <span class="promotion">-45%</span>
                            </div>
                            <div class="right-block">
                                <h2 class="name">
                                    <a href="#">Áo khoác len lông xù kiểu Hàn Quốc</a>
                                </h2>
                                <div class="rating"></div>
                                <div class="cotentprice clearfix">
                                    <div class="discountpercent">45%</div>
                                    <div class="price">
                                        <span class="price-new">175.000 đ</span>
                                        <span class="price-old">350.000 đ</span>
                                    </div>
                                    <div class="button-more">
                                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 product-item-box">
                        <div class="product-item product-resize" style="height: 366px">
                            <div class="image image-resize" style="height: 268px">
                                <a href="#" title="">
                                    <img src="images/ao1.jpg">
                                </a>
                                <span class="promotion">-45%</span>
                            </div>
                            <div class="right-block">
                                <h2 class="name">
                                    <a href="#">Áo khoác len lông xù kiểu Hàn Quốc</a>
                                </h2>
                                <div class="rating"></div>
                                <div class="cotentprice clearfix">
                                    <div class="discountpercent">45%</div>
                                    <div class="price">
                                        <span class="price-new">175.000 đ</span>
                                        <span class="price-old">350.000 đ</span>
                                    </div>
                                    <div class="button-more">
                                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 product-item-box">
                        <div class="product-item product-resize" style="height: 366px">
                            <div class="image image-resize" style="height: 268px">
                                <a href="#" title="">
                                    <img src="images/ao1.jpg">
                                </a>
                                <span class="promotion">-45%</span>
                            </div>
                            <div class="right-block">
                                <h2 class="name">
                                    <a href="#">Áo khoác len lông xù kiểu Hàn Quốc</a>
                                </h2>
                                <div class="rating"></div>
                                <div class="cotentprice clearfix">
                                    <div class="discountpercent">45%</div>
                                    <div class="price">
                                        <span class="price-new">175.000 đ</span>
                                        <span class="price-old">350.000 đ</span>
                                    </div>
                                    <div class="button-more">
                                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 product-item-box">
                        <div class="product-item product-resize" style="height: 366px">
                            <div class="image image-resize" style="height: 268px">
                                <a href="#" title="">
                                    <img src="images/ao1.jpg">
                                </a>
                                <span class="promotion">-45%</span>
                            </div>
                            <div class="right-block">
                                <h2 class="name">
                                    <a href="#">Áo khoác len lông xù kiểu Hàn Quốc</a>
                                </h2>
                                <div class="rating"></div>
                                <div class="cotentprice clearfix">
                                    <div class="discountpercent">45%</div>
                                    <div class="price">
                                        <span class="price-new">175.000 đ</span>
                                        <span class="price-old">350.000 đ</span>
                                    </div>
                                    <div class="button-more">
                                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 product-item-box">
                        <div class="product-item product-resize" style="height: 366px">
                            <div class="image image-resize" style="height: 268px">
                                <a href="#" title="">
                                    <img src="images/ao1.jpg">
                                </a>
                                <span class="promotion">-45%</span>
                            </div>
                            <div class="right-block">
                                <h2 class="name">
                                    <a href="#">Áo khoác len lông xù kiểu Hàn Quốc</a>
                                </h2>
                                <div class="rating"></div>
                                <div class="cotentprice clearfix">
                                    <div class="discountpercent">45%</div>
                                    <div class="price">
                                        <span class="price-new">175.000 đ</span>
                                        <span class="price-old">350.000 đ</span>
                                    </div>
                                    <div class="button-more">
                                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex-1].style.display = "block";
        }

    </script>
@endsection