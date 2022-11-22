@section('title')
  Mon Compte
  
@endsection
@extends('frontend.layouts.app')

@section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('{{ asset('') }}image/{{ucfirst(auth()->user()->photo) }}');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Bienvenue     {{ucfirst(auth()->user()->firstname)}}   {{ucfirst(auth()->user()->lastname)}}  </h2>
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
                            <legend>Informations de compte</legend>
                            <p>{{ucfirst(auth()->user()->firstname) }}     {{ucfirst(auth()->user()->lastname) }}  </p>
                            @if(auth()->user()->isActif=="0")
                             <div class="row well2">
                                    <div><h3>  <br> Compte non activé. Veuillez contacter RFG BANK pour finaliser l'activation de votre compte.</h3></div>
                                </div>
                                @else
                                     <div class="row well2">
                                    <div><h3>  <br> Compte  activé. </h3></div>
                                </div>
                                @endif
                         <ul>
                          <div class="col-sm-8"  data-aos="fade-up" data-aos-delay="100">
                            <div>
                                <p>Email: {{auth()->user()->email}}</p>
                                <p>Pays: {{auth()->user()->country}}</p>
                                <p>Téléphone: {{auth()->user()->phone}}</p>
                                <p>Type de Compte : {{auth()->user()->typeAccounte}}</p>
                                <p>Nom de la banque: SGROUPFI(Social Group Finance)</p>
                                <p>IBAN: {{auth()->user()->bic ? auth()->user()->bic : ''}}</p>
                                <p>SWIFT: {{auth()->user()->swift ? auth()->user()->swift : ''}}</p>
                                <p>Votre solde actuel est de: {{auth()->user()->solde}} {{auth()->user()->devise}} </p>
                            </div>
                                <p>Pièce d'Identité: <img style="width:80px, height:90px" src="{{ asset('') }}image/{{ucfirst(auth()->user()->piece) }}"  class="img-fluid" alt=""></p>
                          </div>
                         </ul>
                    </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <img src="{{ asset('') }}image/{{ucfirst(auth()->user()->photo) }}"  class="img-fluid" alt="">
            <br> <br> <br> <br>
               @if(auth()->user()->isActif=="0")
                          <a  class="btn" href="{{ route('front.depot') }}" style="margin-bottom: 30px; color:#fff; background-color: #131d25">Faire un dépôt</a>
               @else
                          <a href="{{ route('front.transfert') }}" class="btn" style="margin-bottom: 30px; color: #fff; background-color: #131d25">Faire un virement</a>
                          <a  class="btn" href="{{ route('front.depot') }}" style="margin-bottom: 30px; color:#fff; background-color: #131d25">Faire un dépôt</a>
                @endif
            </div>
        </div>
        <div>
              <div class="container">
                <div>
                    <col-lg-2>
                    </col-lg-2>
                    <col-lg-2>
                    </col-lg-2>
                </div>
            </div>
                </div>
      </div>
    </section><!-- End About Us Section -->
 



  </main><!-- End #main -->

    @endsection