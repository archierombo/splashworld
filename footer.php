<?php
/**
 * Created by PhpStorm.
 * User: archie
 * Date: 2/15/16
 * Time: 10:25 AM
 */
?>
<div class="row"><!--affiliates-->
  <div class="small-12 medium-4 large-4 columns">
    <img src="affiliates/iata.jpeg" style="height: 99px;">
  </div>
  <div class="small-12 medium-4 large-4 columns">
   <!-- <img src="affiliates/iata.png">-->
  </div>
  <div class="small-12 medium-4 large-4 columns">
     <img src="affiliates/kata_logo.jpg" style="height: 47px;">
  </div>
</div><!--affiliates-->
<footer class="row"><!--footer-->
<div class="small-7  columns">
<p><i class="fa fa-copyright fa-lg"></i>&nbsp;<?php print date('Y') ?>&nbsp; SplashWorld Limited | All Rights Reserved</p>
</div>
    <div class="small-5 columns">
         <p style="text-align:right;">Designed by<a href="http://www.bethelit.co.ke" target="_blank"> Bethel IT</a></p>
    </div>
</footer><!--footer-->
<!--scripts-->

<script src="js/vendor/jquery.js"></script>
<script>
      $(function(){
        $('#form').submit(function(e){

            // Stop the form actually posting
            e.preventDefault();

            // Send the request
            $.post('email_form.php', {
                name: $('#name').val(),
                email: $('#email').val(),
                subject: $('#subject').val(),
                message: $('#message').val(),
                
            }, function(d){
                console.log(d);
                // Here we handle the response from the script
                // We are just going to alert the result for now
                alert(d);
                $('form').clearForm()

            });
        });
        
    });
        

    $.fn.clearForm = function() {
      return this.each(function() {
        var type = this.type, tag = this.tagName.toLowerCase();
        if (tag == 'form')
          return $(':input',this).clearForm();
        if (type == 'text' || type == 'password' || tag == 'textarea' || type == 'email')
          this.value = '';
        else if (type == 'checkbox' || type == 'radio')
          this.checked = false;
        else if (tag == 'select')
          this.selectedIndex = -1;
      });
    };




    </script>
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow35.js"></script>
<script src="js/foundation.min.js"></script>
<script src="js/foundation/foundation.topbar.js"></script>
<script src="js/foundation/foundation.equalizer.js"></script>


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
          {src: './slideshow/kenya-airways-boeing-777.jpg'},
          {src: './slideshow/beach.png'},
          { src: './slideshow/kq2.jpg' },
          {src: './slideshow/umrah.jpg'},
          { src: './slideshow/kq.jpg' },
          { src: './slideshow/passport3.jpg' }
        ],
        timer:false,
        shuffle:true,
        transition: [ 'fade','fade2' ],
        cover:true,
        transitionDuration: 3000,
        delay:9000,
        preload:false,
        preloadImage:true
      });
    </script>
</body>
</html>
