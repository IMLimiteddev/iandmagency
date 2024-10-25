<x-guest-layout>

    <x-slot name="body">

           {{-- <!-- Map Section -->
    <section class="map-section">
        <div class="map-outer">
          <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap" data-hue="#ffc400" data-title="Envato" data-icon-path="/onboarding/images/icons/contact-map-marker.png" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
          </div>
        </div>
      </section>
      <!-- End Map Section --> --}}


      <!-- Banner Section-->
    <section class="banner-section -type-15" style="background-image: url(/onboarding/images/index-15/header/bg.png);">
        <div class="auto-container">
          <div class="cotnent-box">
            <div style="margin: 100px" class="title-box wow fadeInUp" data-wow-delay='300ms'>
              <h3>Contact us </h3>
              <div class="text">We are visible and accessible</div>
            </div>


          </div>
        </div>
      </section>
      <!-- End Banner Section-->

      <!-- Contact Section -->
      <section class="contact-section">
        <div class="auto-container">
          <div class="upper-box">
            <div class="row">
              <div class="contact-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <span class="icon"><i class="fa fa-map-marker-alt text-warning"></i></span>
                  <h4>Address</h4>
                  <p>329 Olashola Street, <br>North Garden VIC
                    3051, Nigeria</p>
                </div>
              </div>
              <div class="contact-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="icon"><i class="fa fa-phone text-warning"></i></span>

                  <h4>Call Us</h4>
                  <p><a href="#" class="text-warning">123 456 7890</a></p>
                </div>
              </div>
              <div class="contact-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="icon"><i class="fa fa-message text-warning"></i></span>

                  <h4>Email</h4>
                  <p><a href="#">contact.london@example.com</a></p>
                </div>
              </div>
            </div>
          </div>


          <!-- Contact Form -->
          <div class="contact-form default-form">
            <h3>Leave A Message</h3>
            <!--Contact Form-->
            <form method="post" action="#" id="email-form">
              <div class="row">
                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                  <div class="response"></div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                  <label>Your Name</label>
                  <input type="text" name="username" class="username" placeholder="Your Name*" required>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                  <label>Your Email</label>
                  <input type="email" name="email" class="email" placeholder="Your Email*" required>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                  <label>Subject</label>
                  <input type="text" name="subject" class="subject" placeholder="Subject *" required>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                  <label>Your Message</label>
                  <textarea name="message" placeholder="Write your message..." required=""></textarea>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                  <button class="theme-btn btn-style-two" type="button" id="submit" name="submit-form">Send Massage</button>
                </div>
              </div>
            </form>
          </div>
          <!--End Contact Form -->
        </div>
      </section>
      <!-- Contact Section -->

      <!-- Call To Action -->
      <section class="call-to-action-two style-two">
        <div class="auto-container">
          <div class="outer-box">
            <div class="content-column">
              <div class="sec-title">
                <h2>Recruiting?</h2>
                <div class="text">Advertise your jobs to millions of monthly users and search 15.8 million<br> CVs in our database.</div>
                <a href="#" class="theme-btn btn-style-one bg-black"><span class="btn-title">Start Recruiting Now</span></a>
              </div>
            </div>

            <div class="image-column" style="background-image: url(/onboarding/images/resource/image-1.png);">
              <figure class="image"><img src="/onboarding/images/resource/image-1.png" alt=""></figure>
            </div>
          </div>
        </div>
      </section>
      <!-- End Call To Action -->


    </x-slot>

</x-guest-layout>
