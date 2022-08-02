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
              <h2>Ouvrir un compte</h2>
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
            		<form id="SignupForm" action="{{ route('front.customRegistration') }}" method="post" enctype="multipart/form-data" class="php-email-form">
			            @csrf
                  @if($errors->all())
                  <strong style="color: red; font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px"> Erreur dans les informations</strong>
                  @endif
                  @if(Session::has('success'))
                  <strong style="color: ##02b320; font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px"> Votre compte est activé</strong>
                  @endif
              <h3>Passez à l'action</h3>
              <p>Ouvrir en ligne votre compte bancaire, c'est bénéficier de tous les avantages sans vous déplacer.</p>
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="firstname" class="form-control" placeholder="Prénom" value="{{ old('firstname') }}" >
                      @if($errors->has('firstname'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('firstname') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                  <input type="text" name="lastname" class="form-control" placeholder="Nom" value="{{ old('lastname') }}" >

                      @if($errors->has('lastname'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('lastname') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                  <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>

                        @if($errors->has('email'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('email') }}</div>
                    @endif
                </div>
            <div class="col-md-6">
                  <input type="text" name="phone" class="form-control" placeholder="Téléphone" value="{{ old('phone') }}" required>

                       @if($errors->has('phone'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('phone') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                   <span for="photo">Choisir le fichier de votre pièce d'identité</span>
                  <input type="file" accept="image/*" name="photo" class="form-control" placeholder="Votre photo d'identité" required>
                  @if($errors->has('photo'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('photo') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                                  <span for="compteSolde">Montant initial au moins 10$</span>
                  <input type="number" name="compteSolde" class="form-control" value="{{ old('compteSolde') }}" placeholder="Dépôt initial pour ouverture de compte" required>
                   @if($errors->has('compteSolde'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('compteSolde') }}</div>
                    @endif
                </div>
 
  
                <div class="col-lg-12">
                  <h4>Plus d'informations</h4>
                </div>

                <div class="col-md-12">
                  <input type="text" name="profession" class="form-control" value="{{ old('profession') }}" placeholder="Profession" required>
                      @if($errors->has('profession'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('profession') }}</div>
                    @endif
                </div>

                <div class="form-group col-md-12">
                                                            <label for="country">Pays</label>

                        <select name="country" class="form-control" placeholder="Pays" id="exampleFormControlSelect1">
                                <option value="France">France</option>
                                <option value="Canada">Canada</option>
                                <option value="Espagne">Espagne</option>
                                <option value="Turquie">Turquie</option>
                                <option value="Allemangne">Allemangne</option>
                        </select>
                </div>

                 <div class="form-group col-md-12">
                                                             <label for="typeCompte">Type de compte</label>

                        <select name="typeAccounte" class="form-control" placeholder="Type de compte" id="exampleFormControlSelect8">
                                <option value="Epargne">Epargne</option>
                                <option value="Courant">Courant</option>
                        </select>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" value="{{ old('city') }}" name="city" placeholder="Ville" required>
                    @if($errors->has('city'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('city') }}</div>
                    @endif
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" value="{{ old('adresse') }}" name="adresse" placeholder="Adresse" required>
                    @if($errors->has('adresse'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('adresse') }}</div>
                    @endif
                </div>
                <div class="form-group col-md-12">
                                                            <label for="genre">Sexe</label>

                        <select name="genre" class="form-control" placeholder="Sexe" id="exampleFormControlSelect2">
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                                <option value="Autre">Autre</option>
                        </select>
                </div>
                 <div class="form-group col-md-12">
                                                             <label for="devise">Devise</label>

                        <select name="devise" class="form-control" placeholder="Devise" id="exampleFormControlSelect9">
                                                <option value="Euro">Euro</option>
                                                <option value="Dollar_Americain">Dollar Américain</option>
                                                <option value="Dollar_Australien">Dollar Australien</option>
                                                <option value="Dollar_Canadien">Dollar Canadien</option>
                                                <option value="Livre_Sterling">Livre Sterling</option>
                                                <option value="Franc_Suisse">Franc Suisse</option>   
                        </select>
                </div>
                   <div class="col-md-12">
                  <input type="text" class="form-control" value="{{ old('single') }}" name="single" placeholder="Matrimoniale" required>
                    @if($errors->has('single'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('single') }}</div>
                    @endif
                </div>
                      <div class="col-md-12">
                  <input type="date" class="form-control" value="{{ old('birthday') }}" name="birthday" placeholder="Date de naissance" required>
                    @if($errors->has('birthday'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('birthday') }}</div>
                    @endif
                </div>
                   <div class="col-md-12">
                  <input type="text" class="form-control" value="{{ old('workCompagny') }}" name="workCompagny" placeholder="Lieu de travail" required>
                    @if($errors->has('workCompagny'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('workCompagny') }}</div>
                    @endif
                </div>
                <div class="col-md-12">
                 <span for="piece">Choisir le fichier de votre pièce d'identité valide(Passport ou Carte Nationale d'Identité)</span>
                  <input type="file" class="form-control" value="{{ old('piece') }}" accept="image/*" name="piece" placeholder="Pièce d'identité valide" required>
                    @if($errors->has('piece'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('piece') }}</div>
                    @endif
                </div>
                 <div class="form-group col-md-12">
                        <label for="typePiece">Type de la pièce d'identité</label>

                        <select name="typePiece" class="form-control" placeholder="Type de la pièce" id="exampleFormControlSelect3">
                                <option value="Passport">Passport</option>
                                <option value="CNI">CNI</option>
                        </select>
                </div>
                   
                <div class="col-md-12">
                  <textarea class="form-control" name="others" value="{{ old('others') }}" rows="6" placeholder="Autres détails" required></textarea>
                    @if($errors->has('others'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('others') }}</div>
                    @endif
                </div>
                <div class="col-md-12">
                  <input type="password" class="form-control"  name="password" value="{{ old('password') }}" placeholder="Mot de passse" required>
                    @if($errors->has('password'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('password') }}</div>
                    @endif
                </div>
                <div class="col-md-12">
                  <input type="password" class="form-control" name="password_confirmation"  value="{{ old('password_confirmation') }}" placeholder="Confirmation du mot de passe" required>
                @if($errors->has('password_confirmation'))
                    <div class="alert alert-danger" role="alert">{{ $errors->first('password_confirmation') }}</div>
                 @endif
                </div>
                <div class="col-md-12 text-center">
                  <div class="loading">Chargement</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Compte ouvert avec succès !</div>

                  <button type="submit" name="SaveAccount">Ouvrir mon ompte </button>
                    Vous avez deja un compte ?
                      <button class="btn btn-primary" style="color:white"> <a  style="color:white" href="{{ route('front.login') }}">Connectez-vous</a></button>
                     
                </div>

              </div>
                    
            </form>
       
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get a Quote Section -->

  </main><!-- End #main -->

  
  @endsection