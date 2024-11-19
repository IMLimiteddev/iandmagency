<x-guest-layout>

    <x-slot name="body">


        <!-- Candidate Detail Section -->
        <section class="candidate-detail-section">
            <!-- Upper Box -->
            <div class="upper-box ub1-v4">
                <div class="auto-container">
                    <!-- Candidate block Five -->
                    <div class="candidate-block-five at-v5">
                        <div class="inner-box d-block d-lg-flex">
                            <div class="content mb-3 mb-xl-0">
                                <figure><img style="border-radius: 80px" src="/profile_picture/{{$information->image}}" alt=""></figure>
                                <h4 class="name"><a href="#">{{$information->first_name}}
                                        {{$information->last_name}}</a></h4>
                                <ul class="candidate-info at-sv5">
                                    <li class="designation">{{$information->department}}</li>
                                    <li><span class="icon dark-color fal fa-location-dot"></span><br> Lagos, NG</li>
                                    {{-- <li><span class="icon dark-color fal fa-circle-dollar"></span> $294 / hour</li>
                                    --}}
                                    {{-- <li><span class="fas fa-star review-color"></span> 4.5 (8 Reviews)</li> --}}
                                </ul>
                                <ul class="post-tags at-sv5">
                                    <li class="mb-2 mb-xl-0"><a href="#"> {{$information->department}}</a></li>
                                    <li class="mb-2 mb-xl-0"><a href="#"> {{$information->department}}</a></li>
                                    {{-- <li><a href="#"> {{$information->department}}</a></li> --}}
                                </ul>
                            </div>
                            <div class="btn-box d-block d-sm-flex">
                                <a href="#" style="color: black" class="ud-btn-transparent mr20 mb-2 mb-sm-0">Follow <i
                                        class="fal fa-long-arrow-right"></i></a>
                                <a href="#" style="color: black" class="ud-btn-transparent mr20 mb-2 mb-sm-0">Invite <i
                                        class="fal fa-long-arrow-right"></i></a>
                                <a href="#" class="theme-btn btn-style-three">Download CV <i
                                        class="fal fa-long-arrow-right text-white d-block ml15"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="candidate-detail-outer">
                <div class="auto-container">
                    <div class="row">
                        <div class="content-column col-lg-8">
                            <div class="job-detail at-v5 pe-0">
                                <h3 class="fz30 fw500 mb-4">About me</h3>
                                <p class="text">{!!$information->bio!!}</p>
                                <hr class="opacity-100">
                                <!-- Resume / Education -->
                                <div class="resume-outer">
                                    <div class="upper-title">
                                        <h3 class="fz30 fw500 mb-4">Education</h3>
                                    </div>
                                    <!-- Resume BLock -->
                                    <div class="resume-block at-sv5">
                                        <div class="inner">
                                            <span class="name">M</span>
                                            <div class="title-box">
                                                <div class="info-box">
                                                    <h3>Bachlors in Fine Arts</h3>
                                                    <span>Modern College</span>
                                                </div>
                                                <div class="edit-box">
                                                    <span class="year">2012 - 2014</span>
                                                </div>
                                            </div>
                                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Proin a ipsum tellus. Interdum et malesuada fames ac ante <br
                                                    class="d-none d-lg-block"> ipsum primis in faucibus.</div>
                                        </div>
                                    </div>
                                    <!-- Resume BLock -->
                                    <div class="resume-block at-sv5">
                                        <div class="inner">
                                            <span class="name">H</span>
                                            <div class="title-box">
                                                <div class="info-box">
                                                    <h3>Computer Science</h3>
                                                    <span>Harvard University</span>
                                                </div>
                                                <div class="edit-box">
                                                    <span class="year">2008 - 2012</span>
                                                </div>
                                            </div>
                                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Proin a ipsum tellus. Interdum et malesuada fames ac ante <br
                                                    class="d-none d-lg-block"> ipsum primis in faucibus.</div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="opacity-100">
                                <!-- Resume / Work & Experience -->
                                <div class="resume-outer theme-blue">
                                    <div class="upper-title">
                                        <h3 class="fz30 fw500 mb-4">Work & Experience</h3>
                                    </div>
                                    <!-- Resume BLock -->
                                    <div class="resume-block at-sv5">
                                        <div class="inner">
                                            <span class="name">S</span>
                                            <div class="title-box">
                                                <div class="info-box">
                                                    <h3>Product Designer</h3>
                                                    <span>Spotify Inc.</span>
                                                </div>
                                                <div class="edit-box">
                                                    <span class="year">2008 - 2012</span>
                                                </div>
                                            </div>
                                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Proin a ipsum tellus. Interdum et malesuada fames ac ante<br> ipsum
                                                primis in faucibus.</div>
                                        </div>
                                    </div>
                                    <!-- Resume BLock -->
                                    <div class="resume-block at-sv5">
                                        <div class="inner">
                                            <span class="name">D</span>
                                            <div class="title-box">
                                                <div class="info-box">
                                                    <h3>Sr UX Engineer</h3>
                                                    <span>Dropbox Inc.</span>
                                                </div>
                                                <div class="edit-box">
                                                    <span class="year">2012 - 2014</span>
                                                </div>
                                            </div>
                                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Proin a ipsum tellus. Interdum et malesuada fames ac ante<br> ipsum
                                                primis in faucibus.</div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="opacity-100">
                                <!-- Resume / Awards -->
                                <div class="resume-outer theme-yellow at-sv5">
                                    <div class="upper-title">
                                        <h3 class="fz30 fw500 mb-4">Honors & awards</h3>
                                    </div>
                                    <!-- Resume BLock -->
                                    <div class="resume-block at-sv5">
                                        <div class="inner">
                                            <span class="name"></span>
                                            <div class="title-box">
                                                <div class="info-box">
                                                    <h3>Perfect Attendance Programs</h3>
                                                    <p class="text fz15 mb-0">29 April 2023</p>
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Proin a ipsum tellus. Interdum et malesuada fames ac ante<br> ipsum
                                                primis in faucibus.</div>
                                        </div>
                                    </div>
                                    <!-- Resume BLock -->
                                    <div class="resume-block at-sv5">
                                        <div class="inner">
                                            <span class="name"></span>
                                            <div class="title-box">
                                                <div class="info-box">
                                                    <h3>Top Performer Recognition</h3>
                                                    <p class="text fz15 mb-0">29 April 2023</p>
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Proin a ipsum tellus. Interdum et malesuada fames ac ante<br> ipsum
                                                primis in faucibus.</div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="opacity-100">
                                <!-- Portfolio -->
                                <div class="portfolio-outer">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="upper-title">
                                                <h3 class="fz30 fw500 mb-4">Projects</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <figure class="image">
                                                <a href="images/resource/portfolio-1.jpg" class="lightbox-image"><img
                                                        src="/onboarding/images/resource/portfolio-1.jpg" alt=""></a>
                                                <span class="icon flaticon-plus"></span>
                                            </figure>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <figure class="image">
                                                <a href="images/resource/portfolio-2.jpg" class="lightbox-image"><img
                                                        src="/onboarding/images/resource/portfolio-2.jpg" alt=""></a>
                                                <span class="icon flaticon-plus"></span>
                                            </figure>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <figure class="image">
                                                <a href="images/resource/portfolio-3.jpg" class="lightbox-image"><img
                                                        src="/onboarding/images/resource/portfolio-3.jpg" alt=""></a>
                                                <span class="icon flaticon-plus"></span>
                                            </figure>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <figure class="image">
                                                <a href="images/resource/portfolio-4.jpg" class="lightbox-image"><img
                                                        src="/onboarding/images/resource/portfolio-4.jpg" alt=""></a>
                                                <span class="icon flaticon-plus"></span>
                                            </figure>
                                        </div>
                                    </div>
                                </div>

                                <!-- Video Box -->
                                <div class="video-outer">
                                    <h3 class="fz30 fw500 mb-4">Video</h3>
                                    <div class="video-box">
                                        <figure class="image">
                                            <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now"
                                                data-fancybox="gallery" data-caption="">
                                                <img src="/onboarding/images/resource/video-img.jpg" alt="">
                                                <i class="icon flaticon-play-button-3" aria-hidden="true"></i>
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-column col-lg-4">
                            <aside class="sidebar">
                                <div class="sidebar-widget">
                                    <h4 class="widget-title">Information</h4>
                                    <div class="widget-content">
                                        <ul class="job-overview at-sv5">
                                            <li>
                                                <i class="icon far fa-circle-dollar"></i>
                                                <div class="ml15">
                                                    <h5>Offer Salary</h5>
                                                    <span>$10 / hour</span>
                                                </div>
                                            </li>
                                            <li>
                                                <i class="icon flaticon-title"></i>
                                                <div class="ml15">
                                                    <h5>Experience Time</h5>
                                                    <span>2 Year</span>
                                                </div>
                                            </li>
                                            <li>
                                                <i class="icon far fa-mars"></i>
                                                <div class="ml15">
                                                    <h5>Gender</h5>
                                                    <span>Male</span>
                                                </div>
                                            </li>
                                            <li>
                                                <i class="icon far fa-user"></i>
                                                <div class="ml15">
                                                    <h5>Age</h5>
                                                    <span>25-30</span>
                                                </div>
                                            </li>
                                            <li>
                                                <i class="icon flaticon-exercise"></i>
                                                <div class="ml15">
                                                    <h5>Qualification</h5>
                                                    <span>Associate Degree</span>
                                                </div>
                                            </li>
                                            <li>
                                                <i class="icon fal fa-language"></i>
                                                <div class="ml15">
                                                    <h5>Language:</h5>
                                                    <span>English, German, Spanish</span>
                                                </div>
                                            </li>
                                            <li>
                                                <i class="icon flaticon-email-3"></i>
                                                <div class="ml15">
                                                    <h5>Email</h5>
                                                    <span>candidate@apus.com</span>
                                                </div>
                                            </li>
                                            <li>
                                                <i class="icon flaticon-telephone-1"></i>
                                                <div class="ml15">
                                                    <h5>Phone Number</h5>
                                                    <span>3323534200594</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="d-grid mb15">
                                        <a style="color: black" href="#" class="ud-btn-transparent">Send Message</a>
                                    </div>
                                    <div class="text-center">
                                        <div class="social-link-style1">
                                            <a class="me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="me-3" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="me-3" href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="p-0 mb40">
                                    <!-- Job Skills -->
                                    <h4 class="widget-title fz18 mb25 fw500">Location</h4>
                                    <div class="widget-content">
                                        <div class="map-outer">
                                            <div class="map-canvas at-sv5" data-zoom="12" data-lat="-37.817085"
                                                data-lng="144.955631" data-type="roadmap" data-hue="#ffc400"
                                                data-title="Envato" data-icon-path="images/icons/contact-map-marker.png"
                                                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="sidebar-widget contact-widget">
                                    <h4 class="widget-title">Engage Candidate</h4>
                                    <div class="widget-content">
                                      <!-- Comment Form -->
                                      <div class="default-form">
                                        <!--Comment Form-->
                                        <form action="{{route('candidate.engagement.notification', $information->user_id)}}"  method="POST">
                                            @csrf
                                          <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                              <input type="text" name="name" placeholder="Company Name" required>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                              <input type="email" name="email" placeholder="Company Email" required>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                              <textarea class="darma" name="message" placeholder="What you want."></textarea>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                              <button class="theme-btn btn-style-three" type="submit" name="submit-form">Engage</button>
                                            </div>
                                          </div>
                                        </form>
                                      </div>
                                    </div>

                                  </div>
                                <div class="p-0">
                                    <!-- Job Skills -->
                                    <h4 class="widget-title fz18 mb25 fw500">Professional Skills</h4>
                                    <div class="widget-content">
                                        <div class="job-skills-style1">
                                            <a href="#">Marketing Jobs</a>
                                            <a href="#">Designer</a>
                                            <a href="#">Engimeering</a>
                                            <a href="#">Developer</a>
                                            <a href="#">Security Jobs</a>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End candidate Detail Section -->

    </x-slot>

</x-guest-layout>
