<div class="modal fade inquiry" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        <img src="http://vidyawire.aliansoftware.net/wp-content/uploads/2019/12/logo.png" alt="vidyawires_logo">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"</h4>
        </div>
        <div class="modal-body">
        <h2>Inquiry</h2>
        
        <div class="row">
        <div class="col-lg-7">
        <?php echo do_shortcode('[contact-form-7 id="536" title="career form"]');?>
        
        </div>
        <div class="col-lg-5">
        <img src="http://vidyawire.aliansoftware.net/wp-content/uploads/2019/12/inquiry.png" width="100%">
        </div>
        
        </div>
          
        </div>
        <div class="modal-footer">
        
        </div>
      </div>
    </div>
  </div>
</div>



<footer class="page-footer">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-sm-6 mt-3">
        <div class="footer-desc">
          <?php dynamic_sidebar('footer1'); ?>
        </div>
      </div>
      <!-- Grid column -->

      <hr>

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-sm-6 mt-3">
        <div class="quick">
          <?php dynamic_sidebar('footer2'); ?>
    
      </div>
    </div>
    <!-- Grid column -->

    <hr>

    <!-- Grid column -->
    <div class="col-md-3 col-lg-3 col-sm-6 mt-3">
      <div class="recentpost">

        <h2 class="footer-recent-title">Recent Post</h2>

        <?php dynamic_sidebar('footer3'); ?>
       
      </div>
    </div>

    <!-- Grid column -->
    <hr>

    <!-- Grid column -->
    <div class="col-md-3 col-lg-3 col-sm-6 mt-3">
        <?php dynamic_sidebar("footer4");?>
     
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr class="rgba-white-light">

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <div class="copyright">
          <p class="text-center text-md-left">
            <?php echo get_theme_mod("footer_copyright");?>
          </p>
        </div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <div class="powered">
            <p><?php echo get_theme_mod("powered_by");?></p>
          </div>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>



</div>
<?php wp_footer();?>
</body>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/custom.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<!--<script src="<?php echo get_template_directory_uri()?>/js/vendor/jquery-2.2.4.min.js"></script>-->
<script src="<?php echo get_template_directory_uri()?>/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/jquery.counterup.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/jquery.nice-select.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/main.js"></script>
</html>