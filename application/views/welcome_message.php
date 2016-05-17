<?php $this->load->view('header'); ?>
<div class="clearfix">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="carousel slide" id="myCarousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-lg-12 col-md-12">
                            <a href="#"><img src="/public/images/Cake-PHP-HD-Wallpaper.jpg" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-lg-12 col-md-12">
                            <a href="#"><img src="/public/images/Inspirational-Code.jpg" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-lg-12 col-md-12">
                            <a href="#"><img src="/public/images/localhost-wallpaper.jpg" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-lg-12 col-md-12">
                            <a href="#"><img src="/public/images/programming_java_coffee_cups.jpg" class="img-responsive"></a>
                        </div>
                    </div>
                </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<style type="text/css">
    .carousel-inner .active.left { left: -33%; }
    .carousel-inner .next        { left:  33%; }
    .carousel-inner .prev        { left: -33%; }
    .carousel-control.left,.carousel-control.right {background-image:none;}
    .item:not(.prev) {visibility: visible;}
    .item.right:not(.prev) {visibility: hidden;}
    .rightest{ visibility: visible;}
</style>
<script type="application/javascript">
    $('#myCarousel').carousel({
        interval: 40000
    });
</script>
