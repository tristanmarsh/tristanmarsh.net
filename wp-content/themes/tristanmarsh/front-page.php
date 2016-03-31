<?php get_header('header'); ?>

<div class="main-content">

  <div class="image-container">
    <div id="section-hero">
      <div class="container">
        <div class="row">

          <div class="col-md-9 col-sm-8">
            <h1 class="hero animated fadeInUp">hello</h1>
            <p class="lead animated fadeInUp">I'm Tristan.</p>
            <p class="lead animated fadeInUp">I craft neat little things for the web.</p>
          </div>

          <div class=" col-sm-4 col-md-3 hidden-xs">
            <img class="profile-image animated fadeInRight" src="<?php echo get_stylesheet_directory_uri() ?>/resources/images/profile-tristan-marsh.png" alt="Tristan Marsh Profile" />  
          </div>

        </div>
      </div>
    </div>
  </div>
  
  <div id="section-intro">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          
          <h2>front end developer and designer from melbourne</h2>
        
          <p class="lead">specialising in front end development and the creation of custom content management systems to meet personal, small business and professional online needs.</p>

        </div>

      </div>
    </div>
  </div>
 
  <div id="section-expertise">
    <div class="container">
      <div class="row">
        <h2>expertise & skills</h2>
        <div class="col-sm-4 animated fadeIn">
          <img src="<?php echo get_stylesheet_directory_uri()?>/resources/images/icons/html5.svg" alt="html5" />
          <h3>HTML5 & CSS3</h3>
          <p class="lead">Crafting websites with HTML5 compliant markup & CSS3 style</p>
          </div>
        <div class="col-sm-4 animated fadeIn">
          <img src="<?php echo get_stylesheet_directory_uri()?>/resources/images/icons/responsive.svg" alt="responsive design" />
          <h3>Responsive Design</h3>
          <p class="lead">Designed to ensure your website looks amazing on all devices and screen sizes</p>
          </div>
        <div class="col-sm-4 animated fadeIn">
          <img src="<?php echo get_stylesheet_directory_uri()?>/resources/images/icons/wordpress.svg" alt="WordPress" />
          <h3>WordPress</h3>
          <p class="lead">Leveraging the power of WordPress to create custom Content Management Systems to best serve your online needs</p>
        </div>
      </div>
    </div>
  </div>
    
  <div class="image-container">
    <div id="section-testimonials">
      <div class="slider">
        <div class="container">

          <h2>things people say</h2>

          <ul class="slides">

            <li class="slide" background-color="#9526EA">
              <p>Oh dear! You're actually looking at my website!</p>
              <img class="profile-image" src="<?php echo get_stylesheet_directory_uri() ?>/resources/images/profile-tristan-marsh.png" alt="Tristan Marsh Profile" />
              <span>Tristan Marsh</span>
            </li>

            <li class="slide" background-color="#2848F4">
              <p>I'm terribly sorry, this wasn't really supposed to happen for another week or so.</p>
              <img class="profile-image" src="<?php echo get_stylesheet_directory_uri() ?>/resources/images/profile-tristan-marsh.png" alt="Tristan Marsh Profile" />
              <span>Tristan Marsh</span>
            </li>

            <li class="slide" background-color="#2FC5DD">
              <p>I threw this concept together last week and haven't quite had the chance to finish off the design, actual site, or any kind of testimonial from past clients.</p>
              <img class="profile-image" src="<?php echo get_stylesheet_directory_uri() ?>/resources/images/profile-tristan-marsh.png" alt="Tristan Marsh Profile" />
              <span>Tristan Marsh</span>
            </li>

            <li class="slide" background-color="#28F477">
              <p>Oh well, it's better to publish something now rather than wait until the final perfect vision is complete.</p>
              <img class="profile-image" src="<?php echo get_stylesheet_directory_uri() ?>/resources/images/profile-tristan-marsh.png" alt="Tristan Marsh Profile" />
              <span>Tristan Marsh</span>
            </li>

            <li class="slide" background-color="#78EA1A">
              <p>Gosh, maybe I shouldn't say that on a portfolio site. I would never do that without the client's approval. I promise.</p>
              <img class="profile-image" src="<?php echo get_stylesheet_directory_uri() ?>/resources/images/profile-tristan-marsh.png" alt="Tristan Marsh Profile" />
              <span>Tristan Marsh</span>
            </li>

            <li class="slide" background-color="#78EA1A">
              <p>Anyway, hopefully the shame of having this incomplete site up will soon bring about the final vision. Thanks for looking.</p>
              <img class="profile-image" src="<?php echo get_stylesheet_directory_uri() ?>/resources/images/profile-tristan-marsh.png" alt="Tristan Marsh Profile" />
              <span>Tristan Marsh</span>
            </li>

          </ul>

          <div class="slider-controls">
            <ul>
              <li class="active"></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </div>

        </div>
      </div>
    </div>  
  </div>  
  
  <div id="section-portfolio">
    <div class="container">
      <div class="row">

        <h2>recent projects</h2>

        <div class="col-sm-6 col-md-4">
          <a href="http://dcstrategy.com/" style="background:rgb(149, 126, 94)">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/icons/dc-strategy-logo-white.png" alt="DC Strategy" />
          </a>
          <h3>DC Strategy</h3>
<!--           <p class="lead">Built it</p>
          <p>Things were involved</p> -->
        </div>

        <div class="col-sm-6 col-md-4">
          <a href="http://bygonesblog.com/" style="background:rgb(249,211,193)">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/icons/bygones-text-logo.svg" alt="Bygones" />
          </a>
          <h3>Bygones</h3>
<!--           <p class="lead">Designed & Built it</p>
          <p>Things were involved</p> -->
        </div>

        <div class="col-sm-6 col-md-4">
          <a href="#section-hero" style="background:rgb(137, 213, 253)">
            <img "height:80px" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/logo/logo-light-transparent.svg" alt="This Website" />
          </a>
          <h3>This Website</h3>
<!--           <p>Things were involved</p>
          <p class="lead">Designed & Built it</p> -->
        </div>

<!--         <div class="col-sm-6 col-md-4">
          <img src="#" alt="Home For Tomorrow" />
          <h3>Home For Tomorrow</h3>
          <p class="lead">Built it</p>
          <p>Things were involved</p>
        </div>

        <div class="col-sm-6 col-md-4">
          <img src="#" alt="Sheoak" />
          <h3>Sheoak</h3>
          <p class="lead">Built it</p>
          <p>Things were involved</p>
        </div>

        <div class="col-sm-6 col-md-4">
          <img src="#" alt="Jemma Harrison" />
          <h3>This Website</h3>
          <p class="lead">Designed & Built it</p>
          <p>Things were involved</p>
        </div> -->

      </div>
    </div>
  </div>

  <div class="image-container">
    <div id="section-call-to-action">
      <div class="container">
        <div class="row">

          <div class="col-sm-12">
            <h2 class="hero">need a website?</h2>
            <p class="lead">have a project in mind?</p>
            <p>just want to talk about the latest episode of 99PI?</p>

            <button type="button" class="btn button button-rounded button-jumbo button-action" data-toggle="modal" data-target="#contactModal">say hi</button>
          </div>

        </div>
      </div>
    </div>
  </div>

</div>


<?php get_template_part('sidebar.php'); ?>

<?php get_footer(); ?>