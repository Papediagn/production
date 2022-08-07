@extends('template')
@section('titre')
    Accueil
@endsection
@section('main')

               <!-- topbar -->

               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont ">
                  <div class=" container-fluid">

                     <div class="row column1">
                        <div class="col-md-6 col-lg-6">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div>
                                    <i class="fa fa-user yellow_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no ">
                                 <div>
                                    <p class="total_no">{{$count_bloc}}</p>
                                    <p class="head_couter">BLOC DEBITES</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div>
                                    <i class="fa fa-calculator blue1_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">{{$qte}}</p>
                                    <p class="head_couter">Total tranche</p>
                                 </div>
                              </div>
                           </div>
                        </div>


                     </div>
                     <div class="row column1 social_media_section">




                     </div>
                     <!-- graph -->

                     <!-- end graph -->
                     <div class="row column3">
                        <!-- testimonial -->
                        <div class="col-md-12">
                           <div class="dark_bg full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2 class="text-center">SOREVET MARBRE IMPORT EXPORT</h2>
                                 </div>
                              </div>
                              <div class="full graph_revenue">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="content testimonial">
                                          <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                                             <!-- Wrapper for carousel items -->
                                             <div class="carousel-inner">
                                                <div class="item carousel-item active">
                                                   <div class="img-box"><img src="{{asset('images/logo/logoo.png')}}" alt=""></div>
                                                   <p class="testimonial">Travailler avec notre organisation vous permet d'avoir accés à la consolidation d'expériences la plus complète et la plus large,d'une équipe unie autour d'objectifs communs qui veille en permanence à la réalisation optimale de vos projets</p>
                                                </div>
                                                <div class="item carousel-item">
                                                   <div class="img-box"><img src="{{asset('images/logo/logoo.png')}}" alt=""></div>
                                                   <p class="testimonial">Nos investissements constants dans les moyens humains,par un processus de formation continue, et en matériel, dont le renouvellement complet de notre parc machines est la meilleure illustration , accompagnenet l'effort de nos équipes.</p>
                                                </div>
                                                <div class="item carousel-item">
                                                   <div class="img-box"><img src="{{asset('images/logo/logoo.png')}}" alt=""></div>
                                                   <p class="testimonial">Nos présences sur les grands projets à travers l'ensemble du Royaume illustre la crédibilité et la fiabilité de notre entreprise et la satisfaction de nos clients.</p>
                                                </div>
                                             </div>
                                             <!-- Carousel controls -->
                                             <a class="carousel-control left carousel-control-prev" href="#testimonial_slider" data-slide="prev">
                                             <i class="fa fa-angle-left"></i>
                                             </a>
                                             <a class="carousel-control right carousel-control-next" href="#testimonial_slider" data-slide="next">
                                             <i class="fa fa-angle-right"></i>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end testimonial -->
                        <!-- progress bar -->

                        <!-- end progress bar -->
                     </div>

                  </div>
                  <!-- footer -->

               </div>
               <!-- end dashboard inner -->


      @endsection
