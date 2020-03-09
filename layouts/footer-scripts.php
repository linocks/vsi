<!-- SCRIPTS-->

<script
    data-cfasync="false"
    src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
  ></script>
  <script type="text/javascript" src="js/modernizr.custom.17475.js"></script>

  <script src="js/jquery.1.10.2.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"></script>

  <script src="js/jquery.poptrox.min.js" type="text/javascript"></script>

  <script src="js/enscroll-0.5.2.min.js"></script>

  <script src="js/owl.carousel.min.js"></script>

  <script src="js/mediaelement-and-player.min.js"></script>

  <script src="js/script.js"></script>

  <script src="js/styleswitcher.js"></script>

  <script type="text/javascript" src="js/jquery.downCount.js"></script>

  <script class="source" type="text/javascript">
    $(".countdown").downCount({
      date: "09/09/2015 12:00:00",

      offset: +10
    });
  </script>

  <script>
    $(document).ready(function() {
      $(".tweets-slides").owlCarousel({
        autoPlay: 5000,

        slideSpeed: 1000,

        singleItem: true,

        transitionStyle: "fadeUp",

        navigation: false
      }); /*** TWEETS CAROUSEL ***/

      $(".products-carousel").owlCarousel({
        autoPlay: false,

        rewindSpeed: 3000,

        slideSpeed: 2000,

        items: 2,

        itemsDesktop: [1199, 2],

        itemsDesktopSmall: [979, 2],

        itemsTablet: [768, 2],

        itemsMobile: [479, 1],

        navigation: false
      }); /*** PRODUCTS CAROUSEL ***/
    });

    $("audio,video").mediaelementplayer();
  </script>

  <!-- SLIDER REVOLUTION -->

  <script
    type="text/javascript"
    src="js/revolution/jquery.themepunch.tools.min.js"
  ></script>

  <script
    type="text/javascript"
    src="js/revolution/jquery.themepunch.revolution.min.js"
  ></script>

  <script
    type="text/javascript"
    src="js/revolution/extensions/revolution.extension.slideanims.min.js"
  ></script>

  <script
    type="text/javascript"
    src="js/revolution/extensions/revolution.extension.layeranimation.min.js"
  ></script>

  <script
    type="text/javascript"
    src="js/revolution/extensions/revolution.extension.navigation.min.js"
  ></script>

  <script type="text/javascript">
    jQuery(document).ready(function() {
      jQuery("#slider1").revolution({
        sliderType: "standard",

        sliderLayout: "fullwidth",

        delay: 9000,

        navigation: {
          arrows: { enable: true }
        },

        gridwidth: 1100,

        gridheight: 500
      });
    });
  </script>