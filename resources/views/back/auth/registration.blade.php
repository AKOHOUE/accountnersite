@extends('back.layout.adminauth')

@section('content')
<main>
    <div class="cotainer">
   
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="" class="logo d-flex align-items-center w-auto">
                  <img src="{{ asset('') }}assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">ADMIN</span>
                </a>
              </div><!-- End Logo -->
              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Inscription</h5>
                    <p class="text-center small">Entrez vos coordonnées</p>
                  </div>
                    <form action="{{ route('back.adminRegistration') }}" method="POST" class="row g-3 needs-validation" novalidate>
                    @csrf
                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Votre Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                        @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                      <div class="invalid-feedback">Veuillez saisir une adresse e-mail valide !</div>
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de passe</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                        @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                      <div class="invalid-feedback">S'il vous plait entrez votre mot de passe !</div>
                    </div>
                     <div class="col-12">
                      <label for="yourPassword" class="form-label">Confirmation de Mot de passe</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                          @if($errors->has('password_confirmation'))
                         <div class="alert alert-danger" role="alert">{{ $errors->first('password_confirmation') }}</div>
                        @endif
                      <div class="invalid-feedback">S'il vous plait confirmer votre mot de passe !</div>
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">Je suis d'accord et j'accepte les <a href="#">termes et conditions.</a></label>
                        <div class="invalid-feedback">Vous devez accepter avant de soumettre.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Inscription</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Vous avez déjà un compte ? <a href="{{ route('back.adminConnexion') }}">Se connecter</a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
</main>
@endsection