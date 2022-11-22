@section('title')
  Services
  
@endsection
@extends('frontend.layouts.app')

@section('content')

  <main id="main">






  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/about.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Nos services</h2>
             </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Accueil</a></li>
            <li>Services</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">
        <p> Accès aux services bancaires
        Des services bancaires conçus pour vous, y compris sur votre mobile et en ligne</p>
        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
            <div>
             
              <h4 class="title">Assurances , Bourses et divres Aides Sociaux</h4>
             </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
            <div>
              <h5 class="title">Business</h5>
            
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
            <div>
              <h4 class="title">Opération sécurisée</h4>
            
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Nos Services</span>
          <h2>Nos Services</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('') }}assets/img/604faba84ad7b349ea412f7a694310.jpg" style="height:250px" alt="" class="img-fluid">
              </div>
              <h3><a href="" class="stretched-link">Assurances dans tous les secteurs (Auto,Moto,Santé,etc)</a></h3>
              <p>Assurance invalidité (AI). picto. Prestations cantonales de la rente-pont. picto. Prestations complémentaires pour familles (PC Familles). picto. Aide aux ...</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('') }}assets/img/A0zD3lO.png" style="height:250px" alt="" class="img-fluid">
              </div>
              <h3><a href="l" class="stretched-link">Business</a></h3>
              <p>Accord de fonds pour faire évoluer votre business.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('') }}assets/img/cargo-service.jpg" style="height:250px" alt="" class="img-fluid">
              </div>
              <h3><a href="" class="stretched-link">Bourses d'études</a>
              </h3>Nous accompagnons les projets d'études des étudiants talentieux en leur accordant des bourses complètes ou partielles selon la motivation du candidat.</p>
              <p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('') }}assets/img/trucking-service.jpg" style="height:250px" alt="" class="img-fluid">
              </div>
              <h3><a href="" class="stretched-link">Accompagnement projet</a></h3>
              <p>Lors de la création de votre activité, le plus important est de ne pas rester seul. Grâce au soutien d'un réseau d'accompagnement, vous pouvez faire grandir votre projet d'entreprise, notamment en bénéficiant de conseils d’experts et d'une aide dans votre recherche de financements.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('') }}assets/img/packaging-service.jpg" style="height:250px" alt="" class="img-fluid">
              </div>
              <h3><a href="" class="stretched-link">Sécurité des personnes et des biens</a></h3>
              <p>Nous accompagnons et finançons les projets de sécurité dans le monde en entier en accordant des aides et divers emprunts aux différents chefs d'états.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('') }}assets/img/warehousing-service.jpg" style="height:250px" alt="" class="img-fluid">
              </div>
              <h3><a href="" class="stretched-link">Divers aides sociaux</a></h3>
              <p>Vous pouvez solliciter : - les allocations logement (APL, ALS, la garantie visale pour les jeunes locataires etc) - les allocations familiales (PAJE, prime de naissance, ARS etc) - les aides au transport (carte navigo, carte avantage jeune etc) - les aides à l'emploi ou à la reprise d'emploi (RSA, prime d'activité,etc).</p>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">

        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h3>Passez à l'Action</h3>
            <p> Il est temps d'ouvrir votre compte.</p>
            <a class="cta-btn" href="{{ route('front.compte') }}">Passez à l'Action</a>
            </div>
          </div>

        </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

          <div class="col-md-5">
            <img src="{{ asset('') }}assets/img/aide.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3>Assurances dans tous les secteurs (Auto,Moto,Santé,etc).</h3>
            <p class="fst-italic">
         Le secteur de l’assurance est un secteur actif, diversifié et en pleine expansion au sein du paysage économique mondial et, plus particulièrement, au sein du paysage économique français.

L’assurance est également un secteur assez particulier du point de vue du mode de fonctionnement de ses entreprises, puisque les entreprises et compagnies d’assurance ont des méthodes de gestion spécifiques adaptées à la nature de leur activité, qui est, rappelons-le, de savoir anticiper le risque pour pouvoir l’assurer.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> La gestion par répartition
.</li>
              <li><i class="bi bi-check"></i>La gestion par capitalisation
.</li>
              <li><i class="bi bi-check"></i> Le principe indemnitaire et forfaitaire
.</li>
            </ul>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="{{ asset('') }}assets/img/bl.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1">
            <h3>Business et leadership</h3>
            <p class="fst-italic">
             Formation et accompagnement de la jeunesse
            </p>
            <p>
Le chef de file qui favorise le leadership transformationnel apportera une nouvelle façon de regarder à l’organisation, plus précisément une vision de ce qu’il pourrait et devrait être.Il se concentre sur l’avenir de la société et les changements nécessaires pour l’améliorer. Les employés qui travaillent dans ce style de leadership se concentrera sur la réalisation de cette nouvelle vision. En outre, ils auront tendance à se concentrer sur leurs tâches plutôt que sur leurs intérêts personnels.
            </p>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5">
            <img src="{{ asset('') }}assets/img/formation.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3>Formation de l'Entrepreneur</h3>
            <p>Le groupe cible principal est constitué des entreprises naissantes (start ups) et des petites et moyennes entreprises. </p>
            <ul>
              <li><i class="bi bi-check"></i> Activité de marketing afin de faire connaitre la formation  parmi les entrepreneurs existants et potentiels.</li>
              <li><i class="bi bi-check"></i> Sélection des participants.</li>
              <li><i class="bi bi-check"></i> Analyse des besoins en formation.</li>

              <li><i class="bi bi-check"></i> Préparation et conception de la formation.</li>
              <li><i class="bi bi-check"></i> Mise en œuvre – l’atelier de formation des entrepreneurs.</li>
          
              <li><i class="bi bi-check"></i> Mise en œuvre – Soutien au suivi post-formation.</li>
              <li><i class="bi bi-check"></i> Suivi et évaluation des résultats de la formation.</li>
            </ul>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="{{ asset('') }}assets/img/secure.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1">
            <h3>Sécurité de transactions</h3>
            <p class="fst-italic">
             Les transactions électroniques sont au cœur de la transformation digitale des entreprises
            </p>
            <p>
           Les attaques qui touchent les transactions électroniques sont essentiellement de nature frauduleuse et menées dans un but financier : <br>

Les compromissions de données <br>
Le déni de services (et demande de rançon)<br>
Les transactions frauduleuses <br>
L’usurpation d’identité <br>
Le vol de données <br>
Pour contrer ces attaques, quatre niveaux de sécurisation sont mis en place :<br>

Les terminaux (identités, données résidentes, flux, applications) <br>
Le site référent (identités, contrôle de fraude, données résidentes, flux)<br>
Les sites partenaires <br>
Les flux, en d’autres termes des services web échangés.<br>
Il en résulte un système de sécurisation complet et complexe.
            </p>
          </div>
        </div><!-- Features Item -->

      </div>
    </section><!-- End Features Section -->
<!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="slides-1 swiper" data-aos="fade-up">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('') }}assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
Je suis fière de me faire accompagner par SGROUPFI(Social Group Finance) dans la réalisations de mes projets professionnels.                   <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('') }}assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
Le groupe le plus scial que SGROUPFI(Social Group Finance) je n'ai pas encore vu dans dans le monde.                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('') }}assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
Pour épargner, vous pouvez notamment, sous certaines conditions, ouvrir des livrets d'épargne réglementée (Livret A, Livret de développement durable et solidaire, Livret d'épargne populaire, Livret Jeune, Plan et Compte épargne logement), un compte sur livret ou un compte à terme.                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('') }}assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
Ils m'ont octroyer beaucoup d'argent pour financier les études de mes enfants.                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('') }}assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
Si on place autant à 2 % (une assurance-vie sur une allocation défensive par exemple) alors l’enfant aura 29 471 €.J'en suis bénéficiaire.                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Questions fréquemment posées</span>
          <h2>Questions fréquemment posées</h2>

        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-10">

            <div class="accordion accordion-flush" id="faqlist">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <i class="bi bi-question-circle question-icon"></i>
  Qu'est-ce que l'inclusion financière et quels sont ses enjeux ?                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
