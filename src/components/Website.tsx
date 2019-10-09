import React from "react"

import "../style/style.scss"
import { useScrollPosition } from "../hooks/useScrollPosition"

export const Website = () => {
  const hasWindow = typeof window !== `undefined`

  let scrollPosition = 0

  if (hasWindow) {
    scrollPosition = useScrollPosition()
  }

  return (
    <div>
      <header
        className={`head animated fadeInDown ${
          scrollPosition > 100 ? "scrolled" : ""
        }`}
      >
        <div className="container">
          <div className="row">
            <div className="brand col-sm-2 col-md-4">
              <a href="#section-hero">
                <img
                  src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/logo/logo-light-transparent.svg"
                  alt="TM"
                  className="logo"
                />
              </a>
              <span className="hidden-sm">
                <a href="#section-hero" className="name">
                  Tristan Marsh
                </a>
                <p>front end developer</p>
              </span>
            </div>
            <nav className="col-sm-11 col-md-8 hidden-xs">
              <ul>
                <li>
                  <a href="#section-intro">about</a>
                </li>
                <li>
                  <a href="#section-portfolio">portfolio</a>
                </li>
                <li>
                  <a href="#section-expertise">services</a>
                </li>
                <li>
                  <a href="#section-call-to-action">contact</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
      <div className="main-content">
        <div className="image-container">
          <div id="section-hero">
            <div className="container">
              <div className="row">
                <div className="col-md-9 col-sm-8">
                  <h1 className="hero animated fadeInUp">hello</h1>
                  <p className="lead animated fadeInUp">I'm Tristan.</p>
                  <p className="lead animated fadeInUp">
                    I craft neat little pieces of the web.
                  </p>
                </div>
                <div className="col-sm-4 col-md-3 hidden-xs">
                  <img
                    className="profile-image animated fadeInRight"
                    src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/profile-tristan-marsh.png"
                    alt="Tristan Marsh Profile"
                  />
                </div>
              </div>
            </div>
            <a className="read-more animated fadeInDown" href="#section-intro">
              <i className="fa fa-arrow-circle-down" />
            </a>
          </div>
        </div>
        <div id="section-intro">
          <div className="container">
            <div className="row">
              <div className="col-sm-12">
                <h2>front end developer and designer from melbourne</h2>
                <p className="lead">
                  specialising in front end development and the creation of
                  custom content management systems to meet personal, small
                  business and professional online needs.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div id="section-expertise">
          <div className="container">
            <div className="row">
              <h2>expertise &amp; skills</h2>
              <div className="col-sm-4 animated fadeIn">
                <img
                  src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/icons/html5.svg"
                  alt="html5"
                />
                <h3>HTML5 &amp; CSS3</h3>
                <p className="lead">
                  Crafting websites with HTML5 compliant markup &amp; CSS3 style
                </p>
              </div>
              <div className="col-sm-4 animated fadeIn">
                <img
                  src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/icons/responsive.svg"
                  alt="responsive design"
                />
                <h3>Responsive Design</h3>
                <p className="lead">
                  Designed to ensure your website looks amazing on all devices
                  and screen sizes
                </p>
              </div>
              <div className="col-sm-4 animated fadeIn">
                <img
                  src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/icons/wordpress.svg"
                  alt="WordPress"
                />
                <h3>WordPress</h3>
                <p className="lead">
                  Leveraging the power of WordPress to create custom Content
                  Management Systems to best serve your online needs
                </p>
              </div>
            </div>
          </div>
        </div>
        <div className="image-container">
          <div id="section-testimonials">
            <div className="slider">
              <div className="container">
                <h2>things people say</h2>
                <ul
                  className="slides"
                  style={{
                    width: "7020px",
                    transform: "translateX(-16.6667%)",
                  }}
                >
                  <li
                    className="slide"
                    background-color="#9526EA"
                    style={{ width: "1170px" }}
                  >
                    <p>Oh dear! You're actually looking at my website!</p>
                    <img
                      className="profile-image"
                      src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/profile-tristan-marsh.png"
                      alt="Tristan Marsh Profile"
                    />
                    <span>Tristan Marsh</span>
                  </li>
                  <li
                    className="slide active"
                    background-color="#2848F4"
                    style={{ width: "1170px" }}
                  >
                    <p>
                      I'm terribly sorry, this wasn't really supposed to happen
                      for another week or so.
                    </p>
                    <img
                      className="profile-image"
                      src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/profile-tristan-marsh.png"
                      alt="Tristan Marsh Profile"
                    />
                    <span>Tristan Marsh</span>
                  </li>
                  <li
                    className="slide"
                    background-color="#2FC5DD"
                    style={{ width: "1170px" }}
                  >
                    <p>
                      I threw this concept together last week and haven't quite
                      had the chance to finish off the design, actual site, or
                      any kind of testimonial from past clients.
                    </p>
                    <img
                      className="profile-image"
                      src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/profile-tristan-marsh.png"
                      alt="Tristan Marsh Profile"
                    />
                    <span>Tristan Marsh</span>
                  </li>
                  <li
                    className="slide"
                    background-color="#28F477"
                    style={{ width: "1170px" }}
                  >
                    <p>
                      Oh well, it's better to publish something now rather than
                      wait until the final perfect vision is complete.
                    </p>
                    <img
                      className="profile-image"
                      src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/profile-tristan-marsh.png"
                      alt="Tristan Marsh Profile"
                    />
                    <span>Tristan Marsh</span>
                  </li>
                  <li
                    className="slide"
                    background-color="#78EA1A"
                    style={{ width: "1170px" }}
                  >
                    <p>
                      Gosh, maybe I shouldn't say that on a portfolio site. I
                      would never do that without the client's approval. I
                      promise.
                    </p>
                    <img
                      className="profile-image"
                      src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/profile-tristan-marsh.png"
                      alt="Tristan Marsh Profile"
                    />
                    <span>Tristan Marsh</span>
                  </li>
                  <li
                    className="slide"
                    background-color="#78EA1A"
                    style={{ width: "1170px" }}
                  >
                    <p>
                      Anyway, hopefully the shame of having this incomplete site
                      up will soon bring about the final vision. Thanks for
                      looking.
                    </p>
                    <img
                      className="profile-image"
                      src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/profile-tristan-marsh.png"
                      alt="Tristan Marsh Profile"
                    />
                    <span>Tristan Marsh</span>
                  </li>
                </ul>
                <div className="slider-controls">
                  <ul>
                    <li className="active" />
                    <li />
                    <li />
                    <li />
                    <li />
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="section-portfolio">
          {/* <div class="container"> */}
          {/* <div class="row"> */}
          {/* <h2>recent projects</h2> */}
          <div className="project col-sm-6 col-md-4 col-lg-4">
            <a
              data-toggle="modal"
              href="#"
              data-target="#portfolio-modal-tristanmarsh"
              style={{ background: "rgb(137, 213, 253)" }}
            >
              <img
                height="80px"
                src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/logo/logo-light-transparent.svg"
                alt="This Website"
              />
            </a>
            <span>
              <a
                data-toggle="modal"
                data-target="#portfolio-modal-tristanmarsh"
              >
                <h3>This Website</h3>
              </a>
              <a
                data-toggle="modal"
                data-target="#portfolio-modal-tristanmarsh"
              >
                <p className="lead">Designed &amp; Built</p>
              </a>
            </span>

            {/* <p>Things were involved</p> */}

            <div
              className="modal fade"
              id="portfolio-modal-tristanmarsh"
              tabIndex={-1}
              role="dialog"
              aria-labelledby="portfolio-modal-tristanmarsh"
            >
              <div className="modal-dialog modal-lg" role="document">
                <div className="modal-content">
                  <div className="modal-header">
                    <button
                      type="button"
                      className="close"
                      data-dismiss="modal"
                      aria-label="Close"
                    >
                      <span aria-hidden="true">×</span>
                    </button>
                    <h4
                      className="modal-title"
                      id="portfolio-modal-tristanmarsh"
                    >
                      TristanMarsh.net
                    </h4>
                  </div>
                  <div className="modal-body">
                    <div className="row">
                      <div className="col-md-12">
                        <img
                          src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/tristanmarsh/tristanmarsh-screenshot.jpg"
                          alt="Tristan Marsh Screenshot"
                        />
                      </div>
                      <div className="col-md-6">
                        <img
                          src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/tristanmarsh/tristanmarsh-screenshot-slider.jpg"
                          alt="Tristan Marsh Screenshot"
                        />
                      </div>
                      <div className="col-md-6">
                        <img
                          src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/tristanmarsh/tristanmarsh-screenshot-skills.jpg"
                          alt="Tristan Marsh Screenshot"
                        />
                      </div>
                    </div>
                  </div>
                  <div className="modal-footer">
                    <button
                      type="button"
                      className="btn btn-alert pull-left"
                      data-dismiss="modal"
                    >
                      Close
                    </button>
                    <a
                      className="btn btn-primary button button-action"
                      data-dismiss="modal"
                    >
                      See Project
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="project col-sm-6 col-md-4 col-lg-4">
            <a
              data-toggle="modal"
              href="#"
              data-target="#portfolio-modal-dcstrategy"
              style={{ background: "rgb(149, 126, 94)" }}
            >
              <img
                src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/dcstrategy/dc-strategy-logo-white.svg"
                alt="DC Strategy"
              />
            </a>
            <span>
              <h3>DC Strategy</h3>
              <p className="lead">Built</p>
            </span>
            {/* <p>Things were involved</p> */}
            <div
              className="modal fade"
              id="portfolio-modal-dcstrategy"
              tabIndex={-1}
              role="dialog"
              aria-labelledby="portfolio-modal-dcstrategy"
            >
              <div className="modal-dialog modal-lg" role="document">
                <div className="modal-content">
                  <div className="modal-header">
                    <button
                      type="button"
                      className="close"
                      data-dismiss="modal"
                      aria-label="Close"
                    >
                      <span aria-hidden="true">×</span>
                    </button>
                    <h4 className="modal-title" id="portfolio-modal-dcstrategy">
                      DC Strategy
                    </h4>
                  </div>
                  <div className="modal-body">
                    <div className="row">
                      <div className="col-md-12">
                        <img
                          src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/dcstrategy/dcstrategy-screenshot.jpg"
                          alt="DC Strategy Screenshot"
                        />
                      </div>
                      <div className="col-md-6">
                        <img
                          src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/dcstrategy/dcstrategy-dcstrategy-screenshot-search.jpg"
                          alt="DC Strategy Screenshot"
                        />
                      </div>
                      <div className="col-md-6">
                        <img
                          src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/dcstrategy/dcstrategy-screenshot-franchisors.jpg"
                          alt="DC Strategy Screenshot"
                        />
                      </div>
                    </div>
                  </div>
                  <div className="modal-footer">
                    <button
                      type="button"
                      className="btn btn-alert pull-left"
                      data-dismiss="modal"
                    >
                      Close
                    </button>
                    <a
                      className="btn btn-primary button button-action"
                      target="_blank"
                      rel="noopener noreferrer"
                      href="http://dcstrategy.com/"
                    >
                      See Project
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="project col-sm-6 col-md-4 col-lg-4">
            <a
              data-toggle="modal"
              href="#"
              data-target="#portfolio-modal-dash"
              style={{ background: "rgb(118, 170, 219)" }}
            >
              <img
                src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/dash/dash-logo.svg"
                alt="Dash"
              />
            </a>
            <span>
              <h3>Dash</h3>
              <p className="lead">Designed &amp; Built</p>
            </span>
            {/* <p>Things were involved</p> */}
            <div
              className="modal fade"
              id="portfolio-modal-dash"
              tabIndex={-1}
              role="dialog"
              aria-labelledby="portfolio-modal-dash"
            >
              <div className="modal-dialog modal-lg" role="document">
                <div className="modal-content">
                  <div className="modal-header">
                    <button
                      type="button"
                      className="close"
                      data-dismiss="modal"
                      aria-label="Close"
                    >
                      <span aria-hidden="true">×</span>
                    </button>
                    <h4 className="modal-title" id="portfolio-modal-dash">
                      Dash
                    </h4>
                  </div>
                  <div className="modal-body">
                    <div className="row">
                      <div className="col-md-12">
                        <img
                          src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/dash/dash-screenshot-home.jpg"
                          alt="Dash Screenshot"
                        />
                      </div>
                      <div className="col-md-6">
                        <img
                          src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/dash/dash-screenshot-properties.jpg"
                          alt="Dash Screenshot"
                        />
                      </div>
                      <div className="col-md-6">
                        <img
                          src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/dash/dash-screenshot-property-view.jpg"
                          alt="Dash Screenshot"
                        />
                      </div>
                      <div className="col-md-6">
                        <img
                          src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/dash/dash-screenshot-profile.jpg"
                          alt="Dash Screenshot"
                        />
                      </div>
                      <div className="col-md-6">
                        <img
                          src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/dash/dash-screenshot-tenants.jpg"
                          alt="Dash Screenshot"
                        />
                      </div>
                      <div className="col-md-12">
                        <img
                          src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/dash/dash-screenshot-login.jpg"
                          alt="Dash Screenshot"
                        />
                      </div>
                    </div>
                  </div>
                  <div className="modal-footer">
                    <button
                      type="button"
                      className="btn btn-alert pull-left"
                      data-dismiss="modal"
                    >
                      Close
                    </button>
                    {/* <a class="btn btn-primary button button-action" target="_blank" rel="noopener noreferrer" href="http://dashblog.com/">See Project</a> */}
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="project col-sm-6 col-md-4 col-lg-4">
            <a
              data-toggle="modal"
              href="#"
              data-target="#portfolio-modal-bygones"
              style={{ background: "rgb(249,211,193)" }}
            >
              <img
                src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/bygones/bygones-text-logo.svg"
                alt="Bygones"
              />
            </a>
            <span>
              <h3>Bygones</h3>
              <p className="lead">Designed &amp; Built</p>
            </span>
            {/* <p>Things were involved</p> */}
            <div
              className="modal fade"
              id="portfolio-modal-bygones"
              tabIndex={-1}
              role="dialog"
              aria-labelledby="portfolio-modal-bygones"
            >
              <div className="modal-dialog modal-lg" role="document">
                <div className="modal-content">
                  <div className="modal-header">
                    <button
                      type="button"
                      className="close"
                      data-dismiss="modal"
                      aria-label="Close"
                    >
                      <span aria-hidden="true">×</span>
                    </button>
                    <h4 className="modal-title" id="portfolio-modal-bygones">
                      Bygones
                    </h4>
                  </div>
                  <div className="modal-body">
                    <div className="row">
                      <div className="col-md-12">
                        <img
                          src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/bygones/bygones-screenshot.jpg"
                          alt="Bygones Screenshot"
                        />
                      </div>
                      <div className="col-md-6">
                        <img
                          src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/bygones/bygones-screenshot-post.jpg"
                          alt="Bygones Screenshot"
                        />
                      </div>
                      <div className="col-md-6">
                        <img
                          src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/bygones/bygones-screenshot-about.jpg"
                          alt="Bygones Screenshot"
                        />
                      </div>
                    </div>
                  </div>
                  <div className="modal-footer">
                    <button
                      type="button"
                      className="btn btn-alert pull-left"
                      data-dismiss="modal"
                    >
                      Close
                    </button>
                    <a
                      className="btn btn-primary button button-action"
                      target="_blank"
                      rel="noopener noreferrer"
                      href="http://bygonesblog.com/"
                    >
                      See Project
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="project col-sm-6 col-md-4 col-lg-4">
            <a
              data-toggle="modal"
              href="#"
              data-target="#portfolio-modal-jemmaharrisonstylist"
              style={{ background: "rgb(229, 102, 64)" }}
            >
              <img
                src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/jemmaharrisonstylist/jemma-harrison-stylist-logo.svg"
                alt="Jemma Harrison Stylist Logo"
              />
            </a>
            <span>
              <h3>Jemma Harrison Stylist</h3>
              <p className="lead">Designed &amp; Built</p>
            </span>
            <div
              className="modal fade"
              id="portfolio-modal-jemmaharrisonstylist"
              tabIndex={-1}
              role="dialog"
              aria-labelledby="portfolio-modal-jemmaharrisonstylist"
            >
              <div className="modal-dialog modal-lg" role="document">
                <div className="modal-content">
                  <div className="modal-header">
                    <button
                      type="button"
                      className="close"
                      data-dismiss="modal"
                      aria-label="Close"
                    >
                      <span aria-hidden="true">×</span>
                    </button>
                    <h4
                      className="modal-title"
                      id="portfolio-modal-jemmaharrisonstylist"
                    >
                      Jemma Harrison Stylist
                    </h4>
                  </div>
                  <div className="modal-body">
                    <div className="row">
                      <div className="col-md-12">
                        <img
                          src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/jemmaharrisonstylist/jemma-harrison-stylist-screenshot-home.jpg"
                          alt="Jemma Harrison Stylist Homepage Screenshot"
                        />
                      </div>
                      <p>Things were involved</p>
                      <div className="col-md-6">
                        <img
                          src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/jemmaharrisonstylist/jemma-harrison-stylist-screenshot-about.jpg"
                          alt="Jemma Harrison Stylist About Screenshot"
                        />
                      </div>
                      <div className="col-md-6">
                        <img
                          src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/jemmaharrisonstylist/jemma-harrison-stylist-screenshot-contact.jpg"
                          alt="Jemma Harrison Stylist Contact Screenshot"
                        />
                      </div>
                      <div className="col-md-12">
                        <img
                          src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/jemmaharrisonstylist/jemma-harrison-stylist-screenshot-portfolio.jpg"
                          alt="Jemma Harrison Stylist Portfolio Screenshot"
                        />
                      </div>
                    </div>
                  </div>
                  <div className="modal-footer">
                    <button
                      type="button"
                      className="btn btn-alert pull-left"
                      data-dismiss="modal"
                    >
                      Close
                    </button>
                    <a
                      className="btn btn-primary button button-action"
                      target="_blank"
                      rel="noopener noreferrer"
                      href="http://jemmaharrisonstylist.com.s203161.gridserver.com/"
                    >
                      See Project
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="project col-sm-6 col-md-4 col-lg-4">
            <a
              data-toggle="modal"
              href="#"
              data-target="#portfolio-modal-hopefortomorrow"
              style={{ background: "rgb(69, 69, 69)" }}
            >
              <img
                src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/hopefortomorrow/hope-for-tomorrow-logo.svg"
                alt="Hope For Tomorrow Logo"
              />
            </a>
            <span>
              <h3>Hope For Tomorrow</h3>
              <p className="lead">Configured</p>
            </span>
            <div
              className="modal fade"
              id="portfolio-modal-hopefortomorrow"
              tabIndex={-1}
              role="dialog"
              aria-labelledby="portfolio-modal-hopefortomorrow"
            >
              <div className="modal-dialog modal-lg" role="document">
                <div className="modal-content">
                  <div className="modal-header">
                    <button
                      type="button"
                      className="close"
                      data-dismiss="modal"
                      aria-label="Close"
                    >
                      <span aria-hidden="true">×</span>
                    </button>
                    <h4
                      className="modal-title"
                      id="portfolio-modal-hopefortomorrow"
                    >
                      Hope For Tomorrow
                    </h4>
                  </div>
                  <div className="modal-body">
                    <div className="row">
                      <div className="col-md-12">
                        <img
                          src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/hopefortomorrow/hope-for-tomorrow-screenshot-home.jpg"
                          alt="Hope For Tomorrow Homepage Screenshot"
                        />
                      </div>
                      <div className="col-md-6">
                        <img
                          src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/hopefortomorrow/hope-for-tomorrow-screenshot-about.jpg"
                          alt="Hope For Tomorrow About Screenshot"
                        />
                      </div>
                      <div className="col-md-6">
                        <img
                          src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/projects/hopefortomorrow/hope-for-tomorrow-screenshot-page.jpg"
                          alt="Hope For Tomorrow Page Screenshot"
                        />
                      </div>
                    </div>
                  </div>
                  <div className="modal-footer">
                    <button
                      type="button"
                      className="btn btn-alert pull-left"
                      data-dismiss="modal"
                    >
                      Close
                    </button>
                    <a
                      className="btn btn-primary button button-action"
                      target="_blank"
                      rel="noopener noreferrer"
                      href="http://hopefortomorrow.info/"
                    >
                      See Project
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {/* Eventually use a single modal element which pulls in post content via ajax */}
          <div className="clearfix" />
          {/* </div> */}
          {/* </div> */}
        </div>
        <div className="image-container">
          <div id="section-call-to-action">
            <div className="container">
              <div className="row">
                <div className="col-sm-12">
                  <h2 className="hero">need a website?</h2>
                  <p className="lead">have a project in mind?</p>
                  <p>just want to talk about the latest episode of 99PI?</p>
                  <button
                    type="button"
                    className="btn button button-rounded button-jumbo button-action"
                    data-toggle="modal"
                    data-target="#contactModal"
                  >
                    say hi
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className="subfooter">
        <div className="container">
          <div className="row">
            <div className="col-sm-4">
              <h3>Contact</h3>
              <ul>
                <li>
                  <a href="#">Something</a>
                </li>
                <li>
                  <a href="#">Goes</a>
                </li>
                <li>
                  <a href="#">Here</a>
                </li>
                <li>
                  <a href="#">For Sure</a>
                </li>
              </ul>
            </div>
            <div className="col-sm-4">
              <h3>Connect</h3>
              <ul className="social-connect">
                <li>
                  <a href="http://facebook.com/tristanmarsh92">
                    <i className="fa fa-facebook-square" />
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/triistanmarsh/">
                    <i className="fa fa-instagram" />
                  </a>
                </li>
                <li>
                  <a href="https://github.com/tristanmarsh/">
                    <i className="fa fa-github-alt" />
                  </a>
                </li>
                <li>
                  <a href="http://codepen.io/tristanmarsh/">
                    <i className="fa fa-codepen" />
                  </a>
                </li>
                <li>
                  <a href="https://teamtreehouse.com/tristanmarsh">
                    <i className="fa fa-tree" />
                  </a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/tristanmarsh">
                    <i className="fa fa-linkedin" />
                  </a>
                </li>
                {/*             <li>
            <a href="https://plus.google.com/+TristanMarsh92">
              <i class="fa fa-google-plus-square"></i>
            </a>
          </li> */}
                <div className="clearfix" />
              </ul>
            </div>
            <div className="col-sm-4">
              <h3>Contact</h3>
              <ul>
                <li>
                  <a href="#">Something</a>
                </li>
                <li>
                  <a href="#">Goes</a>
                </li>
                <li>
                  <a href="#">Here</a>
                </li>
                <li>
                  <a href="#">For Sure</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <footer className="footer">
        <div className="container">
          <div className="row">
            <div className="col-sm-5 copyright">
              <p>Copyright © 2016 Tristan Marsh</p>
            </div>
            <div className="col-sm-2">
              <a href="#section-hero">
                <img
                  src="https://tristanmarsh.net/wp-content/themes/tristanmarsh/resources/images/logo/logo-light.svg"
                  alt="TM"
                  width="60px"
                  className="logo"
                />
              </a>
            </div>
            <div className="col-sm-5 credits">
              <p>
                <a href="#section-hero">designed and built by me</a>
              </p>
            </div>
          </div>
        </div>
      </footer>
      <div
        className="modal fade"
        id="contactModal"
        tabIndex={-1}
        role="dialog"
        aria-labelledby="contactModalLabel"
      >
        <div className="modal-dialog" role="document">
          <div className="modal-content">
            <div className="modal-header">
              <button
                type="button"
                className="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">×</span>
              </button>
              <h4 className="modal-title" id="contactModalLabel">
                New message
              </h4>
            </div>
            <div className="modal-body">
              <div>
                {" "}
                <div className="textwidget">
                  <p>Contact form disabled, hit me up on Linked In</p>
                </div>
              </div>
            </div>
            <div className="modal-footer">
              <button
                type="button"
                className="btn btn-alert pull-left"
                data-dismiss="modal"
              >
                Close
              </button>

              {/* <button type="button" class="btn btn-primary button button-action">Send message</button> */}
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}
