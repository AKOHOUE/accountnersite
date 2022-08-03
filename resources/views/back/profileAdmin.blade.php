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
                <h5 class="card-title">Changer Mot de Passe  de mon compte </h5>

               	<form method="post" action="{{ route('back.me') }}">
						@csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Saisissez un nom d'Utilisateur </label>
                  <div class="col-sm-10">
                   <input type="text" class="form-control" name="username" value="{{ ucfirst(auth()->user()->username) }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Email </label>
                  <div class="col-sm-10">
                   <input type="email" class="form-control" name="email" value="{{ ucfirst(auth()->user()->email) }}">
                  </div>
                </div>
                  <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nouveau Mot de Passe</label>
                  <div class="col-sm-10">
                   <input type="password" class="form-control" name="password" value="{{ ucfirst(auth()->user()->password) }}">
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