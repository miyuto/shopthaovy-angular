<div class="partner">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="carousel carousel-showmanymoveone slide" id="carousel123">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="images/kevin.jpg" class="img-responsive"></a></div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="images/lacoste.jpg" class="img-responsive"></a></div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="images/boss.jpg" class="img-responsive"></a></div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="images/levis.jpg" class="img-responsive"></a></div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="images/kevin.jpg" class="img-responsive"></a></div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="images/lacoste.jpg" class="img-responsive"></a></div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="images/boss.jpg" class="img-responsive"></a></div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="images/levis.jpg" class="img-responsive"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>

    (function(){
        // setup your carousels as you normally would using JS
        // or via data attributes according to the documentation
        // https://getbootstrap.com/javascript/#carousel
        $('#carousel123').carousel({ interval: 2000 });
        $('#carouselABC').carousel({ interval: 3600 });
    }());

    (function(){
        $('.carousel-showmanymoveone .item').each(function(){
            var itemToClone = $(this);

            for (var i=1;i<4;i++) {
                itemToClone = itemToClone.next();

                // wrap around if at end of item collection
                if (!itemToClone.length) {
                    itemToClone = $(this).siblings(':first');
                }

                // grab item, clone, add marker class, add to collection
                itemToClone.children(':first-child').clone()
                    .addClass("cloneditem-"+(i))
                    .appendTo($(this));
            }
        });
    }());
</script>