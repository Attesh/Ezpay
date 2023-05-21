<?php session_start();
session_destroy();
?>
@include('frontend.includes.head')
@include('frontend.includes.header') 
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container-fluid p-0 carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      @if(@$HomeSlider)
      @foreach(@$HomeSlider as $ke=>$value)
      <div class="carousel-item active" style="background-image:url({{asset('Frontend/img/'.$value->image)}}); ">
        <div class="carousel-container">
          <div class="overlay"></div>
          <h2 class="animate__animated animate__fadeInDown">{{$value->title}}</h2>
          <p class="animate__animated fanimate__adeInUp">{{$value->short_description}}</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>
      @endforeach
      @endif
    

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>About</h2>
          <p>Who we are</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta" style="background: linear-gradient(to right, #94ceeca8, #ffb92c82) !important;">
      <div class="container">

        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>{{@$CallToAction->title}}</h3>
            <p>{!!@$CallToAction->description!!} </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->



    <section id="services1" class="services1">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!-- <h2>Services</h2> -->
          <p>Features</p>
        </div>

        <div class="row">
	       @if(@$Features)
	         @foreach(@$Features as $ke=>$value)
	          <div class="col-lg-4 col-md-6" data-aos="fade-up">
	            <div class="icon-box">
	            <div class="icon"><i class="{{$value->icon}}"></i></div>
	            <h4 class="title"><a href="">{{@$value->title}}</a></h4>
	            <p class="description">{{@$value->short_description}}</p>
	            </div>
	          </div>
	         @endforeach
	      @endif
          </div>
        </div>
      </div>
    </section>


    <!-- ======= Counts Section ======= -->
    <section class="counts1 section-bg" style="background: linear-gradient(to right, #94ceeca8, #ffb92c82) !important;">
      <div class="container">

        <div class="row">
	       @if(@$Count)
	         @foreach(@$Count as $ke=>$value)
	          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
	            <div class="count-box">
	              <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
	              <span>{{$value->number}}</span>
	              <p>{{$value->title}}</p>
	            </div>
	          </div>
	          @endforeach
	      @endif
        </div>
      </div>
    </section><!-- End Counts Section -->



    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <!-- <h2>Testimonials</h2> -->
          <p>What they are saying about us</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
          	@if(@$Testimonial)
	         @foreach(@$Testimonial as $ke=>$value)
	            <div class="swiper-slide">
	              <div class="testimonial-item">
	                <img src="{{asset('Frontend/img/'.$value->image)}}" class="testimonial-img" alt="">
	                <h3>{{$value->name}}</h3>
	                <h4>{{$value->profession}}</h4>
	                <p>
	                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
	                  {{$value->message}}
	                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
	                </p>
	              </div>
	            </div>
	            <!-- End testimonial item -->
		      @endforeach
		    @endif
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

        <!-- ======= Cta Section ======= -->
    <!-- <section id="cta" class="cta" style="background: linear-gradient(to right, #94ceeca8, #ffb92c82) !important;">
      <div class="container">

        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>{{@$CallToAction->title}}</h3>
            <p>{!!@$CallToAction->description!!} </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section> -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <!-- <h2>Pricing</h2> -->
          <p>Our Competing Prices</p>
        </div>

        <div class="row">
          @if(@$Package)
           @foreach(@$Package as $ke=>$value)
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <h3>{{$value->title}}</h3>
              <h4><sup>$</sup>{{$value->price}}<span> / month</span></h4>
              <ul>
              {!!$value->description!!}
                <!-- <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li> -->
              </ul>
              <div class="btn-wrap">
                <a href="{{url('/payment')}}" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>  
          @endforeach
        @endif
          <!-- <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <h3>Yearly</h3>
              <h4><sup>$</sup>49<span> / year</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="{{url('/payment')}}" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <h3>Ultimate</h3>
              <h4><sup>$</sup>100<span></span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="{{url('/payment')}}" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>
        </div> -->

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq" style="background: #efece94f;">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <!-- <h2>F.A.Q</h2> -->
          <p>Frequently Asked Questions</p>
        </div>

        <ul class="faq-list">
	    	@if(@$Faq)
	         	@foreach(@$Faq as $ke=>$value)
		          <li>
		            <div data-bs-toggle="collapse" class="collapsed question" href="#faq{{$value->id}}">{{$value->question}} <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
		            <div id="faq{{$value->id}}" class="collapse" data-bs-parent=".faq-list">
		              <p>
		                {{$value->answer}}
		              </p>
		            </div>
		          </li>	
	      		@endforeach
		    @endif
        </ul>
      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <!-- <h2>Contact</h2> -->
          <p>Contact Us</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>{{@$GeneralSettings->location}}</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{@$GeneralSettings->email}}</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>{{@$GeneralSettings->phone}}</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">
          	@if(session()->has('success'))
			<div class="alert alert-success">
			{{ session()->get('success') }}
			</div>
			@endif
            <form action="{{route('user.query')}}" method="post" >
            @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit"  class="btn btn-info mt-3">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


@include('frontend.includes.footer')
@include('frontend.includes.script')