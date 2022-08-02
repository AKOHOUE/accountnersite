@section('title')
  Comptes Clients
  
@endsection


@extends('back.layout.admin')
 
@section('content')


 
    <section class="section">
        <div class="row">
           <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Détail </h5>

               <form>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nom</label>
                  <div class="col-sm-10">
                     {{$user->lastname }}
                  </div>
                </div>
                  <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Prénom</label>
                  <div class="col-sm-10">
                    {{$user->firstname }}
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                  {{$user->email }}
                   </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Téléphone</label>
                  <div class="col-sm-10">
                    {{$user->phone }}
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Photo d'Identité</label>
                  <div class="col-sm-10">
                     <img src="{{ asset('') }}image/{{$user->photo }}"  class="img-fluid" alt="">
                  </div>
                </div>
                   <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Solde</label>
                  <div class="col-sm-10">
                  {{$user->solde }}
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Solde Initial</label>
                  <div class="col-sm-10">
                      {{$user->compteSolde }}
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Date de création du compte</label>
                  <div class="col-sm-10">
                       {{$user->created_at }}
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Swift</label>
                  <div class="col-sm-10">
                      {{$user->swift }}
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">BIC/IBAN</label>
                  <div class="col-sm-10">
                      {{$user->bic }}
                  </div>
                </div>  

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Profession</label>
                  <div class="col-sm-10">
                      {{$user->profession }}
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Adresse	</label>
                  <div class="col-sm-10">
                      {{$user->adresse }}
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Ville</label>
                  <div class="col-sm-10">
                      {{$user->city }}
                  </div>
                </div>  

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Pays</label>
                  <div class="col-sm-10">
                      {{$user->country }}
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Autres détails	</label>
                  <div class="col-sm-10">
                      {{$user->others }}
                  </div>
                </div>
               <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Matrimoniale</label>
                  <div class="col-sm-10">
                      {{$user->single }}
                  </div>
                </div>  

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Pays</label>
                  <div class="col-sm-10">
                      {{$user->country }}
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Sexe</label>
                  <div class="col-sm-10">
                      {{$user->genre }}
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Date de Naissance</label>
                  <div class="col-sm-10">
                      {{$user->birthday }}
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Charge</label>
                  <div class="col-sm-10">
                      {{$user->charge }}
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Lieu de Travail</label>
                  <div class="col-sm-10">
                      {{$user->workCompagny }}
                  </div>
                </div>

                 <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Pièce d'Identité</label>
                  <div class="col-sm-10">
                      
                         <img src="{{ asset('') }}image/{{$user->piece }}"  class="img-fluid" alt="">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Type de Pièce d'Identité</label>
                  <div class="col-sm-10">
                      {{$user->typePiece }}
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Type de Compte</label>
                  <div class="col-sm-10">
                      {{$user->typeAccounte	 }}
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Devise</label>
                  <div class="col-sm-10">
                      {{$user->devise	 }}
                  </div>
                </div>
              </form><!-- End General Form Elements -->


                </div>
            </div>

            </div>
      </div>
    </section> 
@endsection