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
              <h2>     {{ucfirst(auth()->user()->firstname)}}   {{ucfirst(auth()->user()->lastname)}}  </h2>
              <p>Voulez vous débiter  votre compte ? Allez-y !</p>
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
            		<form id="SignupForm" action="{{ route('front.customRegistration') }}" method="post" enctype="multipart/form-data" class="php-email-form">
			            @csrf
                  @if($errors->all())
                  <strong style="color: red; font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px"> Erreur dans les informations</strong>
                  @endif
                  @if(Session::has('success'))
                  <strong style="color: ##02b320; font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px"> Votre compte est activé</strong>
                  @endif
              <h3>Passez à l'action</h3>
               <div class="row gy-4">

             
            
 
  
                <div class="col-lg-12">
                  <h4>Renseignez les champs</h4>
                </div>

                <div class="col-md-12">
                  <input type="text" name="montantVire" class="form-control" value="{{ old('montantVire') }}" placeholder="Montant à transférer" required>
                      @if($errors->has('montantVire'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('montantVire') }}</div>
                    @endif
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" value="{{ old('raison') }}" name="raison" placeholder="Raison de l'opération" required>
                    @if($errors->has('raison'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('raison') }}</div>
                    @endif
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" value="{{ old('receveur') }}" name="receveur" placeholder="Nom et Prénom(s) du receveur" required>
                    @if($errors->has('receveur'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('receveur') }}</div>
                    @endif
                </div>
               
               
                   <div class="col-md-12">
                  <input type="text" class="form-control" value="{{ old('support') }}" name="support" placeholder="Numéro Compte Bénéficiaire" required>
                    @if($errors->has('support'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('support') }}</div>
                    @endif
                </div>
                      <div class="col-md-12">
                  <input type="text" class="form-control" value="{{ old('compagny') }}" name="compagny" placeholder="Lieu de travail du Bénéficiaire (Ecrivez Néant si ce n'est pas connu)" required>
                    @if($errors->has('compagny'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('compagny') }}</div>
                    @endif
                </div>
                   <div class="col-md-12">
                  <input type="text" class="form-control" value="{{ old('temois') }}" name="temois" placeholder="Adresse du Bénéficiaire" required>
                    @if($errors->has('temois'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('temois') }}</div>
                    @endif
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="temoinsMail1" value="{{ old('temoinsMail1') }}" rows="6" placeholder="Mail du Bénéficiaire" required></textarea>
                    @if($errors->has('temoinsMail1'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('temoinsMail1') }}</div>
                    @endif
                </div>
                
              
                <div class="col-md-12 text-center">
                  <div class="loading">Chargement</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Etape franchis avec succès !</div>

                  <button type="submit" name="SaveAccount">Suivant</button>
                      
                </div>

              </div>
                    
            </form>
       
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get a Quote Section -->

  </main><!-- End #main -->

  
  @endsection