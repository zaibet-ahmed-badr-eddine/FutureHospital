@extends('layouts.app')





@section('content')


  <!--banner-->
   <section id="banner" class="banner">
    <div class="bg-color">
      
 

      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              <img src="img/logo2.png" class="img-responsive">
            </div>
            <div class="banner-text text-center">
              <h1 class="white">SOINS DE SANTÉ À VOTRE BUREAU !!</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="overlay-detail text-center">
              <a href="#service"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </section> 
  <!--/ banner-->
  <!--service-->
  <section id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <h2 class="ser-title">PEU DE NOS SERVICES</h2>
          <hr class="botm-line">
          <p></p>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            {{-- <div class="icon">
              <i class="fas fa-brain"></i>
            </div> --}}
            <div class="icon-info">
              <h4>PNEUMO</h4>
              <p>Spécialité médicale qui se consacre à l'étude et au traitement des maladies des poumons, des bronches, de la plèvre et du médiastin (espace situé entre les poumons.</p>
            </div>
          </div>
          <div class="service-info">
            
            <div class="icon-info">
              <h4>NEURO</h4>
              <p>Spécialité médicale consacrée à l'étude et au traitement des maladies touchant le système nerveux central (cerveau, moelle épinière) ou périphérique (racines et nerfs.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
           
            <div class="icon-info">
              <h4>CARDIO</h4>
              <p>Spécialité médicale qui traite du cœur et des vaisseaux sanguins, en particulier de leurs maladies.</p>
            </div>
          </div>
          <div class="service-info">
          
            <div class="icon-info">
              <h4>PEDIATRE</h4>
              <p>Branche de la médecine consacrée à l'enfant et à ses maladies.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  <!--/ service-->
  <!--cta-->
  <section id="cta-1" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="schedule-tab">
          <div class="col-md-4 col-sm-4 bor-left">
            <div class="mt-boxy-color"></div>
            <div class="medi-info">
              <h3>Cas d'urgence</h3>
              <p>I am text block. Edit this text from Appearance / Customize / Homepage header columns. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
           
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="medi-info">
              <h3>Cas d'urgence</h3>
              <p>I am text block. Edit this text from Appearance / Customize / Homepage header columns. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
             
            </div>
          </div>
          <div class="col-md-4 col-sm-4 mt-boxy-3">
            <div class="mt-boxy-color"></div>
            <div class="time-info">
              <h3>Horaires d'ouvertures</h3>
              <table style="margin: 8px 0px 0px;" border="1">
                <tbody>
                  <tr>
                    <td>dimanche - jeudi</td>
                    <td>8.00 - 17.00</td>
                  </tr>
                  <tr>
                    <td>vendredi</td>
                    <td>9.30 - 17.30</td>
                  </tr>
                  <tr>
                    <td>samedi</td>
                    <td>9.30 - 15.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--cta-->
  <!--about-->
  <section id="apropos" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="section-title">
            <h2 class="head-title lg-line">Hopital du future </h2>
            <hr class="botm-line">
            <p class="sec-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
            <a href="" style="color: #0cb8b6; padding-top:10px;">Know more..</a>
          </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
          <div style="visibility: visible;" class="col-sm-9 more-features-box">
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>C'est quelque chose d'important que tu veux savoir.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
              </div>
            </div>
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>C'est quelque chose d'important que tu veux savoir.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ about-->
  <!--doctor team-->
  <section id="doctor-team" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">RENCONTREZ NOS MÉDECINS!</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor1.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Jessica Wally</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor2.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Iai Donas</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor3.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Amanda Denyl</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor4.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Jason Davis</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ doctor team-->
  <!--cta 2-->
  <section id="cta-2" class="section-padding">
    <div class="container">
      <div class=" row">
        <div class="col-md-2"></div>
        <div class="text-right-md col-md-4 col-sm-4">
          <h2 class="section-title white lg-line">« QUELQUES MOTS<br>PROPOS DE NOUS »</h2>
        </div>
        <div class="col-md-4 col-sm-5">
          Nous sommes un centre hospitalier  à dimension mondiale reconnu. chaque année des milliers de malades : en consultation, en urgence, lors d’hospitalisations programmées ou en hospitalisation à domicile, à tous les âges de la vie. Nous assurons un service public de santé pour tous, 24h/24. C’est pour nous à la fois un devoir et une fierté.          <p class="text-right text-primary"><i>— Hopital Du Future</i></p>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </section>
  <!--cta-->



  
  





  <!--footer-->
  <footer id="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">A Propos de Nous</h4>
            </div>
            <div class="info-sec">
              <p>Nous sommes un centre hospitalier à dimension mondiale reconnu. C’est pour nous à la fois un devoir et une fierté.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Liens Rapides</h4>
            </div>
            <div class="info-sec">
              <ul class="quick-info">
                <li><a href="#banner"><i class="fa fa-circle"></i>Accueil</a></li>
                <li><a href="#service"><i class="fa fa-circle"></i>Services</a></li>
                <li><a href="#about"><i class="fa fa-circle"></i>apropos</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Suivez nous</h4>
            </div>
            <div class="info-sec">
              <ul class="social-icon">
                <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                <li class="bgred"><i class="fa fa-google-plus"></i></li>
                <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
                <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
   
  </footer>
  <!--/ footer-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>


@endsection


