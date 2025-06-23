@extends('layouts.app')
@section('title', '')
@section('content')
@include('layouts.loader')
<div id="page" class="full-page">
   @include('layouts.navigation')

   <main id="content" class="site-main">
        <!-- Inner Banner html start-->
      <section class="inner-banner-wrap">
         <div class="inner-baner-container" style="background-image: url('{{ asset('assets/images/faqs.png') }}');">
            <div class="container">
               <div class="inner-banner-content">
                  <h1 class="inner-title">{{ __('site.faq.title') }}</h1>
               </div>
            </div>
         </div>
         <div class="inner-shape"></div>
      </section>
        <!-- Inner Banner html end-->
      <div class="faq-page-section">
         <div class="container">
            <div class="faq-page-container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="faq-content-wrap">
                        <div class="section-heading text-center">
                           <h2>{{ __('site.faq.subtitle') }}</h2>
                           <blockquote>{{ __('site.faq.intro') }}</blockquote>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="faq-content-wrap">
                        <div class="section-heading">
                           <h2 style="font-size: 2.5em; ">{{ __('site.faq.booking.title') }}</h2>
                           <p>{{ __('site.faq.booking.description') }}</p>
                        </div>
                        
                        <div class="accordion" id="accordionOne">
                           <div class="card">
                              <div class="card-header" id="headingOne">
                                 <h4 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                       {{ __('site.faq.q1') }}
                                    </button>
                                 </h4>
                              </div>
                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionOne">
                                 <div class="card-body">
                                 {{ __('site.faq.a1') }}
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="headingTwo">
                                 <h4 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                       {{ __('site.faq.q2') }}
                                    </button>
                                 </h4>
                              </div>
                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionOne">
                                 <div class="card-body">
                                    {{ __('site.faq.a2') }}
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="headingThree">
                                 <h4 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                       {{ __('site.faq.q3') }}
                                    </button>
                                 </h4>
                              </div>
                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionOne">
                                 <div class="card-body">
                                    {{ __('site.faq.a3') }}
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="headingFour">
                                 <h4 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                       {{ __('site.faq.q4') }}
                                    </button>
                                 </h4>
                              </div>
                              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionOne">
                                 <div class="card-body">
                                    {{ __('site.faq.a4') }}
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="headingFive">
                                 <h4 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                       {{ __('site.faq.q5') }}
                                    </button>
                                 </h4>
                              </div>
                              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionOne">
                                 <div class="card-body">
                                    {{ __('site.faq.a5') }}
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="headingSix">
                                 <h4 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    {{ __('site.faq.q6') }}
                                    </button>
                                 </h4>
                              </div>
                              <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionOne">
                                 <div class="card-body">
                                 {{ __('site.faq.a6') }}
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="headingSeven">
                                 <h4 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    {{ __('site.faq.q7') }}
                                    </button>
                                 </h4>
                              </div>
                              <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionOne">
                                 <div class="card-body">
                                 {{ __('site.faq.a7') }}
                                 </div>
                              </div>
                           </div>
                           
                        </div>      
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="faq-content-wrap pl-20">
                        <div class="section-heading">
                           <h2 style="font-size: 2.5em; ">{{ __('site.faq.tour.title') }}</h2>
                           <p>{{ __('site.faq.tour.description') }}</p>
                        </div>
                        <div class="accordion" id="accordionTwo">
                           <div class="card">
                              <div class="card-header" id="headingEight">
                                 <h4 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    {{ __('site.faq.q8') }}
                                    </button>
                                 </h4>
                              </div>
                              <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionTwo">
                                 <div class="card-body">
                                 {{ __('site.faq.a8') }}
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="headingNine">
                                 <h4 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    {{ __('site.faq.q9') }}
                                    </button>
                                 </h4>
                              </div>
                              <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionTwo">
                                 <div class="card-body">
                                 {{ __('site.faq.a9') }}
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="headingTen">
                                 <h4 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    {{ __('site.faq.q10') }}
                                    </button>
                                 </h4>
                              </div>
                              <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionTwo">
                                 <div class="card-body">
                                 {{ __('site.faq.a10') }}
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="headingEleven">
                                 <h4 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                    {{ __('site.faq.q11') }}
                                    </button>
                                 </h4>
                              </div>
                              <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionTwo">
                                 <div class="card-body">
                                 {{ __('site.faq.a11') }}
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="headingTwelve">
                                 <h4 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                    {{ __('site.faq.q12') }}
                                    </button>
                                 </h4>
                              </div>
                              <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionTwo">
                                 <div class="card-body">
                                 {{ __('site.faq.a12') }}
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="headingThirteen">
                                 <h4 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                       {{ __('site.faq.q13') }}
                                    </button>
                                 </h4>
                              </div>
                              <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordionTwo">
                                 <div class="card-body">
                                 {{ __('site.faq.a13') }}
                                 </div>
                              </div>
                           </div>
                        </div>      
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
        
      
    </main>
    @include('layouts.footer')

    <!-- header html end -->
</div>
@endsection
