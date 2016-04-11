  <div class="subfooter">
    <div class="container">
      <div class="row">
        
        <div class="col-sm-4">
          <h3>Contact</h3>
          <ul>
            <li><a href="#">Something</a></li>
            <li><a href="#">Goes</a></li>
            <li><a href="#">Here</a></li>
            <li><a href="#">For Sure</a></li>
          </ul>
        </div>
        <div class="col-sm-4">
          <h3>Connect</h3>
          <ul class="social-connect">

            <li> 
              <a href="http://facebook.com/tristanmarsh92">
                <i class="fa fa-facebook-square"></i>
              </a>
            </li>

            <li>
              <a href="https://www.instagram.com/triistanmarsh/">
                <i class="fa fa-instagram"></i>
              </a>
            </li>

            <li>
              <a href="https://github.com/tristanmarsh/">
                <i class="fa fa-github-alt"></i>
              </a>
            </li>

            <li>
              <a href="http://codepen.io/tristanmarsh/">
                <i class="fa fa-codepen"></i>
              </a>
            </li>

            <li>
              <a href="https://teamtreehouse.com/tristanmarsh">
                <i class="fa fa-tree"></i>
              </a>
            </li>

            <li>
              <a href="http://twitter.com/tristanmarsh92">
                <i class="fa fa-twitter"></i>
              </a>
            </li>

            <li>
              <a href="https://plus.google.com/+TristanMarsh92">
                <i class="fa fa-google-plus-square"></i>
              </a>
            </li>

          </ul>
        </div>
        <div class="col-sm-4">
          <h3>Contact</h3>
          <ul>
            <li><a href="#">Something</a></li>
            <li><a href="#">Goes</a></li>
            <li><a href="#">Here</a></li>
            <li><a href="#">For Sure</a></li>
          </ul>
        </div>
      
      </div>
    </div>
  </div>
    
  <footer class="footer">
    
    <div class="container">
      <div class="row">
        <div class="col-sm-5 copyright">
          <p>Copyright © 2016 Tristan Marsh</p>
        </div>
        <div class="col-sm-2">
          <img src="<?php echo get_stylesheet_directory_uri() . '/resources/images/logo/logo-light.svg' ?>" alt="TM" width="60px" class="logo" />
        </div>
        <div class="col-sm-5 credits">
          <p><a href="#section-hero">designed and built by me</a></p>
        </div>
      </div>
    </div>

  </footer>

  <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="contactModalLabel">New message</h4>
        </div>
        <div class="modal-body">

          <?php if ( is_active_sidebar( 'contact_call_to_action' ) ) : ?>
              <?php dynamic_sidebar( 'contact_call_to_action' ); ?>
          <?php endif; ?>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-alert pull-left" data-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary button button-action ">Send message</button> -->
        </div>
      </div>
    </div>
  </div>

  <?php wp_footer(); ?>

</body>

</html>