L'inclusion financière caractérise, en général, la possibilité offerte aux populations et aux entreprises, d’accéder à des conditions supportables, à toute une gamme de produits et de services financiers utiles et adaptés à leurs besoins (transactions, paiements, épargne, crédit et assurance), proposés par des prestataires formels, fiables et responsables.                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question-circle question-icon"></i>
Qu'est-ce que les données personnelles ?                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
Toute information personnelle, y compris les informations personnelles sensibles, relative à une personne concernée. Par exemple, adresse, date de naissance, nom, lieu et nationalité.                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <i class="bi bi-question-circle question-icon"></i>
Qui est un Délégué à la Protection des Données ?                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
Une personne travaillant pour un Contrôleur ou un Sous-traitant ayant une connaissance approfondie des lois et des normes de confidentialité des données. Le délégué à la protection des données (DPD) informe le responsable du traitement ou le sous-traitant de ses obligations conformément au RGPD et surveille sa mise en œuvre. Le DPO agit comme agent de liaison entre le responsable du traitement/sous-traitant et l'autorité de contrôle.                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <i class="bi bi-question-circle question-icon"></i>
Comment SGROUPFI(Social Group Finance) s'assure-t-elle que les informations de l'utilisateur sont protégées après leur partage avec les vors ?                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <i class="bi bi-question-circle question-icon"></i>
peut partager les informations de l'utilisateur avec des processeurs tiers (tels que des prestataires de services ou des VOR). Les contrats avec des sous-traitants tiers nécessitent des mesures de sécurité techniques et organisationnelles suffisantes, limitent l'utilisation des informations de l'utilisateur aux fins définies par les affiliés et conservent le contrôle des informations de l'utilisateur, le cas échéant.

En outre, SGROUPFI(Social Group Finance) ne transférera les informations utilisateur des utilisateurs situés dans l'UE qu'à des processeurs tiers qui offrent un niveau de protection adéquat lors du traitement des informations utilisateur (par exemple en concluant des contrats basés sur les clauses types pour le transfert des informations utilisateur de l'UE aux processeurs établis dans des pays tiers publiés par la Commission européenne). Les accords avec des sous-traitants tiers prévoient des recours juridiques en cas de violation de l'accord.                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <i class="bi bi-question-circle question-icon"></i>
Comment fermer mon compte ?                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
Pour fermer votre compte avec SGROUPFI(Social Group Finance), visitez l'une de nos succursales ou rendez-vous sur le site Web du produit et soumettez une demande. Nous supprimerons vos informations personnelles, ou les rendrons anonymes, dès que raisonnablement possible en fonction de l'activité de votre compte et dans conformément à la loi applicable. Nous pouvons fermer un compte ou conserver vos informations pour mener une enquête ou si la loi l'exige.

Nous pouvons également conserver les informations de compte pour effectuer l'une des opérations suivantes :

Se conformer à la loi
Prévenir la fraude
Percevez tous les frais dus
Résoudre les différends
Résoudre les problèmes
Assister aux enquêtes
Appliquer les termes et conditions d"un site
Se conformer aux exigences légales
Prendre d'autres mesures autrement autorisées par la loi applicable
Une fois que nous n'avons plus besoin de conserver les informations, elles sont effacées conformément à nos politiques de conservation et de suppression.                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->



@endsection