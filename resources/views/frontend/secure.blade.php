@extends('frontend.layouts.app')

@section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/secure.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Sécurité</h2>
             </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Accueil</a></li>
            <li>Sécurité</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="assets/img/secure.jpg" class="img-fluid" alt="">
         
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>LA FORCE D’UN GROUPE DE RÉFÉRENCE POUR TOUTE OPERATIONS SECURISEES</h3>
            <p>
           Il existe un Fonds de garantie des dépôts et de résolution qui protège les titulaires de comptes en cas de défaillance de la banque. Toutes les banques établies en Europe adhèrent à ce fonds. Les avoirs sont couverts jusqu'à 100 000 € par personne et par établissement.            </p>
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-diagram-3"></i>
                <div>
                  <p>   Sécurité des transactions .</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>Carte sécurité avec code unique.</h5>
                </div>
              </li>
           
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->


  </main><!-- End #main -->

    @endsection