    <script src="assets/lib/bootstrap/popper.min.js"></script>
  
    <script src="assets/lib/bootstrap/bootstrap.min.js"></script>
     <!--<script src="assets/lib/owl-carousel/jquery.min.js"></script>-->
    
    <script src="assets/lib/owl-carousel/owl.carousel.js"></script>
     <script src="assets/js/script.js"></script>
 <!--<script async src="./assets/js/ampproject.js"></script>-->
    <!--<script async custom-element="amp-sidebar" src="./assets/js/amp-sidebar.js"></script>-->
    <!--<script async custom-element="amp-bind" src="./assets/js/amp-bind.js"></script>-->

    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>-->

    <script src="./assets/lib/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="./assets/lib/aos/aos.js"></script>
    
     <script>
        
        $('#owl-carousel').owlCarousel({
            loop: true,
            margin: 30,
            dots: false,
            nav: true,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            items : 5,
            responsive: {
            0: {
            items: 1
            },

            600: {
            items: 2
            },

            1024: {
            items: 4
            },

            1366: {
            items: 4
            }
        }
        })


        $('.real-carousel').owlCarousel({
        loop: true,
        margin: 30,
        dots: false,
        nav: true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        items : 5,
        responsive: {
        0: {
            items: 1
        },

        600: {
            items: 1
        },

        1024: {
            items: 2
        },

        1366: {
            items: 2
        }
        }
        })
    </script>