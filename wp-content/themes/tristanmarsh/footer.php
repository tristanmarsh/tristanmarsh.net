  <div class="subfooter">
    <div class="container">
      <div class="row">
        
        <div class="col-sm-4">
          <h3>Contact</h3>
          <ul>
            <li><a href="#">Someting</a></li>
            <li><a href="#">Goes</a></li>
            <li><a href="#">Here</a></li>
            <li><a href="#">For Sure</a></li>
          </ul>
        </div>
        <div class="col-sm-4">
          <h3>Contact</h3>
          <ul>
            <li><a href="#">Someting</a></li>
            <li><a href="#">Goes</a></li>
            <li><a href="#">Here</a></li>
            <li><a href="#">For Sure</a></li>
          </ul>
        </div>
        <div class="col-sm-4">
          <h3>Contact</h3>
          <ul>
            <li><a href="#">Someting</a></li>
            <li><a href="#">Goes</a></li>
            <li><a href="#">Here</a></li>
            <li><a href="#">For Sure</a></li>
          </ul>
        </div>
      
      </div>
    </div>
  </div>
    
  <div class="footer">
    
    <div class="container">
      <div class="row">
        <div class="col-sm-5 copyright">
          <p>Copyright © 2016 Tristan Marsh</p></div>
        <div class="col-sm-2">
        <img src="<?php echo get_stylesheet_directory_uri() . '/resources/images/logo/logo-light.svg' ?>" alt="TM" width="60px" class="logo" />
        </div>
        <div class="col-sm-5 credits">
          <p><a href="#">designed and built by me</a></p></div>
      </div>
    </div>



  <script src="https://use.typekit.net/wpm4vhc.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>

<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="contactModalLabel">New message</h4>
      </div>
      <div class="modal-body">
        <?php
          echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]');
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary button button-action ">Send message</button>
      </div>
    </div>
  </div>
</div>

  </div>

  <?php wp_footer(); ?>

</html>