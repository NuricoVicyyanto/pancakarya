@extends('frontend.layouts.layout')
@section('content')
<div class="container">

  <!-- CONTACT SECTION START-->
  <section id="contact" class="atf-contact-area atf-section-padding">
    <div class="container">
      <div class="row clearfix justify-content-center">
        <div class="col-lg-6 col-xl-6">
          <div class="atf-section-title text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
            <h2 class="">Get In Touch</h2>
            <p class="mx-auto my-auto">Lorem elementum Sed congue nisl dolorSed congue nisl dolor Lorem elementum Sed congue nisl dolorSed.</p>
          </div>
        </div>
      </div>
      <!--- END ROW -->

      <div class="row">
        <div class="col-xl-6 col-lg-6 col-12 my-auto mx-auto">
          <div class="contact mr-lg-5">
            <h4>Stay Connected with us</h4>
            <form action="{{ route('simpanpengguna')}}" method="post">
              {{ csrf_field() }}
              <div class="row">
                <div class="form-group col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="required" readonly value="{{ auth()->user()->name }}">
                </div>
                <div class="form-group col-md-6">
                  <input type="email" name="username" class="form-control" id="username" placeholder="Your Email" required="required">
                </div>
                <div class="form-group col-md-12">
                  <input type="text" name="email" class="form-control" id="email" placeholder="Your Subject" required="required" readonly value="{{ auth()->user()->email }}">
                </div>
                <div class="form-group col-md-12">
                  <textarea rows="6" name="password" class="form-control" id="Password" placeholder="Your Message" required="required"></textarea>
                </div>
                <div class="col-md-12">
                  <div class="actions atf-contact-btn text-left">
                    <button type="submit" value="Submit Now" name="submit" id="submitButton" class="btn atf-themes-btn" title="Submit Your Message!">Send Message</button>
                  </div>
                </div>
              </div>
            </form>
            <p class="form-message"></p>
          </div>
        </div>
        <!--- END COL -->


        <div class="col-xl-6 col-lg-6 col-12">
          <div class="atf-contact-info mx-auto my-auto">
            <div class="atf-contact-details">
              <i class="fa fa-home"></i>
              <h4>Home Address</h4>
              <p>Jl. Sawo 2 No 5 Patrang, Jember</p>
            </div>
            <div class="atf-contact-details">
              <i class="fa fa-phone"></i>
              <h4>Mobile Number</h4>
              <p>+62 812-3124-2823</p>
            </div>
            <div class="atf-contact-details">
              <i class="fa fa-envelope"></i>
              <h4>Email Address</h4>
              <p>pancakaryapro@gmail.com</p>
            </div>
          </div>
          <!--- END CONTACT -->
        </div>
        <!--- END COL -->
      </div>
      <!--- END ROW -->
    </div>
    <!--- END CONTAINER -->
  </section>
  <!-- CONTACT SECTION END-->

  <!-- Google Map start-->
  <div id="atf-map-area">
    <iframe style="border:0" src="https://maps.google.com/maps?width=100%25&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" allowfullscreen></iframe>
  </div>
  <!-- Google Map end -->

</div>
<br>
@stop