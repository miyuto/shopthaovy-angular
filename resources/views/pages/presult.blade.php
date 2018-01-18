<div class="product-block product-grid clearfix">
    @foreach($products as $product)
        <div class="col-md-3 col-sm-3 col-xs-6 product-item-box">
            <div class="product-item product-resize" style="height: 366px">
                <div class="image image-resize" style="height: 268px">
                    <a href="#" title="">
                        <img src="{{  $product->image_link }}">
                    </a>
                    @if($product->discount>0)
                        <span class="promotion">{{ $product->discount }}%</span>
                    @endif
                </div>
                <div class="right-block">
                    <h2 class="name">
                        <a href="#">{{ $product->name }}</a>
                    </h2>
                    <div class="rating"></div>
                    <div class="cotentprice clearfix">
                        @if($product->discount>0)
                            <div class="discountpercent">
                                {{ $product->discount }}%
                            </div>
                        @endif
                        <div class="price">
                            @if($product->discount>0)
                                <span class="price-new">{{ number_format($product->price*(100-$product->discount)/100) }} đ</span>
                                <span class="price-old">{{ number_format($product->price) }} đ</span>
                            @else
                                <span class="price-new">{{ number_format($product->price) }} đ</span>
                            @endif

                        </div>
                        <div class="button-more">
                            <a href="{{ route('product-detail',$product->id) }}">
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="paginate-page">{{ $products->links() }}</div>
