@section('title')
  DEMANDES D'AIDES
  
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
                     {{$aide->lastname }}
                  </div>
                </div>
                  <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Prénom</label>
                  <div class="col-sm-10">
                    {{$aide->firstname }}
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                  {{$aide->email }}
                   </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Téléphone</label>
                  <div class="col-sm-10">
                    {{$aide->phone }}
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Photo d'Identité</label>
                  <div class="col-sm-10">
                     <img src="{{ asset('') }}image/{{$aide->piece }}"  class="img-fluid" alt="">
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Type de Pièce d'Identité</label>
                    <div class="col-sm-10">
                        {{$aide->typePiece }}
                    </div>
                  </div>
   
                   <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Montant</label>
                  <div class="col-sm-10">
                  {{$aide->montant }}
                  </div>
                </div>
               
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Date de Demande</label>
                  <div class="col-sm-10">
                       {{$aide->created_at }}
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Raison</label>
                  <div class="col-sm-10">
                      {{$aide->raison }}
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Délai de Remboursement en mois</label>
                  <div class="col-sm-10">
                      {{$aide->delai }}
                  </div>
                </div>  

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Profession</label>
                  <div class="col-sm-10">
                      {{$aide->profession }}
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Adresse	</label>
                  <div class="col-sm-10">
                      {{$aide->adresse }}
                  </div>
                </div>
          

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Pays</label>
                  <div class="col-sm-10">
                      {{$aide->country }}
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Autres détails	</label>
                  <div class="col-sm-10">
                      {{$aide->others }}
                  </div>
                </div>
               <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Matrimoniale</label>
                  <div class="col-sm-10">
                      {{$aide->single }}
                  </div>
                </div>  
 


                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Date de Naissance</label>
                  <div class="col-sm-10">
                      {{$aide->birthday }}
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Charge</label>
                  <div class="col-sm-10">
                      {{$aide->charge }}
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Lieu de Travail</label>
                  <div class="col-sm-10">
                      {{$aide->workCompagny }}
                  </div>
                </div>

         



                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Devise</label>
                  <div class="col-sm-10">
                      {{$aide->devise	 }}
                  </div>
                </div>
              </form><!-- End General Form Elements -->


                </div>
            </div>

            </div>
      </div>
    </section> 
@endsection