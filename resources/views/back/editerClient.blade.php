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
                <h5 class="card-title">Modification </h5>

               	<form method="post" action="{{ route('back.modificationClient', $user->id) }}">
						@csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nom</label>
                  <div class="col-sm-10">
                   <input type="text" class="form-control" name="lastname" value="{{$user->lastname }}">
                  </div>
                </div>
                  <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Prénom</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="firstname" value="{{$user->firstname }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  
                  <div class="col-sm-10">
                           <input type="text" class="form-control" name="email" value="{{$user->email }}">
                    </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Téléphone</label>
                  <div class="col-sm-10">
                           <input type="text" class="form-control" name="phone" value="{{$user->phone }}">
                   </div>
                </div>
             
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Solde</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="solde" value="{{$user->solde }}">
                   </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Solde Initial</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="compteSolde" value="{{$user->compteSolde }}">
                   </div>
                </div>
             
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Swift</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="swift" value="{{$user->swift }}">
                   </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">BIC/IBAN</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="bic" value="{{$user->bic }}">
                   </div>
                </div>  

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Profession</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="profession" value="{{$user->profession }}">
                   </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Adresse	</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="adresse" value="{{$user->adresse }}">
                   </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Ville</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="city" value="{{$user->city }}">
                   </div>
                </div>  

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Pays</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="country" value="{{$user->country }}">
                   </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Autres détails	</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="others" value="{{$user->others }}">
                   </div>
                </div>
               <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Matrimoniale</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="single" value="{{$user->single }}">
                   </div>
                </div>  

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Pays</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="country" value="{{$user->country }}">
                   </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Sexe</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="genre" value="{{$user->genre }}">
                   </div>
                </div>


                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Date de Naissance</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="birthday" value="{{$user->birthday }}">
                   </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Charge</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="charge" value="{{$user->charge }}">
                   </div>
                </div>


                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Lieu de Travail</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="workCompagny" value="{{$user->workCompagny }}">
                  </div>
                </div>

             

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Type de Pièce d'Identité</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="typePiece" value="{{$user->typePiece }}">
                
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Type de Compte</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="typeAccounte" value="{{$user->typeAccounte }}">
            
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Devise</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="devise" value="{{$user->devise }}">
              
                  </div>
                </div>

                
	                    <a href="{{ route('back.clients') }}" style="margin-right: 10px" class="btn btn-danger">Annuler</a>
						<button class="btn btn-success" type="submit">Enregistrer</button>
              </form><!-- End General Form Elements -->

                </div>
            </div>

            </div>
      </div>
    </section> 
@endsection