<div class="mid_slider_w3lsagile">
    <div class="col-md-3 mid_slider_text">
        <h5>Explore Machinery</h5>
    </div>
    <div class="col-md-9 mid_slider_info">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                <li data-target="#myCarousel" data-slide-to="3" class=""></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                            <div class="thumbnail"><img src="<?= base_url('assets/img/metal1.png') ?>" alt="Image" style="max-width:100%;"></div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                            <div class="thumbnail"><img src="<?= base_url('assets/img/metal2.jpg') ?>" alt="Image" style="max-width:100%;"></div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                            <div class="thumbnail"><img src="<?= base_url('assets/img/metal3.jpg') ?>" alt="Image" style="max-width:100%;"></div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                            <div class="thumbnail"><img src="<?= base_url('assets/img/metal4.jpg') ?>" alt="Image" style="max-width:100%;"></div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                            <div class="thumbnail"><img src="<?= base_url('assets/img/metal5.png') ?>" alt="Image" style="max-width:100%;"></div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                            <div class="thumbnail"><img src="<?= base_url('assets/img/metal6.jpg') ?>" alt="Image" style="max-width:100%;"></div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                            <div class="thumbnail"><img src="<?= base_url('assets/img/metal7.jpg') ?>" alt="Image" style="max-width:100%;"></div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                            <div class="thumbnail"><img src="<?= base_url('assets/img/metal8.jpg') ?>" alt="Image" style="max-width:100%;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
            <!-- The Modal -->

        </div>
    </div>
    <div class="clearfix"></div>
</div>

<div class="navbar">
    <a href="<?= base_url() ?>" class="active"><i class="fa fa-home"></i><br>Home</a>
</div>

<!-- footer -->
<div class="footer_agileinfo_w3">
    <div class="footer_inner_info_w3ls_agileits">
        <div class="col-md-3 footer-left">
            <!--<h2><a href="beranda"><span>T</span>Bakul Sepatu</a></h2>-->
            <h2><a href="<?= base_url() ?>"><img src=" <?= base_url("assets/img/logocbmbaru.png") ?>" style="margin-top:-10px;" width="100px"></a></h2>
            <p><b>Metal working and machinery</b></p>

        </div>
        <div class="col-md-9 footer-right">
            <div class="sign-grds">
                <div class="col-md-4 sign-gd">
                    <h4>Link <span>Terkait</span> </h4>
                    <ul>
                        <li><a href="<?= base_url() ?>">Beranda</a></li>
                    </ul>
                </div>

                <div class="col-md-5 sign-gd-two">
                    <h4>Hubungi <span>Kami</span></h4>
                    <div class="address">
                        <div class="address-grid">
                            <div class="address-left" style="color:white;margin-left:2px;">
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            </div>
                            <div class="address-right">
                                <h6>Layanan Pelanggan</h6>
                                <p>+62812 5469 3810</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="address-grid">
                            <div class="address-left">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="address-right">
                                <h6>E-mail</h6>
                                <p><a href="mailto:yasmien.ilyas@gmail.com">yasmien.ilyas@gmail.com</a></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="address-grid">
                            <div class="address-left">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>

                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>

    </div>
</div>
<!--WA chat-->
<div style="z-index: 999; left: auto; right: 15px;" id="WAButton">

</div>

<!-- //footer -->
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;">
    </span></a>
<!-- js -->
<script type="text/javascript" src="https://trekkersshoes.com/assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/js/floating-wpp.min.js'); ?>"></script>
<script>
    $(function() {
        $('#WAButton').floatingWhatsApp({
            phone: '+6281254693810', //WhatsApp Business phone number International format-
            //Get it with Toky at https://toky.co/en/features/whatsapp.
            headerTitle: 'Hubungi kami di WhatsApp!', //Popup Title
            popupMessage: 'Hai, Anda butuh bantuan?', //Popup Message
            showPopup: true, //Enables popup display
            buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
            //headerColor: 'crimson', //Custom header color
            //backgroundColor: 'crimson', //Custom background button color
            position: "right"
        });
    });
</script>
<!-- //js -->
<!-- /nav -->
<script src="https://trekkersshoes.com/assets/js/modernizr-2.6.2.min.js"></script>
<script src="https://trekkersshoes.com/assets/js/classie.js"></script>
<script src="https://trekkersshoes.com/assets/js/demo1.js"></script>
<!-- //nav -->
<!-- cart-js -->
<script src="https://trekkersshoes.com/assets/js/minicart.js"></script>
<script>
    shoe.render();

    shoe.cart.on('shoe_checkout', function(evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>
<!-- //cart-js -->
<!--search-bar-->
<script src="https://trekkersshoes.com/assets/js/search.js"></script>
<!--//search-bar-->
<script src="https://trekkersshoes.com/assets/js/responsiveslides.min.js"></script>
<script>
    $(function() {
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 1000,
            namespace: "callbacks",
            before: function() {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function() {
                $('.events').append("<li>after event fired.</li>");
            }
        });
    });
</script>
<!-- js for portfolio lightbox -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="https://trekkersshoes.com/assets/js/move-top.js"></script>
<script type="text/javascript" src="https://trekkersshoes.com/assets/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });

        $("#exampleModalCenter").modal('show');
    });

    var modal = document.getElementById('modal-popup');
    window.onclick = function(event) {
        $("#modal-popup").modal('none');
    }
</script>
<!-- //end-smoth-scrolling -->

<script type="text/javascript" src="https://trekkersshoes.com/assets/js/bootstrap-3.1.1.min.js"></script>
<script type="text/javascript" src="<?= base_url("assets/js/imagzoom.js") ?>"></script>
<script type="text/javascript" src="<?= base_url("assets/js/jquery.flexslider.js") ?>"></script>
<script>
    // Can also be used with $(document).ready()
    $(document).ready(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
</body>

</html>