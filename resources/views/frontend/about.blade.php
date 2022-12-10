@section('title')
  A propos
  
@endsection

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
            <li>Découverte</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="assets/img/about.png" class="img-fluid" alt="">
         
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>LA FORCE D’UN GROUPE DE RÉFÉRENCE</h3>
            <p>
            Né il y a plus de 75 ans au Mali, le Groupe compte aujourd’hui près de 6 000 collaborateurs. Les performances sont au rendez-vous puisque le Groupe présente au 31 décembre 2021 un total de bilan consolidé de 9,4 milliards d’euros et enregistre à cette date un bénéfice net consolidé de 164,5 millions d’euros.
            </p>
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-diagram-3"></i>
                <div>
                  <p>   Un leadership historique, une réussite panafricaine, un déploiement international.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-fullscreen-exit"></i>
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

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="809528" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projets</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="2007" data-purecounter-duration="1" class="purecounter"></span>
              <p>Employers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Notre Equipe</span>
          <h2>Quelques membres administratifs</h2>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Walter White</h4>
                <span>Directeur Général</span>
                
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sarah Jhinson</h4>
                <span>Sécrétaire Administrative </span>
            
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>William Anderson</h4>
                <span>Directeur Commercial </span>
              
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->

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
Je suis fière de me faire accompagner par GlobalServicesBk(Global Services BK) dans la réalisations de mes projets professionnels.                   <i class="bi bi-quote quote-icon-right"></i>
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
Le groupe le plus scial que GlobalServicesBk(Global Services BK) je n'ai pas encore vu dans dans le monde.                  <i class="bi bi-quote quote-icon-right"></i>
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
Comment GlobalServicesBk(Global Services BK) s'assure-t-elle que les informations de l'utilisateur sont protégées après leur partage avec les vors ?                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <i class="bi bi-question-circle question-icon"></i>
peut partager les informations de l'utilisateur avec des processeurs tiers (tels que des prestataires de services ou des VOR). Les contrats avec des sous-traitants tiers nécessitent des mesures de sécurité techniques et organisationnelles suffisantes, limitent l'utilisation des informations de l'utilisateur aux fins définies par les affiliés et conservent le contrôle des informations de l'utilisateur, le cas échéant.

En outre, GlobalServicesBk(Global Services BK) ne transférera les informations utilisateur des utilisateurs situés dans l'UE qu'à des processeurs tiers qui offrent un niveau de protection adéquat lors du traitement des informations utilisateur (par exemple en concluant des contrats basés sur les clauses types pour le transfert des informations utilisateur de l'UE aux processeurs établis dans des pays tiers publiés par la Commission européenne). Les accords avec des sous-traitants tiers prévoient des recours juridiques en cas de violation de l'accord.                  </div>
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
Pour fermer votre compte avec GlobalServicesBk(Global Services BK), visitez l'une de nos succursales ou rendez-vous sur le site Web du produit et soumettez une demande. Nous supprimerons vos informations personnelles, ou les rendrons anonymes, dès que raisonnablement possible en fonction de l'activité de votre compte et dans conformément à la loi applicable. Nous pouvons fermer un compte ou conserver vos informations pour mener une enquête ou si la loi l'exige.

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