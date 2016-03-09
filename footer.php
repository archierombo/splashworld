<?php
/**
 * Created by PhpStorm.
 * User: archie
 * Date: 2/15/16
 * Time: 10:25 AM
 */
?>
<footer class="row"><!--footer-->
<div class="small-6  columns">
<p><i class="fa fa-copyright fa-lg"></i>&nbsp;<?php print date('Y') ?>&nbsp; SplashWorld Limited | All Rights Reserved</p>
</div>
    <div class="small-6 columns">
         <p style="text-align:right;">Designed by<a href="http://www.bethelit.co.ke" target="_blank"> Bethel IT</a></p>
    </div>
</footer><!--footer-->
<!--scripts-->
<script src="js/vendor/jquery.js"></script>

<script src="js/foundation.min.js"></script>
<script src="js/foundation/foundation.topbar.js"></script>
<script src="js/foundation/foundation.equalizer.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow35.js"></script>
<noscript>Not seeing a <a href="http://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>

<script>
    $(document).foundation();
</script>
 <script src="http://code.jquery.com/jquery.min.js"></script>
    <!--vegas css-->
    <link href="vegas/dist/vegas.css" rel="stylesheet">
    <!--vegas js-->
    <script src="vegas/dist/vegas.js"></script>
    <script>
      $("#slider").vegas({
        slides:[
          { src: './slideshow/airline_header.jpg' },
          { src: './slideshow/family_holiday.jpg' },
          { src: './slideshow/kq2.jpg' },
          { src: './slideshow/kq.jpg' },
          {src: './slideshow/kenya-airways-boeing-777.jpg'}
        ],
        timer:false,
        shuffle:true,
        transition: [ 'fade','fade2' ],
        cover:true,
        transitionDuration: 3000,
        delay:7000,
        preload:true
      });
    </script>
</body>
</html>
