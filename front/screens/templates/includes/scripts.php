
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" ></script>
<script src="assets/lib/owl-carousel/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js" ></script>
    <script src="assets/js/additional-validations.js" ></script>
    <script src="assets/javascripts/auth.js"></script>

    <!--  -->
    <script src="assets/lib/owl-carousel/owl.carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/script.js"></script>
    
    <script src="./assets/lib/imagesLoaded.pkgd.js"></script>
    <script>
      ! function(e) {
      "use strict";
          e(window).on("load", function() {
              e("body").imagesLoaded({}, function() {
                  var i = e(".preloader");
                  i.addClass("loaded"), i.find(".centrize").fadeOut(),
                      function() {
                          var i = window.innerWidth / 2,
                              s = window.innerHeight / 2,
                              a = {
                                  el: e(".cursor"),
                                  x: window.innerWidth / 2,
                                  y: window.innerHeight / 2,
                                  w: 30,
                                  h: 30,
                                  update: function() {
                                      var e = this.x - this.w / 2,
                                          i = this.y - this.h / 2;
                                      this.el.css({
                                          transform: "translate3d(" + e + "px," + i + "px, 0)"
                                      })
                                  }
                              };

                          function t(e, i, s) {
                              return (1 - s) * e + s * i
                          }
                          e(window).mousemove(function(e) {
                              i = e.clientX, s = e.clientY
                          }), e("a, i, .swiper-pagination, .swiper-buttons, button, .button, .btn, .solution_card, .hightlight-text, .blink-animation").hover(function() {
                              e(".cursor").addClass("cursor-zoom")
                          }, function() {
                              e(".cursor").removeClass("cursor-zoom")
                          }), setInterval(function() {
                              a.x = t(a.x, i, .1), a.y = t(a.y, s, .1), a.update()
                          }, 1e3 / 60)
                      }(), e(".scroll-animate").scroll({
                          once: !0,
                          mobile: !0
                      }), e(".main-slider-items__image").length && initMainSlider(), e(".full-slider-items__image").length && initFullSlider(), e(".half-slider-items__image").length && initHalfSlider(), e(".started-items__image").length && initHeroStarted()
              })
          })
      }(jQuery);
    </script>