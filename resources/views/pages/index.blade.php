@extends('master')
@section('sub-menu')
    <ul class="menu-cate-content">
        @foreach($categories as $category)
        <li>
            <a href="#">
                <i>{{ $category->name }}</i>
                <span class="arrow-menu"></span>
            </a>
        </li>
        @endforeach
    </ul>
@endsection
@section('content')
    <div class="banner-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-8 hidden-xs hidden-sm">
                    <div class="w3-content w3-display-container">
                        @foreach($slides as $slide)
                        <img class="mySlides" src="{{$slide->link_image}}" style="max-width: 100%;max-height: 100%">
                        @endforeach
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
            <form method="" action="">
                {{ csrf_field()}}
                <div class="row">
                    <h1 class="title clearfix">
                        <span>Sản phẩm</span>
                    </h1>
                </div>
                <div class="row">
                    <nav class="navbar navbar-default product-filter">
                        <div class="limit">
                            <span>Sản phẩm/trang</span>
                            <select id="product_limit_selected" name="product_limit_selected" class="nb_item form-control" style="height: 30px;" >
                                <option value="8">8</option>
                                <option value="12">12</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                            </select>
                        </div>
                        <div class="sort">
                            <span>Sắp xếp theo</span>
                            <select class="selectProductSort form-control"  style="height: 30px;" name="select-price" id="selectProductSort" >
                                <option value="default" >Mặc định</option>
                                <option value="asc" >Giá tăng dần</option>
                                <option value="desc" >Giá giảm dần</option>
                            </select>
                        </div>
                    </nav>
                </div>
                <div class="row p_result" id="presult">
                    @include('pages.presult')
                </div>
            </form>
        </div>

    </div>
    <script>
        var limit = '{{ Request::get('select_product_by_limit') }}';
        if(limit) {
            $('.nb_item option[value=' + limit +']').attr('selected','selected');
        }
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
        $("select[name='product_limit_selected']").change(function(){
            var selectLimit = $(this).val();
            var selectSort = $("select[name='select-price']").val();
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "/index",
                method: 'GET',
                data: {
                    select_product_by_limit: selectLimit,
                    select_sort: selectSort,
                    _token: token
                },
                success: function(data) {
                    $("#presult").empty();
                    document.getElementById("presult").innerHTML = data;
                    if(selectSort === 'default') {
                        window.history.pushState({"html":data},"", "?select_product_by_limit="+selectLimit+"&page=1");
                    }else {
                        window.history.pushState({"html":data},"", "?select_product_by_limit="+selectLimit
                            +"&select_sort="+selectSort);
                    }
                }
            });
        });

        $("select[name='select-price']").change(function () {
            var selectSort = $(this).val();
            var selectLimit = $("select[name='product_limit_selected']").val();
            var token = $("input[name='_token']").val();
            $.ajax({
               url: "/index",
                method: 'GET',
                data: {
                   select_sort: selectSort,
                    select_product_by_limit: selectLimit,
                    _token: token
                },
                success: function (data) {
                    $("#presult").empty();
                    document.getElementById("presult").innerHTML = data;
                    if(selectLimit === '8') {
                        window.history.pushState({"html":data},"", "?select_sort="+selectSort);
                    }else {
                        window.history.pushState({"html":data},"", "?select_sort="+selectSort+"&select_product_by_limit="+selectLimit);
                    }
                }
            });
        });
    </script>
@endsection
