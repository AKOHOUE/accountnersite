@section('title')
  Contact
  
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
              <h2>Nous joindre </h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Accueil</a></li>
            <li>Contact</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <!--div>
          <iframe style="border:0; width: 100%; height: 340px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div--><!-- End Google Maps -->

        <div class="row gy-4 mt-4">

          <div class="col-lg-4">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Emplacement:</h4>
                <p>  2 Bd de l'Europe,   
                  78300 Poissy,  
                  France  </p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>contact@globalServicesbk.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Téléphone(s):</h4>
                <p>+48782415967</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">

            <form method="post" action="{{ route('contactsUi.store') }}"  role="form" class="php-email-form">
						@csrf
            
              @if($errors->all())
              <strong style="color: red; font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px"> Erreur dans les informations</strong>
              @endif
              @if(Session::has('success'))
              <strong style="color:rgb(0, 19, 128); font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px"> Opération effectuée avec succès. Nous vous contacterons sous peu.</strong>
              @endif
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nom et prénom(s)" required>
                     @if($errors->has('name'))
                         <div class="alert alert-danger" role="alert">{{ $errors->first('name') }}</div>
                        @endif
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder=" Email" required>
                     @if($errors->has('email'))
                         <div class="alert alert-danger" role="alert">{{ $errors->first('email') }}</div>
                        @endif
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="object" id="subject" placeholder="Objet" required>
                   @if($errors->has('object'))
                         <div class="alert alert-danger" role="alert">{{ $errors->first('object') }}</div>
                        @endif
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                   @if($errors->has('message'))
                         <div class="alert alert-danger" role="alert">{{ $errors->first('message') }}</div>
                        @endif
              </div>
              <div class="my-3">
                <div class="loading">Chargement</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message est envoyé avec succès !</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
 


  @endsection