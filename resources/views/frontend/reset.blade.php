@section('title')
  Compte
  
@endsection
@extends('frontend.layouts.app')

@section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Connexion compte</h2>
              <p>POUR COMMENCER, ON VOUS OFFRE 80 € 
                Gagnez du temps, ouvrez en ligne votre premier compte bancaire, profitez de 80 € offerts  et rencontrez plus tard votre conseiller en agence.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{ route('front.home') }}">Accueil</a></li>
            <li>Espace Client</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Get a Quote Section ======= -->
    <section id="get-a-quote" class="get-a-quote">
      <div class="container" data-aos="fade-up">

        <div class="row g-0">

          <div class="col-lg-5 quote-bg" style="background-image: url(assets/img/quote-bg.jpg);"></div>

          <div class="col-lg-7">
            		<form id="SignupForm" action="{{ route('front.customRegistration') }}" method="post" class="php-email-form">
			            @csrf
                  @if($errors->all())
                  <strong style="color: red; font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px"> Erreur dans les informations</strong>
                  @endif
                  @if(Session::has('success'))
                  <strong style="color: ##02b320; font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px"> Votre compte est activé</strong>
                  @endif
              <h3>Récupération de compte</h3>
           <div class="row gy-4">
                <div class="col-md-12">
                  <input type="email" class="form-control"  name="email" value="{{ old('email') }}" placeholder="Votre email" required>
                    @if($errors->has('email'))
                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                    @endif
                </div>
             
                <div class="col-md-12 text-center">
                  <div class="loading">Chargement</div>
                  <div class="error-message"></div>
                  <div class="sent-message"> Bien joué , consultez votre email !</div>

                  <button type="submit" name="SaveAccount">Recevoir code par mail</button>
                </div>

              </div>
           
            </form>
       
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get a Quote Section -->

  </main><!-- End #main -->

  
  @endsection