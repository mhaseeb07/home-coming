@extends('front.layouts.app')
@section('title','TUF Convocation - The University of Faisalabad')
@section('content')

<!-- Top Most Instructions Banner -->
    <div id="page-banner-area" class="page-banner-area conv-instructions mb-5" style="background-image:url(front/images/hero_area/banner_bg.png)">
         <!-- Subpage title start -->
         <div class="page-banner-title">
            <div class="text-center">
               <h2>Instructions For Graduates Attending Convocation</h2>
            </div>
         </div><!-- Subpage title end -->
      </div><!-- Page Banner end -->

<!-- Registration Form Instructions -->
  <section class="ts-pricing resgistration-instructions">
         <div class="container">
            <div class="row pricing-wrap">
               <div class="col-lg-12 col-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                  <div class="pricing-item">
                     <!-- <img class="pricing-dot" src="{{ asset('front/images/pricing/dot2.png') }}" alt=""> -->
                     <div class="ts-pricing-box convocation-registration-card">
                        <!-- <span class="big-dot"></span> -->
                        <div class="ts-pricing-progress">
                           <h3>INSTRUCTIONS FOR GRADUATES ATTENDING CONVOCATION </h3>
                              <p class="instructions-topmost-card-text text-center">
                                 <b>(Convocation will be conducted strictly in compliance with the SOPs of COVID-19 Pandemic as announced by Government of Pakistan, NCOC and Higher Education Commission from time to time).</b>
                              </p>
                              <p class="instructions-topmost-card-text">Dear Degree recipient: Please read the guidelines / instructions carefully and follow the same in true letter and spirit to avoid untoward situation for your as well as accompanied guest.</p>
                        </div>
                        <div class="ts-pricing-header">
                           <h3 class="ts-pricing-price">
                                Convocation Registration Guidelines
                           </h3>
                        </div>
                        <div class="ts-pricing-progress">
                           <p class="instructions-topmost-card-text">
                            The registration form can be downloaded from the University website<a href="https://www.tuf.edu.pk/convocation" class="mx-2">https://www.tuf.edu.pk/convocation</a>
                           </p>
                           <ul class="list-style-type-none">
                                <li><i class="fa fa-arrow-right" aria-hidden="true"></i>Graduates are required to submit registration forms alongwith prescribed attachments indicated in the form in person at the <b>Office of Student Affairs</b>of their respective Wing after paying prescribed free of <b>Rs.2,500/-(non-refundable)</b>in University Account at Habib Metropolitan Bank Ltd on proper fee voucher.They can also fill online registration form and send through email at <b>dcexam@tuf.edu.pk</b> with prescribed attachments as given in the registration form.</li>
                                <li><b>Note:</b>-Last date for submission of registration form is Saturday October 9, 2021.</li>
                            </ul>
                        </div>
                     </div><!-- ts pricing box-->
                     <!-- <img class="pricing-dot1 " src="{{ asset('front/images/pricing/dot2.png') }}" alt=""> -->
                  </div>
               </div><!-- col end-->
            </div>
         </div><!-- container end-->
         <div class="speaker-shap wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
            <img class="shap2" src="images/shap/pricing_memphis1.png" alt="">
         </div>
      </section>
      <!-- Registration Form Instructions end-->

      <!-- Convocation Venue Start-->
      {{--<section class="ts-intro-content convocation-venue-section mt-5 mb-5">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-12 col-12">
                     <h2 class="column-title">
                           <span>Convocation Venue</span>
                           Health Sciences Wing,
                           Sargodha Road Faisalabad
                        </h2>
                     <!-- single intro text end-->
                  </div><!-- col end-->
                  <div class="col-lg-6 col-md-12 col-12">
                     <div class="intro-content-img">
                           <img src="{{ asset('front/images/instructions/health.png') }}" alt="" class="img-fluid">
                     </div>
                  </div><!-- col end-->
               </div><!-- row end-->
            </div><!-- container end-->
         </section>--}}
      <!-- Convocation Venue Ends Here -->

   <!-- Entrance Gate,Seating Arrangements,Photographic Arrangement Section Start -->
      <section class="ts-faq-sec instructions-faqs mt-5 mb-5">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="faq-content mb-50">
                     <h2 class="column-title text-center">
                        Follow the Convocation Instructions
                     </h2>
                     <div class="panel-group faq-item" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel faq-list panel-default"><!-- Entrance Gate Protocol start-->
                           <div class="panel-heading" role="tab" id="headingOne">
                              <h4 class="panel-title">
                                 <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Entrance Gate Protocols
                                 </a>
                              </h4>
                           </div>
                           <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                              <div class="panel-body">
                                 <p><i class="fa fa-arrow-right" aria-hidden="true"></i>Wearing face mask</p>
                                 <p><i class="fa fa-arrow-right" aria-hidden="true"></i>Temperature screening</p>
                                 <p><i class="fa fa-arrow-right" aria-hidden="true"></i>Hand sanitization</p>
                                 <p><i class="fa fa-arrow-right" aria-hidden="true"></i>Maintaining social distance </p>
                                 <p><b>Presentation of:</b></p>
                                 <p><i class="fa fa-arrow-right" aria-hidden="true"></i>Original CNIC</p>
                                 <p><i class="fa fa-arrow-right" aria-hidden="true"></i>Convocation Registration/Invitation Card.</p>
                                 <p><i class="fa fa-arrow-right" aria-hidden="true"></i>Original Vaccination Certificate/Card issued by NADRA.</p>
                              </div>
                           </div>
                        </div><!--Entrance Gate Protocol Ends-->

                              <div class="panel faq-list panel-default"><!-- Seating Arrangements start-->
                                 <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                       <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          Seating Arrangements
                                       </a>
                                    </h4>
                                 </div>
                                 <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                       <p><i class="fa fa-arrow-right" aria-hidden="true"></i>Social distance will be maintained in arena due to COVID-19 pandemic.</p>
                                       <p><i class="fa fa-arrow-right" aria-hidden="true"></i>Graduates will be guided by the staff on duty for seating plan, line-up to obtain degree and other logistics.</p>
                                       <p><i class="fa fa-arrow-right" aria-hidden="true"></i>Students are required to sit on their assigned seats with the color code of their respective faculty.</p>
                                    </div>
                                 </div>
                              </div><!-- Seating Arrangements Ends-->

                              <div class="panel faq-list panel-default"><!-- Photographic Arrangements start-->
                                 <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                       <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <i class="more-less glyphicon glyphicon-plus"></i>
                                                Photographic Arrangements
                                       </a>
                                    </h4>
                                 </div>
                                 <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                    <p><i class="fa fa-arrow-right" aria-hidden="true"></i>Official group photographs will be taken after the conclusion of convocation.</p>
                                       <p><i class="fa fa-arrow-right" aria-hidden="true"></i>University Management has officially hired photographer for photographs of line-up, wide angle group photographs and other events.<br>Photographers will also setup booths to take your photographs with students’ family and friends.</p>
                                       <p><i class="fa fa-arrow-right" aria-hidden="true"></i>Photographs will be provided to students on payment. Therefore, abstain from taking photographs at venue when the session is in progress.</p>
                                    </div>
                                 </div>
                              </div><!-- Photographic Arrangements Ends-->

                              <div class="panel faq-list panel-default"><!--Convocation Regalia Start-->
                                    <div class="panel-heading" role="tab" id="headingFour">
                                       <h4 class="panel-title">
                                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                             Convocation Regalia
                                          </a>
                                       </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                       <div class="panel-body">
                                       <p><i class="fa fa-arrow-right" aria-hidden="true"></i>Academic costumes will be available from University from October 13 to 14, 2021 within working hours on<b>cash payment @ Rs. 2500/- as rent and security.The said amount will be refundable upon return of academic costume upto 6.00 p.m. on the day of convocation.</b></p>
                                       <p><i class="fa fa-arrow-right" aria-hidden="true"></i>Graduates must wear regalia in strict conformity on convocation day.</p>
                                       <p><i class="fa fa-arrow-right" aria-hidden="true"></i>Please note that returning of gown, hood and cap is necessary for receiving original degree from the University, failing which the received security will be adjusted against the payment of gown, hood and cap.</p>
                                       <p><i class="fa fa-arrow-right" aria-hidden="true"></i>Gown string should be properly tied and the tassel on the cap should be on the right side.</p>
                                       <p><i class="fa fa-arrow-right" aria-hidden="true"></i>The hood should be on the upper right shoulder.</p>
                                       </div>
                                    </div>
                              </div><!--Convocation Regalia End-->

                              <div class="panel faq-list panel-default"><!--Punctuality Start-->
                                    <div class="panel-heading" role="tab" id="headingFive">
                                       <h4 class="panel-title">
                                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                             Punctuality
                                          </a>
                                       </h4>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                       <div class="panel-body">
                                       <p><i class="fa fa-arrow-right" aria-hidden="true"></i>Be punctual at the convocation and be seated at least 30 minutes prior to stipulated communicated time after which the entrance gate will be closed. Once the ceremony is called to start by the Chief Guest no degree recipient/parents/guest will be allowed to enter into the Arena.</p>
                                       </div>
                                    </div>
                              </div><!--Punctuality End-->

                              <div class="panel faq-list panel-default"><!--Punctuality Start-->
                                    <div class="panel-heading" role="tab" id="headingSix">
                                       <h4 class="panel-title">
                                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                             Discipline
                                          </a>
                                       </h4>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                       <div class="panel-body">
                                          <p><i class="fa fa-arrow-right" aria-hidden="true"></i>Graduates are expected to maintain <b>pin-drop</b> silence when the academic procession enters the convocation Arena as well as during the convocation proceedings. Avoid talking or discussing anything among each other.</p>
                                          <p><i class="fa fa-arrow-right" aria-hidden="true"></i>Good behavior and decent manners are the reflection of righteous up-bringing with decent family background, educated and well-groomed personality.</p>
                                          <p><i class="fa fa-arrow-right" aria-hidden="true"></i>Graduates should behave themselves in a dignified manner throughout the proceedings of the convocation.</p>
                                       </div>
                                    </div>
                              </div><!--Punctuality End-->

                              <div class="panel faq-list panel-default"><!--DressCode Start-->
                                    <div class="panel-heading" role="tab" id="headingSeven">
                                       <h4 class="panel-title">
                                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                             Dress Code
                                          </a>
                                       </h4>
                                    </div>
                                    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                       <div class="panel-body">

                                          <table class="table table-hover">
                                             <thead>
                                                <tr>
                                                   <th></th>
                                                   <th scope="col">Graduates</th>
                                                   <th scope="col">Parents/Guests</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <th scope="row">Male</th>
                                                   <td>A dark colour lounge suit with closed collar and closed shoes with laces </td>
                                                   <td>Lounge suit / Kameez Shalwar with waist coat/ closed collar.</td>
                                                </tr>
                                                <tr>
                                                   <th scope="row">Female</th>
                                                   <td>Kameez Shalwar/Trouser with Dopatta/Head scarves of sober color.</td>
                                                   <td>Decent dress of sober colour.</td>
                                                </tr>
                                             </tbody>
                                             </table>

                                       </div>
                                    </div>
                              </div><!--DressCode End-->

                           </div><!-- panel-group -->
                        </div>
                     </div><!-- panel-group -->
                     </div>
               </div><!-- col end -->
            </div><!-- row end-->
         </div><!-- .container end -->
      </section><!-- End faq section -->
      <!-- Entrance Gate,Seating Arrangements,Photographic Arrangement Section Ends -->

      <section class="ts-pricing general-instructions mt-5 mb-5"><!-- Convocation General Instructions-->
         <div class="container">
            <div class="row pricing-wrap">
               <div class="col-lg-12 col-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                  <div class="pricing-item">
                     <!-- <img class="pricing-dot" src="{{ asset('front/images/pricing/dot2.png') }}" alt=""> -->
                     <div class="ts-pricing-box convocation-registration-card">
                        <span class="big-dot"></span>
                        <div class="ts-pricing-header">
                           <h3 class="ts-pricing-price">
                               General instructions
                           </h3>
                        </div>
                        <div class="ts-pricing-progress">
                           <p class="amount-progres-text"><i class="fa fa-arrow-right" aria-hidden="true"></i>Good behavior and decent manners are the reflection of righteous up-bringing with decent family background, educated and well-groomed personality.</p>
                           <p class="amount-progres-text"><i class="fa fa-arrow-right" aria-hidden="true"></i>Guests under the age of 12 years and those whose particulars are not included in the registration form, will not be permitted entry into the University/Convocation Arena.</p>
                           <p class="amount-progres-text"><i class="fa fa-arrow-right" aria-hidden="true"></i>Smoking and bringing edibles inside the Convocation Arena is strictly prohibited.</p>
                           <p class="amount-progres-text"><i class="fa fa-arrow-right" aria-hidden="true"></i>Graduates will not be allowed to leave the Convocation Arena before the conclusion announcement of the convocation proceedings.</p>
                           <p class="amount-progres-text"><i class="fa fa-arrow-right" aria-hidden="true"></i>All graduates, faculty members and guests will stand in honor of procession when it enters the Convocation Arena and will remain standing until the procession gets settled.</p>
                           <p class="amount-progres-text"><i class="fa fa-arrow-right" aria-hidden="true"></i>Graduates are required to rise from their seats at the time of conferment of degrees without making any noise.</p>
                           <p class="amount-progres-text"><i class="fa fa-arrow-right" aria-hidden="true"></i>When the Governor of the Punjab/Patron of The University of Faisalabad say, “I admit you to the degree ………..”, please bow your head and upper part of the body keeping your right hand on the chest, as a token of respect.</p>
                           <p class="amount-progres-text"><i class="fa fa-arrow-right" aria-hidden="true"></i>Graduate while receiving the award from Chief Guest should turn his/her face to the camera for photograph..</p>
                           <p class="amount-progres-text"><i class="fa fa-arrow-right" aria-hidden="true"></i>Graduate receiving his/her medal should show utmost courtesy and respect to the Chief Guest by saying<b>“Thank You Sir”</b>.</p>
                           <p class="amount-progres-text"><i class="fa fa-arrow-right" aria-hidden="true"></i>Graduates will leave the convocation Arena in orderly manners; starting from the back rows without rushing out and noising in any case.</p>
                           <p class="amount-progres-text"><i class="fa fa-arrow-right" aria-hidden="true"></i>Refreshment will be arranged only for graduates and their parents/guests in the University Lawn.</p>
                           <p class="amount-progres-text"><i class="fa fa-arrow-right" aria-hidden="true"></i><b>Mobile phones are not allowed in the Arena. </b></p>
                        </div>
                     </div><!-- ts pricing box-->
                     <!-- <img class="pricing-dot1 " src="{{ asset('front/images/pricing/dot2.png') }}" alt=""> -->
                  </div>
               </div><!-- col end-->
            </div>
         </div><!-- container end-->
         <div class="speaker-shap wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
            <img class="shap2" src="images/shap/pricing_memphis1.png" alt="">
         </div>
      </section> <!--Convocation General Instructions end-->


      <section class="ts-intro-item section-bg covid-guidelines mt-5 mb-5">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="row">
                     <div class="col-lg-6 wow fadeInUp mt-2 mb-2" data-wow-duration="1.5s" data-wow-delay="400ms">
                        <div class="single-intro-text">
                           <!-- <i class="icon icon-speaker"></i> -->
                           <h3 class="ts-title text-center">General Guidelines in wake of COVID</h3>
                           <p>1)Wear face mask.</p>
                           <p>2)Keep small hand sanitizer bottle and use it frequently</p>
                           <p>3)Maintain social distance and avoid hand shaking/embracing</p>
                           <p>4)Avoid sharing of items and eatable</p>
                           <p>5)Entry of individuals with temperature higher than specified will be prohibited</p>
                        </div><!-- single intro text end-->
                     </div><!-- col end-->
                     <div class="col-lg-6 wow fadeInUp mt-2 mb-2" data-wow-duration="1.5s" data-wow-delay="500ms">
                        <div class="single-intro-text">
                           <!-- <i class="icon icon-netwrorking"></i> -->
                           <h3 class="ts-title text-center">Degrees Distribution</h3>
                           <p>
                              After refreshment, graduates will collect degrees from designated counters after proper verification and return regalia.
                           </p>
                        </div><!-- single intro text end-->

                     </div><!-- col end-->
                  </div>
               </div><!-- col end-->
            </div><!-- row end-->
         </div><!-- container end-->
      </section>
      <!-- ts intro end-->


@endsection
@push('js')
@endpush
