@extends('frontend.layouts.app')

@section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/about.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>A propos de nous</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Accueil</a></li>
            <li>Mon Compte</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= My Accounte Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
         
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>LA FORCE D’UN GROUPE DE RÉFÉRENCE</h3>
            <p>
            Né il y a plus de 75 ans au Mali, le Groupe compte aujourd’hui près de 6 000 collaborateurs. Les performances sont au rendez-vous puisque le Groupe présente au 31 décembre 2021 un total de bilan consolidé de 9,4 milliards d’euros et enregistre à cette date un bénéfice net consolidé de 164,5 millions d’euros.
            </p>
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                 <div>
                  <p>   Un leadership historique, une réussite panafricaine, un déploiement international.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                 <div>
                  <h5>Urbanisation des états en voies de développement dans le monde</h5>
                  <p> </p>
                </div>
              </li>
            
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
 



  </main><!-- End #main -->

    @endsection